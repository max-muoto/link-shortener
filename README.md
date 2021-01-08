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
- Started by purchasing the domain for the project, and setup the domain on a cloud server.
- Secured the site using an SSL certificate from sslforfree.com.
- Created a MySQL database with necessary fields to store the information I need.  
![alt text](https://www.2tmid.xyz/images/image1.png)
- Built out the backend using basic PHP that talks to my MySQL database.  
- API (in the /api/ directory) serves up responses via JSON providing a REST webservice to creating and resolving short URLs 
- Built out the frontend in basic HTML/CSS (Bootstrap) and JavaScript (jQuery) that communicates with the database via the API.  

**What were some challenges that I faced?**  
- Didn't want to make things too complicated. Generated the slugs as 8 character string of random characters. Had to add code to ensure slugs were not already being used - so created a simple while loop that generates slugs until a unique one is created.
- Added basic validation on the client end (make sure URL are not empty and are valid) and error messages.


**What are some things that you would change if you had more time?**  
- Making it so that the user can acccess usage statistics on the frontend (support already exists in the API)
- Adding better validation and error messages (especially on the API end of things)
- Creating a login system so users can see what links they shortened in the past and stats
- Add support for vanity slugs (so users can creating their own slugs)

