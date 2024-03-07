<?php 
    class Mahasiswa extends Controller {
        public function index() {
            $data["mahasiswa"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
            $data['title'] = "Mahasiswa";
            $this->view("templates/header", $data);
            $this->view("mahasiswa/index", $data);
            $this->view("templates/header");
            // echo "ini mahasiswa";
        }
        public function newMahasiswa(){
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $jurusan = $_POST["jurusan"];
            $nrp = $_POST["nrp"];

            $data = $this->model("Mahasiswa_model")->createMahasiswa($nama, $nrp, $jurusan, $email);
            
            // DUM($nama);    
            header("Location: http://localhost/basicmvc/public/");
        }
    }