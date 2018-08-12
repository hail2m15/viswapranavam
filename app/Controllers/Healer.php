<?php



namespace Controllers;



use Core\View,

    Helpers\Session,

    Helpers\Url;



class Healer extends \Core\Controller {


public function Home() {

        View::renderTemplate('header', array('title' => 'admin Home'));

        View::render('healer/home');

        View::renderTemplate('footer');

    }
//    public function userView() {
//
//        View::renderTemplate('header', array('title' => 'User-View'));
//
//        View::render('admin/userView');
//
//        View::renderTemplate('footer');
//
//    }
//    public function userAdd() {
//
//        View::renderTemplate('header', array('title' => 'User-Add'));
//
//        View::render('admin/userAdd');
//
//        View::renderTemplate('footer');
//
//    }


    
}

