<?php

class Genes_model extends CI_Model
{
    public function __construct()	{
        $this->load->database();
    }

    public function insert($data) {
        return $this->db->insert('genes',$data);
    }

    public function update($id,$data) {
        $this->db->where('id', $id);
        return $this->db->update('genes', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('genes');
    }

    public function selectAll()
    {
        $query = $this->db->get('genes');
        return $query;
    }

    public function selectByID($id)
    {
        $sql = "select g.*, p.entryname, p.proteinname, p.genename, p.organism, p.taxonomiclineage, 
                    p.proteinfamily from genes as g left join proteins as p" . " on (g.proteinid = p.id) 
                    where  g.id = {$this->db->escape_like_str($id)} ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function selectGenesByCoordinates($chromossomeid, $start, $end)
    {
        $sql = "select g.*, p.* from genes as g left join proteins as p" .
            " on (g.proteinid = p.id) where  g.id = {$this->db->escape_like_str($id)} ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function selectByEverything($term)
    {
        $sql = "select g.*,p.entryname, p.proteinname, p.genename, p.organism,
        
        p.proteinfamily from genes as g left join proteins as p" .

            " on (g.proteinid = p.id) where UPPER(p.proteinname) LIKE UPPER('%" . $this->db->escape_like_str($term) . "%') or " .
            " UPPER(g.proteinid) LIKE UPPER('%" . $this->db->escape_like_str($term) . "%') or g.id LIKE '" .
            $this->db->escape_like_str($term) . "' " . " or UPPER(p.genename) LIKE UPPER('" . $this->db->escape_like_str($term) .
            "') and g.proteinid <> '' ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}