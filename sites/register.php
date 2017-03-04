<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registration Form</title>

	<link rel="stylesheet" href="../assets/css/gen.css">
	<link rel="stylesheet" href="../assets/css/form-register.css">

</head>
<body>
    <?php include 'header.php';
    ?>
    <div class="main-content">

        <form class="form-register" method="post" action="../modules/entry.php" autocomplete="on">
            <div class="form-register-with-email">
                <div class="form-white-background">
                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="name" placeholder="Eg : John" required autofocus>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" placeholder="example@example.com"required >
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Number</span>
                            <input type="text" name="number" pattern="[7-9]{1}[0-9]{9}" placeholder="Eg : 987654321" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit">Register</button>
                    </div>

                </div>

                <a href="login.php" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>
            </div>
        </form>

    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
