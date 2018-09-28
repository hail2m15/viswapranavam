<?php


/** Create alias for Router. */

use Core\Router;

use Helpers\Hooks;



/* Define routes. */


Router::any('', 'Controllers\Auth@login');
Router::any('login', 'Controllers\Auth@login');
Router::any('register', 'Controllers\Auth@register');

Router::any('admin/logout', 'Controllers\Auth@logout');
Router::any('admin/home', 'Controllers\Admin@Home');
Router::any('admin/userView', 'Controllers\Admin@userView');
Router::any('admin/userAdd', 'Controllers\Admin@userAdd');
Router::any('admin/healerView', 'Controllers\Admin@healerView');
Router::any('admin/healerAdd', 'Controllers\Admin@healerAdd');
Router::any('admin/detail', 'Controllers\Admin@details');
Router::any('admin/changepassword', 'Controllers\Admin@changePassword');

Router::any('user/logout', 'Controllers\Auth@logout');
Router::any('user/home', 'Controllers\User@Home');
Router::any('user/requestHeal', 'Controllers\User@requestHealing');
Router::any('user/changepassword', 'Controllers\User@changePassword');
Router::any('user/detail', 'Controllers\User@details');

Router::any('healer/logout', 'Controllers\Auth@logout');
Router::any('healer/home', 'Controllers\Healer@Home');
Router::any('healer/detail', 'Controllers\Healer@details');
Router::any('healer/changepassword', 'Controllers\Healer@changePassword');

Router::any('logout', 'Controllers\Auth@logout');


Router::any('session', function() {    echo '<pre>';  



print_r(\Helpers\Session::display());

echo '</pre>';});/* Module routes. */$hooks = Hooks::get();

$hooks->run('routes');



/* If no route found. */



Router::error('Core\Error@index');

/* Turn on old style routing. */



Router::$fallback = false;/* Execute matched routes. */Router::dispatch();