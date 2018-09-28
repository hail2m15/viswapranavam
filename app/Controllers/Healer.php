<?php

namespace Controllers;

use Core\View,
    Helpers\Session,
    Helpers\Url;

class Healer extends \Core\Controller {

    public function __construct() {
        $this->_model = new \Models\HealerModel();
        if (!Session::get('vhealer')) {
            Url::redirect('');
        }
    }

    public function loadHeader($title) {
        View::renderTemplate('header', array('title' => $title));
        View::render('healer/common/head');
    }

    public function loadFooter() {
        View::render('healer/common/foot');
        View::renderTemplate('footer');
    }

    public function Home() {

        $this->loadHeader('Home');
       
        $requests = $this->_model->getHealingRequests(Session::get('id'));
        View::render('healer/home', $requests);

        $this->loadFooter();
    }

    public function details() {
        $this->loadHeader('Healing details');
        $id = $_GET['id'];
         if (isset($_POST['updateC'])) {
            $input = array(
                'advise' => $_POST['advise'],
                'status' => 'C'
            );
            $this->_model->updateHealingTable($input,$_POST['id']);
        }
        
        if (isset($_POST['updateS'])) {
            $input = array(
                'sdate' => $_POST['date'],
                'time' => $_POST['time'],
                'status' => 'S'
            );
            $this->_model->updateHealingTable($input,$_POST['id']);
        }
        $data = $this->_model->getDetails($id);
        $user = $this->_model->getUserDetails($data[0]->fid);
        View::render('healer/details', array('details' => $data[0], 'user' => $user[0]), $error);
        $this->loadFooter();
    }

}
