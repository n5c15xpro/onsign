<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?>">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
</head>
<body>

<!-- ANCRE -->
<div id="ancre" class="flex-col-center"><a  href="#top" class="text-white"><i class="material-icons">keyboard_arrow_up</i></a></div>

<!-- POP UP CONNEXION -->
<div class="w-100 flex-col-center fixed z-1 hidden" id="pop-up_connexion">
    <div class="opacity_2 h-100 w-100 flex-col-center fixed z-2"></div>
        <div class="w-40 h-60 bloc_bordered white flex-col-center-sa padding z-3 pop_up">

            <h2 class="text-blue">Connexion</h2>

            <form class="flex-col-sa w-55 h-45" method="post" action="#">

                <div class="flex-col-sa w-100 h-10">
                    <label for="email">Email</label>
                    <input type="email" name="email" title="email" class="w-100">
                </div>
                <div class="flex-col-sa w-100 h-10">
                    <label for="password">Password</label>
                    <input type="password" name="password" title="password" class="w-100">
                </div>
                <input type="submit" value="Se connecter" class="button blue w-100">
                <div class="flex-col-center-sa w-100 h-5">
                    <a href="#">Mot de passe oublié ?</a>
                    <a href="#">S'incrire</a>
                </div>
            </form>
        </div>
    </div>

<!-- POP UP INSCRIPTION -->
<div class="w-100 flex-col-center fixed z-1 hidden" id="pop-up_inscription">
    <div class="opacity_2 h-100 w-100 flex-col-center fixed z-2"></div>
    <div class="w-40 h-70 bloc_bordered white flex-col-center-sa padding z-3 pop_up">

        <h2 class="text-blue">Inscription</h2>

        <form class="flex-col-sa w-55 h-65" method="post" action="#">

            <div class="flex-sb w-100">
                <div class="flex-col-sa w-45 h-10">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" title="nom" class="w-100">
                </div>
                <div class="flex-col-sa w-45 h-10">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" title="prenom" class="w-100">
                </div>
            </div>

            <div class="flex-sb w-100">
                <div class="flex-col-sa w-45 h-10">
                    <label for="password">Password</label>
                    <input type="password" name="password" title="password" class="w-100">
                </div>
                <div class="flex-col-sa w-45 h-10">
                    <label for="tel">Téléphone</label>
                    <input type="tel" name="tel" title="tel" class="w-100">
                </div>
            </div>

            <div class="flex-col-sa w-100 h-10">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" title="adresse" class="w-100">
            </div>
            <div class="flex-col-center-sa w-100 h-15">
                <a href="#" class="button text-blue border_blue w-100 margin-0">Voir les offres</a>
                <input type="submit" value="Essayer gratuitement" class="button blue w-100 margin-0">
            </div>
        </form>
    </div>
</div>


<header id="#top">
    <nav>
        <ul>
            <li><a href="nos_offres.html" title="">nos offres</a></li>
            <li><a href="apprendre_lsf.html" title="">apprendre la lsf</a></li>
            <li><a href="certifications.html" title="">certifications</a></li>
            <li id="link_connexion"><a href="#" title="">connexion</a></li>
            <li id="link_inscription" class="nav_btn_inscription"><a href="#" title="">inscription</a></li>
        </ul>
    </nav>
</header>


<main>