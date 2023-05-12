<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Link extends CI_Controller
{

    public function index($link)
    {
        $url_link   = $this->db->select('url_link')->get_where('link.tb_link',['link' => $link])->row()->url_link;
        redirect($url_link);
    }

    function dataEdit(){
        $data['id']   = $this->input->post('id');
        $data['level'] = $this->db->get_where('tb_level',['id_level' => $data['id']])->row();
        $this->load->view('level/edit_level',$data);
    }

    function create(){
        $data = [
            'nama_level'          => $this->input->post('nama_level'),
        ];

        $this->db->insert('tb_level',$data);
        $this->session->set_flashdata('sukses','sukses');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
      $data = [
        'nama_level'          => $this->input->post('nama_level'),
      ];

        $this->db->update('tb_level',$data,['id_level' => $id]);
        $this->session->set_flashdata('update','update');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $this->db->delete('tb_level',['id_level' => $id]);
        $this->session->set_flashdata('hapus','hapus');
        redirect($_SERVER['HTTP_REFERER']);
    }


}
