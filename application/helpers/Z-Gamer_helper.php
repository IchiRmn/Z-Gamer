<?php

function cek_login()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) 
    {
    	$ci->session->set_flashdata('alert', '<div class="alert alert-message text-white bg-danger text-center" role="alert">Accsess Denied, Youre not log in yet </div>');
        redirect('home');
    }
    else 
    {
    	$role_id = $ci->session->userdata('role_id');
    	$id_user = $ci->session->userdata('id_user');
    }
}

function cek_login1()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) 
    {
        $ci->session->set_flashdata('alert', '<div class="alert alert-message text-white bg-danger text-center" role="alert">Accsess Denied, Youre not log in yet </div>');
        redirect('Talent');
    }
}

function cek_user() 
{ 
    $ci = get_instance(); 
    $role_id = $ci->session->userdata('role_id'); 

    if ($role_id != 1) 
    { 
        $ci->session->set_flashdata('alert', '<div class="alert alert-message text-white bg-danger text-center" role="alert">Accsess Denied! </div>'); 
        redirect('Home'); 
    } 
}
