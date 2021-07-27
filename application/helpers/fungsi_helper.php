<?php

function check_already_login() {
    $ci =& get_instance();
    $user_session = $ci->session->userdata('userid');
    if($user_session){
        
        redirect('dashboard','refresh');
        
    }
}

function check_not_login() {
    $ci =& get_instance();
    $user_session = $ci->session->userdata('userid');
    if(!$user_session){
        
        redirect('auth/login','refresh');
        
    }
}

function check_admin() {
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 1) {
        redirect('dashboard','refresh');        
    }
}

function check_pengunjung() {
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 3) {
        redirect('ambil','refresh');        
    }
}

// function indo_currency($nominal)
// {
//     $result = "Rp " . number_format($nominal, 2, ',', '.');
//     return $result;
// }

// function indo_date($date)
// {
//     $d = substr($date, 8, 2);
//     $m = substr($date, 5,2);
//     $y = substr($date, 0,4);
//     return $d.'-'.$m.'-'.$y;
// }