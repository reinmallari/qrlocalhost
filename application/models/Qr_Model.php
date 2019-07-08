<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
defined('BASEPATH') OR exit('No direct script access allowed');
class Qr_Model extends CI_Model {
    var $table = 'qr_info';

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function qr_add($data)
    {
      $this->db->insert($this->table, $data);
      return $this->db->insert_id();
    }


}
