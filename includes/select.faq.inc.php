<?php 

    $sql = "SELECT * FROM tb_faq_vragen";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); // get result
        
        foreach($result as $key => $row) {
            echo $row['question'];
            echo  $row['answer'];
            
        }
?>