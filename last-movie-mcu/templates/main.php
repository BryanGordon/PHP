<main>
  <section>
    <img src="<?=$poster_url; ?>" width="300" alt="Poster de la pelicula <?= $title; ?>" style="border-radius: 16px;">
  </section>

  <hgroup>
    <h3><?= $title ?></h3>
    <span style="font-weight: bold;"><?= $until_message ?> </span>
    <p>Fecha de estreno: <?= $release_date ?></p>
    <p>La siguiente es: <?= $following_production; ?></p>
  </hgroup>
</main>