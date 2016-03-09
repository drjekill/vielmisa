<?php

class checkLogin{


    function user_is_logged_in(){

        $CI =& get_instance();
    	$class = $CI->router->fetch_class();
		$method = $CI->router->fetch_method();
		$CI->load->database('default', true);

		if($class == 'auth' || $class == 'dashboard' ){
			return true;
		}else{

	        if (!$CI->tank_auth->is_logged_in()){
	            redirect('/auth/login/');
	        }

	        $user_id = intval($CI->tank_auth->get_user_id());
	        
	        if($user_id){
	            $CI->user->load_by_id($user_id);
	        }

		} 
	}
}		