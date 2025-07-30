<?php 

    require 'connection.php';

    if(isset($_POST['qus_save'])){
        echo "Yes we will add data to db.";
        
        $question    = $_POST['que_name'];
        $question_id = $_POST['que_id'];

        $sql = "INSERT INTO `questions`(question_name,questions_id) VALUES ('$question','$question_id')";
        $run = mysqli_query($conn,$sql);
        if($run){
            echo "<script>alert('Data added successfully!');</script>";
            echo "<script>window.location.href='questions.php';</script>";
        }else{
            echo "Data cannot be inserted.";
        }

    }else{
        echo "No data received.";
    }

?>