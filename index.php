
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Admin Login</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Recipe Admin Login</h1>
        <div class="login-options">
            <button class="option-btn" onclick="showLoginForm('admin')">Admin Login</button>
            <button class="option-btn" onclick="showLoginForm('user')">User Login</button>
        </div>
        <div class="login-form" id="admin-form" style="display: none;">
            <h2>Admin Login</h2>
            <form method="POST" action="" >
                <div id="eerMsg"></div>
                <input type="email" placeholder="Email" name="admin_email" required>
                <input type="password" placeholder="Password" name="admin_psd" required>
                <button type="submit" name="admin_submit" id="admin_login">Login</button>
            </form>
        </div>
        <div class="login-form" id="user-form" style="display: none;">
            <h2>User Login</h2>
            <form method="POST" action="">
                <input type="email" placeholder="Email" name="user_email" required>
                <input type="password" placeholder="Password" name="user_passwrod" required>
                <button type="submit" name="user_submit" id="user_login">Login</button>
            </form>
        </div>
    </div>

    <script>
        function showLoginForm(type) {
            var adminForm = document.getElementById('admin-form');
            var userForm = document.getElementById('user-form');

            if (type === 'admin') {
                adminForm.style.display = 'block';
                userForm.style.display = 'none';
            } else {
                adminForm.style.display = 'none';
                userForm.style.display = 'block';
            }
        }

        function validation(){
            var adminEmail = document.getElementsByName('admin_email')[0].value;
            var adminPsd = document.getElementsByName('admin_psd')[0].value;
            var admin_login = document.getElementById('admin_login');


            admin_login.addEventListener('click', ()=>{
                if(adminEmail === '' || adminPsd === ''){
                    alert('Please fill all the fields');
                    }
            })


        }

        // const erms = eerMsg;
<?php if(isset($_SESSION['login_err'])){?>
    document.getElementById('eerMsg').style.textContent = "Invalid password";
<?php }?>
        // validation();
    </script>
</body>
</html>

<?php


if(isset($_POST['admin_submit']))
{
    include "connection.php";
    
    session_start();
    // $admin_email = $_POST['admin_email'];
    // $admin_psd = $_POST['admin_psd'];
    

    $sql = "SELECT * FROM admin WHERE admin_email = '$admin_email' AND admin_psd = '$admin_psd' "; 
// 
    // echo $sql;
    
    $result = mysqli_query($conn, $sql) or die("Something worng!" .  $conn->connect_error);

//    echo $result;




    if(mysqli_num_rows($result) > 0){
        $_SESSION['admin_email'] = $admin_email;
        $_SESSION['admin_id'] = $admin_id;
        header("Location: http://localhost/PROJECT/Admin/dashboard.php");
        } else {
            echo "Invalid Credentials";
            }
    
    
}





?>