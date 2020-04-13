<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @package  : API
 * @author   : wawan firgiawan <wawanfrgiawan9@gmail.com>
 * @since    : 2020
 */
class Web extends CI_Model
{

    public function get_blog()
    {
        $query = $this->db->get("data");
        return $query->result();
    }
}
