<?php
function a() {
	echo mt_rand(1,20);
}
$a = mt_rand(1,20);
$b = mt_rand(1,20);
while ($a<$b) {
	$a = mt_rand(1,20);
	$b = mt_rand(1,20);
}
	echo "$a";
	echo "-";
	echo "$b";
echo "<br>";
$c = mt_rand(1,20);
$d = mt_rand(1,20);
while ($c<$d) {
	$c = mt_rand(1,20);
	$d = mt_rand(1,20);
}
	echo "$c";
	echo "-";
	echo "$d";
echo "<br>";
$e = mt_rand(1,20);
$f = mt_rand(1,20);
while ($e<$f) {
	$e = mt_rand(1,20);
	$f = mt_rand(1,20);
}
	echo "$e";
	echo "-";
	echo "$f";
echo "<br>";
$g = mt_rand(1,20);
$h = mt_rand(1,20);
while ($g<$h) {
	$g = mt_rand(1,20);
	$h = mt_rand(1,20);
}
	echo "$g";
	echo "-";
	echo "$h";
echo "<br>";
$i = mt_rand(1,20);
$j = mt_rand(1,20);
while ($i<$j) {
	$i = mt_rand(1,20);
	$j = mt_rand(1,20);
}
	echo "$i";
	echo "-";
	echo "$j";
echo "<br>";
/*if ($a>=$b) {
	echo "$a";
	echo "-";
	echo "$b";
}else{
	$a = mt_rand(1,20);
	$b = mt_rand(1,20);
	echo "$a";
	echo "-";
	echo "$b";
}*/
echo "<br>";
a();
echo "+";
a();
echo "<br>";
a();
echo "+";
a();
echo "<br>";
a();
echo "+";
a();
echo "<br>";
a();
echo "+";
a();
echo "<br>";
a();
echo "+";
a();
/*echo "<br>";
echo mt_rand(1,20);
echo "<br>";
echo mt_rand(1,20);*/
?>