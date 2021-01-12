<?php
    header('Location: admin.php');

    $category       = $_POST['tb_category'];
    $product        = $_POST['tb_product'];
    $description    = $_POST['tb_description'];
    $price          = $_POST['tb_price'];
    $language       = $_POST['tb_language'];
   

    require_once('includes/connection.inc.php');


    $sql = "INSERT INTO tb_canteenitems (category, product, description, price, language)
    VALUES ('$category', '$product', '$description', '$price', '$language')";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    print_r($result);
    
?>