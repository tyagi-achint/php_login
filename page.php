
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
    if($registered ){
        echo" <h2>User Registration Form</h2>
        <div class='container'>
        <form action='register.php' method='post'>
            <input type='text' name='name' placeholder='Name' required>
            <input type='text' name='username' placeholder='Username' required>
            <input type='email' name='email' placeholder='Email' required>
            <input type='password' name='password' placeholder='Password' required>
            <input type='password' name='confirmPassword'  placeholder='Confirm Password' required>

            <input type='text' name='dob' pattern='\d{4}-\d{2}-\d{2}' placeholder='Date of Birth (yyyy-mm-dd)' required>
            <div style='text-align: center;'>
                <button type='submit'>Submit</button>
                <button type='reset'>Reset</button>
            </div>
        </form>
    </div>
    <div class='bottomContainer'>
        <p>old user? <a href='?action=oldUser'>login.</a></p>

    </div>";
    }
    else if($login ){
echo "<h2>User Login Form</h2>
<div class='container'>
    <form  action='login.php' method='post'>
        <input type='text' name='username' placeholder='Username' required>
        <input type='password' name='password' placeholder='Password' required>
        <div style='text-align: center;'>
            <button type='submit'>Login</button>
            <button type='reset'>Reset</button>
        </div>
    </form>
</div>
<div class='bottomContainer'>
        <p>forgot password? <a href='?action=forgotPass'>reset it.</a> </p>
        <p>New user? <a href='?action=newUser'>signup.</a></p>
    </div>";
    }

    else if ($changePass){
        echo"<h2>Change Password Form</h2>
        <div class='container'>
            <form  action='changePass.php' method='post'>
                <input type='text' name='username' placeholder='Username' required>
                <input type='email' name='email' placeholder='Email' required>
                <input type='password' name='password' placeholder='Password' required>
                <input type='password' name='confirmPassword'  placeholder='Confirm Password' required>
                <input type='text' name='dob' pattern='\d{4}-\d{2}-\d{2}' placeholder='Date of Birth (yyyy-mm-dd)' required>
                <div style='text-align: center;'>
                    <button type='submit'>Change</button>
                    <button type='reset'>Reset</button>
                </div>
            </form>
        </div>
        
        <div class='bottomContainer'>
        <p>New user? <a href='?action=newUser'>signup.</a></p>
        <p>old user? <a href='?action=oldUser'>login.</a></p>
    </div>";
    }
    else if ($messageSuccess){


        echo"<div class='container'>
        <div class='messagecontainer'>
            <h1>Success! </h1>
            <h4>return to login or signup page.</h4>
        </div>
    </div>
    <div class='bottomContainer'>
        <p>New user? <a href='?action=newUser'>signup.</a></p>
        <p>old user? <a href='?action=oldUser'>login.</a></p>
    </div>";
    }
    else if ($messageError ){


        echo"<div class='container'>
        <div class='messagecontainer'>
            <h1>Error! </h1>
            <h3>either Information is Dupplicate or Wrong, please check it again</h3>
            <h4>return to login or signup page.</h4>
        </div>
    </div>
    <div class='bottomContainer'>
        <p>New user? <a href='?action=newUser'>signup.</a></p>
        <p>old user? <a href='?action=oldUser'>login.</a></p>
    </div>";

    }
    

    ?>
    <script>
        function confirmPassword() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            console.log(password, confirmPassword);
            if (password !== confirmPassword) {
                alert("Passwords do not match. Please try again.");
                return false;
            }

            return true;
        }
    </script>

</body>

</html>
