<?php
 include "../connection.php";


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Dessert Recipe Website</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/19835d7ee3.js" crossorigin="anonymous"></script>
</head>

<body>

    <div id=" ">
        <div class="container">
            <header>
                <div class="navbar">
                    <nav>
                        <ul>
                            <li><a href="#Home">Home</a></li>
                            <li><a href="#AboutUs">About</a></li>
                            <li><a href="#Socials">Socials</a></li>
                            <li><a href="#Profile">Profile</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="left">
                <h3>TODAY'S SPECIAL</h3>
                <h1>CINNAMON ROLL </h1>

                <img src="photo/cinnamon.jpg" alt="">
                <p>Savor the comforting delight of freshly baked cinnamon<br> rolls: 
                    soft, fluffy, and perfectly swirled with cinnamon-<br>sugar.
                    A timeless treat that brings warmth to any moment.</p>
                    <button class="readnow-btn">read now</button>
            </div>
            <div class="right">
                <div class="d1">
                <img align="right" src="photo/macaroon.jpg" alt="">
                <h2>MACARONS</h2>
                <p>Tiny treats, big flavors – <br> discover the magic.</p>
                <button class="readnow-btn">read now</button>
                </div>

                <div class="d2">
                <img align="right" src="photo/tiramisu.jpeg" alt="">
                <h2>TIRAMISU CAKE</h2>
                <p>Treat yourself to a slice<br> of Tiramisu.</p>
                <button class="readnow-btn">read now</button>
                </div>
                

            </div>

            <div class="recipe-categories">
                <h2>Explore by Category</h2>
                
                <div class="category1">
                    <img src="photo/cookie.jpg" alt="Cookies">
                    <h3>Cookies</h3>
                    <!-- <button class="view">View Recipes</button> -->
                </div>

                <div class="category2">
                    <img src="photo/cake.jpg" alt="Pies & Tarts">
                    <h3>Cakes</h3>
                    <!-- <button class="view">View Recipes</button> -->
                </div>
                
                <div class="category3">
                    <img src="photo/pie.jpg" alt="Pies & Tarts">
                    <h3>Pies & Tarts</h3>
                    <!-- <button class="view">View Recipes</button> -->
                </div>
                
            </div>


        </div>
        <div class="footer">
            
        </div>
    </div>

   

</body>

</html>