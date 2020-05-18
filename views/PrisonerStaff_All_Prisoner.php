<?php include "PrisonerStaff_Header_Manu.php"?>


    <!-- Search form -->
    <script>
    function search()
          {
        //  alert("nur")
          http =new XMLHttpRequest();
          var search_word=document.getElementById("search_Input").value;
          http.onreadystatechange=function(){
            if (http.readyState==4 && http.status==200) {
              //alert(http.responseText);
              document.getElementById("serarch_result").innerHTML=http.responseText;
            }

          }
          http.open("GET", "search.php?sk="+search_word, true);
          http.send();
          }

    </script>
    <div class="md-form mt-5">

      <input class="form-control" type="text" placeholder="Search Prisoner" aria-label="Search" id="search_Input" name="n" onkeydown="search()">
    </div>

    <div id="serarch_result">
      </div>

    <form class="AllCellForm" action="" method="">
      <h2 class="mx-auto mt-3" style="width:200px"> All Prisoner </h2>


    <div class="table table-bordered" class="table-responsive-xl">
    <?php // i can't find  ?>
      <table class="table">
         <thead class="thead-light">
        <tr>
          <th scope="col" >Prisoner Id</th>
          <th scope="col">Prisoner Name</th>
          <th>Gender</th>
          <th >Address</th>
          <th>Phone Number</th>
          <th>Occupation</th>
          <th>Crime</th>
          <th>Day</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Notes</th>
        </tr>
         </thead>


        <?php
        require_once '../contollers/PrisonerContoller.php';

        $AllPrisoner=getAllPrisoner();
          foreach ($AllPrisoner as $Prisoner) {
              echo "<tr>";

                echo "<td>".$Prisoner["id"]."</td>";
                echo "<td>".$Prisoner["name"]."</td>";
                echo "<td>".$Prisoner["gender"]."</td>";
                echo "<td>".$Prisoner["address"]."</td>";
                echo "<td>".$Prisoner["phoneNo"]."</td>";
                echo "<td>".$Prisoner["occupation"]."</td>";
                echo "<td>".$Prisoner["crime"]."</td>";
                echo "<td>".$Prisoner["day"]."</td>";
                echo "<td>".$Prisoner["startDate"]."</td>";
                echo "<td>".$Prisoner["endDate"]."</td>";
                echo "<td>".$Prisoner["notes"]."</td>";
              echo "<tr>";
          }

         ?>

      </table>
    </div>
</form>
<?php  include "PrisonerStaff_Footer.php";?>
