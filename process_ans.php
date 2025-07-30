<?php 

    require 'connection.php';

    if(isset($_POST['ans_save'])){
        echo "Yes we will add data to db.";
        
        $question_id    = $_POST['question_id'];
        $option_1       = $_POST['option_1'];
        $option_2       = $_POST['option_2'];
        $option_3       = $_POST['option_3'];
        $option_4       = $_POST['option_4'];
        $right_options  = $_POST['right_options'];

        $sql = "INSERT INTO `answers`(question_id, option_1, option_2, option_3, option_4, right_options)
         VALUES ('$question_id','$option_1','$option_2','$option_3','$option_4','$right_options')";
        $run = mysqli_query($conn,$sql);
        if($run){
            echo "<script>alert('Data added successfully!');</script>";
            echo "<script>window.location.href='answers.php';</script>";
        }else{
            echo "Data cannot be inserted.";
        }

    }else{
        echo "No data received.";
    }

?>