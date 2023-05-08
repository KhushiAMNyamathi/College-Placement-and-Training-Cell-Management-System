<?php
include("config/db_connect.php");
include("templates/header.php");
?>
<!DOCTYPE html>
<html>
<head>
<body>

   <h3>
  <a href="a_app.php"> BACK </a>
  </h3>
      <table class="table table-bordered" border="2">
       <thead>
        <tr bgcolor="#D3D3D3">
         <th>S.N</th>
         <th>SID</th>
         <th>Name </th>
         <th>TID</th>
         <th>Course name</th> 

    </thead>
    <tbody>
    <?php

     $conn = mysqli_connect("localhost", "root", "", "placement");
     $sid=$_POST['sid'];
     $query="select * 
             from rr
             where sid='$sid'"; 
     
     $r=mysqli_query($conn,$query);
      

           
     $query2="select * 
             from rr
             where sid!='$sid'"; 
     $r1=mysqli_query($conn,$query2);
     if($r1)
       { 
         echo "<b><h2>SID DOESNOT EXIST</h2></b>";
       }
    




     $sn=1;
     while($row=mysqli_fetch_row($r)) 
     {
          echo "<tr>";  echo "<td>";
          echo $sn; echo "</td>";
          $sn++;

         echo "<td>";
         echo $row[0]; echo "</td>";
       
         echo "<td>";
         echo $row[1]; echo "</td>";

         echo "<td>";
         echo $row[2]; echo "</td>";

         echo "<td>";
         echo $row[3]; echo "</td>";

         
         
     }
 ?>
</tr>

</table>
    </font>
</body>
</html>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>