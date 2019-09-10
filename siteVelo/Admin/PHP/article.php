<?php

if(isset($_POST['nomArticle'])){
    $nomArticle = trim(htmlspecialchars($_POST['nomArticle'],ENT_QUOTES));
} else{
    $nomArticle = null;
}

if(isset($_POST['imageArticle'])){
    $imageArticle = trim(htmlspecialchars($_POST['imageArticle'],ENT_QUOTES));
} else{
    $imageArticle = null;
}

if(isset($_POST['categorieArticle'])){
    $categorieArticle = trim(htmlspecialchars($_POST['categorieArticle'],ENT_QUOTES));
} else{
    $categorieArticle = null;
}

if(isset($_POST['stock'])){
    $stock = trim(htmlspecialchars($_POST['stock'],ENT_QUOTES));
} else{
    $stock = null;
}

if(isset($_POST['prixArticle'])){
    $prixArticle = trim(htmlspecialchars($_POST['prixArticle'],ENT_QUOTES));
} else{
    $prixArticle = null;
}


var_dump ($imageArticle);
echo $nomArticle.' <br>';
echo $categorieArticle.' <br>';
echo $stock.' <br>';
echo $prixArticle.' <br>';

?>