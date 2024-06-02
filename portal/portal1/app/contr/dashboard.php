<?php

class dashboard extends Controller {
    public function index() {
        $this->checkLoginSession();
        
        $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : null;
        $nim = isset($_SESSION['nim']) ? $_SESSION['nim'] : null;
        $angkatan = isset($_SESSION['angkatan']) ? $_SESSION['angkatan'] : null;
        $dosen_pembimbing_akademik = isset($_SESSION['dosen_pembimbing_akademik']) ? $_SESSION['dosen_pembimbing_akademik'] : null;
        $tempat_lahir = isset($_SESSION['tempat_lahir']) ? $_SESSION['tempat_lahir'] : null;
    
        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'angkatan' => $angkatan,
            'dosen_pembimbing_akademik' => $dosen_pembimbing_akademik,
            'tempat_lahir' => $tempat_lahir
        );
        $this->view('template/header');
        $this->view('template/topbar');
        $this->view('dashboard/index');
        $this->view('template/sidebar', $data);
        $this->view('template/footer');
    }
    
    public function datamhs() {
            $this->checkLoginSession();
        
            $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : null;
            $nim = isset($_SESSION['nim']) ? $_SESSION['nim'] : null;
            $angkatan = isset($_SESSION['angkatan']) ? $_SESSION['angkatan'] : null;
            $dosen_pembimbing_akademik = isset($_SESSION['dosen_pembimbing_akademik']) ? $_SESSION['dosen_pembimbing_akademik'] : null;
            $tempat_lahir = isset($_SESSION['tempat_lahir']) ? $_SESSION['tempat_lahir'] : null;
        
            $data = array(
                'nama' => $nama,
                'nim' => $nim,
                'angkatan' => $angkatan,
                'dosen_pembimbing_akademik' => $dosen_pembimbing_akademik,
                'tempat_lahir' => $tempat_lahir
            );
        
        $this->view('template/header');
        $this->view('template/topbar');
        $this->view('dashboard/datamhs', $data);
        $this->view('template/sidebar', $data);
        $this->view('template/footer');
    }
    
    private function checkLoginSession() {
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASEURL . "/auth/index");
            exit();
        }

        if (isset($_SESSION['timeout']) && $_SESSION['timeout'] < time()) {
            session_unset();
            session_destroy();
            header("Location: " . BASEURL . "/auth/index");
            exit();
        }

        $_SESSION['timeout'] = time() + 1800; // Set timeout to 30 minutes
    }
    public function updateMahasiswa() {
        if ($this->model('MahasiswaModel')->updateMahasiswa($_POST)) {
            header("Location: " . BASEURL . "/dashboard/datamhs");
            exit;
        } else {
            // Handle the error, maybe set a session message and redirect to an error page
            // or re-render the form with an error message
            echo "Gagal memperbarui data mahasiswa.";
        }
    }

    
}


