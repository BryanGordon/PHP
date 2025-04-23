<?php
declare(strict_types=1);

const API_URL = "https://whenisthenextmcufilm.com/api";
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

function get_data(string $url): array {
  $result = file_get_contents($url);
  $data = json_decode($result, true);

  return $data;
}

$data = get_data(API_URL);

?>

<head>
  <meta charset="UTF-8" />
  <title>Peliculas MCU</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
  <section>
    <img src="<?=$data["poster_url"]; ?>" width="300" alt="Poster de la pelicula <?= $data["title"]; ?>" style="border-radius: 16px;">
  </section>

  <hgroup>
    <h3><?= $data["title"]?></h3>
    <span style="font-weight: bold;">Se estrena en <?=$data["days_until"]; ?> dias</span>
    <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
    <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
  </hgroup>
</main>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>