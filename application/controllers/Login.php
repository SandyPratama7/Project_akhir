<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'LAPERPOOL | Login';
            $this->load->view('login/header', $data);
            $this->load->view('V_login');
            $this->load->view('login/footer');
        } else {
            //jika validasi berhasil
            $this->_login(); //method private hanya bisa diakses lewat url

        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            //jika user telah didaftarkan
            if (password_verify($password, $user['password'])) {
                //pasword benar
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                redirect('tampilan');
            } else {
                //jika password salah 
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong password! </div>');
                redirect('login');
            }
        } else {
            //user tidak ditemukan
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Your account is not resgistered. </div>');
            redirect('login');
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password doesn\'t match',
            'min_length' => 'Password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = "LAPERPOOL|Registrasi";
            $this->load->view('login/header', $data);
            $this->load->view('regist');
            $this->load->view('login/footer');
        } else {

            $data = [
                'nama' => $this->input->post('nama', true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'email' => $this->input->post('email', true)

            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your account has been created. Please Login! </div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out. </div>');
        redirect('login');
    }
}
