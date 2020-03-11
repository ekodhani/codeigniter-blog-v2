<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_CB2 extends CI_Model
{
    public function get($table)
    {
        return $this->db->get($table);
    }

    public function get_where($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function get_keyword($keyword)
    {
        // 
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->like('judul_blog', $keyword);
        $this->db->or_like('konten_isi', $keyword);
        return $this->db->get()->result();
    }
}
