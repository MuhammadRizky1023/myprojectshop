<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $model = strtolower(get_class($this));
        if (file_exists(APPPATH . 'models/' .  $model . '_model.php')) {
            $this->load->model($model . '_model' , $model , true);
        }
    }

    /**
     * Load view with default layout
     * @param [type] data
     * @return void
     */
    public function view($data) {
        $this->load->view('layouts/app', $data);
    }

    public function register() {
        $this->load->view('pages/Auth/register');
    }
}
?>