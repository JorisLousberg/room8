<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

function getmenu($cat, $lang, $pdo){
    $sql = "SELECT * FROM tb_canteenitems WHERE category='$cat' AND language= $lang";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(); // get result
    //return $result;

    //result wordt een array
    // print_r($result); //developerscode

    $html = "<table>";

    foreach($result as $key => $row) {

        $html .= "<tr>
                    <td><h4>" . $row['product'] . "</td><td><b>&euro; " . $row['price'] . "</b></h4></td><td class= 'nmr3'>
                    <input type='number' value='0' min='0' max='99' name='test'></td><td>
                    <a href='?add=" . $row['id'] . "'><img src='/room8/images/wm.png' width='30' height='30' /></a></td></tr>
                    <tr><td colspan='4'>" . $row['description'] . "</td></tr>";
    }

    $html .= "</table>";
    echo $html;
}

?>