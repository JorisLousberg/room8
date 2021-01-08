<?php
print_r($_FILES);
//include_once('../includes/uploadimage.inc.php');//

$sql = "INSERT INTO tb_faq_vragen (language, question, answer) 
VALUES ('$lang','$question', '$answer')";
$stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        print_r($result);
