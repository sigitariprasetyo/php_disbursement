<?php

class Disburse extends Controller
{
  public function index($data = [])
  {
    $data = array('disbursement' => $this->model('Disbursement_model')->findAll());

    $this->view('templates/header');
    $this->view('disburse/index', $data);
    $this->view('templates/footer');
  }

  public function create()
  {
    if ($this->model('Disbursement_model')->create($_POST) > 0) {
      header('Location: ' . BASEURL . '/disburse');
      exit;
    }
  }

  public function detail($data = [],$id)
  {
    $data = array('disbursement' => $this->model('Disbursement_model')->findById($id));

    $this->view('templates/header');
    $this->view('disburse/detail', $data);
    $this->view('templates/footer');
  }
}
