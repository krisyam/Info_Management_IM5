<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="src/css/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script></script>
    <!-- <?php include ("header.php"); ?> -->

    <main class="grid">
        <div class="midbox">
            <div class="half_h">
                <div class="loginbox half_v">
                    <div>
                        <button></button>
                        <button></button>
                        <!-- Login from google or facebook -->
                    </div>
                    
                    <form action="src/php/actions/signin_action.php" method="post" class="loginContainer">
                        <div class="login ">
                            <h2>Login</h2>

                            <div class="errormsg">
                                <!-- 
                                <?php if (isset($_GET['error'])) { ?>
                                    <p class="error"><?php echo $_GET['error']; ?></p>
                                <?php } ?> 
                                -->
                                <!-- This will check if the user has successfully logged in or show the error-->
                            </div>
                            

                            <label>Email: </label>
                            <div class="loginInput">

                                <input type="text" name="username" placeholder="Username" autocomplete="on" autocapitalize="off" autofocus required maxlength="10">
                            </div>
                            <label>Password: </label>
                            <div class="loginInput">

                                <input type="password" name="password" placeholder="Password" autocomplete="on" autocapitalize="off" required maxlength="20">
                            </div>
                            <button type="submit">Login</button>
                            <div>
                                <p>No Account? <a href="index.php?signup">Sign Up here</a></p>
                            </div>
                        </div>
                    </form>

                    <form action="src/php/actions/signup_action.php" method="post" class="loginContainer">
                        <div class="login">
                            <h2>Login</h2>

                            <div class="errormsg">
                                <!-- 
                                <?php if (isset($_GET['error'])) { ?>
                                    <p class="error"><?php echo $_GET['error']; ?></p>
                                <?php } ?>
                                <?php if (isset($_GET['created'])) { ?>
                                    <p class="successText"><?php echo $_GET['created']; ?></p>
                                <?php } ?>
                                -->
                                <!-- This will check if the user have successfully created an account or show the error -->
                            </div>
                            

                            <label>Email: </label>
                            <div class="loginInput">

                                <input class="loginInput" type="text" name="email" placeholder="Email" autocomplete="off" autocapitalize="on" autofocus required maxlength="30">
                            </div>
                            <label>Username: </label>
                            <div class="loginInput">

                                <input type="text" name="username" placeholder="Username" autocomplete="on" autocapitalize="off" required maxlength="10">
                            </div>
                            <label>Password: </label>
                            <div class="loginInput">

                                <input type="password" name="password" placeholder="Password" autocomplete="on" autocapitalize="off" required maxlength="20">
                            </div>
                            <label>Confirm Password: </label>
                            <div class="loginInput">

                                <input class="loginInputs" type="password" name="cPassword" placeholder="Password" autocomplete="on" autocapitalize="off" required maxlength="20">
                            </div>
                            <button type="submit">Sign Up</button>
                            <div>
                                <p>Already have an Account?<a href="index.php"> Sign in here</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


    
</body>
</html>