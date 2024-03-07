<?php 
    class Mahasiswa_model {
        private $db;
        private $table = "Mahasiswa";

        public function __construct() {
            $this->db = new Database;
        }
        
        public function getAllMahasiswa() {
            $this->db->query("SELECT * FROM {$this->table}");
            return $this->db->resultSet();
        }
        
        public function createMahasiswa($nama, $nrp, $jurusan, $email){
            $this->db->query("INSERT INTO {$this->table} (nama, nrp, email, jurusan)VALUES (:nama, :nrp, :email, :jurusan);");
            $this->db->bind(":nama", $nama);
            $this->db->bind(":nrp", $nrp);
            $this->db->bind(":email", $email);
            $this->db->bind(":jurusan", $jurusan);
            $this->db->execute();
        }
    }