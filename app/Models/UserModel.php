<?php

namespace Models;

class UserModel extends \Core\Model {

    public function addRequest($input) {

        try {
            $id = $this->db->insert('healingtable', $input);
            return $id;
        } catch (PDOException $ex) {
            echo Error::display('Registration Failed!' . $ex);
        }
    }
    
    public function getCurrentRequest($id) {
        return $this->db->select('SELECT * FROM healingtable WHERE status != :x AND fid = :id', array(':id' => $id,':x'=>'X'));
    }
    
    public function getDetails($id) {
        return $this->db->select('SELECT * FROM healingtable WHERE :id=id', array(':id' => $id));
    }
    public function getUserDetails($id) {
        return $this->db->select('SELECT * FROM user_details WHERE :id=id', array(':id' => $id));
    }
}
