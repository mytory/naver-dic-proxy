<?php
ini_set('display_errors', 0);
$word = $_GET['word'];
$url = "http://m.endic.naver.com/search.nhn?searchOption=all&query={$word}";
$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=> "User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
  )
);

$context = stream_context_create($options);
$content = file_get_contents($url, false, $context);
?>
<link rel="stylesheet" href="endic.css">
<?php
echo $content;
