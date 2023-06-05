<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log ind</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>

<!-- Login form -->
<div class=LoginContainer>
    <form class=LoginForm action="loginErrormessage.php" method="post">
            <h2 class=LoginHeader>Log ind</h2>

            <?php if (isset($_GET['error'])) { ?>
                <p class="LoginError">
                    <?php echo $_GET['error'];?>
                </p>
            <?php } ?>

    <div class=LoginLabel>
            <label>Email</label>
            <input class=LoginInput type="text" name="CustomerEmail" placeholder="eksempel@mail.com"><br>

            <label>Kodeord</label>
            <input class=LoginInput type="password" name="CusPassword" placeholder="Kodeord"><br>
    </div>

            <button class=LoginButton type="submit">Log ind</button>
        </form>
</div>


</body>
</html>