
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
<header>
    <a href="index.php"><img src="../img/logo-white.png" style="width:5em ;"></a>
    <nav>
        <div class="wrapper">
          
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="login.php">SIGNUP/LOGIN</a></li>
                <li><a href="discover.php">ABOUT US</a></li>
            </ul>
        </div>
    </nav>
    </header>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
            <form method="post" action="../includes/signup.inc.php">
                <label for="chk" aria-hidden="true"><span>Sign up</span> </label>
                <input type="text" name="uid" placeholder="User name" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pwd" placeholder="Password" required="">
                <div class="lol"></div>
                <p>who will be using this account</p>
                <label for="radio"></label>
                <input type="radio" id="radio" name="radio" value="Student"
                    style="height: 20px; width:20px; vertical-align: left;" checked>
                STUDENT </label>
                <label for="radio1">
                    <input type="radio" id="radio1" name="radio" value="Teacher"
                        style="height: 20px; width:20px; vertical-align: left;" />
                    TEACHER</label>
                <label>
                    <button type="submit" name="submit">Sign up</button>

            </form>
        </div>

        <div class="login" method="post" action="includes/login.inc.php">
            <form>
                <label for="chk" aria-hidden="true"><span>Login</span></label>
                <input type="uid" name="name" placeholder="username/Email" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pswd" placeholder="Password" required="">
                <label for="one">

                    <button>Login</button>
</body>

</html>