<?php
const KEBABTELEFONO = 623390199;
$comerKebab = true;
date_default_timezone_set("Europe/Madrid");
$tz = date_default_timezone_get();
$time = date("H:i");

echo "<h1> ¿Sale Shawarma? </h1>";
echo "<h2> Son las $time </h2> <br/>";
//se supone que iba a usar el php para coger la hora y que no pidieras un kebab antes de las 20:00
?>

<button onclick="alertaKebab()"> Pulsame gilipollas </button>
<img src="https://thumbs.dreamstime.com/b/kebab-mascot-character-illustration-healthy-looking-cartoon-souvlaki-masacot-man-59479600.jpg" alt="Kebab Mascot" width="300" height="300">
<div id="comer"></div>

<head>
    <title> Debería? </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/pico.classless.min.css">
    <link rel="icon" type="image/png" href="favicon.png">
</head>

<script>
    let comerKebab = () => Math.random() >= 0.5; // aqui la probabilidad meu
    comerKebab(); // true
    let mensaje = document.getElementById("comer"); //aqui el mensajito debajo de la foto
    const hora = "<?php echo $time ?>";


    function alertaKebab() {
         if(hora < "20:00" && hora > "23:00") {
            mensaje.innerHTML = 'Es moi cedo para pensar en kebabs neno'
        }
        else if (comerKebab() == true)  {
            mensaje.innerHTML = '<a href="tel:+34623390199"> 623 390 199 </a>'
            
        } else {
            mensaje.innerHTML = 'No meu, hoxe non toca kebab'
        }
    }
</script>



<style>
    :root {
        color-scheme: light dark;
    }

    #comer {
        margin-top: 30px;
        font-size: 4em;
        text-align: center;
    }

    img {
        margin-top: 40px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    body {
        font-family: Arial, sans-serif;
        margin: 10px;
        text-align: center;
        display: grid;
        place-content: center;
    }

    h1,
    h2 {
        font-size: 3em;
        text-align: center;
    }

    button {
        background-color: white;
        color: black;
        font-size: 30px;
        padding: 10px 20px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        text-align: center;
        margin: 0 auto;
        border-radius: 10px;
    }