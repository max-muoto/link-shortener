<?
	$host 	= 'REPLACE_WITH_DB_HOST';
   	$dbuser = 'REPLACE_WITH_DB_USERNAME';
   	$pwd  	= 'REPLACE_WITH_DB_PASSWORD';
   	$db   	= 'REPLACE_WITH_DB_NAME';

   	// connect to my database
   	$conn = @mysqli_connect($host, $dbuser, $pwd, $db);

   	// get the value of the short url
	$short 	= isset($_REQUEST['short']) ? $_REQUEST['short'] : "";

	// search for the short url in the database
	$query 	= "SELECT * FROM shorturls WHERE short='$short';";
	$result = mysqli_query($conn,$query);

	// see if there are any results
	if (!$result || mysqli_num_rows($result)==0)
  	{
     	// we could not find the short url, let the user know
     	echo ("This short url does not exit.  You can <a href='index.php'>click here</a> to create it.");

	} else {

		// fetch the record if one is found as an array
	    $dbarray = mysqli_fetch_array($result, MYSQLI_ASSOC);

	    $long 	= $dbarray['long'];			// get long url

	    $count = (int)$dbarray['count'];	// get counter
	    $count++;							// increment counter by 1

	    // update short url with new counter
	    $query 	= "UPDATE shorturls SET count=$count WHERE short='$short';";
		$result = mysqli_query($conn,$query);

		// redirect to the long url
		header("Location: ".$long);

	}
?>