<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Découverte de Lyon</title>

</head>

<body>

    <?php include("_mainNav.php"); ?>

    <script src="_mainNav.js"></script>
    <header>
        <h1>Bienvenue à Lyon</h1>
    </header>
    <div>
        <img src="Images/Capture d’écran 2022-09-28 à 15.30.19.png" alt="lyonMap" usemap='#carteLyon'>
        <map name='carteLyon'>
            <area class="lyon9" shape="poly" coords="742,104,465,361,425,471,444,741,224,667,184,308,345,273,642,68" href="lyon9.php" target="_blank" alt="lyonNeuf">
        </map>"
    </div>
    <main>
        <h2>Qui sommes-nous ?</h2>
        <p>Bla bla bla</p>
    </main>

    <?php include("_footer.php"); ?>

</body>

</html>