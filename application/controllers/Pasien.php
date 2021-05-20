<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function index()
    {
        $this->load->model('pasien_model','pasien1');
        $this->pasien1->id=1;
        $this->pasien1->kode='010001';
        $this->pasien1->nama='Faiz Fikri';
        $this->pasien1->tmp_lahir='Depok';
        $this->pasien1->tgl_lahir='2000-05-25';
        $this->pasien1->gender='L';

        $this->load->model('pasien_model','pasien2');
        $this->pasien2->id=2;
        $this->pasien2->kode='020001';
        $this->pasien2->nama='Pandan Wangi';
        $this->pasien2->tmp_lahir='Bogor';
        $this->pasien2->tgl_lahir='1998-03-15';
        $this->pasien2->gender='P';

        $this->load->model('pasien_model','pasien3');
        $this->pasien3->id=3;
        $this->pasien3->kode='010002';
        $this->pasien3->nama='Riyadi Salim';
        $this->pasien3->tmp_lahir='Depok';
        $this->pasien3->tgl_lahir='1999-02-10';
        $this->pasien3->gender='L';

        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3];
        $data['list_pasien']=$list_pasien;

        $this->load->view('template/header');
        $this->load->view('pasien/index',$data);
        $this->load->view('template/footer');
    }


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