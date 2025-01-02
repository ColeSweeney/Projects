<document_content>
<?php session_start();
require_once "config.php"; // Check if the user is logged in
if (!isset($_SESSION["login_id"])) {
 header("location: login.php");
 exit();
}
$user_id = $_SESSION["login_id"];
$findresult = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$user_id'");
if ($res = mysqli_fetch_array($findresult)) {
 $name = $res['name'];
 $email = $res['email'];
} else {
 // User not found in the database
 header("location: login.php");
 exit();
}
if (isset($_POST['update_profile'])) {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $result = mysqli_query($conn, "UPDATE user SET name='$name', email='$email' WHERE user_id='$user_id'");
 if ($result) {
     header("location: home.php?profile_updated=1");
     exit();
 } else {
     $error[] = 'Something went wrong';
 }
}
if (isset($error)) {
 foreach ($error as $err) {
     echo '<p class="errmsg">' . $err . '</p>';
 }
}
?>

<!DOCTYPE html>

<html> 
    <head> 
        <title>Edit Profile</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="style.css"> 
    </head> 
<body> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-sm-3"></div> 
                <div class="col-sm-6"> 
                <form method="post" action=""> 
                <div class="login_form"> 
                <div class="form-group">
                    <div class="row">
                        <div class="col-3">
                            <label>Name</label>
                        </div>
                        <div class="col">
                            <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-3">
                            <label>Email</label>
                        </div>
                        <div class="col">
                            <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success" name="update_profile">Save Profile</button>
                        </div>
                        <div class="col text-right">
                            <a href="logout.php" class="btn btn-danger">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-3"></div>
</div>
</div> 
</body> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script> 
</html>
</document_content>