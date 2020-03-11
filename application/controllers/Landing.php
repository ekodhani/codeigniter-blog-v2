<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	// default tampil
	public function index()
	{
		// di fungsi ini tinggal buat konten blognya disini yang tampil cuman lima konten sisanya lewat fungsi search
		$data['title'] = 'Welcome My Blog V.2';
		$data['contact'] = $this->M_CB2->get('contact')->row_array();
		$data['blog'] = $this->M_CB2->get('blog')->result();
		$this->load->view('tamplate/header', $data);
		$this->load->view('landing_page', $data);
		$this->load->view('tamplate/footer', $data);
	}

	// fungsi untuk mencari blog
	public function searchBlog()
	{
		$keyword = $this->input->post('keyword');

		$data['title'] = 'Welcome My Blog V.2';
		$data['contact'] = $this->M_CB2->get('contact')->row_array();
		$data['blog'] = $this->M_CB2->get_keyword($keyword);
		$this->load->view('tamplate/header', $data);
		$this->load->view('landing_page', $data);
		$this->load->view('tamplate/footer', $data);
	}

	// fungsi untuk melihat detail blog
	public function singleBlog($id)
	{
		$data['contact'] = $this->M_CB2->get('contact')->row_array();
		$data['blog'] = $this->M_CB2->get_where(['id_blog' => $id], 'blog')->row_array();
		$data['komentar'] = $this->M_CB2->get_where(['id_blog' => $id], 'komentar')->result();
		$data['blogre'] = $this->M_CB2->get('blog')->result();
		$this->load->view('single_page', $data);
	}

	// fungsi untuk menyimpan komentar walaupun masih acak acakan
	public function simpanKomentar()
	{
		$this->form_validation->set_rules('nama', 'Name', 'required', [
			'required' => 'Ini Di Isi Woy'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
			'required' => 'Ini Di Isi Juga Woy',
			'valid_email' => 'Emailnya Gak Valid Woy'
		]);

		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$komentar = $this->input->post('komentar');
		$idb =  $this->input->post('idb');
		if ($this->form_validation->run() == false) {
			$data['contact'] = $this->M_CB2->get('contact')->row_array();
			$data['blog'] = $this->M_CB2->get_where(['id_blog' => $idb], 'blog')->row_array();
			$data['komentar'] = $this->M_CB2->get_where(['id_blog' => $idb], 'komentar')->result();
			$data['blogre'] = $this->M_CB2->get('blog')->result();
			$this->load->view('single_page', $data);
		} else {

			$data = [
				'nama' => $nama,
				'email' => $email,
				'date_created' => date('Y-m-d'),
				'komentar' => $komentar,
				'id_blog' => $idb
			];

			$this->db->insert('komentar', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Komentar Udah Berhasil Di <strong>Tambahkan</strong> Bagus!</div>');
			$data['contact'] = $this->M_CB2->get('contact')->row_array();
			$data['blog'] = $this->M_CB2->get_where(['id_blog' => $idb], 'blog')->row_array();
			$data['komentar'] = $this->M_CB2->get_where(['id_blog' => $idb], 'komentar')->result();
			$data['blogre'] = $this->M_CB2->get('blog')->result();
			$this->load->view('single_page', $data);
		}
	}

	// fungsi untuk menjalankan navigasi about me
	public function aboutMe()
	{
		$data['title'] = 'Hello World!';
		$data['testimoni'] = $this->M_CB2->get('testimoni')->result();
		$data['contact'] = $this->M_CB2->get('contact')->row_array();
		$this->load->view('tamplate/header', $data);
		$this->load->view('aboutme', $data);
		$this->load->view('tamplate/footer', $data);
	}
}
