<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Registration</title>

    

    <!--Font Awesome CDN Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Custom CSS File Link-->
    <link rel="stylesheet" href="../css/log.css" />
</head>

<body>

    <?php 

    $connection = mysqli_connect('localhost', 'root', '', 'tours');
    /*include 'dbCon.php';*/

    if(isset($_POST['signUp'])){
        $name = mysqli_real_escape_string($connection , $_POST['fullName']);
        $phone = mysqli_real_escape_string($connection , $_POST['phoneNum']);
        $username = mysqli_real_escape_string($connection , $_POST['userName']);
        $email = mysqli_real_escape_string($connection , $_POST['email']);
        $password = mysqli_real_escape_string($connection , $_POST['passWord']);
        $cpassword = mysqli_real_escape_string($connection , $_POST['cpassWord']);

        /*Encrypting password*/ 
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $cpass = password_hash($cpassword, PASSWORD_DEFAULT);

        $token = bin2hex(random_bytes(15));

        $emailquery = " select * from registration where email= '$email' ";
        $query = mysqli_query($connection,$emailquery);

        $emailCount = mysqli_num_rows($query);

        if($emailCount > 0){
            ?>
            <script>
                alert("Email Exists");
            </script>
        
        <?php
        }else{

            if(password_verify($password,$pass) && password_verify($cpassword,$cpass) && $password==$cpassword ){
                
                $insertQuery = "insert into registration(fullName, phoneNum, userName, email, passWord,
                cpassWord, token, status) values('$name', '$phone', '$username', '$email', '$pass', '$cpass'
                ,'$token','inactive')";

                $executeQuery = mysqli_query($connection, $insertQuery);

                if($executeQuery){
                    ?>
                        <script>
                            alert("Inserted Successfull");
                        </script>
                
                    <?php
                }else{
                
                    ?>
                    <script>
                        alert("Insertion Failed");
                    </script>
                
                <?php
                
                }

            }else{
                ?>
                <script>
                    alert("Password Doesn't Match");
                </script>
            
            <?php
            }
        }

    }

    ?>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="login.php" method="POST" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="luserName" placeholder="Username" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="lpassWord" placeholder="Password" required/>
                    </div>
                    <input type="submit" name="logIn" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="fullName" placeholder="Full Name" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="phone" name="phoneNum" placeholder="Phone" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="userName" placeholder="Username" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="passWord" placeholder="Password" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="cpassWord" placeholder="Confirm Password" required/>
                    </div>
                    <input type="submit" name="signUp" class="btn" value="Sign up" />
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                    Sign up to book your preferable packages!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="../images/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Have an account? please sign in!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="../images/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <!--Custom JS Link-->
    
    <script src="js/logr.js"></script>
    
</body>

</html>