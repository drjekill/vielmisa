<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class propietarios extends CI_CONTROLLER
{
	public function __construct()
	{
		parent::__construct();
		$this->layout->setFolder('propietarios');
		$this->layout->Layout('propietarios/layout');
		$this->load->model('expensas_model','exp');
		$this->load->model('legal_model','leg');
	}

	public function index(){
		$this->layout->view('index');
	}

	public function expensas(){

		$data['id_edificio'] = $this->user->id_edificio;
		$data['liquidaciones'] = $this->exp->get_liquidaciones();
		$data['prorrateos'] = $this->exp->get_prorrateos();
		$data['gastos'] = $this->exp->get_gastos();
		$data['anexos'] = $this->exp->get_anexos();
		$this->layout->view('expensas',$data);
	}	

	public function movimientos(){

		$data['id_edificio'] = $this->user->id_edificio;
		$data['mensuales'] = $this->exp->get_mov_mensuales();
		$data['anuales'] = $this->exp->get_mov_anuales();
		$this->layout->view('movimientos',$data);
	}
	
	public function legales(){

		$data['id_edificio'] = $this->user->id_edificio;
		$data['legales'] = $this->leg->get_legales();
		$data['contratos'] = $this->leg->get_legales_contratos();
		$this->layout->view('legales',$data);
	}	

	public function asambleas(){

		$data['id_edificio'] = $this->user->id_edificio;
		$data['asambleas'] = $this->exp->get_asambleas();
		$this->layout->view('asambleas',$data);
	}		

	public function circulares(){

		$data['id_edificio'] = $this->user->id_edificio;
		$data['circulares'] = $this->exp->get_circulares();
		$this->layout->view('circulares',$data);
	}	

	public function inventarios(){

		$data['id_edificio'] = $this->user->id_edificio;
		$data['inventarios'] = $this->exp->get_inventarios();
		$this->layout->view('inventarios',$data);
	}
	public function encargados(){

		$data['id_edificio'] = $this->user->id_edificio;


		$data['encargados'] = $this->exp->get_encargados();
		$this->layout->view('encargados',$data);
	}	
	
	public function sugerencias(){
		
		$this->layout->view('sugerencias');
	}	

	public function blank(){
		
		$this->load->view('propietarios/blank');
	}

	public function get_legal(){

		$id_legal = $this->input->post('id_legal');
		$legal =  $this->leg->get_legal_by_id($id_legal);
		if($legal){
			$row = $legal->row();
			$data = json_encode($row);
			echo  $data;
		}
		
	}

	public function obras(){
		$data['obra'] = '';
		$rs = $this->db->get_where('obra',array('id_edificio'=>$this->user->id_edificio));
		if($rs->num_rows() == 1){
			$data['obra'] = $rs->row();
		}
		$this->layout->view('obras',$data);
	}
	
	public function vencimientos(){
		$data['obra'] = '';
		$rs = $this->db->get_where('vencimiento',array('id_edificio'=>$this->user->id_edificio));
		if($rs->num_rows() == 1){
			$data['vencimiento'] = $rs->row();
		}
		$this->layout->view('vencimientos',$data);
	}

	public function emergencias(){
		$data['emergencia'] = '';
		$rs = $this->db->get_where('emergencia',array('id_edificio'=>$this->user->id_edificio));
		if($rs->num_rows() == 1){
			$data['emergencia'] = $rs->row();
		}
		$this->layout->view('emergencias',$data);
	}	

	public function seguros(){

		$data['edificio'] = '';
		$data['personal'] = '';

		$rs = $this->db->get_where('seguro_edificio',array('id_edificio'=>$this->user->id_edificio));
		if($rs->num_rows() == 1){
			$data['edificio'] = $rs->row();
		}		

		$rs = $this->db->get_where('seguro_personal',array('id_edificio'=>$this->user->id_edificio));
		if($rs->num_rows() == 1){
			$data['personal'] = $rs->row();
		}

		$this->layout->view('seguros',$data);

	}


	public function get_encargado(){

		$id_encargado = $this->input->post('id_encargado');
		$encargado =  $this->db->get_where('encargado',array('id_encargado'=>intval($id_encargado)));

		if($encargado){
			$row = $encargado->row();
			$data = json_encode($row);
			echo  $data;
		}
		
	}

	public function libro_sueldos(){

		$data['id_edificio'] = $this->user->id_edificio;
		$data['libros'] = $this->exp->get_libros();
		$this->layout->view('libro_sueldos',$data);
	}		

	public function visitas(){
		$data['id_edificio'] = $this->user->id_edificio;
		$data['visitas'] = $this->exp->get_visitas();
		$this->layout->view('visitas',$data);
	}	

}	