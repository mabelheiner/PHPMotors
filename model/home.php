<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>PHP Motors | Home</title>
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
  <script src="./main.js" defer></script>
</head>
<body>
<header>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/header.php'; ?>
  </header>
  <nav>
    <?php $page = 'home'; require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/nav.php'; ?>
  </nav>
  
  <main>
    <h1 class="welcome">Welcome to PHP Motors!</h1>

    <div class="hero">
      <div class="hero-text">
        <p><strong>DMC Delorean</strong><br>
        3 Cup holders<br>
        Superman doors<br>
        Fuzzy dice!</p>
        <button>Own Today</button>
      </div>
      <img src="./images/delorean.jpg" alt="DMC Delorean">
    </div>
    <button class="button-hero">Own Today</button>

    <div class="upgrades">
      <h2 class="upgrades-title">Delorean Upgrades</h2>

      <div class="capacitor">
        <img src="./images/upgrades/flux-cap.png" alt="flux capacitor">
      </div>
      <div class="capacitor-label">
        <a href="home.php">Flux Capacitor</a>
      </div>

      <div class="decals">
        <img src="./images/upgrades/flame.jpg" alt="flame decals">
      </div>
      <div class="decals-label">
        <a href="home.php">Flame Decals</a>
      </div>

      <div class="stickers">
        <img src="./images/upgrades/bumper_sticker.jpg" alt="bumper sticker">
      </div>
      <div class="stickers-label">
        <a href="home.php">Bumper Stickers</a>
      </div>

      <div class="hub-cap">
        <img src="./images/upgrades/hub-cap.jpg" alt="hub-cap">
      </div>
      <div class="hub-caps-label">
        <a href="home.php">Hub Caps</a>
      </div>
    </div>

    <div class="reviews">
      <h2>DMC Delorean Reviews</h2>
      <ul>
        <li>"So fast its almost like traveling in time" (4/5)</li>
        <li>"Coolest ride on the road." (4/5)</li>
        <li>"I'm feeling Marty McFly" (5/5)</li>
        <li>"The most futuristic ride of our day." (4.5/5)</li>
        <li>"80's livin and I love it!" (5/5)</li>
      </ul>
    </div>
  </main>
  <footer>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/footer.php'; ?>
  </footer> 
</body>
</html>