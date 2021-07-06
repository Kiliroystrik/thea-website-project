<?php require 'template/header.php' ?>

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

<?php require 'template/footer.php' ?>



</body>

</html>