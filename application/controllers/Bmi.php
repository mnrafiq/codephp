<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmi extends CI_Controller {

    public function pasien_bmi()
    {
        $this->load->model('bmi_model','pasien1');
        $this->pasien1->berat=65;
        $this->pasien1->tinggi=165;
        $this->pasien1->nilaiBMI;
        $this->pasien1->statusBMI;

        $this->load->model('bmi_model','pasien2');
        $this->pasien2->berat=60;
        $this->pasien2->tinggi=155;
        $this->pasien2->nilaiBMI;
        $this->pasien2->statusBMI;

        $this->load->model('bmi_model','pasien3');
        $this->pasien3->berat=70;
        $this->pasien3->tinggi=171;
        $this->pasien3->nilaiBMI;
        $this->pasien3->statusBMI;

        $list_bmi = [$this->pasien1, $this->pasien2, $this->pasien3];
        $data['list_bmi']=$list_bmi;

        $this->load->view('template/header');
        $this->load->view('pasien/index',$data);
        $this->load->view('template/footer');
    }
}