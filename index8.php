<?php include "twitteroauth.php";?>

<?php
include "db_connect.php";
$deleterecords = "TRUNCATE TABLE tweets"; //empty the table of its current records
mysql_query($deleterecords);
$consumer = "YOURconsumer";
$consemersecret = "YOURconsemersecret";
$accestoken = "YOURaccestoken";
$accestokensecret = "YOUR accestokensecret";
$twitter = new TwitterOAuth($consumer,$consemersecret,$accestoken,$accestokensecret);
//$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=.$_POST['keyword'].&result_type=recent&count=10');
?> 

	<?php 
	
	$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=test&result_type=recent&count=10');
	foreach($tweets as $tweet){
	foreach($tweet as $t){
	echo $t->text;
	$import="INSERT into tweets(tweet) values('$t->text')";

		mysql_query($import) or die(mysql_error());
	
	}
	}
	
	?>
	</body>
</html>
