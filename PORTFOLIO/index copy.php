<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="portfolio" content="mon projets">

    <title>Mon Portfolio</title>

    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

    <header>

        <h1>Mon Portfolio</h1>

        <nav>
            <a href="#accueil">Accueil</a>
            <a href="#projets">Projets</a>
            <a href="#contact">Contact</a>
            <a href="#apropos">À propos</a>
        </nav>

    </header>

    <main>

        <section id="accueil" class="accueil">

            <div class="accueil-texte">

                <h2>hello</h2>

                <h3>i'm Douae</h3>

                <p>
                    Bienvenue sur mon portfolio.
                    Découvrez mes projets et n'hésitez pas
                    à me contacter.
                </p>

                <a href="#projets" class="bouton">
                    Voir mes projets →
                </a>
            </div>
            <div class="accueil-image">
                <img src="images/cat.jpg" >
            </div>

        </section>

        <section id="projets" class="section-projets">

            <h2>Mes projets</h2>

            <div class="grille-projets">
                <?php foreach = ($projets s $projet) : ?>

                <article class="carte">

                    <img src="<?= $projet['image']?>" alt= "<?=$projet['titre']?>">

                    <div class="contenu">
                        <h3><?= $projet['titre']?></h3>
                        <p><?= $projet['description']?></p>
                        
                    </div>

                </article>

            </div>

        </section>

        <section id="apropos" class="apropos">

            <h2>À propos de moi</h2>

            <p>
                Je suis apprenante en développement web
                à Solicode. J'apprends HTML, CSS et JavaScript.
            </p>

        </section>

        <section id="contact" class="contact">

            <h2>Contact</h2>

            <p>Merci de visiter mon portfolio !</p>

        </section>

    </main>

    <footer>

        <p>2026 Mon Portfolio.</p>

    </footer>

</body>
</html>