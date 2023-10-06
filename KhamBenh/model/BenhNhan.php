<?php

    class SinhVien{
        private $id;
        private $tenBenhNhan;
        private $ngayKham;
        private $trieuChung;
        private $idBacSi;
    

        public function __construct($id, $tenBenhNhan, $ngayKham, $trieuChung, $idBacSi){
            $this->id = $id;
            $this->tenBenhNhan = $tenBenhNhan;
            $this->ngayKham = $ngayKham;
            $this->trieuChung = $trieuChung;
            $this->idBacSi = $idBacSi;

        }
        //lấy id
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id= $id;
        }


        //tenBenhNhan
        public function gettenBenhNhan(){
            return $this->tenBenhNhan;
        }
        public function settenBenhNhan($tenBenhNhan){
            $this->tenBenhNhan = $tenBenhNhan;
        }
        //ngayKham
        public function getngayKham(){
            return $this->ngayKham;
        }
        public function setngayKham($ngayKham){
            $this->ngayKham = $ngayKham;
        }
        //Ngày sinh
        public function gettrieuChung(){
            return $this->trieuChung;
        }
        public function settrieuChung($trieuChung){
            $this->trieuChung = $trieuChung;
        }
        //idBacSi
         public function getidBacSi(){
            return $this->idBacSi;
        }
        public function setidBacSi($idBacSi){
            $this->idBacSi = $idBacSi;
        }
    }