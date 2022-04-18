<?php
    session_start();

    include 'conn.php';

    if($_SESSION){
        header('location: index.php');
    } else{

        if(isset($_POST['submit'])){
            if($_POST['password'] !== $_POST['confirm_password'])
            header('Location: register.php');
    
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $bio = $_POST['bio'];
        
            
            $sql = "INSERT INTO users (`email`, `username`, `password`,`bio`)
            VALUES ('$email', '$username', '$password','$bio')";
    
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully"; 
                $msg= "<br><a href='login.php'> klik</a> untuk kembali ke halaman login";

            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);

    }
    
    $pageTitle = 'Sign Up';
    include 'header.php';
?>

    <div class="jumbotron">
      
        <div class="row">
        <div class="col-lg-6 mx-auto">
        <h2>Hi User Baru, Daftar Yuk!</h2>
    <form action="register.php" method="POST">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
           
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
        </div>
        <div class="form-group">
            <label>Bio</label>
            <input type="text" class="form-control" id="bio" name="bio" placeholder="Masukkan Bio">
        </div>
        
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" name="password" onkeyup='check();' >
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" onkeyup=' check();' >
            <span id="message"></span>
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">submit</button>
    </form>
    <?php if(isset($msg)){
        echo $msg;
    }?> 
    </div>
    </div>
    </div>

    <script type="text/javascript">
        var check= function(){
            if (document.getElementById('password').value ==
          document.getElementById('confirm_password').value) {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = 'Password Matches!';
            } else {
          document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'Password is not the same!';
            }
        }
        <div class="container">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php foreach($rows as $row) : ?>
                <tr>
                    <td> <?= ++$i ?>  </td>
                    <td> <?=  $row['username'] ?>  </td>
                    <td> <?=  $row['email'] ?>  </td>
                    <td> <a href="profile.php?id=<?=$row['id']?>" class="btn btn-primary"> Details </a> </td>
                    <!-- <td> <img src="uploads/<?=$row['image']?>" alt=""></td> -->
                </tr>
            <?php endforeach;?>
        </table>
    </div>
    </script>
<?php include 'footer.php' ?>