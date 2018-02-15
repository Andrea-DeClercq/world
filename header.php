<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Homepage - Semantic</title>
    <link rel="stylesheet" type="text/css" href="semantic/components/reset.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/site.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/container.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/grid.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/header.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/image.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/menu.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/label.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/table.css">

    <link rel="stylesheet" type="text/css" href="semantic/components/divider.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/segment.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/button.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/list.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/icon.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/transition.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/form.css">
    <!-- Regles CSS définies ou redéfinies, pour cette application -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <script src="assets/library/jquery.min.js"></script>
    <script src="semantic/components/visibility.js"></script>
    <script src="semantic/components/sidebar.js"></script>
    <script src="semantic/components/transition.js"></script>
    <script>
        $(document)
            .ready(function() {
                console.log("execution de codes JS après chargement de la page");

                $('.ui.menu a.item')
                    .on('click', function() {
                        $(this)
                            .addClass('active')
                            .siblings().removeClass('active')
                        ;
                    })
                ;
                $('.ui.dropdown')
                    .dropdown()
                ;
            })
        ;
    </script>
</head>
<body>
<div class="ui pointing menu inverted fixed">

    <a class="active item" href='index.php' id="home">
        GeoWorld
    </a>
    <a>
        <div class="item ui dropdown">
            <div class="text">Continent</div>
            <i class="dropdown icon"></i>
            <div class="menu">
                <div class="item"><a href="continent.php?continent=North%20America"><p>North America</a></div>
                <div class="item"><a href="continent.php?continent=South%20America"><p>South America</a></div>
                <div class="item"><a href="continent.php?continent=Africa"><p>Africa</a></div>
                <div class="item"><a href="continent.php?continent=Europe"><p>Europe</a></div>
                <div class="item"><a href="continent.php?continent=Asia"><p>Asia</a></div>
                <div class="item"><a href="continent.php?continent=Oceania"><p>Oceania</a></div>
            </div>
        </div>
    </a>
    <a class="item">
        Item2
    </a>
    <div class="right menu">
        <?php if (isset($_SESSION['login'])) {?><a class="ui item" href="profil.php"> <?php echo $_SESSION['login']; }?></a>
        <?php if (!isset($_SESSION['login'])) { ?><a class="ui item" href='login.php'>Login</a><?php } ?>

        <a class="item" href="todo-projet.php">
            ProjetPPE-SLAM
        </a>
        <div class="item">
            <div class="ui icon input">
                <input type="text" placeholder="Search...">
                <i class="search link icon"></i>
            </div>
        </div>

    </div>
</div>
<br/><br/><br/>
