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

    <header>
        <h1>Bienvenue à Lyon</h1>
    </header>
        <div class="map-container">
            <canvas></canvas>
            <img class="image" src='Images/map_globale_lyon.png' alt='lyonMap' usemap='#map'>
           <map name='map'>          
            <area shape="poly" coords="711,35,687,92,662,55,612,84,570,86,582,122,539,121,495,221,423,268,415,307,361,269,303,276,310,301,263,309,242,288,173,330,189,357,253,355,256,431,279,483,290,510,240,583,204,649,202,670,333,685,447,759,435,671,480,673,502,646,531,663,534,633,471,593,424,498,479,357,630,211,719,171,755,109,724,96" href='lyon9.php' target="_blank" alt="lyonNeuf">
            <area shape="poly" coords="674,418,578,384,571,357,556,350,562,334,526,303,455,419,428,486,444,541,473,575,571,544,708,522,743,543,773,463,753,452,719,406" href="croixRousse.php" target="_blank" alt="Croix Rousse">    
            <area shape="poly" coords="461,752,439,723,431,673,456,663,467,677,484,676,490,649,532,660,533,633,602,622,634,645,644,685,631,736,595,788,581,834,550,869" href="vieuxLyon.php"  target="_blank" alt="Vieux Lyon">
            <area shape="poly" coords="662,906,701,832,736,738,881,860,928,963,925,994,908,1018,794,967" href="guillotiere.php" target="_blank" alt="Guillotiere">
        </map>
        </div>
    <main>
        <h2>Qui sommes-nous ?</h2>
        <p>Bla bla bla</p>
    </main>

    <?php include("_footer.php"); ?>
    <script src="imagehighlighter.js"></script>
<script src="index.js"></script>
</body>

</html>