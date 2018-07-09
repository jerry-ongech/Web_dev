<!DOCTYPE>
<html>
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
    echo file_get_contents("header.html")
?>
</head>
<style>
    body, html{
        /* The image used */
    background-image: url("contact.jpeg");

    
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
    
    #about_us {
    margin: 30px;
    text-align: center;
    font-family: Helvetica;
    font-size: 20px;
    color: #ffffff;	
	}
		
</style>
<body>
    <header>

        <div id="about_us" style="text-align: center; color: #ffffff;">
        Have you just flown into Nairobi and don't know where to sleep?<br/>
        Or looking for a place to spend the night with your significant other?<br/>
        If you are in search of hotels in Nairobi?<br/>
        Look no further than <b><strong>Lala Salama</strong></b>!!!<br/>
        </div>
   
    </header>
    <body>
		<div id="image3">
            <img src="Navigation.jpeg" width="800" height="450" alt="City Lights"/>
        </div>
    </body>
	<?php
    echo file_get_contents("footer.html")
	?>
</html>
