<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout{

    public $obj;
    public $layout;
    public $folder;

    function Layout($layout = "layout"){
        $this->obj =& get_instance();
        $this->layout = $layout;
    }

    function setLayout($layout){
      $this->layout = $layout;
    }
    
    function setFolder($folder){
      $this->folder = $folder;
    }

    function view($view, $data=null, $return=false){
        $view = $this->folder . '/' . $view;
        $loadedData = array();
        
        $loadedData['content_for_layout'] = $this->obj->load->view($view,$data,true);

        if($return){
            $output = $this->obj->load->view($this->layout, $loadedData, true);
            return $output;
        }else{
            $this->obj->load->view($this->layout, $loadedData, false);
        }
    }
}
?>