<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">

    <?= css('assets/css/style.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700|Slabo+27px|Poiret+One" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <?= js('assets/js/jquery.fittext.js') ?>
    <?= js('assets/js/main.js') ?>

</head>
<body>

    <header>
        <div id='site-title'>
            <a href="<?= url() ?>" rel="home">Patricia Cassidy L.Ac</a>
        </div>
        <div id='menu'>
            <?php snippet('menu') ?>
        </div>
    </header>

  <main id='<?php echo $page->title() ?>' class="main <?php if($page->isHomePage() == false){echo 'top-space';} ?>" role="main">

