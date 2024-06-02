<?php

class Auth extends Controller
{
    public function index()
    {
        $this->view('login/index');
    }
    

    public function processLogin()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nim = $_POST["nim"];
            $password = $_POST["password"];
            $id_jurusan = $_POST['id_jurusan']; // Ambil id_jurusan dari POST data
        
            $loginModel = $this->model('UserModel');
        
            $user = $loginModel->getUserByNIM($nim);
        
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    if ($user['id_jurusan'] == $id_jurusan) {
                        session_start();
                        $_SESSION['user']['nim'] = $nim;
                        $_SESSION['user']['tempat_lahir'] = $loginModel->gettlsByNIM($nim);
                        $_SESSION['user']['angkatan'] = $loginModel->getAngkatan($nim);
                        $_SESSION['user']['dosen_pembimbing_akademik'] = $loginModel->getDPA($nim);
                        $_SESSION['user']['nama'] = $loginModel->getNamaByNIM($nim);
        
                        // Arahkan pengguna ke halaman tujuan jika ada, jika tidak, arahkan ke dashboard
                        if (isset($_SESSION['redirect'])) {
                            $redirect = $_SESSION['redirect'];
                            unset($_SESSION['redirect']); // Hapus session redirect setelah digunakan
                            header("Location: $redirect");
                        } else {
                            header("Location: " . BASEURL . "/dashboard/index");
                        }
                        exit();
                    } else {
                        echo "Jurusan tidak sesuai";
                    }
                } else {
                    echo "Kredensial salah";
                }
            } else {
                echo "User tidak ditemukan";
            }
        }
    }
    
    
    
    
    

    public function processRegistration()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nim = $_POST["nim"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confirm_password"];
    
            if ($password !== $confirmPassword) {
                echo "Password tidak cocok";
                exit();
            }
    
            $userModel = $this->model('UserModel');
    
            if ($userModel->checkExistingUser($nim)) {
                echo "User sudah memiliki akun";
                exit();
            }
    
            if (!$userModel->checkRegisteredNIM($nim)) {
                echo "NIM tidak terdaftar sebagai mahasiswa";
                exit();
            }
    
            $id_jurusan = substr($nim, 0, 4);
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
            $registrationSuccess = $userModel->registerUser($nim, $hashedPassword, $id_jurusan);
    
            if (!$userModel->checkExistingUser($nim)) {
                echo "gaagal";
                exit();
            }
    
            header("Location: " . BASEURL);
            exit();
        }
    }
    
}
?>
