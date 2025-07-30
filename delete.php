<?php 

    require 'connection.php';

    if(isset($_GET['deleteId'])){
        $id = $_GET['deleteId'];

        $del = "DELETE FROM `questions` WHERE `id` = '$id'";
        $run = mysqli_query($conn,$del);
        if($run){
            echo "<script>alert('Record deleted successfully.')</script>";
            echo "<script>window.location.href='questions.php'</script>";
        }else{
            echo "Error: Cannot be deleted.";
        }
    }

?>