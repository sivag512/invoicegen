<?php

/**
 * Created by Edison A.
 * Date: 5/24/16
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller
{

    public function index()
    {
        $this->load->model('DataModel');
        $data = $this->DataModel->getForm();
        $this->loadView('generator_view', $data);
    }

    public function loadView($view, $data)
    {
        $this->load->view('header_view');
        $this->load->view($view, $data);
        $this->load->view('footer_view');
    }
}
