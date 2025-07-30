<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
        require 'connection.php';
        $sql = "SELECT * FROM answers";
        $run = mysqli_query($conn,$sql);
        if(!$run){
            echo "<h3>Query is not executed.</h3>";
        }
        
        $empty = mysqli_num_rows($run);
        echo $empty." is here..";
    ?>
    
    <hr>
    <h2 class="ms-5">Add more data</h2>
    <hr>
    <?php if($empty > 0):?>
    <table class="table table-striped" border="1" cellspacing="0" cellpadding="10px">
    <a href="add_ans.php" class="btn btn-primary ms-5">Add More Data</a>
    <br>
    <br>
        <tr>
            <th>id</th>
            <th>question_id</th>
            <th>option_1</th>
            <th>option_2</th>
            <th>option_3</th>
            <th>option_4</th>
            <th>right_options</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th colspan="2">Action</th>

        </tr>
        
        <?php 

            while($row = mysqli_fetch_assoc($run)){
                $id = $row['id'];
                echo "<tr>";
                echo "<td>".$row['id']."</td>"; 
                echo "<td>".$row['question_id']."</td>";
                echo "<td>".$row['option_1']."</td>";
                echo "<td>".$row['option_2']."</td>";
                echo "<td>".$row['option_3']."</td>";
                echo "<td>".$row['option_4']."</td>";
                echo "<td>".$row['right_options']."</td>";
                echo "<td>".date('d-m-Y h:i:s A',strtotime( $row['created_at'])) ."</td>";
                $updated = ($row['updated_at'] != NULL) ? date('d-m-Y h:i:s A',strtotime($row['updated_at'])) : '---';
                echo "<td>".$updated."</td>";
                echo "<td><a href='edit_ans.php?editId=$id' class='btn btn-primary'>Edit</a></td>";
                echo "<td><a href='ans_delete.php?deleteId=$id' class='btn btn-danger'>Delete</a></td>";
                echo "</tr>";
            }
        
        ?>
    </table>
    
<?php else: ?>
    <div class="row">
        <div class="col-md-6 offset-md-2">
            <img src="empty_2.png" alt="" height="300px">
            <h4 class="mt-5">Whoops! No Data found.</h4>
            <a href="add_ans.php" class="btn btn-primary ms-5 mt-2" >Add Data</a>
        </div>
    </div>
    
<?php endif; ?>
    
