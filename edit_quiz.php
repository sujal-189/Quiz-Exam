<?php 

    require 'connection.php';

    if(isset($_GET['editId'])){
        $edid = $_GET['editId'];

        // echo $edid." is received.";

        $sql = "SELECT * FROM `questions` WHERE id = '$edid'";
        $run = mysqli_query($conn,$sql);
        if($run){
            // echo "Query is executed.";
            $data = mysqli_fetch_assoc($run);
            // print_r($data);
        }else{
            echo "Query is not executed.";
        }


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br style="border:2px solid dark;">
    <h2>Add More Data</h2>
    <hr>
    <form action="update_quiz.php" method="POST" >

        <p>
            <input type="hidden" name="id" id="id" class=" border-primary form-control" value="<?php echo $data['id']; ?>" required>
        </p>
        <p>
            <label for="que_id">Questions_id</label>
            <input type="number" name="que_id" id="que_id" class=" border-primary form-control" value="<?php echo $data['questions_id']; ?>" required>
        </p>

        <p>
            <label for="que_name">Questions</label>
            <input type="text" name="que_name" id="que_name" class=" border-primary form-control" value="<?php echo $data['question_name']; ?>" required>
        </p>
       
        <input type="submit" class="btn btn-primary" name="qus_update" value="Update">
    </form>
</div>
<br>
<hr>
</body>
</html>

