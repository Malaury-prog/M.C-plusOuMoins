<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Arcade Games - Malaury</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php
  require_once __DIR__ . '/config.php';
  require_once ROOT_PATH . 'includes/header.php';
  ?>
  <main>
    <section class="games-list">
      <article class="card">
        <div class="card__header">
          <img
            src="./assets/images/jeu_plus_ou_moins.webp"
            alt="Jeu Plus ou Moins"
            class="card__icon" />
        </div>
        <div class="card__body">
          <h3 class="card__title">+ ou -</h3>
          <p class="card__description">
            Le test ultime de dichotomie. C'est plus ou c'est moins ?
          </p>
          <div class="card__footer">
            <time class="card__date">20/12/2025</time>
            <a href="./pages/plusOuMoins.php" class="card__btn">Jouer</a>
          </div>
        </div>
      </article>

      <article class="card">
        <div class="card__header">
          <img
            src="./assets/images/jeu_pierre_feuille_ciseau.webp"
            alt="Jeu Chifoumi"
            class="card__icon" />
        </div>
        <div class="card__body">
          <h3 class="card__title">Chifoumi</h3>
          <p class="card__description">
            Pierre, Feuille, Ciseaux. Arriveras-tu à gagner la manche ?
          </p>
          <div class="card__footer">
            <time class="card__date">20/12/2025</time>
            <a href="./pages/chifoumi.php" class="card__btn">Jouer</a>
          </div>
        </div>
      </article>

      <article class="card">
        <div class="card__header">
          <img
            src="./assets/images/jeu_de_dés.webp"
            alt="Jeu de dés"
            class="card__icon" />
        </div>
        <div class="card__body">
          <h3 class="card__title">Jeu du Dé</h3>
          <p class="card__description">
            Fais confiance au hasard ! Lance le cube virtuel.
          </p>
          <div class="card__footer">
            <time class="card__date">20/12/2025</time>
            <a href="./pages/jeuDuDes.php" class=" card__btn">Jouer</a>
          </div>
        </div>
      </article>
    </section>
  </main>

  <?php
  require_once __DIR__ . '/config.php';
  require_once ROOT_PATH . 'includes/footer.php';
  ?>

  <script src="./Js/main.js"></script>
</body>

</html>