<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontakt Os</title>
  <!-- linking script and stylesheet -->
  <script src="./scripts.js"></script>
  <link rel="stylesheet" href="./styles.css"></link>
</head>

<body>
  <?php include "./navbar.php"; ?>

  
  <div class="ContactUsFormContainer">
    <form class="ContactUsForm"  method="$_post">
      <div class="ContactUsFormRow">
        <label class="ContactUsFormLabel" for="email">Email:</label>
        <input class="ContactUsFormInput" type="text" id="CustomerEmail" name="Email" value="test@test.com" onfocus="clearPlaceholder(this)">
      </div>
      <div class="ContactUsFormRow">
        <label class="ContactUsFormLabel" for="phone">Telefon:</label>
        <input class="ContactUsFormInput" type="text" id="PhoneNumber" name="PhoneNumber" value="12345678" onfocus="clearPlaceholder(this)">
      </div>
      <div class="ContactUsFormRow">
        <label class="ContactUsFormLabel" for="Message">Besked:</label>
        <textarea class="ContactUsFormInput" id="ContactUsMessage" name="CustomerMessage" rows="15" cols="50" onfocus="clearPlaceholder(this)"> Din besked her</textarea>
      </div>

      <input id="ContactUsFormSubmit" type="submit" value="Submit">
    </form> 
  </div>



  <?php include "./footer.php"; ?>

</body>
</html>