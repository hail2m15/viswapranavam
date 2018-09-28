<?php

namespace Models;

class AuthModel extends \Core\Model {

    public function getPassword($name) {
        $data = $this->db->select("SELECT * FROM login WHERE username=:name", array(':name' => $name));
        return $data[0];
    }
    
    public function addNewPassword($name, $pass) {
        $this->db->update('adminlogin', array('password' => $pass), array('username' => $name));
    }
    
    public function register($input){
         try {
            $id = $this->db->insert('user_details', $input);
            return $id;
        } catch (PDOException $ex) {
            echo Error::display('Registration Failed!' . $ex);
        }
    }
    
    public function insertLogin($input){
         try {
            $id = $this->db->insert('login', $input);
            return $id;
        } catch (PDOException $ex) {
            echo Error::display('Registration Failed!' . $ex);
        }
    }
    
    

}
