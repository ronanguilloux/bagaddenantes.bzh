<!DOCTYPE html>
<html lang="<?php echo $meta['lang']; ?>">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="google-site-verification" content="Tx2uqGgCi---Qouc76PtcBr5dJGC_8uAZ1zEMfoOtSE" />
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M8X4R4R');</script>
  <!-- End Google Tag Manager -->

	<title><?php echo $meta['title']; ?></title>

  <!-- favicon, via https://realfavicongenerator.net/ -->
  <link rel="apple-touch-icon" sizes="180x180" href="https://bagaddenantes.bzh/assets/images/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://bagaddenantes.bzh/assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://bagaddenantes.bzh/assets/images/favicons/favicon-16x16.png">
  <link rel="manifest" href="https://bagaddenantes.bzh/assets/images/favicons/site.webmanifest">
  <link rel="mask-icon" href="https://bagaddenantes.bzh/assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="https://bagaddenantes.bzh/assets/images/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="https://bagaddenantes.bzh/assets/images/favicons/browserconfig.xml">
  <meta name="theme-color" media="(prefers-color-scheme: dark)" content="black">

  <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/main.css?<?php echo date('Ymd'); ?>">
  <link rel="stylesheet" media="print" href="/assets/css/print.css?<?php echo date('Ymd'); ?>">

  <meta name="title"               content="<?php echo $meta['title']; ?>"/>
  <meta name="description"         content="<?php echo $meta['description'];?>"/>
  <meta name="author"              content="Bagad de Nantes"/>

  <meta property="og:locale"       content="<?php echo $meta['locale']; ?>"/>
  <meta property="og:url"          content="http://www.bagaddenantes.bzh"/>
  <meta property="og:type"         content="website"/>
  <meta property="og:title"        content="<?php echo $meta['title']; ?>"/>
  <meta property="og:description"  content="<?php echo $meta['description'];?>"/>
  <meta property="og:site_name"    content="Bagad de Nantes"/>
  <meta property="og:image"        content="<?php echo $meta['image']; ?>" />

  <meta name="twitter:card"        content="summary_large_image"/>
  <meta name="twitter:description" content="<?php echo $meta['description'];?>"/>
  <meta name="twitter:title"       content="<?php echo $meta['title']; ?>"/>

  <!-- Icons font - see https://fontawesome.com/v5.0/icons?d=gallery -->
  <script src="https://kit.fontawesome.com/09d4849b5c.js" crossorigin="anonymous"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-16MHQR9V3F"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-16MHQR9V3F');
  </script>

</head>
<body class="<?php echo $meta['code']; ?>"><?php //echo '<pre>'; var_dump($meta);?>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8X4R4R"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
