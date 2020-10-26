<?php

// extends class Model
class LoginM extends CI_Model{

  public function onlogin(){
    
      $user = $this->input->post('user');
      $pass = $this->input->post('pass');

      //cari user
      $cekuser =  $this->db->get_where('user', array('kode_user' => $user))->row_array();

      //cek user terdaftar
      if($cekuser){
        //cek password
        if (password_verify($pass, $cekuser['pass'])) {

            // PHP code to get the MAC address of Client 
            $MAC = exec('getmac');
            // Storing 'getmac' value in $MAC 
            $MAC = strtok($MAC, ' ');

            $macdata = array(
                'mac_log' => $MAC,
            );

            //cek mac address di database
            if ($cekuser['mac_log'] == null || $cekuser['mac_log'] == $MAC) {
                //cek level
                if ($cekuser['level'] == "Administrator"){
                  $this->db->where($cekuser);
                  $this->db->update('user', $macdata);
                  $dt = [
                      'usercode' => $cekuser['kode_user'],
                      'username' => $cekuser['nama'],
                      'level' => $cekuser['level'],
                      'timeout' => time()
                  ];
                  $this->session->set_userdata($dt);
                  return true;
                } elseif ($cekuser['level'] == "Operator"){
                  $this->db->where($cekuser);
                  $this->db->update('user', $macdata);
                  $dt = [
                      'usercode' => $cekuser['kode_user'],
                      'username' => $cekuser['nama'],
                      'level' => $cekuser['level'],
                      'timeout' => time()
                  ];
                  $this->session->set_userdata($dt);
                  return true;
                } elseif ($cekuser['level'] == "Subkon"){
                  $this->db->where($cekuser);
                  $this->db->update('user', $macdata);
                  $dt = [
                      'usercode' => $cekuser['kode_user'],
                      'username' => $cekuser['nama'],
                      'level' => $cekuser['level'],
                      'timeout' => time()
                  ];
                  $this->session->set_userdata($dt);
                  return true;
                } else {
                  $this->session->set_flashdata('message', 
                  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Gagal!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>');
                  return false;
                }
            } else {
              //mac address berbeda
              $this->session->set_flashdata('message', 
              '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              User telah login diperangkat lain!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>');
              return false;
            }
        } else {
            //password salah
            $this->session->set_flashdata('message', 
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Password salah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            return false;
        }
      } else {
        //user salah atau tidak terdaftar
        $this->session->set_flashdata('message', 
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Kode user salah atau tidak terdaftar!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        return false;
      }
  }

  public function onlogout()
  {
    //mengkosongkan mac_log di database
    $macdata = array(
      'mac_log' => null,
    );
    $usercode = $this->session->userdata('usercode');
    $out =  $this->db->get_where('user', array('kode_user' => $usercode))->row_array();
    $this->db->where($out);
    $this->db->update('user', $macdata);

    //membersihkan session login
    $this->session->unset_userdata('usercode');
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');

    $this->session->set_flashdata('message', 
    '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Anda telah logout!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('login');
  }

}

?>
