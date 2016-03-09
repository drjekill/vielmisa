<?php
class legal_model extends CI_MODEL
{

	private $id_edificio;

    function __construct(){
    }

	public function set_id_edificio($id_edificio = false){
		
		if($id_edificio){
			$this->id_edificio = $id_edificio;
		}else{
			$this->id_edificio = $this->user->id_edificio;
		}

	}

	public function get_legales(){
		$this->set_id_edificio();
		$this->db->order_by('id_legal','desc');
		$rs = $this->db->get_where('legal',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}

	public function get_legales_contratos(){
		$this->set_id_edificio();
		$this->db->order_by('id_legales_contratos','desc');
		$rs = $this->db->get_where('legales_contratos',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}

	public function get_legal_by_id($id){
		$this->set_id_edificio();
		$id_legal = intval($id);
		$rs = $this->db->get_where('legal',array('id_legal'=>$id_legal));
		if($rs->num_rows() == 1){
			return $rs;
		}
	}
}    