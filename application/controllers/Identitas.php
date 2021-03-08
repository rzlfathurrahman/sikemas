<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Identitas extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        
        if (!$this->ion_auth->logged_in()){
            redirect('auth','refresh');
        }
	}

	public function index()
	{
        $data['judul'] = 'Identitas Diri';
        $data['halaman'] = 'identitas';
        $id = $this->ion_auth->user()->row();
        $data['identitas'] = $this->db->get_where('masyarakat',['nik' => $id->nik])->result();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('identitas');
        $this->load->view('template/footer');
	}
}
