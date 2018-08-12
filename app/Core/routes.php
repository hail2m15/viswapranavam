<?php


/** Create alias for Router. */

use Core\Router;

use Helpers\Hooks;



/* Define routes. */


Router::any('', 'Controllers\Auth@login');

Router::any('admin/home', 'Controllers\Admin@Home');
Router::any('healer/home', 'Controllers\Healer@Home');
Router::any('accountant/home', 'Controllers\Accountant@Home');

Router::any('admin/userView', 'Controllers\Admin@userView');
Router::any('admin/userAdd', 'Controllers\Admin@userAdd');
Router::any('acct/update', 'Controllers\Accountant@paymentView');
Router::any('acct/view', 'Controllers\Accountant@paymentUpdate');

Router::any('logout', 'Controllers\Auth@logout');
Router::any('admin/logout', 'Controllers\Auth@logout');
Router::any('healer/logout', 'Controllers\Auth@logout');
Router::any('accountant/logout', 'Controllers\Auth@logout');


Router::any('session', function() {    echo '<pre>';  



print_r(\Helpers\Session::display());

echo '</pre>';});/* Module routes. */$hooks = Hooks::get();

$hooks->run('routes');



/* If no route found. */



Router::error('Core\Error@index');

/* Turn on old style routing. */



Router::$fallback = false;/* Execute matched routes. */Router::dispatch();