<?php 

    print_r($_POST);

    require "connection.php";

    if(isset($_POST['qus_update'])){
        $id     = $_POST['id'];
        $qid    = $_POST['que_id'];
        $qname  = $_POST['que_name'];

        $updt = "UPDATE questions SET questions_id = '$qid', question_name = '$qname' WHERE id = '$id'";
        $run  = mysqli_query($conn, $updt);
        if($run){
            echo "<script>alert('Record updated Successfully!')</script>";
            echo "<script>window.location.href='questions.php';</script>";
        }else{
            echo "An error while updating the record.";
        }

    }


?>