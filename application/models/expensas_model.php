<?php
class Expensas_model extends CI_MODEL
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

	public function get_liquidaciones(){
		$this->set_id_edificio();
		$this->db->order_by('id_liquidacion','desc');
		$rs = $this->db->get_where('liquidacion',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}	

	public function get_prorrateos(){
		$this->set_id_edificio();
		$this->db->order_by('id_prorrateo','desc');
		$rs = $this->db->get_where('prorrateo',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}	

	public function get_gastos(){
		$this->set_id_edificio();
		$this->db->order_by('id_gasto','desc');
		$rs = $this->db->get_where('gasto',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}	

	public function get_anexos(){
		$this->set_id_edificio();
		$this->db->order_by('id_anexo','desc');
		$rs = $this->db->get_where('anexo',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}	

	public function get_mov_mensuales(){
		$this->set_id_edificio();
		$this->db->order_by('id_fondo_mensual','desc');
		$rs = $this->db->get_where('fondo_mensual',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}	

	public function get_mov_anuales(){
		$this->set_id_edificio();
		$this->db->order_by('id_fondo_anual','desc');
		$rs = $this->db->get_where('fondo_anual',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}	

	public function get_asambleas(){
		$this->set_id_edificio();
		$this->db->order_by('id_asamblea','desc');
		$rs = $this->db->get_where('asamblea',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}		

	public function get_encargados (){
		$this->set_id_edificio();
		$this->db->order_by('id_encargado','desc');
		$rs = $this->db->get_where('encargado',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}		

	public function get_circulares(){
		$this->set_id_edificio();
		$this->db->order_by('id_circular','desc');
		$rs = $this->db->get_where('circular',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}		

	public function get_inventarios(){
		$this->set_id_edificio();
		$rs = $this->db->get_where('inventario',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}		

	public function get_libros(){
		$this->set_id_edificio();
		$rs = $this->db->get_where('libro',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}		
	public function get_visitas(){
		$this->set_id_edificio();
		$rs = $this->db->get_where('visita',array('id_edificio'=>$this->id_edificio));
		return $rs;
	}	


}