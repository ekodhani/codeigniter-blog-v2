<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // mencegah user untuk login tanpa melalui form login
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
    }

    // fungsi untuk menjalankan halaman dashboard
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['admin'] = $this->M_CB2->get_where(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $this->load->view('tamplate/s_dashboard', $data);
        $this->load->view('tamplate/h_dashboard', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('tamplate/f_dashboard', $data);
    }

    // fungsi untuk menjalankan halaman pengelolaan blog
    public function blog()
    {
        $data['title'] = 'Blog';
        $data['admin'] = $this->M_CB2->get_where(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['blog'] = $this->M_CB2->get('blog')->result();
        $this->load->view('tamplate/s_dashboard', $data);
        $this->load->view('tamplate/h_dashboard', $data);
        $this->load->view('admin/blog', $data);
        $this->load->view('tamplate/f_dashboard', $data);
    }

    // fungsi untuk menambahkan konten blog
    public function addBlog()
    {
        $judul = $this->input->post('judul');
        $konten = $this->input->post('konten');

        $this->form_validation->set_rules('judul', 'Judul Blog', 'trim|required', [
            'required' => 'judulnya harus di isi bro'
        ]);
        $this->form_validation->set_rules('konten', 'konten', 'trim|required', [
            'required' => 'ini juga perlu di isi bro'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Add Content';
            $data['admin'] = $this->M_CB2->get_where(['email' => $this->session->userdata('email')], 'admin')->row_array();
            $this->load->view('tamplate/s_dashboard', $data);
            $this->load->view('tamplate/h_dashboard', $data);
            $this->load->view('admin/addblog', $data);
            $this->load->view('tamplate/f_dashboard', $data);
        } else {
            // konfigurasi upload file
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/images/thumb/';
            $config['file_name'] = 'CB2image';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $image = $this->upload->data();

                $data = array(
                    'thumbnail' => $image['file_name'],
                    'judul_blog' => $judul,
                    'konten_isi' => $konten,
                    'date_created' => date('Y-m-d'),
                    'access' => 'Admin'
                );
                $this->db->insert('blog', $data);
                $this->session->set_flashdata('message', 'Data Udah Berhasil Di Tambahkan Bagus!');
                redirect('admin/blog');
            }
        }
    }

    // fungsi untuk menghapus blog
    public function hapusBlog($id)
    {
        $this->M_CB2->delete(['id_blog' => $id], 'blog');
        $this->session->set_flashdata('message', 'Data Udah Berhasil Di Hapus Ya');
        redirect('admin/blog');
    }

    // fungsi untuk mengedit konten blog
    public function editBlog($id)
    {
        $this->form_validation->set_rules('judul', 'Judulnya', 'required|trim', [
            'required' => 'Ini harus di isi ya'
        ]);
        $this->form_validation->set_rules('konten', 'Kontennya', 'required|trim', [
            'required' => 'ini harus di isi ya'
        ]);

        if ($this->form_validation->run() == false) { // jika salah dalam mengisi formnya
            $data['title'] = 'Edit Blog';
            $data['admin'] = $this->M_CB2->get_where(['email' => $this->session->userdata('email')], 'admin')->row_array();
            $data['detail'] = $this->M_CB2->get_where(['id_blog' => $id], 'blog')->row_array();
            $this->load->view('tamplate/s_dashboard', $data);
            $this->load->view('tamplate/h_dashboard', $data);
            $this->load->view('admin/editblog', $data);
            $this->load->view('tamplate/f_dashboard', $data);
        } else { // Jika berhasil jalankan fungsi ini
            $judul = $this->input->post('judul');
            $konten = $this->input->post('konten');

            // Apakah ada gambar ?
            $upload_image = $_FILES['thumbnail']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/images/thumb/';
                $config['file_name']     = 'CB2Thumbnail';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('thumbnail')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('thumbnail', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('konten_isi', $konten);
            $this->db->set('judul_blog', $judul);
            $this->db->where('id_blog', $id);
            $this->db->update('blog');

            $this->session->set_flashdata('message', 'Konten Berhasil Di Edit Ya');
            redirect('admin/blog');
        }
    }

    public function detailBlog($id)
    {
        $data['title'] = 'Detail';
        $data['admin'] = $this->M_CB2->get_where(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['blog'] = $this->M_CB2->get_where(['id_blog' => $id], 'blog')->row_array();
        $this->load->view('tamplate/s_dashboard', $data);
        $this->load->view('tamplate/h_dashboard', $data);
        $this->load->view('admin/detailblog', $data);
        $this->load->view('tamplate/f_dashboard', $data);
    }

    // fungsi untuk menampilkan halaman testimoni
    public function testimoni()
    {
        $data['title'] = 'Testimoni';
        $data['admin'] = $this->M_CB2->get_where(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['testimoni'] = $this->M_CB2->get('testimoni')->result();
        $this->load->view('tamplate/s_dashboard', $data);
        $this->load->view('tamplate/h_dashboard', $data);
        $this->load->view('admin/testimoni', $data);
        $this->load->view('tamplate/f_dashboard', $data);
    }

    // fungsi untu menambahkan testimoni
    public function addTestimoni()
    {
        $nama = $this->input->post('nama');
        $divisi = $this->input->post('pekerjaan');
        $deskripsi = $this->input->post('opini');

        $this->form_validation->set_rules('nama', 'Nama Clientnya', 'trim|required', [
            'required' => 'ini wajib di isi loh'
        ]);
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaannya', 'trim|required', [
            'required' => 'ini juga harus di isi'
        ]);
        $this->form_validation->set_rules('opini', 'Kata-Katanya', 'trim|required', [
            'required' => 'ini juga harus di isi ya'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Add Testimoni';
            $data['admin'] = $this->M_CB2->get_where(['email' => $this->session->userdata('email')], 'admin')->row_array();
            $this->load->view('tamplate/s_dashboard', $data);
            $this->load->view('tamplate/h_dashboard', $data);
            $this->load->view('admin/addtestimoni', $data);
            $this->load->view('tamplate/f_dashboard', $data);
        } else {
            // konfigurasi upload file
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/images/testimoni/';
            $config['file_name'] = 'Testim';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $image = $this->upload->data();

                $data = array(
                    'gambar' => $image['file_name'],
                    'nama' => $nama,
                    'divisi' => $divisi,
                    'deskripsi' => $deskripsi
                );
                $this->db->insert('testimoni', $data);
                $this->session->set_flashdata('message', 'Data Udah Berhasil Di Tambahkan Bagus!');
                redirect('admin/testimoni');
            }
        }
    }

    // fungsi untuk menghapus testimoni
    public function hapusTestimoni($id)
    {
        $this->M_CB2->delete(['id_testimoni' => $id], 'testimoni');
        $this->session->set_flashdata('message', 'Data Udah Berhasil Di Hapus Bagus!');
        redirect('admin/testimoni');
    }

    // fungsi untuk mengedit data / update data testimoni
    public function editTestimoni($id)
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Ini Harus Di isi'
        ]);
        $this->form_validation->set_rules('divisi', 'Pekerjaan', 'required', [
            'required' => 'ini juga harus di isi'
        ]);
        $this->form_validation->set_rules('opini', 'Kata-Katanya', 'required', [
            'required' => 'ini juga loh harus di isi'
        ]);
        if ($this->form_validation->run() == false) {
            # jika salah maka akan tampil ini ...
            $data['title'] = 'Edit Testimoni';
            $data['admin'] = $this->M_CB2->get_where(['email' => $this->session->userdata('email')], 'admin')->row_array();
            $data['testimoni'] = $this->M_CB2->get_where(['id_testimoni' => $id], 'testimoni')->row_array();
            $this->load->view('tamplate/s_dashboard', $data);
            $this->load->view('tamplate/h_dashboard', $data);
            $this->load->view('admin/edittestimoni', $data);
            $this->load->view('tamplate/f_dashboard', $data);
        } else {
            $nama = $this->input->post('nama');
            $divisi = $this->input->post('divisi');
            $deskripsi = $this->input->post('opini');

            // Apakah ada gambar ?
            $upload_image = $_FILES['gambar']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/images/testimoni/';
                $config['file_name']     = 'Testim';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('deskripsi', $deskripsi);
            $this->db->set('divisi', $divisi);
            $this->db->set('nama', $nama);
            $this->db->where('id_testimoni', $id);
            $this->db->update('testimoni');

            $this->session->set_flashdata('message', 'Testimoni Berhasil Di Edit Ya!');
            redirect('admin/testimoni');
        }
    }

    // Fungsi untuk melihat profile
    public function profile()
    {
        // 
        $data['title'] = 'Profile';
        $data['admin'] = $this->M_CB2->get_where(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $this->load->view('tamplate/s_dashboard', $data);
        $this->load->view('tamplate/h_dashboard', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('tamplate/f_dashboard', $data);
    }

    // fungsi untuk mengedit profile
    public function editProfile()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Ini Di Isi Woy'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
            'required' => 'Ini Di Isi Woy',
            'valid_email' => 'Emailnya Harus Valid Ya',
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Ini Harus Di Isi Woy'
        ]);
        $this->form_validation->set_rules('nohp', 'Nomor Handphone', 'required|numeric', [
            'required' => 'Ini Juga Harus Di Isi',
            'numeric' => 'Ini Yang Di Masukkin Nomor Handphone Ya'
        ]);
        $this->form_validation->set_rules('pass', 'Password', 'required', [
            'required' => 'Ini Harus Di Isi Woy'
        ]);
        $this->form_validation->set_rules('pass1', 'Password', 'required|matches[pass]', [
            'required' => 'Ini Harus Di Isi Juga -_-',
            'matches' => 'Passwordnya Belom Cocok Nih, Pelan-Pelan Aja Ngetiknya'
        ]);
        if ($this->form_validation->run() == false) {
            # code...
            $data['title'] = 'Edit Profile';
            $data['admin'] = $this->M_CB2->get_where(['email' => $this->session->userdata('email')], 'admin')->row_array();
            $this->load->view('tamplate/s_dashboard', $data);
            $this->load->view('tamplate/h_dashboard', $data);
            $this->load->view('admin/editprofile', $data);
            $this->load->view('tamplate/f_dashboard', $data);
        } else {
            # code...
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $alamat = $this->input->post('alamat');
            $nohp = $this->input->post('nohp');
            $password = $this->input->post('pass');

            // Apakah ada gambar ?
            $upload_image = $_FILES['gambar']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/images/admin/';
                $config['file_name']     = 'CSB2Adcuk';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('password', md5($password));
            $this->db->set('no_handphone', $nohp);
            $this->db->set('alamat', $alamat);
            $this->db->set('nama_admin', $nama);
            $this->db->where('email', $email);
            $this->db->update('admin');

            $this->session->set_flashdata('message', 'Profile Berhasil Di Edit Ya');
            redirect('admin/profile');
        }
    }
}
