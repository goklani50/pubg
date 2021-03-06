<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PUBG Tournaments</title>
    <script src="js/helper.js"></script>
</head>
<body>
    <section class="hero is-bold is-black is-medium">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            <nav class="navbar is-dark">
                <div class="container">
                    <div class="navbar-brand">
                        <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenuHeroA" class="navbar-menu">
                        <div class="navbar-start">
                            <span class="navbar-item">
                                <a href="https://facebook.com/pubgtournaments2018" class="button is-fb">
                                    <span class="icon">
                                        <i class="fab fa-facebook"></i>
                                    </span>
                                    <span>pubgtournaments2018</span>
                                </a>
                            </span>
                        </div>
                        <div class="navbar-end">
                            <span class="navbar-item">
                                <a href="https://instagram.com/pubgtournaments2018" class="button is-insta is-inverted">
                                    <span class="icon">
                                        <i class="fab fa-instagram"></i>
                                    </span>
                                    <span>@pubgtournaments2018</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container has-text-centered" >
                <div class="columns">
                    <div id="logo" class="column">
                      <figure class="image is-3by1" >
                          <img src="img/pubg1.png">
                      </figure>
                        <h2 class="title">
                            TOURNAMENTS
                        </h2>
                    </div>
                    <div id="register" class="column">
                        <br><br><br>
                        <a href="signup.php" class="button is-warning is-large is-rounded">Register now!</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- Hero footer: will stick at the bottom
        <div class="hero-foot">
            <nav class="tabs">
                <div class="container">
                    <ul>
                        <li class="is-active"><a>Overview</a></li>
                        <li><a>Modifiers</a></li>
                        <li><a>Grid</a></li>
                        <li><a>Elements</a></li>
                        <li><a>Components</a></li>
                        <li><a>Layout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    -->
    </section>


    <section id="banner" class="hero is-dark is-small">
          <br>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Competitions
                </h1>
                <h2 class="subtitle">
                    Register to play and win!
                </h2>

                <div class="columns">
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image">
                                    <img src="img/squad.jpg" alt="Squad mode">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">Squad</p>
                                    </div>
                                </div>
                                <div class="content">
                                    Team up in groups of 2, 3 or 4 players and take on everyone in the match.
                                </div>
                                <p>
                                    <a href="signup.php" class="button is-light">Register</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image">
                                    <img src="img/duo.jpg" alt="Duo mode">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">Duo</p>
                                    </div>
                                </div>

                                <div class="content">
                                    Pair up with another individual compete to be the last ones alive.
                                </div>
                                <p>
                                    <a href="signup.php" class="button is-light">Register</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image">
                                    <img src="img/solo.jpg" alt="Solo mode">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">Solo</p>
                                    </div>
                                </div>

                                <div class="content">
                                    Spawn into the world alone, push to the end and be the last player alive
                                </div>
                                <p>
                                    <a href="signup.php" class="button is-light">Register</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <a href="https://facebook.com/pubgtournaments2018" class="button is-medium">
                    <span class="icon">
                        <i class="fab fa-facebook"></i>
                    </span>
                </a>
                <a href="https://instagram.com/pubgtournaments2018" class="button is-medium">
                    <span class="icon">
                        <i class="fab fa-instagram"></i>
                    </span>
                </a>
            </p>
            <a href="https://bulma.io">
                <img src="https://bulma.io/images/made-with-bulma--semiblack.png" alt="Made with Bulma" width="128" height="24">
            </a>
            <br>
            <p>
                <a href="registrations.php">View Registrations</a>
            </p>
            <p>
                <a href="view_reg.php">Vew Reg</a>
            </p>
        </div>
    </footer>
</body>

<!-- Firebase stuff -->
<script src="https://www.gstatic.com/firebasejs/5.3.1/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.3.0/firebase-auth.js"></script>

<script src="js/ui.js"></script>
    <script src="js/firebase.js"></script>
    <script src="js/events.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
</html>
