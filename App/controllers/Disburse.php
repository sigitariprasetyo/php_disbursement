<?php

class Disburse extends Controller {
  public function index($data = []) {
    $data['judul'] = 'Home';
    $data['disbursement'] = $this->model('Disbursement_model')->findAll();

    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }

  public function create() {
    if ( $this->model('Disbursement_model')->create($_POST) > 0 ) {
      header('Location: ' . BASEURL . '/disburse');
      exit;
    }
  }
}