<?php

class hikam_23
{

    private $db;

    public function __construct($con)
    {
        $this->db = $con;
    }

    #activate fungsi untuk menampilkan data dari db

    public function viewData() {
        $query = $this->db->prepare("SELECT * FROM hikam_23");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
}

?>