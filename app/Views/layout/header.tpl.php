<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <base href="https://jimmy-martin.alwaysdata.net/">

    <title>Portfolio de Jimmy Martin | Développeur Web PHP</title>
    <meta name="description" content="Portfolio de Jimmy MARTIN, Développeur Web Junior en formation chez O'clock">

    <!-- OpenGraph datas -->
    <meta property="og:title" content="Portfolio de Jimmy Martin | Développeur Web Junior">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Portfolio de Jimmy MARTIN, Développeur Web Junior en formation chez O'clock">
    <meta property="og:url" content="https://jimmy-martin.alwaysdata.net/">
    <meta property="og:site_name" content="Jimmy Martin">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="https://jimmy-martin.alwaysdata.net/">
    <meta name="twitter:title" content="Portfolio de Jimmy Martin | Développeur Web Junior">
    <meta name="twitter:description" content="Portfolio de Jimmy MARTIN, Développeur Web Junior en formation chez O'clock">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- utils CSS Files -->
    <link href="assets/utils/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/utils/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/utils/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/utils/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" <?php if($currentPage !== 'home/home') : ?>style="background-color: rgb(0 0 0 / 90%)"<?php endif; ?>>
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="<?= $router->generate('main-home') ?>"><?= $me->getFirstName() . ' ' . $me->getLastName() ?> - Développeur Web</a></h1>

            <?php require_once __DIR__ . '/../partials/nav.tpl.php' ?>

        </div>
    </header><!-- End Header -->
