<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tahunajar extends CI_Controller
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
        $data['title']	    = "Tahun Ajar";
        $data['tahunajar']  = $this->db->get('tb_tahunajar')->result();
        $this->template->load('template_back/template','tahunajar/tahunajar',$data);
    }

    function dataEdit(){
        $data['id']         = $this->input->post('id');
        $data['tahunajar']  = $this->db->get_where('tb_tahunajar',['id_ta' => $data['id']])->row();
        $this->load->view('tahunajar/edit_tahunajar',$data);
    }

    function create(){
        if($this->input->post('status') == 'aktif'){
            $status = ['status' => 'non-aktif'];
            $this->db->update('tb_tahunajar',$status);
            $data = [
                'tahunajar' => $this->input->post('tahunajar'),
                'status'    => $this->input->post('status'),
            ];
        }else{
            $data = [
                'tahunajar' => $this->input->post('tahunajar'),
                'status'    => $this->input->post('status'),
            ];
        }

        $this->db->insert('tb_tahunajar',$data);
        $this->session->set_flashdata('sukses','sukses');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
        if($this->input->post('status') == 'aktif'){
            $status = ['status' => 'non-aktif'];
            $this->db->update('tb_tahunajar',$status);
            $data = [
                'tahunajar' => $this->input->post('tahunajar'),
                'status'    => $this->input->post('status'),
            ];
        }else{
            $data = [
                'tahunajar' => $this->input->post('tahunajar'),
                'status'    => $this->input->post('status'),
            ];
        }

        $this->db->update('tb_tahunajar',$data,['id_ta' => $id]);
        $this->session->set_flashdata('update','update');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $this->db->delete('tb_tahunajar',['id_ta' => $id]);
        $this->session->set_flashdata('hapus','hapus');
        redirect($_SERVER['HTTP_REFERER']);
    }


}
