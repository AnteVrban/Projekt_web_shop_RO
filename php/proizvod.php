<?php

$server = "student.veleri.hr";
$database ="avrban";
$username="avrban";
$password ="11";
$conn = mysqli_connect($server,$username,$password,$database);
$query = "SELECT * FROM proizvod";
$res = mysqli_query($conn, $query);
?>

<table class="w3-table-all">
            <tr class="w3-red">
                <th></th>
                <
                <th>Naziv uredaja</td>
                     <th>Slika</td>
                     <th>Opis</td>
                    <th>Specifikacije</td>
                   <th>Cijena</td>
            </tr>

            <?php
while($row = mysqli_fetch_array($res)){
                echo" <tr>";
              echo "<td>".$row['ime']."</td>";
                echo"<td><img src='".$row['slika']."'width='100px' alt='".$row['naziv']."'</td>";
                echo"<td>".$row['cijena']."</td>";
                echo"<td>".$row['opis']."</td>";
                echo"<td>".$row['specifikacija']."</td>";
                echo"</tr>";
            }
mysqli_close($conn);
    ?>