<html>
<head>
<title>my first web<title>
</head>
<body>
<form method="post" action="">
<input type="number" name="week" placeholder="week" min="0" max="53">
<input type="number" name="year" placeholder="year" min="1990" max="2050">
input type="submit" value="submit">
</form>
<?php
$weeks=$_POST['week'];
$years=$_POST['year'];
$yeardays=floor($years*365);
$weekdays=floor($weeks*7);
$totaldays=$yeardays+$weekdays;
$today=floor(2019*365)+(4*7);
if($totaldays>today)
{
    $remaindays=$totaldays-$today;
    $year=floor($remaindays/365);
    week=floor((remaindays-($year*365))/7);
    echo "year :$year <br>";
    echo "week :$week ";
}
else
{
    echo "tyre expire";
}
?>
</body>
</html>