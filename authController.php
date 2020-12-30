<?php
session_start();
$U_id = "";
$email = "";
$errors = [];

$conn = new mysqli('localhost', 'root', '', 'fyp');

// SIGN UP USER
if (isset($_POST['signup-btn'])) {
    if (empty($_POST['U_id'])) {
        $errors['U_id'] = 'U_id required';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    if (empty($_POST['U_password'])) {
        $errors['U_password'] = 'Password required';
    }
    if (isset($_POST['U_password']) && $_POST['U_password'] !== $_POST['passwordConf']) {
        $errors['passwordConf'] = 'The two passwords do not match';
    }

    $U_id = $_POST['U_id'];
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(50)); // generate unique token
    $U_password = password_hash($_POST['U_password'], PASSWORD_DEFAULT); //encrypt password

    // Check if email already exists
    $sql = "SELECT * FROM user WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
    }

    if (count($errors) === 0) {
        $query = "INSERT INTO user SET U_id=?, email=?, token=?, U_password=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssss', $username, $email, $token, $U_password);
        $result = $stmt->execute();

        if ($result) {
            $U_count = $stmt->insert_id;
            $stmt->close();

            // TO DO: send verification email to user
            // sendVerificationEmail($email, $token);

            $_SESSION['U_count'] = $U_count;
            $_SESSION['U_id'] = $U_id;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = false;
            $_SESSION['message'] = 'You are logged in!';
            $_SESSION['type'] = 'alert-success';
            header('location: indexs.php');
        } else {
            $_SESSION['error_msg'] = "Database error: Could not register user";
        }
    }
}

// LOGIN
if (isset($_POST['login-btn'])) {
    if (empty($_POST['U_id'])) {
        $errors['U_id'] = 'Username or email required';
    }
    if (empty($_POST['U_password'])) {
        $errors['U_password'] = 'Password required';
    }
    $U_id = $_POST['U_id'];
    $U_password = $_POST['U_password'];

    if (count($errors) === 0) {
        $query = "SELECT * FROM user WHERE U_id=? OR email=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $U_id, $password);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if (password_verify($U_password, $user['U_password'])) { // if password matches
                $stmt->close();

                $_SESSION['U_count'] = $user['U_count'];
                $_SESSION['U_id'] = $user['U_id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['verified'] = $user['verified'];
                $_SESSION['message'] = 'You are logged in!';
                $_SESSION['type'] = 'alert-success';
                header('location: indexs.php');
                exit(0);
            } else { // if password does not match
                $errors['login_fail'] = "Wrong username / password";
            }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }


// TO DO: send verification email to user
sendVerificationEmail($email, $token);

}