<?php


/** Create alias for Router. */

use Core\Router;

use Helpers\Hooks;



/* Define routes. */



Router::any('login', 'Controllers\Admin@demo');
Router::any('admin/home', 'Controllers\Admin@Home');
Router::any('admin/userView', 'Controllers\Admin@userView');
Router::any('admin/userAdd', 'Controllers\Admin@userAdd');
Router::any('acct/update', 'Controllers\Accountant@paymentView');
Router::any('acct/view', 'Controllers\Accountant@paymentUpdate');




Router::any('session', function() {    echo '<pre>';  



print_r(\Helpers\Session::display());

echo '</pre>';});/* Module routes. */$hooks = Hooks::get();

$hooks->run('routes');



/* If no route found. */



Router::error('Core\Error@index');

/* Turn on old style routing. */



Router::$fallback = false;/* Execute matched routes. */Router::dispatch();