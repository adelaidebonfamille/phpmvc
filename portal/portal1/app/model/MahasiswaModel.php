<?php
class MahasiswaModel extends Database{
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

  public function updateMahasiswa($data) {
    // Ensure the session is started
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Get NIM from the session
    $nimData = isset($_SESSION['nim']) ? $_SESSION['nim'] : null;

    // Check if NIM exists and is an array
    if ($nimData === null || !is_array($nimData)) {
        throw new Exception("NIM tidak ditemukan di sesi atau bukan array.");
    }

    // Extract the actual NIM value
    $nim = $nimData['nim'];

    // Query for updating
    $query = "UPDATE mhsfe SET 
        jenis_kelamin = :jenis_kelamin, 
        tempat_lahir = :tempat_lahir, 
        tanggal_lahir = :tanggal_lahir, 
        alamat = :alamat, 
        nomor_telpon = :nomor_telpon, 
        pekerjaan = :pekerjaan, 
        tempat_kerja = :tempat_kerja, 
        alamat_pekerjaan = :alamat_pekerjaan, 
        telp_tempat_kerja = :telp_tempat_kerja, 
        kewarganegaraan = :kewarganegaraan, 
        nama_ayah = :nama_ayah, 
        pendidikan_ayah = :pendidikan_ayah, 
        umur_ayah = :umur_ayah, 
        pekerjaan_ayah = :pekerjaan_ayah, 
        alamat_orang_tua = :alamat_orang_tua, 
        nama_ibu = :nama_ibu, 
        pendidikan_ibu = :pendidikan_ibu, 
        umur_ibu = :umur_ibu, 
        pekerjaan_ibu = :pekerjaan_ibu, 
        foto = :foto 
        WHERE nim = :nim";

    $this->db->query($query);

    // Bind the parameters
    $this->db->bind(':nim', $nim);
    $this->db->bind(':jenis_kelamin', $data['jenis_kelamin'] ?? null);
    $this->db->bind(':tempat_lahir', $data['tempat_lahir'] ?? null);
    $this->db->bind(':tanggal_lahir', $data['tanggal_lahir'] ?? null);
    $this->db->bind(':alamat', $data['alamat'] ?? null);
    $this->db->bind(':nomor_telpon', $data['nomor_telpon'] ?? null);
    $this->db->bind(':pekerjaan', $data['pekerjaan'] ?? null);
    $this->db->bind(':tempat_kerja', $data['tempat_kerja'] ?? null);
    $this->db->bind(':alamat_pekerjaan', $data['alamat_pekerjaan'] ?? null);
    $this->db->bind(':telp_tempat_kerja', $data['telp_tempat_kerja'] ?? null);
    $this->db->bind(':kewarganegaraan', $data['kewarganegaraan'] ?? null);
    $this->db->bind(':nama_ayah', $data['nama_ayah'] ?? null);
    $this->db->bind(':pendidikan_ayah', $data['pendidikan_ayah'] ?? null);
    $this->db->bind(':umur_ayah', $data['umur_ayah'] ?? null);
    $this->db->bind(':pekerjaan_ayah', $data['pekerjaan_ayah'] ?? null);
    $this->db->bind(':alamat_orang_tua', $data['alamat_orang_tua'] ?? null);
    $this->db->bind(':nama_ibu', $data['nama_ibu'] ?? null);
    $this->db->bind(':pendidikan_ibu', $data['pendidikan_ibu'] ?? null);
    $this->db->bind(':umur_ibu', $data['umur_ibu'] ?? null);
    $this->db->bind(':pekerjaan_ibu', $data['pekerjaan_ibu'] ?? null);
    $this->db->bind(':foto', $data['foto'] ?? null);

    return $this->db->execute();
}



    
    
    
    
    
    
    
}
