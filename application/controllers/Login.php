<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        // set rules loginnya
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
            'required' => 'isi dulu dong Bro/Sis!',
            'valid_email' => 'Email Tidak Valid Bro/Sis!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'isi dulu dong Bro/Sis!'
        ]);
        if ($this->form_validation->run() == false) { // jika salah maka tampil ini
            $data['title'] = 'Login!';
            $this->load->view('tamplate/h_login', $data);
            $this->load->view('admin/login');
            $this->load->view('tamplate/f_login');
        } else { // tapi jika benar maka jalankan ini
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $admin = $this->M_CB2->get_where(['email' => $email], 'admin')->row_array();

            // jika akunnya ada
            if ($admin != null) {
                // cek dulu passwordnya
                if (md5($password) == $admin['password']) {
                    $data = [
                        'email' => $admin['email']
                    ];

                    $this->session->set_userdata($data);
                    redirect('admin');
                } else { // tapi jika passwordnya salah jalankan ini
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><strong>Password</strong>nya salah, pelan-pelan aja ngetiknya okeh!</div>');
                    redirect('login');
                }
            } else { // jika akun tidak ada jalankan ini
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><strong>Email</strong>nya ga ada mungkin kamu salah ketik, pelan-pelan aja ya ngetiknya!</div>');
                redirect('login');
            }
        }
    }

    // fungsi untuk logout dari admin
    public function logout()
    {
        // mengunset data di session
        $this->session->unset_userdata('email');
        // menampilkan pesan
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Makasih udah <strong>login</strong> ya!</div>');
        redirect('login');
    }
}
