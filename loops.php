<? include("links.html") ?>

<h1>Loops</h1>

<h2>For Loop</h2>
<?
for($i = 0; $i < 25; $i++){
	echo "This is iteration: $i<br />";
}
?>

<br />

<?
$var = array("Jim", "Sally", "Sue");
for($i = 0; $i < sizeof($var); $i++){
	echo "Name is: {$var[$i]}<br />";
}
?>

<h2>Foreach Loop</h2>
<?
foreach($var as $name){
	echo "Name is: $name<br />";
}
?>

<h2>Foreach with key/value array</h2>
<?
$var = array("president" => "Obama", "vice" => "Biden");
foreach($var as $key=>$value){
	echo "Role: $key, Person: $value<br />";
}
?>

<h2>While Loops</h2>
<?
$i = 0;
while($i < 25){
	echo "This is iteration: $i<br />";
	$i++;
}
?>