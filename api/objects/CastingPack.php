<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';

//On établit la connexion
//$conn = new mysqli($servername, $username, $password);
$conn = mysqli_connect("localhost", "root", "root", "ServiceWeb");
function read($conn){
    $sql = 'SELECT * FROM castingpack';
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
               echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>size</th>";
            echo "</tr>";
               echo "<tr>";
                   echo "<td>" . $row['Id'] . "</td>";
                   echo "<td>" . $row['Name'] . "</td>";
                   echo "<td>" . $row['Size'] . "</td>"; 
               echo "</tr>";
           }
           echo "</table>";
     }  else{
          echo "No records matching your query were found.";
        }
        } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
        // Close connection
    mysqli_close($conn);
}
read($conn);
