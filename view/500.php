<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>PHP Motors | Connection Error</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <script src="../main.js" defer></script>
</head>
<body>
  <header>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/header.php'; ?>
  </header>
  <nav>
    <?php $page = 'error'; require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/error-nav.php'; ?>
  </nav>
  <main class="error-main">
    <h1 class="error-title">Server Error</h1>
    <p class="error-message">Ours servers seems to be experiencing some technical difficulties.</p>
  </main>
  <footer>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/footer.php'; ?>
  </footer>
</body>
</html>