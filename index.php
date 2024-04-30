<?php
    // Models
    require'models/database.php';
    require'models/user.php';


    // Params
    if (isset($_POST['action'])) {
        $action = htmlentities($_POST['action']);
    }elseif (isset($_GET['action'])){
        $action = htmlentities($_GET['action']);
    }else{
        $action = 'login'; 
    }


    // Interaction
   switch ($action) {
    case 'register':
        require'views/auth/register.php';
        break;
    case 'signup':
        $data = [
            'firstname' => htmlentities($_POST['first-name']),
            'lastname' => htmlentities($_POST['last-name']),
            'username' => htmlentities($_POST['username']),
            'email' => htmlentities($_POST['email']),
            'password' => htmlentities($_POST['password']),
            'comfirm_password' => htmlentities($_POST['confirm-password']),
        ];

        if (empty($data['firstname']) || empty($data['lastname']) || empty($data['username']) || empty($data['email']) || empty($data['password']) || empty($data['comfirm_password'])) 
        {
           echo"<script>alert('All fields are required!')</script>";
        }else{
            register([
                'name' => $data['firstname']." ". $data['lastname'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => password_hash($data['email'], PASSWORD_BCRYPT),
            ]);
            echo"<script>alert('User registered successful')</script>";
        }
        break;
    case 'login':
        require'views/auth/login.php';
        break;
    case 'signin':
        $data = [
            'username' => htmlentities($_POST['email']),
            'password' => htmlentities($_POST['password']),
        ];

        if (empty($data['username']) || empty($data['password'])) 
        {
           echo"<script>alert('All fields are required!')</script>";

        }else{
            if (login($data)) {
                echo"<script>alert('User login successful')</script>";
                echo"<script>window.location='.?action=home'</script>";
                // header("Location: .?action=home");
            }else{
                echo"<script>alert('An error occured')</script>";
            }
        }
        break;
    case 'home':
        require'views/home.php';
        break;
    default:
        require'views/auth/login.php';
        break;
   }