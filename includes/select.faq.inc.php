<?php 

function getqeust($id, $lang, $pdo){
    $sql = "SELECT * FROM tb_faq_vragen WHERE vraag_id='$id' AND language= $lang";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); // get result
        
        foreach($result as $key => $row) {
            echo "<div class='table1'> <table class'tg'> <thead> <tr> 
                <th class='tg-ye28'>" . $row['question'] . "</th></tr></thead>";
            echo  "<tbody> <tr>
                <td class='tg-8m24'>" .  $row['answer'] . $row['vraag_id'] . "</td>
                </tr> </tbody> </table> <br /> </div>";
            //echo    include('includes/faq_pop.inc.php');
            
        }
}
        //1.maak een pop up wanneer
        // iemand op een vraag klikt
        
        //2.in de pop up moet enkel het
        // juiste antwoord in de 
        //juiste taal verschijen

        //3.maak een like/dislike 
        //systeem bij elke pop up
        //4.sorteer de vragen gebaseerd op de like / dislike score

    
?>







