<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Group_akses extends CI_Controller
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
        $data['title']	  = "Group Akses";
        $data['level']    = $this->my_model->data_level();
        $data['menu']     = $this->my_model->data_menu();
        $data['group']    = $this->my_model->group_akses();
        $this->template->load('template_back/template','group_akses/group',$data);
    }

    function dataEdit(){
        $data['id']    = $this->input->post('id');
        $data['level'] = $this->my_model->data_level();
        $data['menu']  = $this->my_model->data_menu();
        $data['group'] = $this->db->get_where('tb_group_akses',['id_group' => $data['id']])->row();
        $this->load->view('group_akses/edit_group',$data);
    }

    function create(){
        $data = [
            'menu_id' => $this->input->post('menu_id'),
            'level'   => $this->input->post('level'),
        ];

        $this->db->insert('tb_group_akses',$data);
        $this->session->set_flashdata('sukses','sukses');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
        $data = [
            'menu_id' => $this->input->post('menu_id'),
            'level'   => $this->input->post('level'),
        ];

        $this->db->update('tb_group_akses',$data,['id_group' => $id]);
        $this->session->set_flashdata('update','update');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $this->db->delete('tb_group_akses',['id_group' => $id]);
        $this->session->set_flashdata('hapus','hapus');
        redirect($_SERVER['HTTP_REFERER']);
    }


}
