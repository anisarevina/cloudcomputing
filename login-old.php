<?php
    session_start();
    
    include 'conn.php';

    if($_SESSION){
        header('location: index.php');
    } else{

        if(isset($_GET['redirectProfile'])){
            $profileId = $_GET['redirectProfile'];
        }
    
        if(isset($_POST['submit'])){
            // session_start();
            $username = $_POST['username'];
            $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $password = password_verify($_POST['password'], $hash);
    
            $sql = "SELECT * FROM users WHERE `username`='$username'";
            $result = mysqli_query($conn,$sql);
            $row = $result->fetch_assoc();
            if($row != NULL){
                if(password_verify($_POST['password'],$row['password'])){
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['status'] = 'login';
                    // var_dump($_SESSION['id']);
                    if($profileId != NULL){
                        header('location: profile.php?id='.$profileId);
                    } else{
                        header('Location: index.php');
                    }
                }
            } else{
                echo "No Dataset";
            }
        
        }
        mysqli_close($conn);

    }

    $pageTitle = 'Login';
    include 'header.php';
    
?>
    
    <div class="jumbotron">
    <div class="row">
    <div class="col-lg-6 mx-auto">
    
        <h2>Login</h2>
        <form action="login.php<?php if(isset($_GET['redirectProfile'])){echo "?redirectProfile=".$_GET['redirectProfile'];}?>" method="POST">
        
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
        </div>
        
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        
        <button type="submit" name="submit" id="submit" class="btn btn-primary">submit</button>

</a> 
<a href="register.php"><p>Belum punya akun? Sign up </p></a>
    </form>
    </div>
        </div>
    </div>

<?php include 'footer.php' ?>