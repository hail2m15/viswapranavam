<?php

namespace Models;

class AdminModel extends \Core\Model {

    public function registerHealer($register) {

        try {
            $id = $this->db->insert('healer', $register);
            return $id;
        } catch (PDOException $ex) {
            echo Error::display('Registration Failed!' . $ex);
        }
    }

    public function getRequests() {
        return $this->db->select('SELECT * FROM healingtable');
    }

    public function getPaymentRequests() {
        return $this->db->select('SELECT * FROM healingtable where pstatus != :status',array(':status'=>'D'));
    }
    
    public function getPaidRequests() {
        return $this->db->select('SELECT * FROM healingtable where pstatus = :status',array(':status'=>'D'));
    }

    public function getDetails($id) {
        return $this->db->select('SELECT * FROM healingtable WHERE :id=id', array(':id' => $id));
    }

    public function updateHealingTable($data, $id) {
        try {
            $this->db->update('healingtable', $data, array('id' => $id));
        } catch (PDOException $ex) {
            echo Error::display("Registration Failed!" . $ex);
        }
    }

    public function registerAccountant($register) {

        try {
            $id = $this->db->insert('accountant', $register);
            return $id;
        } catch (PDOException $ex) {
            echo Error::display('Registration Failed!' . $ex);
        }
    }

    public function insertLogin($data) {

        try {
            $this->db->insert('login', $data);
            return 'Registration successfull!!';
        } catch (PDOException $ex) {
            echo Error::display('Registration Failed!' . $ex);
        }
    }

    public function insertAssignedHealer($data) {
        try {
            $this->db->insert('healer_assigned', $data);
            return 'Insertion successfull!!';
        } catch (PDOException $ex) {
            echo Error::display('Registration Failed!' . $ex);
        }
    }

    public function getAllHealer() {
        return $this->db->select('SELECT * FROM healer');
    }

    public function getAllAccountant() {
        return $this->db->select('SELECT * FROM accountant');
    }

    public function getAllUser() {
        return $this->db->select('SELECT * FROM user_details');
    }

    public function getHealer($id) {
        return $this->db->select('SELECT * FROM healer WHERE id IN (SELECT healerid FROM healer_assigned WHERE tableid = :id)', array(':id' => $id));
    }

    public function getAccountant($id) {
        return $this->db->select('SELECT * FROM accountant WHERE id=:id', array(':id' => $id));
    }

    public function getUser($id) {
        return $this->db->select('SELECT * FROM user_details WHERE id=:id', array(':id' => $id));
    }

    public function updateHealer($data, $id) {
        try {
            $this->db->update('healer', $data, array('id' => $id));
        } catch (PDOException $ex) {
            echo Error::display("Registration Failed!" . $ex);
        }
    }

    public function updateAccountant($data, $id) {
        try {
            $this->db->update('accountant', $data, array('id' => $id));
        } catch (PDOException $ex) {
            echo Error::display("Registration Failed!" . $ex);
        }
    }

    public function updateUser($data, $id) {
        try {
            $this->db->update('user', $data, array('id' => $id));
        } catch (PDOException $ex) {
            echo Error::display("Registration Failed!" . $ex);
        }
    }

    public function deleteHealer($id) {
        try {
            $this->db->delete('healer', array('id' => $id));
            $this->db->delete('login', array('fid' => $id));
        } catch (PDOException $ex) {
            echo Error::display("Registration Failed!" . $ex);
        }
    }

    public function deleteAccountant($id) {
        try {
            $this->db->delete('accountant', array('id' => $id));
            $this->db->delete('login', array('fid' => $id));
        } catch (PDOException $ex) {
            echo Error::display("Registration Failed!" . $ex);
        }
    }

    public function deleteUser($id) {
        try {
            $this->db->delete('user_details', array('id' => $id));
            $this->db->delete('login', array('fid' => $id));
        } catch (PDOException $ex) {
            echo Error::display("Registration Failed!" . $ex);
        }
    }

    public function addNewPassword($name, $pass) {
        $this->db->update('login', array('password' => $pass), array('username' => $name));
    }

    public function getPassword($name) {
        $data = $this->db->select("SELECT password FROM login WHERE username=:name", array(':name' => $name));
        return $data[0];
    }

}
