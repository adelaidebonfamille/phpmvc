<?php 

class fakultas extends Controller {
    public function index()
    {
        $data['judul'] = 'Fakultas';
        $this->view('fakultas/index', $data);
    }
}