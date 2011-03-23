<? include("links.html") ?>

<h1>An Example of Variables</h1>

<h2>Strings</h2>

<?
$name = "Johnny";
$lastname = "Awesome";

echo "<div>Name is $name $lastname</div>";

$result = "$name $lastname";
echo "<div>Name is $result</div>";

$result2 = $name.' '.$lastname;
echo "<div>Name is $result2</div>";
?>

<h2>Numbers</h2>

<?
$num1 = 5;
$num2 = 10;

$result = $num1 + $num2;
echo "<div>The result of $num1 + $num2 is: $result</div>";

$num3 = 10.5;
$num4 = 11.6;

$result = $num3 / $num4;
echo "<div>The result of $num3 / $num4 is: $result</div>";
?>

<h2>Arrays</h2>

<? $var = array(1,2,3,4,5) ?>
<pre><? print_r($var) ?></pre>

<? $var2 = array("one", "two", "three", "four", "five") ?>
<pre><? print_r($var2) ?></pre>

<? $var3 = array(1, "two", 3, "four", 5) ?>
<pre><? print_r($var3) ?></pre>

<? $var4 = array("president" => "Obama", "vice" => "Biden") ?>
<pre><? print_r($var4) ?></pre>