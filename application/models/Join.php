<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join extends CI_Model {

    public function leftJoin(){
        //left join lokomotif dan kursi on idkereta
        $this->db->select('*');
        $this->db->from('lokomotif');
        $this->db->join('kursi','kursi.kd_kereta = lokomotif.kd_kereta ','left');
        $query = $this->db->get();

        return $query->result_array();

    }

    public function rightJoin(){

        //right koin kursi dan gerbong on kd_gerbong
        $this->db->select('*');
        $this->db->from('kursi');
        $this->db->join('gerbong','gerbong.kd_gerbong = kursi.kd_gerbong','right');
        $query = $this->db->get();

        return $query->result_array();

    }

    public function innerJoin(){

        //inner join lokomotif, kursi, gerbong on kd_kereta
        $this->db->select('*');
        $this->db->from('lokomotif');
        $this->db->join('kursi','kursi.kd_kereta = lokomotif.kd_kereta','inner');
        $this->db->join('gerbong','kursi.kd_gerbong = gerbong.kd_gerbong','inner');
        $query = $this->db->get();

        return $query->result_array();

    }

	
}
