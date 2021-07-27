<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AntrianLoket_m extends CI_Model {
    
    public function get($id = null)
    {
        $nowDate = date('Y-m-d');
        $this->db->limit('1');
        $this->db->select('*');
        $this->db->from('antrian_loket');
        $this->db->where('tgl_antrian_loket',$nowDate);
        $this->db->join('loket','loket.loket_id=antrian_loket.loket_id');
        $this->db->order_by('id_antrian_loket','DESC');
        if($id != null){
            $this->db->where('id_antrian_loket', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getDay($id = null)
    {
        $nowDate = date('Y-m-d');
        $this->db->select('*');
        $this->db->from('antrian_loket');
        $this->db->where('tgl_antrian_loket',$nowDate);
        $this->db->join('loket','loket.loket_id=antrian_loket.loket_id');
        $this->db->order_by('id_antrian_loket','DESC');
        if($id != null){
            $this->db->where('id_antrian_loket', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getAll($id = null)
    {
        // $nowDate = date('Y-m-d');
        $this->db->select('*');
        $this->db->from('antrian_loket');
        $this->db->join('loket','loket.loket_id=antrian_loket.loket_id');
        // $this->db->where('tgl_antrian_loket');
        if($id != null){
            $this->db->where('id_antrian_loket', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_max_id($table, $field, $where){
		$this->db->select_max($field);
		$this->db->where($where);
		$sql = $this->db->get($table);
		return $sql;
	} 

    public function getAntrian()
    {
        $nowDate = date('Y-m-d');
        // $this->db->limit('1');
        $this->db->select('*');
        $this->db->from('antrian_loket');
        $this->db->where('no_antrian_loket');
        // $this->db->order_by('no_antrian_loket','DESC');
        // if($id != null){
        //     $this->db->where('id_antrian_loket', $id);
        // }
        $query = $this->db->get();
        return $query;
    }

    // public function add($post)
    // {
    //     $params['id_antrian'] = $post['id_antrian'];
    //     $params['loket_id'] = $post['loket_id'];
    //     $params['no_antrian_loket'] = $post['no_antrian_loket'];
    //     $this->db->insert('antrian_loket', $params);
    // }

    public function del($id)
    {
        $this->db->where('id_antrian_loket', $id);
        $this->db->delete('antrian_loket');
    }

}