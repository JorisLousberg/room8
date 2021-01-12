<?php
print_r($_FILES);
//include_once('../includes/uploadimage.inc.php');//

$sql = "INSERT INTO tb_faq_vragen (vraag_id, language, question, answer) 
VALUES ('$qid','$lang','$question', '$answer')";
$stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        print_r($result);
