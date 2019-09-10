<?php

if(isset( $_POST['nomArticle']) && isset($_POST['categorieArticle'])&& isset($_POST['stock'])&& isset($_POST['prixArticle'])&& isset($_POST['imageArticle'])){
    $nomArticle = htmlspecialchars( $_POST['nomArticle'],ENT_QUOTES);
    $categorieArticle = htmlspecialchars( $_POST['categorieArticle'],ENT_QUOTES);
    $stock = htmlspecialchars( $_POST['stock'],ENT_QUOTES);
    $prixArticle = htmlspecialchars( $_POST['prixArticle'],ENT_QUOTES);
    $imageArticle = htmlspecialchars( $_POST['imageArticle'],ENT_QUOTES);
   
}else{
    $nomArticle = null;
    $categorieArticle = null;
    $stock = null;
    $prixArticle = null;
    $imageArticle = null;
    
}
 
echo $imageArticle.' <br>';
echo $nomArticle.' <br>';
echo $categorieArticle.' <br>';
echo $stock.' <br>';
echo $prixArticle.' <br>';

?>