# CAB-JS
<h1>Codeigniter + AngularJS + Bootstrap</h3>
<h2>Components</h2>
* Codeigniter 3.x
* AngularJS 1.x
* Bootstrap 3

<h2>Installation</h2>
* Download or clone this repository
* Edit database config in <b>appliaction/config/database.php</b>
* Import <b>codeigniter-angularjs.com.sql</b> file to your database

<h2>Apache/Nginx Config</h2>
* For <b>Apache</b> use <b>.htaccess</b>
<p>\<IfModule mod_rewrite.c><br />
	&nbsp;&nbsp;&nbsp;&nbsp;RewriteEngine on <br />
	&nbsp;&nbsp;&nbsp;&nbsp;RewriteBase /codeangular/<br />
	&nbsp;&nbsp;&nbsp;&nbsp;RewriteCond $1 !^(index\.php|resources|robots\.txt)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;RewriteCond %{REQUEST_FILENAME} !-f <br />
	&nbsp;&nbsp;&nbsp;&nbsp;RewriteCond %{REQUEST_FILENAME} !-d <br />
	&nbsp;&nbsp;&nbsp;&nbsp;RewriteRule ^(.*)$ index.php?/$1 [L]<br />
\</IfModule></p><br />
* For <b>Nginx</b> place following code in your conf file:
<p>location / {<br />
&nbsp;&nbsp;&nbsp;&nbsp;try_files $uri $uri/ /index.php?$args;<br />
&nbsp;&nbsp;&nbsp;&nbsp;if ($request_uri ~ "^/index\.php/") {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rewrite ^/index.php/(.*) /$1 redirect;<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
	}</p><br />

<h2>License</h2>
* CAB-JS is available for free (under the GNU GENERAL PUBLIC LICENSE Version 3)
* Please respect each component license independently
