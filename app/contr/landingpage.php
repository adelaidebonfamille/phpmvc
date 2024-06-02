<?php 

class landingpage extends Controller {
    public function index()
    {
        $data['judul'] = 'SIMAK UNSRI';
        $this->view('landingpage/index', $data);
    }
}