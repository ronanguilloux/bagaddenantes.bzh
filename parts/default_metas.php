<?php

  $url = $_SERVER['REQUEST_URI'];
  $code = strtolower(substr($url, 1));
  $name = trim(str_replace(['/', '-'],' ', $code));
  $title = "Bagad de Nantes";
  $description = "Bagad de Nantes / Bagad Naoned – Ensemble de musique bretonne composé de bombardes,
  cornemuses écossaises, caisse-claires, percussions, basé à Nantes. Le bagad participe à des défilés,
  des concerts, et anime des sorties publiques. Le bagad propose à ses élèves une formation musicale,
  incluant cours de musique collectifs et cours d'ensemble en bagadig.";
  $description = str_replace(array("\r", "\n"), '', $description);

  if('/index.php' == $_SERVER['SCRIPT_NAME']) {
      $code = 'home';
      $name = null;
  }

  if(!empty($name)) {
    $title .= ' - ' . ucfirst($name);
  }

  $meta['url'] =          $url;
  $meta['code'] =         $code;
  $meta['name'] =         $name;
  $meta['title'] =        $title;
	$meta['description'] =  $description;
	$meta['lang'] =         'fr';
	$meta['locale'] =       'fr_FR';
  $meta['image'] =        'https://bagaddenantes.bzh/assets/images/Bagad-de-Nantes-1.webp';
?>
