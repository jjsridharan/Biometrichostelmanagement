<?php
date_default_timezone_set('Asia/Kolkata');
$i=5;
while($i!=0)
{
$date=date("m/d/y g:i (A)", time());
echo $date;
$i=$i-1;
}
?>