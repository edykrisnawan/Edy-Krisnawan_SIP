<?php
defined('BASEPATH') or exit('No direct script acess allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index()
    {
        if ($this->session->userdata('username')) {
            redirect('Admin');
        }
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Login - Hotel de Loran";
            $data['meta'] = "Ini Tampilan Login";
            $this->load->view('auth/templates/auth_header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('auth/templates/auth_footer', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $akun = $this->db->get_where('user', ['username' => $username])->row_array();

        // jia user ada
        if ($akun) {
            if (password_verify($password, $akun['password'])) {
                $data = [
                    'id_user' => $akun['id_user'],
                    'nama' => $akun['nama'],
                    'username' => $akun['username'],
                    'images' => $akun['images'],
                    'jabatan' => $akun['jabatan'],
                    'id_user_role' => $akun['id_user_role']
                ];

                $this->session->set_userdata($data);

                if ($this->session->userdata('id_user_role') != 2) {
                    redirect('Admin');
                } else {
                    redirect('User');
                }
            } else {
                $this->session->set_flashdata('registered', '<div class="alert alert-warning" role="alert"><b>Failed!</b> wrong password!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('registered', '<div class="alert alert-warning" role="alert"><b>Failed!</b> your username is not activated!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('username')) {
            redirect('Admin');
        }

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'This username is already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Name', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password not match!',
            'min_length' => 'Password at least 6 character!'
        ]);
        $this->form_validation->set_rules('password2', 'Name', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Registration";
            $data['meta'] = "Ini Tampilan Registrasi";
            $this->load->view('auth/templates/auth_header', $data);
            $this->load->view('auth/registration', $data);
            $this->load->view('auth/templates/auth_footer', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('name', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'images' =>  'default.png',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_user_role' => 2,

            ];
            $this->db->insert('user', $data);

            $this->session->set_flashdata('registered', '<div class="alert alert-success" role="alert"><b>Congratulation!</b> your account has been created. Please login!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        // $this->session->unset_userdata('role_id');
        // $this->session->unset_userdata('uri');


        $this->session->set_flashdata('registered', '<div class="alert alert-success" role="alert"><b>Success!</b> you have been logout!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
