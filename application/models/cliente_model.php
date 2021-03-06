<?php
class Cliente_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_clients() {
        $res = $this->db->get('clientes'); // equivalente ao mysql_query()
        //return $res->result(); // equivalente ao mysql_fetch_object()
        return $res->result_array(); // equivalente ao mysql_fetch_array()
    }
    public function count_clients() {
        return $this->db->count_all_results('clientes');
    }
    public function get_clients($qtde,$offset) {
        $this->db->select('*');
        $this->db->from('clientes');       
        $this->db->limit($qtde,$offset);
        $res = $this->db->get();
        return $res->result_array();
    }
    
    public function get_fields() {
        return $this->db->list_fields('clientes');
    }
    
    public function get_by_id($id) {
        $res = $this->db->get_where('clientes',array('id'=>$id));
        return $res->row_array();
    }
    
    public function delete($id) {
        
    }
    
    public function edit($dados) {        
        $this->db->where('id',$dados['id']);
        $res = $this->db->update('clientes',$dados);
        return $res;
    }
}
/* fim do arquivo models/cliente_model.php */