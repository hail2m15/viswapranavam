<?php



namespace Controllers;



use Core\View,

    Helpers\Session,

    Helpers\Url;



class Admin extends \Core\Controller {

    public function __construct() {
        $this->_model = new \Models\AuthModel();
        if (!Session::get('vadmin')) {
            Url::redirect('');
        }
    }


    public function Home() {

        View::renderTemplate('header', array('title' => 'Home'));

        View::render('admin/adminHome');

        View::renderTemplate('footer');

    }
    public function userView() {

        View::renderTemplate('header', array('title' => 'User-View'));

        View::render('admin/userView');

        View::renderTemplate('footer');

    }
    public function userAdd() {

        View::renderTemplate('header', array('title' => 'User-Add'));

        View::render('admin/userAdd');

        View::renderTemplate('footer');

    }


    
}

