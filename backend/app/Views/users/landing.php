<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lia’s Coffee Shop | Crafted Coffee. Cozy Vibes.</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <?php include(APPPATH . 'Views/fragments/header.php'); ?>

  <section class="hero">
    <div class="hero-content">
      <h2>Crafted Coffee. Cozy Vibes.</h2>
      <p>Experience the warmth of freshly brewed coffee and the comfort of a perfect space to relax.</p>
      <?php include(APPPATH . 'Views/fragments/button1.php'); ?>
    </div>
    <div class="hero-image">
      <img src="/images/hero.png" alt="Cup of Coffee">
    </div>
  </section>

  <section class="favorites">
    <h2>Our Favorites</h2>
    <div class="menu-grid">
      <?php include(APPPATH . 'Views/fragments/card1.php'); ?>
      <?php include(APPPATH . 'Views/fragments/card2.php'); ?>
      <?php include(APPPATH . 'Views/fragments/card3.php'); ?>
    </div>
  </section>

  <section class="cta">
    <h2>Join Our Coffee Lovers Community</h2>
    <p>Sign up and get exclusive discounts, early access to new brews, and invites to our cozy events.</p>
    <?php include(APPPATH . 'Views/fragments/button2.php'); ?>
  </section>

  <?php include(APPPATH . 'Views/fragments/footer.php'); ?>
</body>
</html>
