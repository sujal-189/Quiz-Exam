<?php 

    require 'connection.php';

    if(isset($_POST['register'])){
        echo "Yes we will add data to db.";
        
        $username              = $_POST['username'];
        $email                 = $_POST['email'];
        $password              = $_POST['password'];
            

        $sql = "INSERT INTO `login`(username, email, password ) 
        VALUES ('$username', '$email', '$password')";
        $run = mysqli_query($conn,$sql);
        if($run){
            echo "<script>alert('Data added successfully!');</script>";
            echo "<script>window.location.href='login.php';</script>";
        }else{
            echo "Data cannot be inserted.";
        }

    }else{
        echo "No data received.";
    }

?>