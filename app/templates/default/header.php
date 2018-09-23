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
            Url::templatePath() . 'vendor/bootstrap/css/bootstrap.min.css',
            Url::templatePath() . 'vendor/font-awesome/css/font-awesome.min.css',
            Url::templatePath() . 'vendor/datatables/dataTables.bootstrap4.css',
            Url::templatePath() . 'css/sb-admin.css',
            Url::templatePath() . 'css/jquery-ui.css',
            Url::templatePath() . 'css/jquery-ui.min.css',
            Url::templatePath() . 'css/amstyle.css',
        ]);
        ?>

        <?php
        Assets::js([
            Url::templatePath() . 'vendor/jquery/jquery.min.js',
            Url::templatePath() . 'js/jquery-ui.js',
            Url::templatePath() . 'js/jquery-ui.min.js',
            Url::templatePath() . 'vendor/popper/popper.min.js',
            Url::templatePath() . 'vendor/bootstrap/js/bootstrap.min.js',
            Url::templatePath() . 'vendor/jquery-easing/jquery.easing.min.js',
            Url::templatePath() . 'vendor/chart.js/Chart.min.js',
            Url::templatePath() . 'vendor/datatables/jquery.dataTables.js',
            Url::templatePath() . 'vendor/datatables/dataTables.bootstrap4.js',
            Url::templatePath() . 'js/sb-admin.min.js',
            Url::templatePath() . 'js/sb-admin-datatables.min.js',
            Url::templatePath() . 'js/sb-admin-charts.min.js',
            Url::templatePath() . 'js/jquery.table2excel.js',
            Url::templatePath() . 'js/karan.js'
        ]);
        //hook for plugging in css
        $hooks->run('css');
        ?>



    </head>
    <body  class="fixed-nav sticky-footer bg-dark" id="page-top">

        <?php
//hook for running code after body tag
        $hooks->run('afterBody');
        ?>
