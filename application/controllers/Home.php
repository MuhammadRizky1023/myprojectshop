<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home  extends  My_Controller {

    public function index() {
        $data['title'] = 'Homepage';
        $data['page'] = 'pages/Home/index';
        $this->view($data);
    }

  

}
?>