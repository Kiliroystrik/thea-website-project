<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Ocha Nihon</title>
</head>

<body>

    <header>
        <!-- LOGGING -->
        <div>
            <a href="#"><i class="fas fa-leaf"></i></a>
            <a href="#"><i class="fas fa-door-open"></i></a>
            <a href="#"><i class="fas fa-shopping-basket"></i></a>
        </div>


        <div>
            <a href="index.php">
                <p>茶</p>
                <p>Tout le thé du japon</p>
            </a>
        </div>

        <nav>
            <ul>
                <li><a href="view/tea.php">Thés</a></li>
                <li><a href="#">Accessoires</a></li>
                <li><a href="#">Cérémonie</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <!-- SLIDER -->
            <p class="greeting">いらっしゃいませ !</p>
            <h1>Bienvenue sur nihon no hon, votre site de vente de thé préféré !</h1>
            <section>
                <h2>La selection du moment</h2>
                <div>
                    <?php require_once 'controller/controller.php' ?>
                </div>

            </section>



        </div>


    </main>

    <footer>


    </footer>


</body>

</html>