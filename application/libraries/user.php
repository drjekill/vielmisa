<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User{
    
    private $ci;
    public $id_edificio;
    public $id_user;
    public $direccion;
    public $imagen;
    public $forma_pago;


    function __construct(){
        $this->ci =& get_instance();
        $this->ci->load->model('user_model');
       // $this->load_by_id(41);
    }

    function load_by_id($id){

        $user = $this->ci->user_model->get_id($id);
        $this->set_id_edificio($user->id_edificio);
        $this->set_id_user($user->id_user);
        $this->set_direccion($user->direccion);
        $this->set_imagen($user->imagen);
        $this->set_forma_pago($user->forma_pago);
    }
    
    function set_id_edificio($data){
        $this->id_edificio = $data;
    }
    
    function set_id_user($data){
        $this->id_user = $data;
    }
    
    function set_direccion($data){
        $this->direccion = $data;
    }
    
    function set_imagen($data){
        $this->imagen = $data;
    }    
    
    function set_forma_pago($data){
        $this->forma_pago = $data;
    }
    
    function get_user_id()
    {
        return $this->ci->session->userdata('user_id');
    }

}
?>
