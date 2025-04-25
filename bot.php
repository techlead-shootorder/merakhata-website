<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$servername = "localhost";
$username = "merakhata_qa";
$password = "Shootorder@123#";
$dbname = "rachit_merakhata_source";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn -> set_charset("utf8");

$asql = "SELECT * FROM questions WHERE status = 0 ORDER BY id LIMIT 10";
$result = $conn->query($asql);
$row = $result->fetch_assoc();
if ($result->num_rows > 0) {
    foreach($result as $rows) {
        $query=$rows["question"];
        $question_id=$rows["id"];
        crawl($query, $question_id);
    }
} 
else 
{
echo "0 results";
}

function crawl($query, $question_id)
{
    global $conn;
    
# set up the request parameters
$queryString = http_build_query([
  'api_key' => '19AD51B7F01649ABB3A29F3A743C2C88',
//  'api_key' => '219356C2793F446F9DFFFC3B7A45768E',
  'q' => $query,
  'include_advertiser_info' => 'false',
  'include_answer_box' => 'true',
  'hl' => 'en',
  'gl' => 'in',
  'location' => 'Delhi,India',
  'google_domain' => 'google.co.in'
]);

# make the http GET request to SerpWow
//$ch = curl_init(sprintf('%s?%s', 'https://api.serpwow.com/search', $queryString));
$ch = curl_init(sprintf('%s?%s', 'https://api.scaleserp.com/search', $queryString));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
# the following options are required if you're using an outdated OpenSSL version
# more details: https://www.openssl.org/blog/blog/2021/09/13/LetsEncryptRootCertExpire/
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$api_result = curl_exec($ch);
curl_close($ch);

# print the JSON response from SerpWow
$obj= json_decode($api_result, true);
//print_r($obj);
$search_url= $obj['search_metadata']['engine_url'];
$question= $conn->real_escape_string($obj['search_parameters']['q']);
$answer= $conn->real_escape_string(json_encode($obj['answer_box'], JSON_UNESCAPED_UNICODE));
$videos=$conn->real_escape_string(json_encode($obj['inline_videos'], JSON_UNESCAPED_UNICODE));
$terms=$conn->real_escape_string(json_encode($obj['related_searches'], JSON_UNESCAPED_UNICODE));
$podcasts=$conn->real_escape_string(json_encode($obj['inline_podcasts'], JSON_UNESCAPED_UNICODE));
$tweets=$conn->real_escape_string(json_encode($obj['inline_tweets'], JSON_UNESCAPED_UNICODE));
$others=$conn->real_escape_string(json_encode($obj['knowledge_graph'], JSON_UNESCAPED_UNICODE));

$sql = "INSERT INTO questions (question, answer, videos, terms, podcasts, tweets, others, status) VALUES ('".$question."', '".$answer."', '".$videos."', '".$terms."', '".$podcasts."', '".$tweets."', '".$others."', '1') ON DUPLICATE KEY UPDATE answer= '".$answer."', videos='".$videos."', terms='".$terms."', podcasts='".$podcasts."', tweets='".$tweets."', others='".$others."', status='1'";
if (mysqli_query($conn, $sql)) {
    echo "Question: Added successfully <br><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if($obj['related_questions'])
{
    foreach($obj['related_questions'] as $questions)
    {
    
        $sql1 = "INSERT INTO related_questions (question, answer, answer_list, source_url, question_id, others) VALUES ('".$conn->real_escape_string($questions['question'])."', '".$conn->real_escape_string($questions['answer'])."', '".$conn->real_escape_string(json_encode($questions['answer_list'], JSON_UNESCAPED_UNICODE))."', '".$questions['source']['link']."', '".$question_id."', '".$conn->real_escape_string(json_encode($questions, JSON_UNESCAPED_UNICODE))."')";
        if (mysqli_query($conn, $sql1)) {
            echo "Related Question: Added successfully <br><br>";
           
        } else {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
            
        }
        
    }
}
}

$conn->close();

?>