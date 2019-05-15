<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "cuddly-palm-tree");

// Check connection
if ($conn->connect_error) { die("
<pre>Connection failed: " . $conn->connect_error . "</pre>
"); } ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>

  <body>
    <div class="form-style-2">
      <div class="form-style-2-heading">Register</div>
      <form action="reg.php" method="post">
        <label for="field1"
          ><span>username <span class="required">*</span></span
          ><input
            type="text"
            class="input-field"
            name="username"
            value=""
            maxlength="25"
            required
        /></label>
        <label for="field2"
          ><span>password <span class="required">*</span></span
          ><input
            type="password"
            class="input-field"
            name="password"
            value=""
            maxlength="50"
            required
        /></label>
        <label for="field3"
          ><span>e-mail <span class="required">*</span></span
          ><input
            type="email"
            class="input-field"
            name="email"
            value=""
            required
        /></label>
        <label for="field4"
          ><span>name <span class="required">*</span></span
          ><input type="text" class="input-field" name="naam" value="" required
        /></label>
        <label for="field5"
          ><span>adres <span class="required">*</span></span
          ><input type="text" class="input-field" name="adres" value="" required
        /></label>
        <label for="field6"
          ><span>woonplaats <span class="required">*</span></span
          ><input
            type="text"
            class="input-field"
            name="woonplaats"
            value=""
            required
        /></label>
        <label for="field7"
          ><span>geboortedatum <span class="required">*</span></span
          ><input
            type="date"
            class="input-field"
            name="geboortedatum"
            value=""
            required
        /></label>
        <label for="field8"
          ><span>telefoon <span class="required">*</span></span
          ><input
            type="tel"
            class="input-field"
            name="telefoon"
            value=""
            required
        /></label>
        <label><span> </span><input type="submit" value="Submit"/></label>
      </form>
    </div>
  </body>
</html>
