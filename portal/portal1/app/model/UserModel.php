<?php

class UserModel extends Database
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getUserByNIM($nim)
    {
        $this->db->query("SELECT * FROM userfe WHERE nim = :nim");
        $this->db->bind(':nim', $nim);
        return $this->db->single(); 
    }
    public function getNamaByNIM($nim)
    {
        $this->db->query("SELECT nama FROM mhsfe WHERE nim = :nim");
        $this->db->bind(":nim", $nim, PDO::PARAM_STR);
        $this->db->execute();
        return $this->db->single(); 
    }
    public function getNIM($nim)
    {
        $this->db->query("SELECT * FROM mhsfe WHERE nim = :nim");
        $this->db->bind(':nim', $nim);
        return $this->db->single(); 
    }
    public function getAngkatan($nim)
    {
        $this->db->query("SELECT angkatan FROM mhsfe WHERE nim = :nim");
        $this->db->bind(":nim", $nim, PDO::PARAM_STR);
        $this->db->execute();
        $row = $this->db->single();
        return $row['angkatan'];
    }
    public function getDPA($nim) {
        $this->db->query("SELECT dosen.nama_dosen FROM mhsfe JOIN dosen ON mhsfe.dosen_pembimbing_akademik = dosen.nip WHERE mhsfe.nim = :nim");
        $this->db->bind(":nim", $nim, PDO::PARAM_STR);
        $this->db->execute();
        $row = $this->db->single();
        return $row['nama_dosen'];
    }
    public function gettlsByNIM($nim) {
        $this->db->query("SELECT tempat_lahir FROM mhsfe WHERE nim = :nim");
        $this->db->bind(":nim", $nim, PDO::PARAM_STR);
        $this->db->execute();
        $row = $this->db->single();
        return $row['tempat_lahir'];
    }
    public function checkExistingUser($nim)
    {
        $this->db->query("SELECT * FROM userfe WHERE nim = :nim");
        $this->db->bind(":nim", $nim, PDO::PARAM_STR);
        $this->db->execute();
        return $this->db->rowCount() > 0;
    }

    public function checkAccountStatus($nim)
    {
        $this->db->query("SELECT * FROM userfe WHERE nim = :nim");
        $this->db->bind(":nim", $nim, PDO::PARAM_STR);
        $this->db->execute();
        return $this->db->rowCount(); 
    }
    public function getSulietByNIM($nim)
    {
        $this->db->query('SELECT suliet FROM mhs_fe WHERE nim = :nim');
        $this->db->bind(':nim', $nim);
        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return $row['suliet'];
        } else {
            return null; // Jika data tidak ditemukan
        }
    }


    public function checkRegisteredNIM($nim)
    {
        $this->db->query("SELECT * FROM mhsfe WHERE nim = :nim");
        $this->db->bind(":nim", $nim, PDO::PARAM_STR);
        $this->db->execute();
        return $this->db->rowCount() > 0;
    }

    public function registerUser($nim, $password, $id_jurusan)
    {
        $this->db->query("INSERT INTO userfe (nim, password, id_jurusan) VALUES (:nim, :password, :id_jurusan)");
        $this->db->bind(":nim", $nim, PDO::PARAM_STR);
        $this->db->bind(":password", $password, PDO::PARAM_STR);
        $this->db->bind(":id_jurusan", $id_jurusan, PDO::PARAM_STR);
        return $this->db->execute();
    }
}

?>
