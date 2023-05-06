<?php
class Pelanggan
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function datapelanggan()
    {
        $sql = "SELECT pelanggan.*, kartu.nama as kategori from pelanggan inner join 
        kartu on kartu.id = pelanggan.kartu_id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
