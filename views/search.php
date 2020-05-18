
<?php
  $key=$_GET["sk"];
  $s="localhost";
  $u="root";
  $p="";
  $d="bdprison.org";
  $conn=mysqli_connect($s,$u,$p,$d);
  $query="SELECT * FROM allprisoner WHERE name LIKE '%$key%'";
  $rs=mysqli_query($conn,$query);


 echo "<table>";
while ($Prisoner=mysqli_fetch_assoc($rs))
    {
                   echo "<td>".$Prisoner["id"]."</td>";
                   echo "<td>".$Prisoner["name"]."</td>";
                   echo "<td>".$Prisoner["gender"]."</td>";
                   echo "<td>".$Prisoner["address"]."</td>";
                   echo "<td>".$Prisoner["phoneNo"]."</td>";
            
                   echo "<td>".$Prisoner["crime"]."</td>";

                   echo "<td>".$Prisoner["notes"]."</td>";
                 echo "<tr>";
             }



 echo "</table>";
  ?>
