<?php

session_start();

?>

<?php 

    $connection = mysqli_connect('localhost', 'root', '', 'duan1');

    if(isset($_POST['logIn'])){
        $username = $_POST['luserName'];
        $password = $_POST['lpassWord'];

        $userSearch  = " select * from registration where userName = '$username' ";
        $query = mysqli_query($connection, $userSearch);

        $usernameCount  = mysqli_num_rows($query);

        if($usernameCount){
            $pass = mysqli_fetch_assoc($query);

            $regPass = $pass['passWord'];

            $_SESSION['userName'] = $pass['userName'];

            $passMatch = password_verify($password, $regPass);

            if($passMatch){
                echo "login successfull";
                ?>
                <script>
                    location.replace("userprofile.php");
                </script>
                <?php

            }else{
                echo "password doesnt match";
            }
        }else{
            echo "username invalid";
        }

    }

    ?>
