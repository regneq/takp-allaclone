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
                <?php echo $PageTitle; ?>
            </div>
            <form name='fullsearch' method='GET' action='fullsearch.php'>
                <input type='hidden' name='isearchtype' value='' />
                <input 
                    onfocus="if(this.value == 'Name...') { this.value = ''; }"
                    onkeypress="var key=event.keyCode || event.which; if(key==13){ this.form.isearchtype.value = 'name'; this.form.submit(); } else {return true;}"
                    type='text'
                    name='iname'
                    placeholder='Name...' />
                <input
                    onfocus="if(this.value == 'ID...') { this.value = ''; }"
                    onkeypress="var key=event.keyCode || event.which; if(key==13){ this.form.isearchtype.value = 'id'; this.form.submit(); } else {return true;}"
                    type='text'
                    name='iid'
                    placeholder='ID...' />
            </form>
            <?php include("navbar.php"); ?>
        </header>
        <div class="container">
        <?php include("menu.php"); ?>