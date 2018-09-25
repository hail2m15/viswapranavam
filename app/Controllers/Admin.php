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

    public function loadHeader($title){
        View::renderTemplate('header', array('title' => $title));
        View::render('admin/common/head');
    }

     public function loadFooter(){
        View::render('admin/common/foot');
        View::renderTemplate('footer');
    }
    
    public function Home() {

        $this->loadHeader('Home');

        View::render('admin/Home');

        $this->loadFooter();

    }
    public function healerView() {

        $this->loadHeader('User');

        View::render('admin/healerView');

        $this->loadFooter();

    }
    public function healerAdd() {

        $this->loadHeader('Add User');

        View::render('admin/healerAdd');

        $this->loadFooter();

    }

    public function userView() {

        $this->loadHeader('User');

        View::render('admin/userView');

        $this->loadFooter();

    }

    
}

