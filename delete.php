<?php
     include("connection.php");
     $id = $_GET['id'];
     $query = "DELETE FROM proizvodi where id = $id";
     if($con->query($query) === TRUE){
        header("location:/products.php");
     }else{
         echo "something went wrong";
     }
     