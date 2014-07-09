use-twitter-api-in-php
======================

store words with different hash tag
1. put this folder in htdocs .

2. Create a data base named as project8.
3. Inside it create table having table name tweets and field name "sno" int type and "tweet" string varchar type.
table is creted,

4.generate your key following this step
http://iag.me/socialmedia/how-to-create-a-twitter-app-in-8-easy-steps/
5.open index8.php file put the key and your acces token.
find
$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=test&result_type=recent&count=10');
----------------------------------------------------------------------------------------------------------------------
in this line i give test tag you can give any word you want search for replace test with that word.
--------------------------------------------------------------------------------------------------------
6. on browser write localhost/8/index8.php.
7. you will see the different tweets having the same tag you are searching for.
8. database will be filled with that tweet.

...........................#####...............................
