<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>My Work</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		

		div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: #219653;
    clear: left;
    
}

img{
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;

}



section {
    margin-left: 170px;
    /*border-left: 1px solid gray;*/
    padding: 1em;
    overflow: hidden;
}
body{
	background-color: #E8DDBD;
}




	</style>
</head>


<body >
	<div class="container">
<header>
   <h1>LOGO</h1>
</header>
<div class="img">
	<img src="java.jpg">

</div>
<section>
	
	<h1 style="font-style: medium; font-size: 36px line-height:42px; ">I AM OLULODE OLATUNBOSUN </h1>
	<h2  style="font-size: 24px; line-height: 24px font-style: medium; text-align: left; padding-left:  65px;" > A </h2>


	<h2>WEB DEVELOPER</h2>

	<h2> TIME: <?php 
 date_default_timezone_set('Africa/Lagos');
 echo date("h:i:s A" );

 ?> </h2>
  
</section>

<footer></footer>

</div>
</body>
</html