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
require_once './classes/NextMovie.php';

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();
?>

<?php render_template('head', ["title" => $next_movie_data["title"]]);  ?>
<?php render_template('main', array_merge($next_movie_data, [
  "until_message" => $next_movie->get_until_message($next_movie_data["days_until"])
])) ?>
<?php render_template('styles'); ?>
