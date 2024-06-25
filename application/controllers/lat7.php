<?php
class lat7 extends CI_Controller
{
    public function index()
    {
        $this->load->view('lat7_header');
        $this->load->view('lat7-input');
        $this->load->view('lat7_footer');
    }
    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggal' => $this->input->post('tanggal'),
            'tempat' => $this->input->post('tempat'),
            'alamat' => $this->input->post('alamat'),
            'jnskel' => $this->input->post('jnskel'),
            'agama' => $this->input->post('agama')
        ];
        $this->load->view('lat7_header');
        $this->load->view('lat7-output', $data);
        $this->load->view('lat7_footer');
    }
}