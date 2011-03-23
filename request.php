<? include("links.html") ?>

<h1>The $_REQUEST Variable</h1>

While looking through your book I noticed that you use the request variable a lot. Let's see what it is.<br />

<pre><? print_r($_REQUEST) ?></pre>
<? if(!empty($_REQUEST)) echo '<a href="request.php">Reset $_REQUEST</a><br />'?>

<br />

Yeah... pretty empty right now. When it's not empty, it's a key/value array much like $_SERVER. Let's see what $_SERVER looks like...<br />

<pre><? print_r($_SERVER) ?></pre>

<br />

Cool... so what goes in the $_REQUEST variable? In your case, url parameters. What are those... Click the following link and watch the $_REQUEST output above:
<a href="request.php?key=value">Click here</a>

<h2>Accessing $_REQUEST</h2>

Just for example, let's place some values in $_REQUEST.

<? $_REQUEST['key1'] = 'value1'; $_REQUEST['key2'] = 'value2' ?>

<br >
Let's take another look at $_REQUEST:

<pre><? print_r($_REQUEST) ?></pre>

<br />

The value of the 'key1' index in $_REQUEST is: <?= $_REQUEST['key1'] ?><br />
The value of the 'key2' index in $_REQUEST is: <?= $_REQUEST['key2'] ?>

<br /><br />

Okay, let's loop through the array, printing out the values:<br />

<?
foreach($_REQUEST as $key=>$value){
	echo "Key: $key - Value: $value<br />";
}
?>

<br /><br />

And finally, let's write a function that accesses values in the $_REQUEST variable<br />

<?
function get_from_request($key){
	if(isset($_REQUEST[$key])){
		return $_REQUEST[$key];
	}
	else{
		return false;
	}
}

$val1 = get_from_request('key1');
$val2 = get_from_request('keey2');

if($val1 != false){
	echo "Key1 = $val1";
}
else{
	echo 'Key1 doesn\'t exist in $_REQUEST';
}
echo '<br />';

if($val2 != false){
	echo "Key2 = $val2";
}
else{
	echo 'Key1 doesn\'t exist in $_REQUEST';
}
?><br />

Note, a return of false from <i>get_from_request</i> doesn't mean the value certainly doesn't exist, the value could truly be false. This is an example of how one must be careful when using booleans.