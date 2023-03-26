<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends My_Model {
    protected $table = 'user';

    public function getDefaultValues() {
        return[
            'name' => '',
            'email' => '',
            'password' => '',
            'role' => '',
            'is_active' => '',
        ];
    }

    public function getValidationRules() {
        $validationRules = [
            [
                'field' => 'name',
                'label' => 'nama',
                'rules' => 'trim|required'
            ],
             [
                'field' => 'email',
                'label' => 'E-mail',
                'rules' => 'trim|required|valid_email|is_unique[user.email]',
                'error' => [
                    'is_unique' => 'This %s already exists'
                ]
            ],
             [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'trim|min_length[0]'
            ],
             [
                'field' => 'password_confirmation',
                'label' => 'Konfirmasi Password',
                'rules' => 'trim|matches[password]'
            ],
        ];
        return $validationRules;
    }

    public function run($input) {
        $data = [
            'name' => $input->name,
            'email' => strtolower($input->email),
            'password' => hashEncrypt($input->password),
            'role' => 'member',
        ];

        $user = $this->create($data);

        $ses_data = [
            'id' => $user,
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'is_login' => true
        ];
        $this->session->set_userdata($ses_data);
    }
}
?>