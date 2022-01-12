<?php
//Connecting to sql db.
$connect = mysqli_connect("my host","my user","my passwrod","my db");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO posts (teamNum, matchNum, autoBallsShot, teleBallsShot, telleBallsScoredHigh, telleBallsScoredLow, autoBallsScoredHigh, autoBallsScoredLow, climbEnding, autoLine, defensiveRating, fouls, name)
VALUES ('$_POST[post_teamNum]', '$_POST[post_matchNum]', '$_POST[post_autoBallsShot]', '$_POST[post_teleBallsShot]''$_POST[post_telleBallsScoredHigh]','$_POST[post_telleBallsScoredLow]','$_POST[post_autoBallsScoredHigh]', '$_POST[post_autoBallsScoredLow]', '$_POST[post_climbEnding]', '$_POST[post_autoLine]', '$_POST[post_defensiveRating]', '$_POST[post_fouls]',  '$_POST[post_name])"
             ?>
