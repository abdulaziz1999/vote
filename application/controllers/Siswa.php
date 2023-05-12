<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	
        
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('level')){
        }else{
          redirect('login');
        }	
		
    }

    public function index()
    {
        $data['title']		= "Siswa";
        $data['siswa']     = $this->db->get_where('tb_siswa',['ta_id' => $this->my_model->idta()])->result();
        $this->template->load('template_back/template','siswa/siswa',$data);
    }

    function dataEdit(){
        $data['id']   = $this->input->post('id');
        $data['siswa'] = $this->db->get_where('tb_siswa',['idsiswa' => $data['id']])->row();
        $this->load->view('siswa/edit_siswa',$data);
    }

    function create(){
        $data = [
            'nama_siswa'          => $this->input->post('nama_siswa'),
        ];

        $this->db->insert('tb_siswa',$data);
        $this->session->set_flashdata('sukses','sukses');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
      $data = [
        'nama_siswa'          => $this->input->post('nama_siswa'),
      ];

        $this->db->update('tb_siswa',$data,['idsiswa' => $id]);
        $this->session->set_flashdata('update','update');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $this->db->delete('tb_siswa',['idsiswa' => $id]);
        $this->session->set_flashdata('hapus','hapus');
        redirect($_SERVER['HTTP_REFERER']);
    }

}
