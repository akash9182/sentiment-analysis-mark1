<?php 

define('HOST','localhost');
define('USER','root');
define('PASS','akashrana123');
define('DB', 'sentiment_analysis');

$con = mysqli_connect(HOST, USER, PASS, DB);

//$output = shell_exec('/usr/bin/python sentiment.py');
//echo "<pre>";
//print_r($output);
//echo "</pre>";

if(!$con)
{
	echo"err".mysqli_error($con);
}

if($_SERVER['REQUEST_METHOD'] =='POST')
{
	$user_sentence = $_POST['sentence'];
	echo $user_sentence;
#	$result = shell_exec('ls');
	
	$myfile = fopen("testfile.txt", "w");
	fwrite($myfile, $user_sentence);
	$result = shell_exec('/usr/bin/python /var/www/html/sentiment.py');
	
#	echo "lll".$result."lll";
	
	#$resultData = json_decode($result, true);

	$sql = "INSERT INTO sentence(sentence,analysis) VALUES ('$user_sentence', '$result') ";

	
	var_dump($result);
	mysqli_query($con,$sql);
	mysqli_close($con);
 }
else
      {
        echo "Check Network";
      }
?>


