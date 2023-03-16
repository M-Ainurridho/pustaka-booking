<?php
class DataSiswa extends CI_Controller
{
    public function index()
    {
$this->load->view('view-form-datasiswa');
}
public function cetak()
{

$this->form_validation->set_rules('nama_siswa', 'Nama Siswa',
'required', [
            'required' => 'Harus Diisi',
        
        ]);
        $this->form_validation->set_rules('nis_siswa', 'NIS',
'required|min_length[8]', [
            'required' => 'Nis Harus Diisi',
            'min_length' => 'Minimal 8'
        ]);
        $this->form_validation->set_rules('kelas_siswa', 'Kelas',
'required', [
            'required' => 'Kelas Harap Diisi',
            
        ]);
        $this->form_validation->set_rules('tgl_siswa', 'Tanggal Lahir',
'required', [
            'required' => 'Harus Diisi',
        ]);
        $this->form_validation->set_rules('tmpt_siswa', 'Tempat Lahir',
'required', [
            'required' => 'Harap Diisi',
        ]);
        $this->form_validation->set_rules('alamat_siswa', 'Alamat',
'required', [
            'required' => 'Harap Diisi',
        ]);
        $this->form_validation->set_rules('jenisk_siswa', 'Jenis Kelamin',
'required', [
            'required' => 'Harap Diisi',
        ]);
        $this->form_validation->set_rules('agm_siswa', 'Agama',
'required', [
            'required' => 'Harap Diisi',
        ]);
        
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-datasiswa');
        } else {
            $data = [
                'nama_siswa' => $this->input->post('nama_siswa'),
                'nis_siswa' => $this->input->post('nis_siswa'),
                'kelas_siswa' => $this->input->post('kelas_siswa'),
                'tgl_siswa' => $this->input->post('tgl_siswa'),
                'tmpt_siswa' => $this->input->post('tmpt_siswa'),
                'alamat_siswa' => $this->input->post('alamat_siswa'),
                'jenisk_siswa' => $this->input->post('jenisk_siswa'),
                'agm_siswa' => $this->input->post('agm_siswa')
        ];
            $this->load->view('view-data-siswa', $data);
        }
} 
}