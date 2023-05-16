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
   
<div class=LoginContainer>
<form action="login.php" method="post">
     	<h2>LOG IND</h2>

     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
<div class=LoginLabel>
     	<label>Brugernavn</label>
     	<input type="text" name="uname" placeholder="Brugernavn"><br>

     	<label>Kodeord</label>
     	<input type="password" name="password" placeholder="Kodeord"><br>
</div>

<div class=LoginButton>
     	<button type="submit">Log ind</button>
     </form>
</div>

</body>
</html>