
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PUBG Tournament</title>
    <script src="js/helper.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a href="index.php" class="navbar-item">
                    <strong>
                        PUBG tournaments
                    </strong>
                </a>
                <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </div>
            <div id="navbarMenuHeroA" class="navbar-menu">
                <div class="navbar-end">
                    <span class="navbar-item">
                        <a href="https://facebook.com/pubgtournaments2018" class="button is-fb">
                            <span class="icon">
                                <i class="fab fa-facebook"></i>
                            </span>
                            <span>pubgtournaments2018</span>
                        </a>
                    </span>
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

    <section id="banner" class="hero is-small is-link is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Sign Up
                </h1>
                <h2 class="subtitle">
                    Register to play and win!
                </h2>

            </div>
        </div>
    </section>
    <br>
<form action="signup.inc.php" method="post" enctype="multipart/form-data">
    <div id="form" class="body container">
        <div class="field">
            <h3 class="title">Next Few Matches Schedule</h3>
            <p>
                <strong>SQUAD</strong> - 09:00 PM ( ENTRY FEES-120₹ PER SQUAD )
                <br>
                <strong>SOLO</strong> - 11:30 PM ( ENTRY FEES-100₹ PER PERSON )
            </p>
            <p>
                <span class="has-text-danger">* = required</span>
            </p>
        </div>

        <div class="field">
            <label class="label">PUBG username<span class="has-text-danger">*</span></label>
            <div class="control has-icons-left">
                <input name="username" class="input" type="text" placeholder="Example: n00b$layerPRO">
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <label class="label">Your teammates' PUBG usernames</label>
            <div class="control has-icons-left">
                <input name="teammates" class="input" type="text" placeholder="Example: n00b$layerPRO, progamer,">
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <label class="label">Email<span class="has-text-danger">*</span></label>
            <div class="control has-icons-left has-icons-right">
                <input name="email" class="input" type="email" placeholder="Enter email" value="">
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <label class="label">Instagram ID<span class="has-text-danger">*</span></label>
            <div class="control has-icons-left has-icons-right">
                <input name="insta" class="input" type="text" placeholder="Example: examplePerson" value="">
                <span class="icon is-small is-left">
                    <i class="fab fa-instagram"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <label class="label">Phone number<span class="has-text-danger">*</span></label>
            <div class="control has-icons-left has-icons-right">
                <input name="phone" class="input" type="number" placeholder="Enter number" value="">
                <span class="icon is-small is-left">
                    <i class="fas fa-phone"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <label class="label">Payment phone number<span class="has-text-danger">*</span></label>
            <div class="control has-icons-left has-icons-right">
                <input name="payphone" class="input" type="number" placeholder="Enter number" value="">
                <span class="icon is-small is-left">
                    <i class="fas fa-phone"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <label class="label">Date Registering for<span class="has-text-danger">*</span></label>
            <div class="control has-icons-left has-icons-right">
                <input name="dateReg" class="input" type="date" >
                <span class="icon is-small is-left">
                    <i class="fas fa-calender"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <label class="label">
                Payment screenshot (Same Number 9810589033 PAYTM/TEZ/PHONEPE)
            </label>
              <div class="upload-btn-wrapper">

                <button class="button">Upload image</button>

              <!--<input name="screenshot" class="input" type="url" placeholder="Enter link" value="">-->
                <input type="file" name="pic" accept="image/*">
                <!--<span class="icon is-small is-left">
                    <i class="fas fa-link"></i>
                </span>-->
            </div>
        </div>

        <div class="field">
            <label class="label">Preferred game timing and mode<span class="has-text-danger">*</span></label>
            <div id="timing" class="control">
                <label class="checkbox">
                    <input name="squad-checkbox" type="checkbox" value="SQUAD"> 09:00 PM (SQUAD)
                </label>
                <br>
                <label class="checkbox">
                    <input name="solo-checkbox" type="checkbox" value="SOLO"> 11:30 PM (SOLO)
                </label>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" name="Submit">Submit</button>
            </div>
            <div class="control">
                <a href="signup.php" class="button is-text">Cancel</a>
            </div>
        </div>
    </div>
  </form>
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
                <a href="view_reg.php">View Registrations</a>
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
