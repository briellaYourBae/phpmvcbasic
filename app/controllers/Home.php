<?php
class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhs();
        $this->view('templates/header', $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
    public function newMhs(){
        $nama = $_POST['nama'];
        $nrp = $_POST['nrp'];
        $email = $_POST['email'];
        $jurusan = $_POST['jurusan'];

        $data = $this->model("Mahasiswa_model")->createMhs($nama, $nrp, $jurusan, $email);
        var_dump($data);
        if (!$data) {
            Flasher::setFlash("Create User","Sukses","post");
            header("Location: http://localhost/basicmvc/public");
        } else{
            Flasher::setFlash("Create User","error","post");
            header("Location: http://localhost/basicmvc/public");
        }
    }
}
