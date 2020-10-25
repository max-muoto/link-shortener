<!DOCTYPE html>
<html>
	<head>
		<title>URL Shortener</title>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<!-- centers child -->
		<style>
			.child {
			margin: 0 auto;
			display: flex;
            justify-content: center;
			}
		</style>
		<!--
			Website URL: 2tmid.zyx
		-->
	</head>
	<body>
		<!-- div class that holds form to enter link and the submit button which links to the backend -->
		<div class="container">
			<h1>URL Shortener</h1>
		

		
		
			
			  	<div class="row" style="padding-top:20px">
				    <div class="col-sm-2">
				       	<b>LONG URL:</b>
				    </div>
				    <div class="col-sm-8">
				    	<input type="text" class="form-control" id="long" name="name" placeholder="Enter Long URL to Shorten...">
				    </div>
				    <div class="col-sm-2">
				       <button type="submit" class="btn btn-primary" onclick="shortenURL();return false">Submit</button>
				    </div>
				</div>

				<div class="row" style="padding-top:20px">
				    <div class="col-sm-2">
				       	<b>SHORT URL:</b>
				    </div>
				    <div class="col-sm-8">
				    	<a id="short_url" target="_blank" href="#">-</a>
				    </div>
				    <div class="col-sm-2">
				       
				    </div>
				</div>
			
		

		<hr/>

		
			<h1>URL Shortener API</h1>
		


		<div class="row" style="padding-top:20px">
			<div class="col-sm-12">
					
					
						<p>
<b>Using the REST API.</b><br/><br/>

<b>GET a Short URL</b><br/>
To get the long url from a short url via a GET call, you simply do this:<br/>

<pre style="background-color:#eeeeee;padding:10px">
https://www.2tmid.xyz/api/get.php?short=xxx
</pre>


Where <b>short</b> is the Short URL slug. If the Short URL is found, you will recieve a JSON response with it and the orginal long URL. Count represents the amount of times the short URL has been used:
<pre style="background-color:#eeeeee;padding:10px">
{
	"short": "xxx",
	"long": "http://www.google.com",
	"count": 8
}
</pre>

If the short URL cannot be found, an error message is returned.

</p>

<p>


<b>POST a Long URL</b><br/>POST a URL and receive a short URL.
To create a short url using the API, you simply do this:

<pre style="background-color:#eeeeee;padding:10px">
https://www.2tmid.xyz/api/create.php?long=http://www.linkedin.com
</pre>

You will receive a JSON response that looks likes this including the short URL:

<pre style="background-color:#eeeeee;padding:10px">
{
	"long": "http://www.linkedin.com",
	"short": "WYOQUWRX",
	"short_url": "https://www.2tmid.xyz/WYOQUWRX"
}
</pre>
</p>

			</div>
		</div>

	</div>
			
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script>

			function shortenURL()
			{
				
				var long = $("#long").val();
				console.log ('long:'+long);

				if (long=="")
				{
					alert ("Please enter a valid URL");
				}
				else if (!isValidUrl(long))
				{
					alert ("Please enter a valid URL");
				}
				else {

					$.post("api/create.php", { long : long }, function(data, textStatus) {
					  
					  var short_url = data.short_url;
					  $("#short_url").html(short_url);
					  $("#short_url").attr('href',short_url);

					}, "json");

				}
			}

			function isValidUrl(string) {
			  try {
			    new URL(string);
			  } catch (_) {
			    return false;  
			  }

			  return true;
			}

		</script>
	</body>
</html>