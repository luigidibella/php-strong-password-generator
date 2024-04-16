<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
  <title>PHP Strong Password Generator</title>
</head>
<body>
  <div class="container text-center text-white py-5 bg-primary">
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>

    <div class="alert alert-primary" role="alert">
      <?php
      require_once 'functions.php';

      if (isset($_GET['lunghezza'])) {
          $lunghezza = intval($_GET['lunghezza']);
          if ($lunghezza > 0) {
              $passwordGenerata = generaPasswordCasuale($lunghezza);
              echo "<h2>Password Generata:</h2>";
              echo "<p>$passwordGenerata</p>";
          } else {
              echo "<p style='color: red;'>Nessun parametro valido inserito.</p>";
          }
      }

      ?>
    </div>


    <form action="index.php" method="get">
        <label for="lunghezza">Lunghezza della Password:</label>
        <input type="number" id="lunghezza" name="lunghezza" min="1" required>
        <button type="submit">Genera Password</button>
    </form>

  </div>
  
</body>
</html>