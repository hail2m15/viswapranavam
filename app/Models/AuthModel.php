<?php

namespace Models;

class AuthModel extends \Core\Model {

    public function getPassword($name) {
        $data = $this->db->select("SELECT * FROM login WHERE username=:name", array(':name' => $name));
        return $data[0];
    }

    public function register($register) {

        try {
            $id = $this->db->insert('details', $register);
            return $id;
        } catch (PDOException $ex) {
            echo Error::display("Registration Failed!" . $ex);
        }
    }

    public function insertLogin($data) {

        try {
            $this->db->insert('login', $data);
            return "Registration successfull!!";
        } catch (PDOException $ex) {
            echo Error::display("Registration Failed!" . $ex);
        }
    }

    public function insertChildren($data) {

        try {
            $this->db->insert('children', $data);
            return "Registration successfull!!";
        } catch (PDOException $ex) {
            echo Error::display("Registration Failed!" . $ex);
        }
    }

    public function getPassword1($name) {
        $data = $this->db->select("SELECT * FROM adminlogin WHERE username=:name", array(':name' => $name));
        return $data[0]->password;
    }

    public function addNewPassword($name, $pass) {
        $this->db->update('adminlogin', array('password' => $pass), array('username' => $name));
    }

}
