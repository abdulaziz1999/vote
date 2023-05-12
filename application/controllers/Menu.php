<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu extends CI_Controller
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
        $data['title']	= "Menu";
        $data['dmenu']  = $this->my_model->data_menu();
        $data['menu']   = $this->db->get('tb_menu')->result();
        $this->template->load('template_back/template','menu/menu',$data);
    }

    function dataEdit(){
        $data['id']     = $this->input->post('id');
        $data['dmenu']  = $this->my_model->data_menu();
        $data['menu']   = $this->db->get_where('tb_menu',['id_menu' => $data['id']])->row();
        $data['menu_dropdown']   = $this->db->get_where('tb_menu',['type'=> 'dropdown'])->result();
        $this->load->view('menu/edit_menu',$data);
    }

    function create(){
        if($this->input->post('type') == 'parent'){
            $data = [
                'nama_menu' => $this->input->post('nama_menu'),
                'segment'   => $this->input->post('segment'),
                'icon'      => $this->input->post('icon'),
                'color'     => $this->input->post('color'),
                'type'      => $this->input->post('type')
            ];
        }else{
            $data = [
                'nama_menu' => $this->input->post('nama_menu'),
                'segment'   => $this->input->post('segment'),
                'icon'      => $this->input->post('icon'),
                'color'     => $this->input->post('color'),
                'type'      => $this->input->post('type'),
                'child'     => $this->input->post('child'),
            ];
        }

        // echo "<pre>"; print_r($data); echo "</pre>";
        $this->db->insert('tb_menu',$data);
        $this->session->set_flashdata('sukses','sukses');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
        if($this->input->post('type') == 'parent'){
            $data = [
                'nama_menu' => $this->input->post('nama_menu'),
                'segment'   => $this->input->post('segment'),
                'icon'      => $this->input->post('icon'),
                'color'     => $this->input->post('color'),
                'type'      => $this->input->post('type')
            ];
        }else{
            $data = [
                'nama_menu' => $this->input->post('nama_menu'),
                'segment'   => $this->input->post('segment'),
                'icon'      => $this->input->post('icon'),
                'color'     => $this->input->post('color'),
                'type'      => $this->input->post('type'),
                'child'     => $this->input->post('child'),
            ];
        }

        $this->db->update('tb_menu',$data,['id_menu' => $id]);
        $this->session->set_flashdata('update','update');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $this->db->delete('tb_menu',['id_menu' => $id]);
        $this->session->set_flashdata('hapus','hapus');
        redirect($_SERVER['HTTP_REFERER']);
    }


}
