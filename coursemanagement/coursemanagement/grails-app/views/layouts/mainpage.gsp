<!DOCTYPE html>
<html>
	<head>
		<title><g:layoutTitle default="Grails"/></title>
		<style>
			#header {background-color:#e0e0ff;text-align: left;}
			#loginHeader {background-color:#e0e0ff;text-align: right;}
			#footer {background-color:#e0e0ff;text-align: center;}
		</style>
		<g:layoutHead/>
	</head>
	<body>
		<div id="header"><h1><a href="http://localhost:8080/coursemanagement"><asset:image src="books.png" alt="Grails"/></a> BlackBoard</h1></div>
		<div id="loginHeader">
    		<g:loginControl/>
	  	</div>
		<g:layoutBody/>
		<div id="footer"></div>
	</body>
</html>