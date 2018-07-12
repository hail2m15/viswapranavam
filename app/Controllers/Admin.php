<?php



namespace Controllers;



use Core\View,

    Helpers\Session,

    Helpers\Url;



class Admin extends \Core\Controller {


    public function demo() {

        View::renderTemplate('header', array('title' => 'Register'));

        View::render('common/login');

        View::renderTemplate('footer');

    }
    public function Home() {

        View::renderTemplate('header', array('title' => 'admin Home'));

        View::render('admin/adminHome');

        View::renderTemplate('footer');

    }
    public function userView() {

        View::renderTemplate('header', array('title' => 'admin User-View'));

        View::render('admin/userView');

        View::renderTemplate('footer');

    }
    public function userAdd() {

        View::renderTemplate('header', array('title' => 'admin User-Add'));

        View::render('admin/userAdd');

        View::renderTemplate('footer');

    }


    
}

