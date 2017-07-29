<!DOCTYPE html>
    <html>
    <head>
        <title><?php echo $SiteTitle.' '.( $Title != "" ? " :: $Title" : "") ?></title>
        <link rel="stylesheet" href="<?php echo $includes_url; ?>foundation.min.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $includes_url . $CssStyle; ?>.css" type="text/css" />
    </head>
    <body>
        <header>
            <div class="intro container">
                <a href="<?php echo $root_url; ?>" title="Home"><?php echo $PageTitle; ?></a>
            </div>
            <?php include("navbar.php"); ?>
        </header>
        <div id="main" class="container">
        <?php include("menu.php"); ?>