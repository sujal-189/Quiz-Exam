<?php 

    print_r($_POST);

    require "connection.php";

    if(isset($_POST['ans_update'])){
        $id             = $_POST['id'];
        $question_id    = $_POST['question_id'];
        $option_1       = $_POST['option_1'];
        $option_2       = $_POST['option_2'];
        $option_3       = $_POST['option_3'];
        $option_4       = $_POST['option_4'];
        $right_options  = $_POST['right_options'];

        $updt = "UPDATE `answers` SET `question_id`='$question_id',`option_1`='$option_1',`option_2`='$option_2',`option_3`='$option_3',`option_4`='$option_4',`right_options`='$right_options' WHERE id = '$id'";
        $run  = mysqli_query($conn, $updt);
        if($run){
            echo "<script>alert('Record updated Successfully!')</script>";
            echo "<script>window.location.href='answers.php';</script>";
        }else{
            echo "An error while updating the record.";
        }

    }


?>