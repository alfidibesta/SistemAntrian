<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('loket');
        if($id != null){
            $this->db->where('loket_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}