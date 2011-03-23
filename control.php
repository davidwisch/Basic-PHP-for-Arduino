<? include("links.html") ?>

<h1>Control Structures</h1>

<h2>If Statement</h2>

<?
$var = "Goodbye";
if($var == "Hello"){
	echo "Hello to you!";
}
elseif($var == "Goodbye"){
	echo "Goodbye!";
}
else{
	echo "Not hello or goodbye";
}
?>

<h3>...with booleans</h3>

<?
$var = true;
if($var){ // could also express as if($var == true)
	echo "Val is true";
}
else{
	echo "Val is not true";
}
?>

<h3>...using || (or)</h3>

<?
$var1 = true;
$var2 = false;
if($var1 || $var2){
	echo "Either var1 or var2 is true";
}
else{
	echo "Neither var1 or var2 is true";
}
?>

<h3>...using &amp;&amp;(and)</h3>

<?
$var1 = true;
$var2 = false;
if($var1 && $var2){
	echo "var1 and var2 are true";
}
else{
	echo "one or both of var1 and var2 is false";
}
?>