<?php

class M_barang extends CI_Model
{
    private $table = 'barang';

    public function getAll()
    {
        return $this->db->get($this->table);
    }

    public function getSelected($id)
    {
        return $this->db->get_where($this->table, array('id' => $id));
    }

    public function deleteData($id)
    {
        $this->db->delete($this->table, array('id' => $id));
    }

    function add($data)
    {
        $this->db->insert($this->table, $data);
    }

    function edit($data, $id)
    {
        $this->db->update($this->table, $data, array('id' => $id));
    }
}
