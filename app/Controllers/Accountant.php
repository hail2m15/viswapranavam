<?php



namespace Controllers;



use Core\View,

    Helpers\Session,

    Helpers\Url;


class Accountant extends \Core\Controller {


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
    public function paymentView() {

        View::renderTemplate('header', array('title' => 'accountant View'));

        View::render('Accountant/paymentView');

        View::renderTemplate('footer');

    }
    public function paymentUpdate() {

        View::renderTemplate('header', array('title' => 'accountant Update'));

        View::render('Accountant/paymentUpdate');

        View::renderTemplate('footer');

    }


    
}

