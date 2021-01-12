<?php
if(!isset($_SESSION)) // if is not yet set, start a session
{ 
    session_start(); 
} 

function getmenu($cat, $lang, $pdo){
    $sql = "SELECT * FROM tb_canteenitems WHERE category='$cat' AND language= $lang";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(); // get result
    //return $result;

$html = "<table>"; // generate string with HTML, using the retrieved database values

    foreach($result as $key => $row) {

        $html .= "<tr>
                    <td><h4>" . $row['product'] . "</td><td><b>&euro; " . $row['price'] . "</b></h4></td><td>
                    <input type='number' value='0' min='0' max='60' id='amount_id_" . $row['id'] . "'></td><td>
                    <img src='/room8/images/wm.png' width='30' height='30' onclick='addtobasket(" . $row['id'] . ",\" " . $row['product'] . "\", " . $row['price'] . ");' /></td></tr>
                    <tr><td colspan='4'>" . $row['description'] . "</td></tr>";
                }

$html .= "</table>";
echo $html;
}

?>

<script>

    function alert_sn(){
        Studentnumber = document.getElementById("studentennummer").value;
        alert("Uw bestelling met " + Studentnumber + " staat over 15 minuten voor u klaar!");
    }

    //This is the prdct_arrays
    prdct_id = []; //empty variable product id from database
    prdct_name = []; //empty variable product name
    prdct_price = []; //empty variable product price
    prdct_amount = []; //empty variable number of products

    function addtobasket(product_id,product,price) {                                             // values from database
        price = price.toFixed(2);                                                                // use this function to keep 2 digits after the comma
        volume_inputtype = document.getElementById('amount_id_' + product_id).value;             // retrieve the value out of the input type
        if (volume_inputtype <= 0)                                                               // if that value is zero or lower
         {
            document.getElementById('amount_id_' + product_id).value = 0;                        // reset value of said input field to 0
            return;                                                                              // and return
         }

        exist_prdct_array = false;                                                                       // start boolean. It always start with false (nothing in it) Then it runs the forloop
        for (index = 0; index < prdct_id.length; index++) {                                              // index = 0 index is less then number of items in prdct_id (array) Index grows with 1 
            if (prdct_id[index] == product_id)                                                           // start forloop to check product_id [] is equal to product id database
            {                                                                                            // if yes, the product already is set and need to be corrected to the new volume (number)
                prdct_amount[index] = parseInt(prdct_amount[index]) + parseInt(volume_inputtype);        // add the new volume_inputtype to the existing pruduct amount.
                exist_prdct_array = true;                                                                // end boolean ends with true if it recieved numbers from the above
            }
        }

        if (exist_prdct_array == false)                                                 // new product for input to prdct_arrays
        {
            prdct_id.push(product_id);                                                  // add product id to its array
            prdct_name.push(product);                                                   // add productname to its array
            prdct_price.push(price);                                                    // add price to its array
            prdct_amount.push(volume_inputtype);                                        // add quantity to its array
        }


        total = 0;                                                                                       // set total price to zero
        ticket = "<h3><b> Bestelling </b></h3>" + '<br>';               
            for (index = 0; index < prdct_id.length; index++) {                                          // loop through all items in the prdct_id array
            
            subtotal = prdct_price[index] * prdct_amount[index];                                         // calculate subtotal
            ticket = ticket + prdct_amount[index] + prdct_name[index] + ' € ' + subtotal + '<br /><br />';      // append them to the ticket
            total = total + subtotal;                                                                    // calculate overall total
        }

        ticket = ticket + ' <b> Totaal: € ' + total + '</b>' + '<br /><br />';                                                       // append overall total

        ticket = ticket + 'Studentennummer: <input type="text" autocomplete="off" name="fname" id="studentennummer"><input type="submit" onclick="window.parent.alert_sn();" value="Submit">';

        document.getElementById('winkelmand').innerHTML = ticket;
        document.getElementById('winkelmand').style.visibility = 'visible';

        }
  
</script>
