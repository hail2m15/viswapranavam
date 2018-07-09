<?php



namespace Controllers;



use Core\View,

    Helpers\Session,

    Helpers\Url;



class Admin extends \Core\Controller {


    public function demo() {

        View::renderTemplate('header', array('title' => 'Register'));
        $data = $this->$cars;
        View::render('common/login' ,$cars);

        View::renderTemplate('footer');

    }
    public function userView() {

        View::renderTemplate('header', array('title' => 'user view'));

        View::render('admin/userHome');

        View::renderTemplate('footer');

    }


    
}

$cars = array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);