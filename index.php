<?PHP
include "config.php";
$s = $_SERVER['QUERY_STRING'];

if ($s==null) {echo "<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
	<meta name=\"description\" content=\"anonymize your links with $sitename\" />
	<meta name=\"keywords\" content=\"anonymous,link,url,redirect,forum,board,script,domain,external,hompage\" />
	<title>$sitename wwe</title>

	
</head>
</br>
</br></br></br>
<div style=\"text-align:center\">    

	 
	 
	 
 
</div>  
<body>
	 



</body>
</html>"; }

else echo "
<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
	<meta http-equiv=\"refresh\" content=\"$wait; URL=$s\">
	<title>$sitename </title>
	<style type=\"text/css\">
	html {
		background: #000;
	}
	body {
		background: #404040;
		border: 1px solid #666;
		color: #999;
		font: 14px \"Lucida Grande\", \"Lucida Sans Unicode\", tahoma, verdana, arial, sans-serif;
		margin: 5% 10%;
		text-align: center;
	}
	
	a {
		color: #FF8301;
	}
	
	h1 {
		color: #EEE;
	}
	
	#container {
		background: #292929;
		line-height: 2.4;
		padding: 1em;
	}
	
	p#url {
		font-weight: bold;
		overflow: hidden;
		width: 100%;
	}
	
	</style>
	
<base target='_blank'/>
</head>
 
<body>
 
<h1>$sitename</h1>
	<div id=\"container\">		
 
 
		 <p id=\"url\"><a href=\"$s\">$s</a></p>
		 
		<hr />
		<p><a href=\"http://$url/\">$sitename</a></p> 
		
	</div>  
</body>
</html>";
?>