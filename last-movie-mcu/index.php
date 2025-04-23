<?php

/*
Realizar el llamado de una api usando cURL
# Inicializar una nueva sesion  de cURL; ch = cURL handle
$ch = curl_init(API_URL);

#Evitar que se mientre la informacion de la api en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

# Ejecutamos la peticion y guardamos los resultados
$result = curl_exec($ch);
# Otra forma de hacer un llamado a la api (solo GET)
# $result = file_get_contents(API_URL);
$data = json_decode($result, true);

curl_close($ch);
*/
require_once 'consts.php';
require_once 'functions.php';

$data = get_data(API_URL);
$untilMessage = get_until_message($data["days_until"])

?>

<?php render_template('head', $data);  ?>
<?php require 'sections/main.php'?>
<?php render_template('styles'); ?>
