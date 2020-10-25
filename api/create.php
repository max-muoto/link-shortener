<?
	$host 	= 'REPLACE_WITH_DB_HOST';
	$dbuser = 'REPLACE_WITH_DB_USERNAME';
	$pwd  	= 'REPLACE_WITH_DB_PASSWORD';
   	$db   	= 'REPLACE_WITH_DB_NAME';

   	// connect to my database
   	$conn = @mysqli_connect($host, $dbuser, $pwd, $db);

   	// get the value of the long url as post or get
	$long 	= isset($_GET['long']) ? $_GET['long'] : "";
	$long 	= isset($_POST['long']) ? $_POST['long'] : $long;

	// gets create a random short url of 8 characters
	$short = getRandomString(8);

    // lets me sure it doesn't exist
    $query 	= "SELECT * FROM shorturls WHERE short='$short';";
	$result = mysqli_query($conn,$query);

	// make sure we find a unique short
	while (mysqli_num_rows($result)>0)
	{
		$short = getRandomString(8);
		$query 	= "SELECT * FROM shorturls WHERE short='$short';";
		$result = mysqli_query($conn,$query);
	}

	// if short url is unique let's create it
	$query 	= "INSERT INTO shorturls (`long`, `short`) VALUES ('$long','$short');";
	$result = mysqli_query($conn,$query);

	// create array of values to return via the API
	$arr = array();
	$arr["long"] 			= $long;
	$arr["short"] 			= $short;
	$arr["short_url"] 		= "https://www.2tmid.xyz/".$short;

	// output JSON
	header('Content-Type: application/json');
	echo (json_encode($arr));

	// function for generating random string used in short
	function getRandomString ($len=8)
  	{
  		$alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $short = '';

	    for ($i = 0; $i < $len; $i++) {
	        $j = rand(0, strlen($alphabet) - 1);
	        $short .= $alphabet[$j];
	    }

	    return $short;
  	}
?>