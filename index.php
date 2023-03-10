<html>
<head>
    <html lang="pl">
    <meta charset="UTF-8">
    <title>Formularz</title>
      <link href="https://fonts.google.com/specimen/Tilt+Neon" rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet"/>
      <link rel="shortcut icon" href="eyes.ico" />
      <link rel="stylesheet" href="fonts.css/font.css">
</head>
<body>
<div class="form-container">
  <h1 class="form-title">Rejestracja</h1>
  <form action="walidacja.php" method="post">
      <label for="username">Nazwa użytkownika:</label>
      <input type="text" name="username" id="username"/>

      <label for="email">Adres e-mail:</label>
      <input type="email" name="email" id="email"/>

      <label for="password">Hasło:</label>
      <input type="password" name="password" id="password"/>
      

      <label for="password2">Powtórz hasło:</label>
      <input type="password" name="password2" id="password2"/>

      <label for="gender">Płeć: </label>
      Kobieta<input type="radio" name="gender" value="female">
      Mężczyzna<input type="radio" name="gender" value="male">
      Inna<input type="radio" name="gender" value="other">
      <?php 
      echo "chad";
      ?>

      <input type="submit" value="Zarejestruj się!">     
  </form>
</div>
</body>
</html>
