<?php
class buku{
    private $kode;
    public function setKode($input){
        $this->kode=$input;
    }
    public function getKode(){
        return $this->kode;
    }
    public function getJudul(){
        $kd_buku=$this->kode;
        $sql=mysql_query("SELECT judul FROM buku WHERE kd_buku='$kd_buku'");
        $r=mysql_fetch_array($sql);
        return $r["judul"];
    }
    public function getPengarang(){
        $sql=mysql_query("SELECT pengarang FROM buku WHERE kd_buku = \"".$this->kode."\"");
        $r=mysql_fetch_array($sql);
        return $r["pengarang"];
    }
    public function getTahun(){
        $sql=mysql_query("SELECT thn_terbit FROM buku WHERE kd_buku = \"".$this->kode."\"");
        $r=mysql_fetch_array($sql);
        return $r["thn_terbit"];
    }
    public function getPenerbit(){
        $sql=mysql_query("SELECT penerbit FROM buku WHERE kd_buku = \"".$this->kode."\"");
        $r=mysql_fetch_array($sql);
        return $r["penerbit"];
    }
    public function getHarga(){
        $sql=mysql_query("SELECT harga FROM buku WHERE kd_buku = \"".$this->kode."\"");
        $r=mysql_fetch_array($sql);
        return $r["harga"];
    }
    public function getStatus(){
        $sql=mysql_query("SELECT status FROM buku WHERE kd_buku = \"".$this->kode."\"");
        $r=mysql_fetch_array($sql);
        return $r["status"];
    }
    public function getPeminjam(){
        $sql=mysql_query("SELECT peminjam FROM buku WHERE kd_buku = \"".$this->kode."\"");
        $r=mysql_fetch_array($sql);
        return $r["peminjam"];
    }
    public function getCount(){
        $sql=mysql_query("SELECT count_pinjam FROM buku WHERE kd_buku = \"".$this->kode."\"");
        $r=mysql_fetch_array($sql);
        return $r["count_pinjam"];
    }
}
?>