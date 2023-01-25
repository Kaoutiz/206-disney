<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <!-- BEGIN: Styles -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- BEGIN: Library -->
    <link rel="stylesheet" href="assets/css/boxicons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- END: Library -->

    <!-- END: Styles -->
</head>

<body>
    <!-- BEGIN: Header -->
    <?php include("templates/header.php"); ?>
    <!-- END: Header -->

    <!-- BEGIN: Banner  -->
    <section id="banner" class="w-100 p-3">
        <h1>Venez découvrir la nouvelle attraction Spider-man !</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <i class='bx bx-news' ></i>
                    <p>Suivez nos dernières nouveautés</p>
                </div>
                <div class="col">
                    <i class='bx bx-book-open' ></i>
                    <p>Réservez votre séjour</p>
                </div>
                <div class="col">
                    <i class='bx bxs-building-house' ></i>
                    <p>Visualisez les hébergements</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Banner -->

    <!-- BEGIN: Content -->

    <!-- BEGIN: Acualités -->
    <section id="actualites">
        <h2>Nos actualités</h2>
        <div id="container">
            <div class="card">
                <img class="card-img-top" src="assets/marvel-studio.jpg" alt="Affiche pour les nouvelles attractions Marvel">
                <div class="card-body">
                    <h5 class="card-title">Rejoignez l'Univers MARVEL</h5>
                    <p class="card-text">Nouvelle recrue, venez découvrir le nouveau land Marvel Avengers Campus au Parc Walt Disney Studios ! Passez à l’action dans nos 2 nouvelles attractions, et bien plus…</p>
                    <a href="#" class="btn  ">En savoir plus</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/30ans.jpg" alt="Chateau Disneyland Paris pour ses 30ans">
                <div class="card-body">
                    <h5 class="card-title">Le 30e Anniversaire de Disneyland Paris</h5>
                    <p class="card-text">Êtes-vous prêts à prendre part à une incroyable célébration ? Après 30 années de rêve, la magie ne fait que commencer.</p>
                    <a href="#" class="btn">En savoir plus</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/attraction-iconique.jpg" alt="Attraction train de la mine Disneyland Paris">
                <div class="card-body">
                    <h5 class="card-title">Embarquez dans des attractions iconiques</h5>
                    <p class="card-text">Avec 50 attractions, que vous soyez en quête d’adrénaline ou d’immersion dans nos univers Disney, Pixar, MARVEL et Star Wars… il y en a pour tous les goûts !</p>
                    <a href="#" class="btn">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Acualités -->

    <!-- BEGIN: Herbergements -->
    <section id="herbergements">
        <div id="container">
            <!-- Content here -->
        </div>
    </section>
    <!-- END: Herbergements -->

    <!-- BEGIN: Offres -->
    <section id="offres">
        <div id="container">
            <!-- Content here -->
        </div>
    </section>
    <!-- END: Offres -->

    <!-- BEGIN: Réservations -->
    <section id="reservations">
        <div id="container">
            <!-- Content here -->
        </div>
    </section>
    <!-- END: Réservations -->

    <!-- BEGIN: Accès -->
    <section id="acces">
        <div id="container">
            <!-- Content here -->
        </div>
    </section>
    <!-- END: Accès -->

    <!-- END: Content -->

    <!-- BEGIN: Footer -->
    <?php include("templates/footer.php"); ?>
    <!-- END: Footer -->

    <!-- BEGIN: Scripts -->
    <script src="assets/js/scripts.js"></script>

    <!-- BEGIN: Library -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- END: Library -->

    <!-- END: Scripts -->
</body>

</html>