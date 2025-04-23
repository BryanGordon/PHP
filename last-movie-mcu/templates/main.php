<main>
  <section>
    <img src="<?=$data["poster_url"]; ?>" width="300" alt="Poster de la pelicula <?= $data["title"]; ?>" style="border-radius: 16px;">
  </section>

  <hgroup>
    <h3><?= $data["title"]; ?></h3>
    <span style="font-weight: bold;"><?= $untilMessage ?> </span>
    <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
    <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
  </hgroup>
</main>