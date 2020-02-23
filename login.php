<?php
session_start();

include './init.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedpassword = sha1($password);
    $stmt = $db->prepare("SELECT `ID`,`Username`,`Password` FROM `users` Where Username=? And Password=?");
    $stmt->execute(array($username,$hashedpassword));
    $row = $stmt -> fetch();
    $count = $stmt->rowCount();
    if($count > 0)
    {
        $_SESSION['username'] = $username;
        $_SESSION['ID'] = $row['ID'];
        header("Location: dashboard.php");
        exit();
    }
    else 
    {
        ?>
<div class="container invalid-margin">
    <div class="alert alert-danger text-center" style="margin-top:100px;">
        Username Or Password Are Invalid !
    </div>
</div>
<?php
    }
    }
?>
<div class="login_container" style="background: url(./img/b2.jpg);background-size: cover;padding: 80px;">
     <div class="row" style="padding:40px;">
        <div class="col-md-4 jumbotron" style="margin-top:30px;margin:0px auto;padding:40px;border: 1px solid #0000001a;border-radius: 10px;background-color: #4c4c4cbf;">
            <form class="login" method="POST" dir="ltr" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                
                 <h2 style="margin-bottom:30px;margin-top:10px;color: white;font-weight: bold;" class="text-center">Log In</h2>
                 <input class="textbox form-control" style="margin-bottom: 15px" type="text" name="user" placeholder="Username" autocomplete="off" />
   
                 <input class="textbox form-control" type="password" style="margin-bottom:15px;" name="pass" placeholder="Password" autocomplete="new-password" />
   
                <input class="btn btn-nav col-md-12" style="background-color: #00000099;color: white;font-weight: bold;font-family: sans-serif;border: 1px solid #9e9c9cbd;border-radius: 15px;" type="submit" value="Sign In" />
            </form>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>