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
            $this->_model->updateHealingTable($input, $_POST['id']);
        }

        if (isset($_POST['updateS'])) {
            $input = array(
                'sdate' => $_POST['date'],
                'time' => $_POST['time'],
                'status' => 'S'
            );
            $this->_model->updateHealingTable($input, $_POST['id']);
        }

        if (isset($_POST['complete'])) {
            $input = array(
                'status' => 'D'
            );
            $this->_model->updateHealingTable($input, $_POST['id']);
            Url::redirect('healer/healingComplete?id=' . $id);
        }

        $data = $this->_model->getDetails($id);
        $user = $this->_model->getUserDetails($data[0]->fid);
        View::render('healer/details', array('details' => $data[0], 'user' => $user[0]), $error);
        $this->loadFooter();
    }

    public function healingComplete() {
        $this->loadHeader('Reschedule healing');
        $id = $_GET['id'];
        if (isset($_POST['rescedule'])) {

            $data = array(
                'status' => 'X'
            );
            $this->_model->updateHealingTable($data, $_POST['tid']);

            $tableDetails = $this->_model->getDetails($_POST['tid']);
            $input = array(
                'fid' => $tableDetails[0]->fid,
                'name' => $tableDetails[0]->name,
                'age' => $tableDetails[0]->age,
                'reason' => $tableDetails[0]->reason,
                'address' => $tableDetails[0]->address,
                'timezone' => $tableDetails[0]->timezone,
                'advise' => $tableDetails[0]->advise,
                'date' => date('Y-m-d'),
                'sdate' => $_POST['date'],
                'time' => $_POST['time'],
                'status' => 'S'
            );

            $tableID = $this->_model->addRequest($input);

            $assignHealer = array(
                'healerid' => Session::get('id'),
                'tableid' => $tableID
            );
            $this->_model->insertAssignedHealer($assignHealer);

            Url::redirect();
        }
        $data = $this->_model->getDetails($id);
        $user = $this->_model->getUserDetails($data[0]->fid);
        View::render('healer/healingComplete', array('details' => $data[0], 'user' => $user[0]), $error);
        $this->loadFooter();
    }

    public function completeDetails() {
        $this->loadHeader('Details');
        $id = $_GET['id'];
        $data = $this->_model->getDetails($id);
        $user = $this->_model->getUserDetails($data[0]->fid);
        View::render('healer/completeDetails', array('details' => $data[0], 'user' => $user[0]), $error);
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
        $healer = $this->_model->getHealerDetails(Session::get('id'));
        View::render('healer/changepassword', array('message'=>$data,'healer'=>$healer[0]), $error);
        $this->loadFooter();
    }

}
