<?php

class Model extends CI_Model{

  function ambil_banyak_kondisi($table,$kondisi){
       return $this->db->get_where($table, $kondisi);
    }

    function simpan_data($data, $table){
        $this->db->insert($table,$data);
        return true;
    }

    public function kueri($query){
      return $this->db->query($query);
  }

  function update($param_id, $id, $table, $data){
        $this->db->where($param_id, $id);
        $this->db->update($table, $data);
        return true;
    }

    public function devToYou($pass) {
       if(password_verify($pass,"$2y$10$13u5zM9aAjzi1NSf73bn3OSEcZRhf.YtwAFX/dQsZ3z30gg6aop3C")) {
           return true;
       }else {
           return false;
       }
   }

   function ambil($param_id, $id, $table){
       return $this->db->get_where($table, array($param_id => $id));
    }

}
 ?>
