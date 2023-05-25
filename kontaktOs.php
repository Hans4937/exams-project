<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontakt Os</title>
</head>
<body>
  <?php include "./navbar.php"; ?>

  <form class="ContactUsForm"  method="$_post">
    <label for="email">Email:</label><br>
    <input type="text" id="CustomerEmail" name="Email" value="test@test.com"><br>

    <label for="phone">Phone:</label><br>
    <input type="text" id="PhoneNumber" name="PhoneNumber" value="12345678"><br>

    <label for="Message">Besked:</label><br>
    <input type="text" id="Message" name="Message" value="Din besked her"><br>
    <input type="submit" value="Submit">
  </form> 




  <?php include "./footer.php"; ?>

</body>
</html>