<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class My_model extends CI_Model{

    function cek_login($u,$p){
        $pwd = md5($p);
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('username',$u);
        $this->db->where('password',$pwd);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows()==1) {
        	return $query->result();
        }else{
        	return false;
        }
        
    }

    function menu($level){
                $this->db->join('tb_group_akses ga','ga.menu_id = tb_menu.id_menu');
        $data = $this->db->get_where('tb_menu',['level' => $level]);
        return $data;
    }

    function menuChild($level,$idmenu){
        $this->db->join('tb_group_akses ga','ga.menu_id = tb_menu.id_menu');
        $data = $this->db->get_where('tb_menu',['level' => $level, 'type' => 'child', 'child' => $idmenu]);
        return $data;
    }

    function cekSegement($level,$segment,$idmenu){
        $this->db->join('tb_group_akses ga','ga.menu_id = tb_menu.id_menu');
        $data = $this->db->select('segment')->get_where('tb_menu',['level' => $level, 'segment' => $segment, 'type' => 'child', 'child' => $idmenu])->row()->segment;
        return $data;
    }

    function group_akses(){
        $data = $this->db->join('tb_menu m','m.id_menu = tb_group_akses.menu_id')
                         ->join('tb_level l','l.id_level = tb_group_akses.level')
                         ->select('id_group,nama_menu,nama_level')
                         ->get('tb_group_akses')
                         ->result();
        return $data;
    }

    function data_menu(){
        $data = $this->db->select('id_menu,nama_menu')->get('tb_menu')->result();
        return $data;
    }

    function data_level(){
        $data = $this->db->select('id_level,nama_level')->get('tb_level')->result();
        return $data;
    }
    function idta(){
        $data = $this->db->get_where('tb_tahunajar',['status' => 'aktif'])->row()->id_ta;
        return $data;
    }

    function count(){
        $data = $this->db->select('count(vote) as jml, vote')->group_by('vote')->get('voting')->result();
        return $data;
    }

    function count_desc(){
        $ta   = $this->db->select('id_ta')->get_where('tb_tahunajar',['status' => 'aktif'])->row()->id_ta;
        $data = $this->db->select('count(vote) as jml, vote')
                         ->group_by('vote')
                         ->order_by('jml','desc')
                         ->get_where('voting',['ta_id' => $ta])->result();
        return $data;
    }

    function nama_paslon($id){
        $data = $this->db->get_where('tb_kandidat',['id_kandidat'=> $id])->row();
        $nama = $data->ketua.' & '.$data->wakil;
        return $nama;
    }

}
