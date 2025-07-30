 <?php 

    require 'connection.php';

    print_r($_REQUEST);

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `login` WHERE username = '$username' AND email = '$email' AND password = '$password'";
        $run = mysqli_query($conn,$sql);
        if($run){
            $count = mysqli_num_rows($run);
            if($count > 0){
                 header("location:questions.php");

            }else{
                header("location:login.php?err=1");
            }

        }else{
            echo "query err.";
        }
    }

?>