<?php

session_start();
 

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 

require_once "config.php";
 

$enroll = $password = "";
$enroll_err = $password_err = $login_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  
    if(empty(trim($_POST["enroll"]))){
        $enroll_err = "Please enter Enrollment Number.";
    } else{
        $enroll = trim($_POST["enroll"]);
    }
    
  
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
   
    if(empty($enroll_err) && empty($password_err)){
        
        $sql = "SELECT id, enroll, password FROM users WHERE enroll = ?";
        
        if($stmt = $mysqli->prepare($sql)){
          
            $stmt->bind_param("s", $param_enroll);
            
           
            $param_enroll = $enroll;
            
          
            if($stmt->execute()){
              
                $stmt->store_result();
                
              
                if($stmt->num_rows == 1){                    
                    
                    $stmt->bind_result($id, $enroll, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            
                            session_start();
                            
                          
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["enroll"] = $enroll;                            
                            
                           
                            header("location: welcome.php");
                        } else{
                            
                            $login_err = "Invalid Enrollment Number or password.";
                        }
                    }
                } else{
                   
                    $login_err = "Invalid Enrollment Number or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            
            $stmt->close();
        }
    }
    
    
    $mysqli->close();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Enrollment Number</label>
                <input type="text" name="enroll" class="form-control <?php echo (!empty($enroll_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $enroll; ?>">
                <span class="invalid-feedback"><?php echo $enroll_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>