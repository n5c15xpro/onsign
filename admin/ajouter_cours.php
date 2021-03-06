<?php
/**
 * Created by PhpStorm.
 * User: zerbiclement
 * Date: 08/03/2018
 * Time: 18:58
 */
$title = "Onsign - Back end"; // titre de la page
$description = "écrire la meta description de la page"; // métadescription de la page
$main_color = "white";// background_color du main
$titre = "Cours";
require_once('connect.php');



if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $sql = "INSERT INTO `cours`(`titre`, `niveau`, `texte_cours`, `video`) 
    VALUES (:titre, :niveau, :texte_cours, :video)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
    $stmt->bindValue(':niveau', $_POST['niveau'], PDO::PARAM_STR);
    $stmt->bindValue(':texte_cours', $_POST['texte_cours'], PDO::PARAM_STR);
    $stmt->bindValue(':video', $_FILES['video']['name']);
    $stmt->execute();

}

	if(!empty($_POST['submit']) && isset($_FILES['video']))
     {
         
         $destination = "../video/";
         
         $filename = basename($_FILES['video']['name']);

         move_uploaded_file($_FILES['video']['tmp_name'], $destination . $filename);
         header('Location: back_cours.php');

   }

include('../include/header_back.php');?>

<section class="white">
    <div class="container">
        <div class="row padding">
            <h2 class="center-align blue-text">Ajouter un Cours</h2>
        </div>

        <form method="post" enctype="multipart/form-data" action="<?= $_SERVER['PHP_SELF'] ?>">

            <div class="row">
                <label for="titre" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Titre</label>
                <input type="text" name="titre" title="titre" class="browser-default col s10 offset-s1 m7 l7">
            </div>

            <div class="row">
                <label for="niveau1" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Niveau</label>
                <select title="niveau1" name="niveau" class="browser-default col s10 offset-s1 m7 l7">
                    <option value="A1" selected>A1</option>
                    <option value="A2">A2</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                </select>
            </div>

            <div class="row">
                <label for="photo_cours" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Texte du cours</label>
                <input type="text" name="texte_cours" title="texte_cours" class="browser-default col s10 offset-s1 m7 l7">
            </div>

            <div class="row">
                <label for="file" class="browser-default col offset-m1 m3 offset-l1 l3 s10 offset-s1 p-10">Vidéo du cours</label>
                <input type="file" title="video" name="video" class="browser-default col s10 offset-s1 m7 l7"/>
            </div>

            <div class="flex-col-center-sa w-100 h-15">
                <input type="submit" name="submit" value="upload" class="button button_orange w-40 margin-0">
            </div>
        </form>

    </div>

</section>

<?php include('../include/footer_back.php');