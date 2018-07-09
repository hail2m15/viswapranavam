<?php

/**
 * Sample layout.
 */
use Helpers\Assets;
use Helpers\Hooks;
use Helpers\Url;

//initialise hooks
$hooks = Hooks::get();
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
    <head>

        <!-- Site meta -->
        <meta charset="utf-8">
        <?php
        //hook for plugging in meta tags
        $hooks->run('meta');
        ?>

        <title><?php echo $data['title'] . ' - ' . SITETITLE; //SITETITLE defined in app/Core/Config.php       ?></title>

        <!-- CSS -->
        <?php
        Assets::css([
            Url::templatePath() . 'css/bootstrap.min.css',
            Url::templatePath() . 'css/datatables.min.css',
            Url::templatePath() . 'css/font-awesome/css/font-awesome.min.css',
            Url::templatePath() . 'css/style.css',

        ]);
        ?>

        <?php
        Assets::js([
            Url::templatePath() . 'js/jquery.min.js',
            Url::templatePath() . 'js/bootstrap.min.js',
            Url::templatePath() . 'js/jquery-ui.min.js',
            Url::templatePath() . 'js/datatables.min.js',
            Url::templatePath() . 'js/fontawesome.js',


        ]);
        //hook for plugging in css
        $hooks->run('css');
        ?>



    </head>
    <body>

        <?php
//hook for running code after body tag
        $hooks->run('afterBody');
        ?>
