<?php
$title = "Hound Away From Home".(isset($_GLOBALS["pageTitle"]) ? " - ".$_GLOBALS["pageTitle"] : "");
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
    content="Welcome to Hound Away from Home, where your beloved canine companion finds a safe haven for boarding and daycare, ensuring they receive the care, attention, and fun they deserve while you're away.">
<meta name="author" content="Hound Away From Home, LLC">
<title><?=$title?></title>
<meta property="og:title" content="<?=$title?>">
<meta property="og:image" content="/images/image-eli.jpg">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="/styles/main.css" />

<link rel="icon" href="favicon.ico">
<link rel="apple-touch-icon" href="apple-touch-icon.png" sizes="180x180">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="manifest" href="site.webmanifest">
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<?php if(str_contains($_SERVER["SERVER_NAME"],"houndawayfromhome.com")) { ?>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-FRD4XKQCPT"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FRD4XKQCPT');
  </script>
<?php } ?>