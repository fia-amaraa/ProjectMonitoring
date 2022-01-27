<?php       

 include "koneksi.php";
 //hapus data
 $id=$_GET['id'];   
   $sql = "delete from monitoring where id='$id'";  
   if ($con->query($sql) === TRUE) {
       header("Location: index.php");
   } else {
       echo "Error: " . $sql . "<br>" . $con->error;
   }
 $conn->close();
?>