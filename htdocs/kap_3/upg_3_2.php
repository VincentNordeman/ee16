<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 

if (isset($_GET["fel"])) {
    $fel = $_GET["fel"];
    if ($fel == 1) {
        echo "<p>FEL, testa igen.</p>";
    }
}
?>
    <p>Logga in</p>
    <form action="#" method="post">
        <label for="">Användarnamn</label>
        <input type="text" name="anvandarnamn"><br>
        <label for="">Lösenord</label>
        <input type="password" name="losenord"><br>
        <button>Logga in</button></form>
</body>

</html>