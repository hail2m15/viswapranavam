<?php

namespace Controllers;

use Core\View,
    Helpers\Session,
    Helpers\Url;

class User extends \Core\Controller {

    public function __construct() {
        $this->_model = new \Models\UserModel();
        if (!Session::get('vuser')) {
            Url::redirect('');
        }
    }

    public function loadHeader($title) {
        View::renderTemplate('header', array('title' => $title));
        View::render('user/common/head');
    }

    public function loadFooter() {
        View::render('user/common/foot');
        View::renderTemplate('footer');
    }

    public function Home() {

        $this->loadHeader('Home');
        $data = $this->_model->getCurrentRequest(Session::get('id'));
        View::render('user/Home',$data);

        $this->loadFooter();
    }

    public function requestHealing() {
        $this->loadHeader('Request Healing');
        if (isset($_POST['submit'])) {
            $input = array(
                'fid' => Session::get('id'),
                'name' => $_POST['name'],
                'age' => $_POST['age'],
                'reason' => $_POST['reason'],
                'address' => $_POST['address'],
                'timezone' => $_POST['tzone'],
                'date' => date('Y-m-d'),
                'status' => 'R'
            );

            if ($this->_model->addRequest($input)) {
                $data = 'Your request was successfull';
                Url::redirect();
            } else {
                $error = 'Something went wrong';
            }
        }
        View::render('user/requestHealing', $data, $error);

        $this->loadFooter();
    }
    
    public function details(){
        $this->loadHeader('Healing details');
        $id = $_GET['id'];
        $user = $this->_model->getUserDetails(Session::get('id'));
        $data = $this->_model->getDetails($id);
        View::render('user/details', array('details'=>$data[0],'user'=>$user[0]), $error);
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

        View::render('user/changepassword', $data, $error);

        $this->loadFooter();
    }

}
