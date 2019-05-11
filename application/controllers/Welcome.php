<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Join');
    }
	public function index()
	{
		$data['left'] = $this->Join->leftJoin();
		$data['inner'] = $this->Join->innerJoin();
		$data['right'] = $this->Join->rightJoin();
		$this->load->view('Hasil',$data);
	}


}
