<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data = $this->db->get('tb_siswa');

		$no = 1;
		//loop while data siswa dan echo data
		for ($i=0; $i < $data->num_rows(); $i++) { 
			$siswa = $data->row_array($i);
			echo $no++.". ".$siswa['nama']."<br>";
		}

		
		$this->load->view('welcome_message');
	}

	function debug(){
		
	}
}
