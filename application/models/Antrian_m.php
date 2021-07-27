<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian_m extends CI_Model {

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
    public function getAll($id = null)
    {
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

    public function get_id($table, $where){
		$this->db->where($where);
		$sql=$this->db->get($table);
		return $sql;
	}

    public function get_max_id($table, $field, $where){
		$this->db->select_max($field);
		$this->db->where($where);
		$sql = $this->db->get($table);
		return $sql;
	}

    public function add($table, $data){
		$this->db->insert($table, $data);
	}

    // public function add($post)
    // {
    //     $params['name'] = $post['name'];
    //     $params['keterangan'] = $post['keterangan'];
    //     $this->db->insert('loket', $params);
    // }

    // public function del($id)
    // {
    //     $this->db->where('loket_id', $id);
    //     $this->db->delete('loket');
    // }

    // public function edit($post)
    // {
    //     $params['name'] = $post['name'];
    //     $params['keterangan'] = $post['keterangan'];
    //     $this->db->where('loket_id', $post['loket_id']);
    //     $this->db->update('loket', $params);
    // }
}