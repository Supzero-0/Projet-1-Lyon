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
        <div class="petitLion">
            <img src="Images/petitLion.png" alt="petit lion" id="petitLion">
        </div>
        </header>
    <main>

        <h2>Qui sommes-nous ?</h2>
        <p>Nous sommes Mathieu, Lila, Hugo et... Mathieu ! 4 étudiants à la Wild Code School de Lyon, spécialisés en cursus PHP. Ce site est notre premier projet ! Nous l'avons réalisé en équipe et en 2 petites semaines afin de mettre en valeur notre ville et des quartiers que nous affectionnons particulièrement. Il nous a permis de mettre en application les premières notions que nous avons appris lors de notre quinzaine d'arrivée ! Vous y trouverez des informations essentielles pour les découvrir, de leur histoire aux lieux incontournables !</p>
        <div class=map><iframe width="390vw" height="350vh" frameborder="0" allowfullscreen src="https://framacarte.org/fr/map/quartier-lyon_134361?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
        </div>
        <div class=us>
            <h2>Qui sommes-nous ?</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum magnam ad nihil laborum voluptatum placeat similique quas, error aliquid quaerat est quod a ducimus voluptatibus. Sint in doloremque numquam consequatur.
                Tempore aut ipsum voluptates voluptatem cumque placeat sapiente optio eum sed alias voluptatibus, dignissimos iusto eos, illo ipsam perferendis quae quis, consectetur itaque maiores aspernatur. Id cupiditate accusamus numquam sint.</p>
        </div>
    </main>

    <?php include("_footer.php"); ?>
    <script>
        document.getElementById("petitLion").onclick = function() {
        let destination = prompt("Où veux-tu aller ? \n\nà Croix-Rousse, \nà Guillotière, \nà Vieux Lyon, \nà Lyon 9 ?");
        if (destination === 'Croix-Rousse') {
            window.location.href = "croixRousse.php";
        }
        else if (destination === 'Guillotière') {
            window.location.href = "guillotiere.php";
        }
        else if (destination === 'Vieux Lyon') {
            window.location.href = "vieuxLyon.php";
        }
        else if (destination === 'Lyon 9') {
            window.location.href = "lyon9.php";
        }
        else {
            alert("Je ne veux pas aller là-bas...");
        }
    }
    </script>
</body>

</html>