<?php

    class Lop{
        private $id;
        private $tenBacSi;
        private $chuyenKhoa;
        
    

        public function __construct($id, $tenBacSi){
            $this->id = $id;
            $this->tenBacSi = $tenBacSi;
          
        }
        //lấy id
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id= $id;
        }

        //lấy Tên Lớp
        public function gettenBacSi(){
            return $this->tenBacSi;
        }
        public function settenBacSi($tenBacSi){
            $this->tenBacSi = $tenBacSi;
        }

        public function getchuyenKhoa(){
            return $this->chuyenKhoa;
        }
        public function setchuyenKhoa($chuyenKhoa){
            $this->chuyenKhoa = $chuyenKhoa;
        }


    }