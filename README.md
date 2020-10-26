# TAMID-Link-Shortener
[https://www.2tmid.xyz/](https://www.2tmid.xyz/)

**Using the REST API.**

**GET a Short URL**  
To get the long url from a short url via a GET call, you simply do this:  
> https://www.2tmid.xyz/api/get.php?short=xxx  
Where **short** is the Short URL slug. If the Short URL is found, you will recieve a JSON response with it and the orginal long URL. Count represents the amount of times the short URL has been used:
```
{  
	"short": "xxx",  
	"long": "http://www.google.com",  
	"count": 8  
}  
```
If the short URL cannot be found, an error message is returned.  
**POST a Long URL**  
POST a URL and receive a short URL. To create a short URL using the API, you simply do this:  

https://www.2tmid.xyz/api/create.php?long=http://www.linkedin.com  
You will receive a JSON response that looks likes this including the short URL:  
```
{  
	"long": "http://www.linkedin.com",  
	"short": "WYOQUWRX",  
	"short_url": "https://www.2tmid.xyz/WYOQUWRX"  
}  
```
