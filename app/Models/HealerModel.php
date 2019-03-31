<?php

namespace Models;

class HealerModel extends \Core\Model {

    public function addRequest($input) {

        try {
            $id = $this->db->insert('healingtable', $input);
            return $id;
        } catch (PDOException $ex) {
            echo Error::display('Registration Failed!' . $ex);
        }
    }
    
    
     public function updateHealingTable($data, $id) {
        try {
            $this->db->update('healingtable', $data, array('id'=>$id));
        } catch (PDOException $ex) {
            echo Error::display("Registration Failed!" . $ex);
        }
    }
    
    public function insertAssignedHealer($data){
        try {
            $this->db->insert('healer_assigned', $data);
            return 'Insertion successfull!!';
        } catch (PDOException $ex) {
            echo Error::display('Registration Failed!' . $ex);
        }
    }


    public function getHealingRequests($id) {
        return $this->db->select('SELECT * FROM healingtable WHERE id IN (SELECT tableid FROM healer_assigned WHERE healerid=:id)', array(':id' => $id));
    }

    public function getCurrentRequest($id) {
        return $this->db->select('SELECT * FROM healingtable WHERE status != :x AND fid = :id', array(':id' => $id, ':x' => 'X'));
    }

    public function getDetails($id) {
        return $this->db->select('SELECT * FROM healingtable WHERE :id=id', array(':id' => $id));
    }
    
    public function getHealerDetails($id) {
        return $this->db->select('SELECT * FROM healer WHERE :id=id', array(':id' => $id));
    }

    public function getUserDetails($id) {
        return $this->db->select('SELECT * FROM user_details WHERE :id=id', array(':id' => $id));
    }

}
