<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {

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

	public function index($nik=null)
	{
        $data['judul'] = 'Input Pengaduan';
        $data['halaman'] = 'pengaduan';

        if($this->ion_auth->is_admin()){
            $data['pengaduan'] = $this->db->get('pengaduan')->result();
        }else{
            $data['pengaduan'] = $this->db->get_where('pengaduan',['nik' => $nik])->result();
        }

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('pengaduan');
        $this->load->view('template/footer');
    }
    
    public function tambah()
    {
        $data['judul'] = 'Input Pengaduan';
        $data['halaman'] = 'pengaduan/tambah';

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('pengaduan_tambah');
        $this->load->view('template/footer');
    }
    
    public function tambahAksi()
    {
        $nik = $this->input->post('nik');

        $data = [
            'tgl_pengaduan' => $this->input->post('tgl_pengaduan'),
            'nik' => $nik,
            'isi_laporan' => $this->input->post('isi_laporan')
        ];

        if(!$this->ion_auth->logged_in()){
            redirect('auth','refersh');
        }

        if ($this->db->insert('pengaduan',$data)) {
            $this->session->set_flashdata('message','<div class="alert alert-success">Pengaduan berhasil dikirim.</div>');
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-success">Pengaduan berhasil dikirim.</div>');
        }

        if ($this->ion_auth->is_admin()) {
            redirect('pengaduan','refresh');
        }

        redirect('pengaduan/'.$nik,'refresh');
    }

    public function hapus($nik,$id)
    {
         if(!$this->ion_auth->logged_in()){
            redirect('auth','refersh');
        }
        $this->db->where('id',$id);
        $this->db->delete('pengaduan',['id' => $id]);
        $this->session->set_flashdata('message','<div class="alert alert-danger">Pengaduan berhasil dihapus.</div>');
        redirect('pengaduan/'.$nik,'refresh');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Pengaduan';
        $data['halaman'] = 'pengaduan';

        $data['pengaduan'] = $this->db->get_where('pengaduan',['id' => $id])->result();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('pengaduan_edit');
        $this->load->view('template/footer');
    }

    public function update()
    {
        $nik = $this->input->post('nik');
        $id = $this->input->post('id');

        $data = [
            'id' => $id,
            'tgl_pengaduan' => $this->input->post('tgl_pengaduan'),
            'nik' => $nik,
            'isi_laporan' => $this->input->post('isi_laporan')
        ];

        $this->db->where('id',$id);
        if ($this->db->update('pengaduan',$data)) {
            $this->session->set_flashdata('message','<div class="alert alert-success">Pengaduan berhasil diupdate.</div>');
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-success">Pengaduan gagal diupdate.</div>');
        }

        redirect('pengaduan/'.$nik,'refresh');

    }
}
