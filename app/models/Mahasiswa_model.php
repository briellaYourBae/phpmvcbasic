<?php

class Mahasiswa_model
{
    private $table = "mahasiswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllMhs()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }
    public function getMhsById($id){
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function createMhs($nama, $nrp, $jurusan, $email)
    {
        $this->db->query("INSERT INTO {$this->table} (nama, nrp, email, jurusan) VALUES (:nama, :nrp, :email, :jurusan)");
        $this->db->bind(":nama", $nama);
        $this->db->bind(":nrp", $nrp);
        $this->db->bind(":email", $email);
        $this->db->bind(":jurusan", $jurusan);
        $this->db->execute();
    }
    public function deleteMhs($id){
        $query = "DELETE FROM {$this->table} WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function updateMhs($data){
        $query = "UPDATE {$this->table} SET nama= :nama, nrp= :nrp, email= :email, jurusan= :jurusan WHERE id= :id ";
        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':nrp', $data['nrp']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function serchMhs(){
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM {$this->table} WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
