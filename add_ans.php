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
    <form action="process_ans.php" method="POST" >

        <p>
            <label for="question_id">question_id</label>
            <input type="number" name="question_id" id="question_id" class=" border-primary form-control" required>
        </p>

        <p>
            <label for="option_1">option_1</label>
            <input type="text" name="option_1" id="option_1" class=" border-primary form-control" required>
        </p>

        <p>
            <label for="option_2">option_2</label>
            <input type="text" name="option_2" id="option_2" class=" border-primary form-control" required>
        </p>

        <p>
            <label for="option_3">option_3</label>
            <input type="text" name="option_3" id="option_3" class=" border-primary form-control" required>
        </p>

        <p>
            <label for="option_4">option_4</label>
            <input type="text" name="option_4" id="option_4" class=" border-primary form-control" required>
        </p>

        <p>
            <label for="right_options">right_options</label>
            <select name="right_options" id="right_options" class=" border-primary form-control" required>
                <option>-- select options --</option>
                <option value="options_1">options_1</option>
                <option value="options_2">options_2</option>
                <option value="options_3">options_3</option>
                <option value="options_4">options_4</option>
            </select>   
        </p>
       
        <input type="submit" class="btn btn-primary" name="ans_save" value="Submit">
    </form>
</div>
<br>
<hr>
</body>
</html>