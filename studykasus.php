<?php

    class Lanang{

        private $nama;
        private $umur;
        private $jk;

        public function setNama($data){
            $this->nama = $data;
        }
        public function setUmur($data){
            $this->umur = $data;
        }
        public function setJk($data){
            $this->jk = $data;
        }

        public function getNama(){
           return $this->nama;
        }
        public function getUmur(){
            return $this->nama;
        }
        public function getJk(){
            return $this->nama;
        }

    }

    $manusia1 = new Lanang;
    $manusia1->setNama("Sigit");
    $manusia1->setUmur(16);
    $manusia1->setJk("Pria");

    echo "Nama saya adalah " . $manusia1->getNama();
    echo "<br>";
    echo "Umur saya " . $manusia1->getUmur();
    echo "<br>";
    echo "Jenis kelamin saya adalah "  . $manusia1->getJk();