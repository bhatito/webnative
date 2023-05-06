<?php
class Kartu
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function kartu()
    {
        $sql = "SELECT * FROM kartu";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    function tambah_data_kartu($kode, $nama, $diskon, $iuran)
    {
        $sql = "insert into kartu values ('','$kode','$nama','$diskon','$iuran')";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
