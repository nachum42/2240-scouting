<?php
//Connecting to sql db.
$connect = new mysqli("my host","my user","my passwrod","my db");

$teamNum = $_POST['teamNum'];
$matchNum = $_POST['matchNum'];
$autoBallsShot = $_POST['autoBallsShot'];
$teleBallsShot = $_POST['teleBallsShot'];
$telleBallsScoredHigh = $_POST['telleBallsScoredHigh'];
$telleBallsScoredLow = $_POST['telleBallsScoredLow'];
$autolleBallsScoredLow = $_POST['autolleBallsScoredLow'];
$autolleBallsScoredHigh = $_POST['autolleBallsScoredLow'];
$climbEnding = $_POST['climbEnding'];
$autoLine = $_POST['autoLine'];
$defenseRating = $_POST['defenseRating'];
$fouls = $_POST['fouls'];
$name = $_POST['name'];

$stmt = $connect->prepare("INSERT INTO matchdb() VALUES (teamNum,matchNum,autoBallsShot,teleBallsShot,autolleBallsScoredLow,autolleBallsScoredHigh,climbEnding,autoLine,defenseRating,fouls,name)");
$stmt->execute();
//Sending form data to sql db.


/*

mysqli_query($connect,"INSERT INTO posts (teamNum, matchNum, autoBallsShot, teleBallsShot, telleBallsScoredHigh, telleBallsScoredLow, autoBallsScoredHigh, autoBallsScoredLow, climbEnding, autoLine, defensiveRating, fouls, name)
VALUES ('$_POST[post_teamNum]', '$_POST[post_matchNum]', '$_POST[post_autoBallsShot]', '$_POST[post_teleBallsShot]''$_POST[post_telleBallsScoredHigh]','$_POST[post_telleBallsScoredLow]','$_POST[post_autoBallsScoredHigh]', '$_POST[post_autoBallsScoredLow]', '$_POST[post_climbEnding]', '$_POST[post_autoLine]', '$_POST[post_defensiveRating]', '$_POST[post_fouls]',  '$_POST[post_name])"
*/
             ?>
