<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <!-- BEGIN: Styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/range.css">

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
    <section id="banner" class="w-100">
    <h1>Venez découvrir la nouvelle attraction Spider-man !</h1>
            <div id="nav-banner">
                <div class="row d-flex justify-content-center align-items-center">
                    <a href="#actualites" class="items col-4 d-flex flex-column justify-content-center">
                        <i class='bx bx-news'></i>
                        <p>Nos nouveautés</p>
                    </a>
                    <a href="#reservations" class="items col-4 d-flex flex-column justify-content-center">
                        <i class='bx bx-book-open'></i>
                        <p>Réservez votre séjour</p>
                    </a>
                    <a href="#herbergements" class="items col-4 d-flex flex-column justify-content-center">
                        <i class='bx bxs-building-house'></i>
                        <p>Visualisez les hébergements</p>
                    </a>
                </div>
            </div>
    </section>
    <!-- END: Banner -->

    <!-- BEGIN: Content -->

    <!-- BEGIN: Acualités -->
    <section id="actualites">
        <h2>Nos actualités</h2>
        <div class="container d-flex justify-content-between">
            <div class="card">
                <img class="card-img-top" src="assets/images/marvel-studio.jpg" alt="Affiche pour les nouvelles attractions Marvel">
                <div class="card-body">
                    <h5 class="card-title">Rejoignez l'Univers MARVEL</h5>
                    <p class="card-text">Nouvelle recrue, venez découvrir le nouveau land Marvel Avengers Campus au Parc Walt Disney Studios ! Passez à l’action dans nos 2 nouvelles attractions, et bien plus…</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn">En savoir plus</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/images/30ans.jpg" alt="Chateau Disneyland Paris pour ses 30ans">
                <div class="card-body">
                    <h5 class="card-title">Le 30e Anniversaire de Disneyland Paris</h5>
                    <p class="card-text">Êtes-vous prêts à prendre part à une incroyable célébration ? Après 30 années de rêve, la magie ne fait que commencer.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn">En savoir plus</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/images/attraction-iconique.jpg" alt="Attraction train de la mine Disneyland Paris">
                <div class="card-body">
                    <h5 class="card-title">Embarquez dans des attractions iconiques</h5>
                    <p class="card-text">Avec 50 attractions, que vous soyez en quête d’adrénaline ou d’immersion dans nos univers Disney, Pixar, MARVEL et Star Wars… il y en a pour tous les goûts !</p>
                </div>
                <div class="card-footer">
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
        <div class="container d-flex justify-content-around">
            <div id="filter" class="col-12 col-sm-12 col-md-3 col-xl-3">
                <div id="sejour" class="d-flex flex-column">
                    <label for="duree">Durée du séjour</label>
                    <select name="duree" id="duree" class="form-select">
                        <option value="2">2 jours / 1 nuit</option>
                        <option value="3">3 jours / 2 nuits</option>
                        <option value="4">4 jours / 3 nuits</option>
                        <option value="5">5 jours / 4 nuits</option>
                    </select>
                    <label for="hotel">Hôtels</label>
                    <select name="hotel" id="hotel" class="form-select">
                        <option value="cheyenne" select>Disney Hotel Cheyenne ★★★</option>
                        <option value="santa-fe">Disney Hotel Santa Fe ★★</option>
                        <option value="newport-bay-club">Disney Hotel Newport Bay Club ★★★★</option>
                    </select>
                </div>
                <div id="budget">
                <div class="range">
                    <div class="range-label mb-3 d-flex justify-content-between">
                        <label>0€</label>
                        <label>+1000 €</label>
                    </div>
                    <div class="range-slider">
                        <span class="range-selected"></span>
                    </div>
                    <div class="range-input">
                        <input type="range" class="min" min="0" max="1000" value="0" step="200">
                        <input type="range" class="max" min="0" max="1000" value="1000" step="200" >
                    </div>
                    <div class="range-price d-none">      
                        <label for="min">Min</label>
                        <input type="number" name="min" value="0" hidden>      
                        <label for="max">Max</label>
                        <input type="number" name="max" value="1000" hidden>      
                    </div>
                    </div> 
                </div>
            </div>
            <div id="calendar" class="col-12 col-sm-12 col-md-9 col-xl-9">
                <div id="calendar-header">
                    <div class="d-flex align-items-start">
                        <img alt="ticket" src="assets/images/ticket_icon.svg">
                        <p>Le prix comprend <span id="duration_value">2</span> jours d’accès aux 2 Parcs pour tous les participants</p> 
                    </div>
                    <div id="mounth-title" class="d-flex justify-content-between align-items-center mt-2">
                        <div class="border border-dark rounded-circle align-items-center">
                            <i class='bx bx-chevron-left'></i>
                        </div>
                        <h4>Février 2023</h4>
                        <h4>Mars 2023</h4>
                        <div class="border border-dark rounded-circle align-items-center">
                            <i class='bx bx-chevron-right'></i>
                        </div>
                    </div>  
                </div>
                <div id="calendar-body" class="d-flex justify-content-between">
                    <div id="mounth-left">
                        <div class="d-flex justify-content-start align-items-center flex-wrap">
                            <div class="days">
                                
                            </div>   
                            <div class="days">
                                
                            </div> 
                            <div class="days">
                                <p>1</p>
                                <p class="price"><span class="price_value">160</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>2</p>
                                <p class="price"><span class="price_value">652</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>3</p>
                                <p class="price"><span class="price_value">1107</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>4</p>
                                <p class="price"><span class="price_value">179</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>5</p>
                                <p class="price"><span class="price_value">239</span>€</p> 
                            </div> 
                        </div>
                        <div class="d-flex justify-content-start align-items-center flex-wrap">
                            <div class="days">
                                <p>6</p>
                                <p class="price"><span class="price_value">891</span>€</p> 
                            </div>   
                            <div class="days">
                                <p>7</p>
                                <p class="price"><span class="price_value">959</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>8</p>
                                <p class="price"><span class="price_value">613</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>9</p>
                                <p class="price"><span class="price_value">265</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>10</p>
                                <p class="price"><span class="price_value">541</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>11</p>
                                <p class="price"><span class="price_value">984</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>12</p>
                                <p class="price"><span class="price_value">165</span>€</p> 
                            </div> 
                        </div>
                        <div class="d-flex justify-content-start align-items-center flex-wrap">
                            <div class="days">
                                <p>13</p>
                                <p class="price"><span class="price_value">980</span>€</p> 
                            </div>   
                            <div class="days">
                                <p>14</p>
                                <p class="price"><span class="price_value">426</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>15</p>
                                <p class="price"><span class="price_value">1085</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>16</p>
                                <p class="price"><span class="price_value">984</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>17</p>
                                <p class="price"><span class="price_value">655</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>18</p>
                                <p class="price"><span class="price_value">625</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>19</p>
                                <p class="price"><span class="price_value">165</span>€</p> 
                            </div> 
                        </div>
                        <div class="d-flex justify-content-start align-items-center flex-wrap">
                            <div class="days">
                                <p>20</p>
                                <p class="price"><span class="price_value">984</span>€</p> 
                            </div>   
                            <div class="days">
                                <p>21</p>
                                <p class="price"><span class="price_value">569</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>22</p>
                                <p class="price"><span class="price_value">554</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>23</p>
                                <p class="price"><span class="price_value">758</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>24</p>
                                <p class="price"><span class="price_value">398</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>25</p>
                                <p class="price"><span class="price_value">351</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>26</p>
                                <p class="price"><span class="price_value">125</span>€</p> 
                            </div> 
                        </div>
                        <div class="d-flex justify-content-start align-items-center flex-wrap">
                            <div class="days">
                                <p>27</p>
                                <p class="price"><span class="price_value">458</span>€</p> 
                            </div>   
                            <div class="days">
                                <p>28</p>
                                <p class="price"><span class="price_value">569</span>€</p> 
                            </div> 
                            <div class="days">
                                
                            </div> 
                            <div class="days">
                                
                            </div> 
                            <div class="days">
                                
                            </div> 
                            <div class="days">
                               
                            </div> 
                            <div class="days">
                                
                            </div> 
                        </div>
                    </div>
                    <div id="mounth-right">
                    <div class="d-flex justify-content-start align-items-center flex-wrap">
                            <div class="days">
                                
                            </div>   
                            <div class="days">
                                
                            </div> 
                            <div class="days">
                                <p>1</p>
                                <p class="price"><span class="price_value">549</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>2</p>
                                <p class="price"><span class="price_value">745</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>3</p>
                                <p class="price"><span class="price_value">903</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>4</p>
                                <p class="price"><span class="price_value">365</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>5</p>
                                <p class="price"><span class="price_value">241</span>€</p> 
                            </div> 
                        </div>
                        <div class="d-flex justify-content-start align-items-center flex-wrap">
                            <div class="days">
                                <p>6</p>
                                <p class="price"><span class="price_value">658</span>€</p> 
                            </div>   
                            <div class="days">
                                <p>7</p>
                                <p class="price"><span class="price_value">458</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>8</p>
                                <p class="price"><span class="price_value">784</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>9</p>
                                <p class="price"><span class="price_value">265</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>10</p>
                                <p class="price"><span class="price_value">154</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>11</p>
                                <p class="price"><span class="price_value">789</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>12</p>
                                <p class="price"><span class="price_value">265</span>€</p> 
                            </div> 
                        </div>
                        <div class="d-flex justify-content-start align-items-center flex-wrap">
                            <div class="days">
                                <p>13</p>
                                <p class="price"><span class="price_value">147</span>€</p> 
                            </div>   
                            <div class="days">
                                <p>14</p>
                                <p class="price"><span class="price_value">198</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>15</p>
                                <p class="price"><span class="price_value">478</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>16</p>
                                <p class="price"><span class="price_value">105</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>17</p>
                                <p class="price"><span class="price_value">347</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>18</p>
                                <p class="price"><span class="price_value">529</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>19</p>
                                <p class="price"><span class="price_value">647</span>€</p> 
                            </div> 
                        </div>
                        <div class="d-flex justify-content-start align-items-center flex-wrap">
                            <div class="days">
                                <p>20</p>
                                <p class="price"><span class="price_value">269</span>€</p> 
                            </div>   
                            <div class="days">
                                <p>21</p>
                                <p class="price"><span class="price_value">426</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>22</p>
                                <p class="price"><span class="price_value">684</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>23</p>
                                <p class="price"><span class="price_value">789</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>24</p>
                                <p class="price"><span class="price_value">487</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>25</p>
                                <p class="price"><span class="price_value">1502</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>26</p>
                                <p class="price"><span class="price_value">369</span>€</p> 
                            </div> 
                        </div>
                        <div class="d-flex justify-content-start align-items-center flex-wrap">
                            <div class="days">
                                <p>27</p>
                                <p class="price"><span class="price_value">206</span>€</p> 
                            </div>   
                            <div class="days">
                                <p>28</p>
                                <p class="price"><span class="price_value">694</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>29</p>
                                <p class="price"><span class="price_value">458</span>€</p> 
                            </div> 
                            <div class="days">
                                <p>30</p>
                                <p class="price"><span class="price_value">258</span>€</p>  
                            </div> 
                            <div class="days">
                                <p>31</p>
                                <p class="price"><span class="price_value">158</span>€</p> 
                            </div> 
                            <div class="days">
                               
                            </div> 
                            <div class="days">
                                
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="assets/js/filter.js"></script>
    <!-- END: Scripts -->
</body>

</html>