<?php

class DashboardModel extends Database{
    public function getNama()
    {
        $this->query('SELECT nama FROM mhsfe'); 
        $row = $this->single();
        return $row['nama'];
    }
}