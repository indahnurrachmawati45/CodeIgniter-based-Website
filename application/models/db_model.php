<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class db_model extends CI_Model {

 public function ambil(){
   return $this->db->get('buku');
 }
 }
