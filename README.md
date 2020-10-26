# TAMID-Link-Shortener
[Website Link](https://www.2tmid.xyz/)

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

> https://www.2tmid.xyz/api/create.php?long=http://www.linkedin.com  

You will receive a JSON response that looks likes this including the short URL:  
```
{  
	"long": "http://www.linkedin.com",  
	"short": "WYOQUWRX",  
	"short_url": "https://www.2tmid.xyz/WYOQUWRX"  
}  
```
**Development Process**
- Started by purchasing the domain for the project, and setup the domain on a cloud server
- Secured the site using an SSL certificate from sslforfree.com.
- I then created a SQL database to hold long URLS, short URLs, and counters for usage of short URLs.  
![alt text](https://www.2tmid.xyz/images/image1.png)
- I built out the backend using PHP and connected it to a MySQL database.  
- I used JSON to show responses to long and short URL requests.  
- I built out the frontend in HTML/CSS and JavaScript (with the Bootsrap framework) and connected it to the backend using PHP and JQuery.  


**What were some challenges that I faced?**  
- Getting replicate short links to be thrown out. Had to develop a while statement to check the SQL database for current entries of the short link until the link was new.
- Getting invalid links to create an alert message. Created an if-else statement to check whether it was blank or was able to return a URL object.


**What are some things that you would change if you had more time?**  
- Making it so that the user can acccess usage statistics on the frontend.
- Creating a copy botton on the website so the user doesn't have to do it themself.
- Creating a login system so users can see what links they shortened in the past.

