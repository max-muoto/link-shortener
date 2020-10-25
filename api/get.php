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
     	$arr = array();
		$arr["msg"] 	= "Short URL was not found";

		header('Content-Type: application/json');
		echo (json_encode($arr));

	} else {

		// fetch the record if one is found as an array
	    $dbarray = mysqli_fetch_array($result, MYSQLI_ASSOC);

	    $long 	= $dbarray['long'];			// get long url

	    $count = (int)$dbarray['count'];	// get counter

		// create an array of the data and output it as JSON
		$arr = array();
		$arr["short"] 	= $short;
		$arr["long"] 	= $long;
		$arr["count"] 	= $count;

		header('Content-Type: application/json');
		echo (json_encode($arr));
	}
?>