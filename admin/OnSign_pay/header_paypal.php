<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?>">
    <title><?= $title ?></title>
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css"  media="screen,projection"/>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon" />
</head>
<body>

<!-- ANCRE -->
<div id="ancre" class="flex-col-center"><a  href="#top" class="text-white"><i class="material-icons">keyboard_arrow_up</i></a></div>

<!-- POP UP CONNEXION -->
<div class="w-100 flex-col-center fixed z-1 hidden" id="pop-up_connexion">
    <div class="opacity_2 h-100 w-100 flex-col-center fixed z-2"></div>
    <div class="w-40 w-m-100 h-60 bloc_bordered white flex-col-center-sa padding z-3 pop_up">

        <h2 class="text-blue">Connexion</h2>

        <form class="flex-col-sa w-55 h-45" method="post" action="../admin/login.php">

            <div class="flex-col-sa w-100 h-10">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" title="email" class="w-100">
            </div>
            <div class="flex-col-sa w-100 h-10">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" title="password" class="w-100">
            </div>
            <input type="submit" value="Se connecter" class="button button_blue w-100">
            <div class="flex-col-center-sa w-100 h-5">
                <a href="#">Mot de passe oublié ?</a>
                <a href="#" class="link_inscription">S'incrire</a>
            </div>
        </form>
    </div>
</div>

<!-- POP UP INSCRIPTION -->
<div class="w-100 flex-col-center fixed z-1 hidden" id="pop-up_inscription">
    <div class="opacity_2 h-100 w-100 flex-col-center fixed z-2"></div>
    <div class="w-40 w-m-100 h-95 bloc_bordered white flex-col-center-sa padding z-3 pop_up_ins">

        <h2 class="text-blue">Inscription</h2>

        <form class="flex-col-sa w-55 h-95" method="post" action="../admin/sign_in.php">

            <div class="flex-sb w-100">
                <div class="flex-col-sa w-45 h-10">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" title="nom" class="w-100">
                </div>
                <div class="flex-col-sa w-45 h-10">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom" title="prenom" class="w-100">
                </div>
            </div>

            <div class="flex-col-sa h-10 w-100">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" title="email" class="w-100">
            </div>

            <div class="flex-sb h-10 w-100">
                <div class="flex-col-sa w-45 h-10">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" title="password" class="w-100">
                </div>
                <div class="flex-col-sa w-45 h-10">
                    <label for="tel">Téléphone</label>
                    <input type="tel" name="tel" title="tel" id="tel" class="w-100">
                </div>
            </div>

            <div class="flex-sb w-100">
                <div class="flex-col-sa w-45 h-10">
                    <label for="niveau_forfait">Niveau</label>
                    <select title="niveau_forfait" name="niveau_forfait" class="w-100 browser-default">
                        <option value="A" selected>Débutant</option>
                        <option value="B">Intermédiare</option>
                    </select>
                </div>

                <div class="flex-col-sa w-45 h-10">
                    <label for="niveau_formation">Niveau</label>
                    <select title="niveau_formation" name="niveau_formation" class="w-100 browser-default">
                        <option value="3" selected>3 mois</option>
                        <option value="6">6 mois</option>
                        <option value="9">9 mois</option>
                    </select>
                </div>
            </div>

            <div class="flex-col-sa w-100 h-10">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" title="adresse" class="w-100">
            </div>

            <div class="flex-col-sa w-100 h-10">
                <label for="cp_adresse">Complement d'adresse</label>
                <input type="text" name="cp_adresse" id="cp_adresse" title="adresse" class="w-100">
            </div>

            <div class="flex-col-center-sa w-100 m-l-f-10 h-15">
                <a href="../fr/offre.php" class="button button_white_blue w-100 margin-0">Voir les offres</a>
                <input type="submit" value="S'inscrire" class="button button_blue w-100 margin-0">
            </div>
        </form>
    </div>
</div>


<header id="#top">

    <nav class="blue">
        <div class="nav-wrapper blue">
            <a href="../../fr/index.php" class="brand-logo"><img src="../../images/logo.png"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../../fr/offre.php" title="">nos offres</a></li>
                <li><a href="../../fr/apprendre_lsf.php" title="">apprendre la lsf</a></li>
                <li><a href="../../fr/certification.php" title="">certifications</a></li>
                <li id="link_connexion"><a href="#" title="" class="button_white">connexion</a></li>
                <li class="link_inscription"><a href="#" title="" class="button_orange">inscription</a></li>

            </ul>
            <ul class="side-nav blue flex-col-sa h-100" id="mobile-demo">
                <li><a href="../../fr/index.php"><img src="../../images/logo.png"></a></li>
                <li><a href="../../fr/offre.php" title="">nos offres</a></li>
                <li><a href="../../fr/apprendre_lsf.php" title="">apprendre la lsf</a></li>
                <li><a href="../../fr/certification.php" title="">certifications</a></li>
                <li id="link_connexion"><a href="#" title="">connexion</a></li>
                <li class="link_inscription nav_btn_inscription"><a href="#" title="">inscription</a></li>
            </ul>
        </div>
    </nav>

</header>

<main class="grey flex-col-center-sa h-50">
