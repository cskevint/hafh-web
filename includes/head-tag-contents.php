<?php
require_once "config.php";
$webhostUrl = (isset($_SERVER['SCRIPT_URL']) && isset($_SERVER['SCRIPT_URI'])) ? str_replace($_SERVER['SCRIPT_URL'], "", $_SERVER['SCRIPT_URI']) : "";
$title = "Hound Away From Home" . (isset($_GLOBALS["pageTitle"]) ? " - " . $_GLOBALS["pageTitle"] : "");
$defaultDescription = "Welcome to Hound Away from Home, where your beloved canine companion finds a safe haven for boarding and daycare, ensuring they receive the care, attention, and fun they deserve while you're away.";
$description = $_GLOBALS["pageDescription"] ?? $defaultDescription;
$defaultImage = "/images/share/eli.jpg";
$shareImage = $_GLOBALS["pageShareImage"] ?? $defaultImage;
?>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="<?= $description ?>" />
<meta name="author" content="Hound Away From Home, LLC" />
<title><?= $title ?></title>
<meta property="og:title" content="<?= $title ?>">
<meta property="og:description" content="<?= $description ?>" />
<meta property="og:image" content="<?= $webhostUrl ?><?= $shareImage ?>" />

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" />

<link rel="stylesheet" type="text/css" href="/styles/sass/dist/hafh-bootstrap.css?v=2" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
<link rel="stylesheet" type="text/css" href="/styles/main.css?v=<?= time() ?>" />

<link rel="icon" href="favicon.ico" />
<link rel="apple-touch-icon" href="apple-touch-icon.png" sizes="180x180" />
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
<link rel="manifest" href="site.webmanifest" />
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5" />
<meta name="msapplication-TileColor" content="#da532c" />
<meta name="theme-color" content="#ffffff" />

<?php if ($GLOBALS['STAGE'] == "production" && !in_array($_SERVER['REMOTE_ADDR'], $GLOBALS['DEVELOPMENT_IPS'])) { ?>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-FRD4XKQCPT"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-FRD4XKQCPT');
  </script>
  <!-- Meta Pixel Code -->
  <script>
    !function (f, b, e, v, n, t, s) {
      if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
      n.queue = []; t = b.createElement(e); t.async = !0;
      t.src = v; s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1217184416699830');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1217184416699830&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->
<?php } else { ?>
  <script type="text/javascript">
    console.log("Meta Pixel Code and Google Analytics are disabled in development mode.");
    window.fbq = (action, event, args) => { console.log("fbq called with:",action, event, args ?? ''); };
  </script>
<?php } ?>