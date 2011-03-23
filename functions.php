<? include("links.html") ?>

<h1>Functions</h1>

<h2>Function <i>print_var</i></h2>
<?
function print_var($var){
	echo "$var<br />";
}

print_var("Hello World");
?>

Or, you can call it <? print_var("here") ?>

<h2>Function <i>return_upper</i></h2>
<?
function return_upper($str){
	return strtoupper($str);
}

echo return_upper("make me uppercase!").'<br />';
?>

Or, you can call it from <?= return_upper("here") ?>.

<h2>Function <i>return_var</i> with default argument</h2>

<?
function return_var($var = "default_value"){
	return $var;
}
?>

Calling <i>return_var</i> with no argument prints: <?= return_var() ?>
<br />
Calling <i>return_var</i> with an argument prints: <?= return_var("the argument") ?>