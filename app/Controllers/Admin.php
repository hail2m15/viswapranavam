<?php

namespace Controllers;

use Core\View,
    Helpers\Session,
    Helpers\Url;

class Admin extends \Core\Controller {

    public function __construct() {
        $this->_model = new \Models\AdminModel();
        if (!Session::get('vadmin')) {
            Url::redirect('');
        }
    }

    public function loadHeader($title) {
        View::renderTemplate('header', array('title' => $title));
        View::render('admin/common/head');
    }

    public function loadFooter() {
        View::render('admin/common/foot');
        View::renderTemplate('footer');
    }

    public function Home() {

        $this->loadHeader('Home');
        if (isset($_POST['assign'])) {
            $input = array(
                'status' => 'H'
            );

            $data = array(
                'healerid' => $_POST['hid'],
                'tableid' => $_POST['id']
            );
            $this->_model->insertAssignedHealer($data);
            $this->_model->updateHealingTable($input, $_POST['id']);
        }
        $data = $this->_model->getRequests();
        $healers = $this->_model->getAllHealer();
        View::render('admin/Home', array('requests' => $data, 'healers' => $healers));

        $this->loadFooter();
    }

    public function healerView() {

        $this->loadHeader('User');
        if (isset($_POST['save'])) {
            unset($_POST['save']);
            $id = $this->_model->registerHealer($_POST);
            if ($id) {
                $options = [
                    'cost' => 11
                ];
                $hash = password_hash($_POST['phone'], PASSWORD_BCRYPT, $options);

                $data = array(
                    'username' => $_POST['email'],
                    'password' => $hash,
                    'level' => '1',
                    'fid' => $id,
                );
                $this->_model->insertLogin($data);
            }
        }
        $healers = $this->_model->getAllHealer();
        View::render('admin/healerView', $healers);

        $this->loadFooter();
    }

    public function healerAdd() {

        $this->loadHeader('Add User');

        View::render('admin/healerAdd');

        $this->loadFooter();
    }

    public function userView() {

        $this->loadHeader('User');
        $user = $this->_model->getAllUser();
        View::render('admin/userView', $user);

        $this->loadFooter();
    }

    public function details() {
        $this->loadHeader('Healing details');
        $id = $_GET['id'];
        $data = $this->_model->getDetails($id);
        $user = $this->_model->getUser($data[0]->fid);
        $healer = $this->_model->getHealer($id);
        View::render('admin/details', array('details' => $data[0], 'user' => $user[0], 'healer' => $healer), $error);
        $this->loadFooter();
    }

    public function changePassword() {

        $this->loadHeader('Change Password');

        if (isset($_POST['submit'])) {

            $name = $_POST['name'];

            if (password_verify($_POST['old'], $this->_model->getPassword1($name))) {

                if ($_POST['new'] == $_POST['cnew']) {

                    $options = [
                        'cost' => 11
                    ];

                    $hash = password_hash($_POST['new'], PASSWORD_BCRYPT, $options);

                    $this->_model->addNewPassword($name, $hash);

                    $data = "Password updated successfully!";
                } else {

                    $error[] = "New password missmatched with confirmation!!";
                }
            } else {

                $error[] = "Wrong password!!";
            }
        }

        View::render('admin/changepassword', $data, $error);

        $this->loadFooter();
    }

    public function payment() {
        $this->loadHeader('Payment');
        if (isset($_POST['paid'])) {
            $input = array(
                'pdate' => date('Y-m-d'),
                'pstatus' => 'D'
            );
            $this->_model->updateHealingTable($input, $_POST['id']);
        }
        $data = $this->_model->getPaymentRequests();
        View::render('admin/payment', array('requests' => $data));
        $this->loadFooter();
    }

    public function paid() {
        $this->loadHeader('Paid sessions');
        if (isset($_POST['cancel'])) {
            $input = array(
                'pdate' => date('Y-m-d'),
                'pstatus' => 'C'
            );
            $this->_model->updateHealingTable($input, $_POST['id']);
        }
        $data = $this->_model->getPaidRequests();
        View::render('admin/paidView', array('requests' => $data));
        $this->loadFooter();
    }

}
