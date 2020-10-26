# TAMID-Link-Shortener
[Project Link](https://www.2tmid.xyz/)

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
- I started by purchasing the domain for the site and getting it secured using sslforfree.com.  
- I then created a SQL database to hold long URLS, short URLs, and counters for usage of short URLs  

![alt text](https://d31l11kq7rju10.cloudfront.net/vn1y%2Fpreview%2F35180779%2Fmain_full.png?response-content-disposition=inline%3Bfilename%3D%22main_full.png%22%3B&response-content-type=image%2Fpng&Expires=1603674383&Signature=aqfecGIWsWjkIMehnnyh8dQCxPqbTp4zVuMp9DX445~U9oFgEOB8yZaU2KH60r1JKqGgRS7hfkcxIyX-X4SJrupAzPEzeovSiDX6Z6DfCAF-5O9UDrBd2EHXwKjmiA618gN7R5VHWawDc1NQr9Aoqbb3FAKdy8anwJVfW8uT2AnqxWom5jxExS32OcHMWA5VPhWfc3KeJ94z5H73M87izUilomVOfdEsz4qznjUSEDA2JKrsme-auvhkAP8NAsSYMyQMG8YEWNNpD66jyYVL0YS8yzOoWwYTDMxFhXfAT1cQqAQacVU0aAzi95osWjiLwx3IA94orYA1RBBm10qdrA__&Key-Pair-Id=APKAJT5WQLLEOADKLHBQ)
- I built out the backend using PHP and connected it to my SQL database  
![alt text](https://d3lbwkmaao72si.cloudfront.net/1g4y%2Fpreview%2F35184385%2Fmain_full.png?response-content-disposition=inline%3Bfilename%3D%22main_full.png%22%3B&response-content-type=image%2Fpng&Expires=1603674604&Signature=U7JNNDB8o~fxjP4~OZF2d525iWLUv3uiwPuYThZ9CU8kQ7QDVI9GakSxC72YY50F-dOckBnh9ViJekJp6We-6~YGMIDQQR6xobDOOQFrv0AU08BhfOEHZUyPkJuDbksSRxFAM3smx2bcGSvUU~--ogvcCyJBfHfvOGc3dZtz3YbOaHIDkEHPSguvKz9nYkhuQVM0LrJUWRstJMmv~rqEPNmkzMQQr~yNfnxWgTSQEPgcQWRRYa24CIipKVGZYdSNgdPewSQLK~IS1W4vfNIIZVqpXVCXsQFqzPivuly6DnDATXljGsJnCzLDEhotXTDF98hgfxiW0M07LjGplCZAFg__&Key-Pair-Id=APKAJT5WQLLEOADKLHBQ)
- I used JSON to show responses to long and short URL requests  
- I built out the frontend in HTML/CSS and JavaScript (with the Bootsrap framework) and connected it to the backend using PHP and JQuery
![alt text](https://d3lbwkmaao72si.cloudfront.net/5g4y%2Fpreview%2F35184389%2Fmain_full.png?response-content-disposition=inline%3Bfilename%3D%22main_full.png%22%3B&response-content-type=image%2Fpng&Expires=1603674713&Signature=Z3grscGL8L4aUeQpG~5SIB3C3GEYXmRsc-tQK-wLvlYjy17W9iS4byYzFqcYnjaRX6FgXZcDCm3Etr8T--S7QzCxAmLLVfYF9AAJERezd7cUWqJE7PVcdab1Uy3XUbodZqEFseAUEGdzMUKF~U-p0QpJdeDNNjPqZjdlJGepp4kuF0s927zkveWIoplEsS-xAsRfk1HMxpOcIqCYetVXMMhetzE~jj~-blQcJQijDUTWh4O5B~g9mIM8K0kGUdZdLFDIvO2a8B2m1mn8rB9KOf61JFcgkhyUgeeQ5EY5IFumtXKZkEEKEi9I5VXTXe-dKJOZa1CIrknMbbSbXjevNQ__&Key-Pair-Id=APKAJT5WQLLEOADKLHBQ)

**What were some challenges that I faced?**  
Some challengs that I faced where that 


**What are some things that you would change if you had more time?**  

