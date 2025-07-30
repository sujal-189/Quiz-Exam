<?php 

    require 'connection.php';

    if(isset($_GET['editId'])){
        $edid = $_GET['editId'];

        $sql = "SELECT * FROM `answers` WHERE id = '$edid'";
        $run = mysqli_query($conn,$sql);
        if($run){
            $data = mysqli_fetch_assoc($run);
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
    <title>Add More Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br style="border:2px solid dark;">
    <h2>Add More Data</h2>
    <hr>
    <form action="update_ans.php" method="POST" >

        <p>
            <input type="hidden" name="id" id="id" class=" border-primary form-control" value="<?php echo $data['id']; ?>" required>
        </p>

        <p>
            <label for="question_id">question_id</label>
            <input type="number" name="question_id" id="question_id" class=" border-primary form-control" value="<?php echo $data['question_id']; ?>" required>
        </p>

        <p>
            <label for="option_1">option_1</label>
            <input type="text" name="option_1" id="option_1" class=" border-primary form-control" value="<?php echo $data['option_1']; ?>" required>
        </p>

        <p>
            <label for="option_2">option_2</label>
            <input type="text" name="option_2" id="option_2" class=" border-primary form-control" value="<?php echo $data['option_2']; ?>" required>
        </p>

        <p>
            <label for="option_3">option_3</label>
            <input type="text" name="option_3" id="option_3" class=" border-primary form-control" value="<?php echo $data['option_3']; ?>" required>
        </p>

        <p>
            <label for="option_4">option_4</label>
            <input type="text" name="option_4" id="option_4" class=" border-primary form-control" value="<?php echo $data['option_4']; ?>" required>
        </p>

        <p>
            <label for="right_options">right_options</label>
            <select name="right_options" id="right_options" class=" border-primary form-control" required>
                <option>-- select options --</option>
                <option value="options_1" <?php if($data['right_options'] == 'options_1') echo 'selected'; ?>>options_1</option>
                <option value="options_2" <?php if($data['right_options'] == 'options_2') echo 'selected'; ?>>options_2</option>
                <option value="options_3" <?php if($data['right_options'] == 'options_3') echo 'selected'; ?>>options_3</option>
                <option value="options_4" <?php if($data['right_options'] == 'options_4') echo 'selected'; ?>>options_4</option>
            </select>   
        </p>
       
        <input type="submit" class="btn btn-primary" name="ans_update" value="Update">
    </form>
</div>
<br>
<hr>
</body>
</html>