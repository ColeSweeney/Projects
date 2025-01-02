<?php
require 'config.php';
if (isset($_SESSION['login_id'])) {
    header('Location: home.php');
    exit();
}

require 'google-api-php-client-2.4.0/vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('74128710475-pgm6ebvkk022kbuc6b3u2qflf4o1ik90.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('https://cgi.luddy.indiana.edu/~team21/login.php');
$client->addScope("email");
$client->addScope("profile");

if (isset($_GET['code'])):
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    if (!isset($token["error"])) {
        $client->setAccessToken($token['access_token']);
        // getting profile information
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
    
        // Storing data into database
        $id = mysqli_real_escape_string($conn, $google_account_info->id);
        $full_name = mysqli_real_escape_string($conn, trim($google_account_info->name));
        $email = mysqli_real_escape_string($conn, $google_account_info->email);

        // checking user already exists or not
        $stmt = mysqli_prepare($conn, "SELECT user_id FROM user WHERE user_id = ?");
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            session_regenerate_id(true);
            $_SESSION['login_id'] = $id;
            $_SESSION['login_sess'] = true;

            header('Location: home.php');
            exit();
        } else {
            // if user not exists we will insert the user
            $stmt = mysqli_prepare($conn, "INSERT INTO user (user_id, name, email) VALUES (?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "sss", $id, $full_name, $email);
            
            if (mysqli_stmt_execute($stmt)) {
                session_regenerate_id(true);
                $_SESSION['login_id'] = $id;
                $_SESSION['login_sess'] = true;
                
                header('Location: home.php');
                exit();
            } else {
                echo "Sign up failed! " . mysqli_stmt_error($stmt);
            }
        }
    } else {
        header('Location: login.php');
        exit();
    }
else:
    // Google Login Url = $client->createAuthUrl(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capstone I494/I495 Food Waste Project Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel = "stylesheet" href = "css/styles.css">
</head>
<body>
    <div class="container mt-2 mb-2">

        <header class="d-flex flex-wrap align-items-center justify-content-center border-bottom">
        <a href="index.php" class="d-flex align-items-center me-3">
            <img src="img/newlogo.jpg" alt="project_logo" width="90" height="90">
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item ms-3"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="inventory.php" class="nav-link">Inventory</a></li>
            <li class="nav-item"><a href="submission.php" class="nav-link">Submission Form</a></li>
            <li class="nav-item"><a href="home.php" class="nav-link">Profile</a></li>
            <?php if (isset($_SESSION['login_id'])) : ?>
            <a href="logout.php" class="btn btn-outline-primary me-2">Logout</a>
            <?php else : ?>
            <a href="login.php" class="btn btn-outline-primary me-2" style="color: black; border-color: #6c8e68;">Login</a>
            <?php endif; ?>
        </ul>
        </header>

    </div>

    <h2 class="loginheading">Login</h2>

    <div class="container text-center">
        <a type="button" class="btn btn-info" href="<?php echo $client->createAuthUrl(); ?>">
            Sign in with Google
        </a>
    </div>
</body>
</html>
<?php endif; ?>