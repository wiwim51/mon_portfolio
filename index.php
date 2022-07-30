<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="src/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/82376dcfcd.js" crossorigin="anonymous"></script>
    <title> Portfolio | Lemmer Jordane </title>
    <!--SEO BALISE META (referencement)-->
    <meta name="Portfolio professionnel" content="ceci est mon porfolio professionnel, vous y trouverai ma présentation et mes travaux ainsi que mes réseaux sociaux.">
    <meta name="keywords" content="portfolio web developpeur professionnel travaux github réseaux sociaux instagram facebook twitter linkedin contact. ">
</head>

<body>
    <!--header-->
    <div class="block">
            <header class="header" id="navbar">
            <div class="logo">
            <img src="src/img/profile.jpg" class="profile" alt="photo de profile">
            <a href="#" class="header-logo">Lemmer Jordane</a>
            </div>
            <nav class="header-menu">
                <a href="#apropos">A propos</a>
                <a href="#travaux">Mes travaux</a>
                <a href="#contact">Contact</a>
            </nav>
        </header>
    </div>
    <!--banner-->
    <div class="block">
        <div class="banner">
            <img src="src/img/wave_bg.svg" alt="coding" class="banner-image">
            <div class="banner-content">
                <h1 class="title is-1">Bienvenu sur mon portfolio</h1>
                <h2 class="subtitle">Découvrez mes travaux et mon univers !</h2>
                <button class="button is-link" id="open_modal">Contactez-moi</button>
            </div>
        </div>
    </div>

    <!--modal-->

    <div class="modal own-modal" id="modal_to_open">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title"> Contactez-moi</p>
                <button class="delete" aria-label="close" id="close_modal"></button>
            </header>
            <section class="modal-card-body">
                <p class="headin-site2"> vous pouvez me contacter </p>
                <p class="headin-site2"> par mail en <a href="#contact"> cliquant ici !</a></p>
                <!-- Content -->
            </section>
            <footer class="modal-card-foot">
            </footer>
        </div>
    </div>

    <!--section: à propos-->
    <div class="block">
        <h2 class="subtitle headin-site" id="apropos">À Propos de moi</h2>
        <div class="container about">
            <div class="columns">
                <div class="column about-single-element">
                    <i class="fa-solid fa-code"></i>
                    <p>Autodidacte je me forme au métier de développeur web à l'aide de tutos, livres et tout ce que je peu trouver sur internet.
                    j'ai découvert la partie frontend avec les languages html, CSS, JavaScript, SASS, React,
                    ainsi que le backend avec NodeJS, Express, MongoDB, PhP.
                    </p>
                </div>
                <div class="column about-single-element">
                    <i class="fa-solid fa-mug-hot"></i>
                    <p>Je m'appelle Jordane Lemmer et j'ai 31 ans.
                    De nature créatif, j'aime concevoir toute sortent de projets. je suis passioné depuis mon enfance par les nouvels technologies mais également la musique, le dessins que je pratique en amateur.
                    </p>
                </div>
                <div class="column about-single-element">
                    <i class="fa-solid fa-pen"></i>
                    <p>j'ai pour projet de me former auprès d'une école de formation dans le développement web afin d'obtenir une certification.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--mes travaux-->
    <div class="block">
        <h2 class="subtitle headin-site" id="travaux">Mes travaux</h2>
        <div class="container">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-14">
                    <div class="tile">
                        <div class="tile is-parent is-vertical">
                            <article class="tile is-child">
                                <div class="notification">
                                    <a href="https://github.com/wiwim51">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--contact-->
    <div class="block">
        <footer class="footer">
            <h2 class="headin-site" id="contact">Contactez-moi</h2>
            <div class="footer-contact-form">
                <form method="post" action="#">
                    <div class="field">
                        <label class="label">Votre nom</label>
                        <div class="control">
                            <input class="input" id="name" type="text" placeholder="Wayne" name="name">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Votre prénom</label>
                        <div class="control">
                            <input class="input" id="firstname" type="text" placeholder="Bruce" name="firstname">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Votre email</label>
                        <div class="control">
                            <input class="input" id="mail" type="email" placeholder="BruceWayne@gmail.com" name="email">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Votre message</label>
                        <div class="control">
                            <textarea class="textarea" id="message" placeholder="Votre message"
                                name="message"></textarea>
                        </div>
                    </div>
                    <input class="button is-link" type="submit" value="Envoyer !">
                    
                    
                </form>
                <?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: contact@jordanelemmer.eu' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis la page Contact de jordanelemmer.eu</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('contact@jordanelemmer.eu', 'Envoi depuis page Contact', $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
            </div>
            <div class="footer-informations">
                <p class="headin-site">Mes</p>
                <p class="headin-site">Réseaux Sociaux</p>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/la.WhyNot/">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/jordanelemmer/">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/jordane-lemmer-12290819b/">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="src/js/main.js"></script>
</body>

</html>