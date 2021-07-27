<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Loket_m extends CI_Model {

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

    public function add($post)
    {
        $params['name'] = $post['name'];
        $params['kode_loket'] = $post['kode_loket'];
        $params['keterangan'] = $post['keterangan'];
        $this->db->insert('loket', $params);
    }

    public function del($id)
    {
        $this->db->where('loket_id', $id);
        $this->db->delete('loket');
    }

    public function edit($post)
    {
        $params['name'] = $post['name'];
        $params['keterangan'] = $post['keterangan'];
        $this->db->where('loket_id', $post['loket_id']);
        $this->db->update('loket', $params);
    }
}