<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-shop mobiteli</title>
    <!-- link rel="stylesheet" href="../css/stil.css" -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 

</head>

<body>
    <div class="w3-container">
        <nav class="navigacija">
            <div class="w3-bar w3-black">
                
            </div>     
        </nav>
    </div>

    <div class="w3-container">
        <h1>RAČUNALNI SHOP ??</h1>    
        <p>Dobrodošli!</p>
        <div class="w3-center">
            <div class="w3-card-4 ">
                <div class="w3-container w3-red w3-round-large">
                    
                    <table class="w3-table w3-striped w3-bordered" border="1px">
                        <tr class="w3-red"> 
                            
                            <th>Naziv uredaja</td>
                            <th>Slika</td>
                            <th>Cijena</td>
                            <th>Opis</td>
                            <th>Specifikacije</td>
                        
                        </tr>
                        <?php
                        include "../php/proizvod.php";
                        ?>
                        </body>
                        </html>