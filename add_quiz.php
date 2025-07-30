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
    <form action="process_quiz.php" method="POST" >

        <p>
            <label for="que_id">Questions_id</label>
            <input type="number" name="que_id" id="que_id" class=" border-primary form-control" required>
        </p>

        <p>
            <label for="que_name">Questions</label>
            <input type="text" name="que_name" id="que_name" class=" border-primary form-control" required>
        </p>
       
        <input type="submit" class="btn btn-primary" name="qus_save" value="Submit">
    </form>
</div>
<br>
<hr>
</body>
</html>