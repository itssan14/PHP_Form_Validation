<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login Form</title>

	<link rel="stylesheet" href="../assets/css/gen.css">
	<link rel="stylesheet" href="../assets/css/form-login.css">

</head>
<body>
    <?php include 'header.php';?>
    <div class="main-content">

        <!-- You only need this form and the form-login.css -->

        <form class="form-login" method="post" action="../modules/val.php">

            <div class="form-log-in-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Log in</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" required autofocus/>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="pwd" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit">Log in</button>
                    </div>

                </div>
                <a href="register.php" class="form-create-an-account">Create an account &rarr;</a>

            </div>
        </form>

    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
