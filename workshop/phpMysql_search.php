<?php
 include 'dbconnect.php';
 echo "<br>";


 $sql = "SELECT rollno, fname, lname FROM student";
 $result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0) {
    // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        echo "rollno: " . $row["rollno"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
    }
} else {
    echo "0 results";
 }

 mysqli_close($conn);
?>