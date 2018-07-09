<?php 
echo file_get_contents("header.html")
?>
<html>
<style>
body, html {
    
    background-image: url("About.jpeg");

    
    height: 100%; 

   
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
} 

#welcoming {
    margin: 30px;
    text-align: center;
    font-family: Helvetica;
    font-size: 25px;
    color: #ffffff; 
}

#image1 {
    position: absolute;
    float: left;
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    padding: 10px;
    width: 40%;
}

#image2 {
    position: absolute;
    float: right;
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    padding: 10px;
    width: 150%;
}

#button {
    border: 1px solid white;
    padding: 10px 30px;
    color: white;
    text-decoration: none;
    margin-right: 5px;
    font-size: 13px;
    text-transform: uppercase;
    font-family: "Roboto", sans-serif;
}

#button:hover {
    background-color: darkorange;
    transition: all 0.5s ease-in;
}

</style>


    <div id="welcoming" style="text-align:center; color: #ffffff;">
        Welcome to <b><strong>Lala Salama</strong></b> where we value you.<br/>
        Whether in search of a Bed & Breakfast or Full/Half board Hotel,<br/>
        We provide the easiest way to find a hotel near you.<br/>
        <div id="button">
            <a href="Navigation.php"/>Begin Your Search</a>
        </div>
        <div id="image1">
            <img src="hotel1.jpeg" width="500" height="350" alt="Room Image"/>
        </div>
        <div id="image2">
            <img src="hotel2.jpg" width="500" height="350" alt="Hotel Room"/>
        </div>
    </div>
</html>
