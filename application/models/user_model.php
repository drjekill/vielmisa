<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * User
 *
 */
class User_Model extends CI_MODEL
{
    function get_id($id) {
        $this->db->select('e.*');
        $this->db->from('edificio e');
        $this->db->join('users u', 'u.id_edificio = e.id_edificio');
        $data = $this->db->where('u.id',$id)->get()->row();
        return $data;

    }

}
