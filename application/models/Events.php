<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Events extends CI_Model
{
    public function getEventsFront()
    {
        $this->db->select('*');
        $this->db->from('events');
        $this->db->order_by('id_events', 'DESC');
        $this->db->limit(3);
        $result = $this->db->get()->result_array();
        return $result;
    }
}
