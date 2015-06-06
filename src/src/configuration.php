<html>
<head>
<?PHP

if(isset($_POST['submit']))
{
	$salt = $_POST['SALT'];
	$dbhost = $_POST['DB_HOST'];
	$db = $_POST['DB'];
	$dbuser = $_POST['DB_USER'];
	$dbpassword = $_POST['DB_PASSWORD'];
	
	$filename="config.php";
	if(file_exists($filename))
	{
		$configfile = fopen("config.php", "w") or die("Unable to open file!");
	}
	else
	{
		$configfile = fopen("config.php", "x") or die("Unable to open file!");
	}
	$txt = "<?PHP".PHP_EOL;
	fwrite($configfile, $txt);
	$txt = 'define("SALT","'.$salt.'");'.PHP_EOL;
	fwrite($configfile, $txt);
	$txt = 'define("DB_HOST","'.$dbhost.'");'.PHP_EOL;
	fwrite($configfile, $txt);
	$txt = 'define("DB_USER","'.$dbuser.'");'.PHP_EOL;
	fwrite($configfile, $txt);
	$txt = 'define("DB_PASSWORD","'.$dbpassword.'");'.PHP_EOL;
	fwrite($configfile, $txt);
	$txt = 'define("DB","'.$db.'");'.PHP_EOL;
	fwrite($configfile, $txt);
	$txt = "?>";
	fwrite($configfile, $txt);
	fclose($configfile);
}
?>
</head>
<body>
<form action="configuration.php" method="post">
<p>Database Name : <input type="text" name="DB" /><br />
Salt : <input type="text" name="SALT" /><br/>
Database Host : <input type="text" name="DB_HOST" /><br />
Database User : <input type="text" name="DB_USER" /><br />
Database Password : <input type="text" name="DB_PASSWORD" /><br />
</p>

<p><input type="submit" Name = "submit" value="Create Config file"></p>
</form>

</body>
</html>