<?php

class Produto {

    private $id, $infor1, $infor2, $infor3, $infor4, $imgs; 

    // getters e setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id; 
    }

    public function getInfor1() {
        return $this->infor1;
    }

    public function setInfor1($infor1) {
        $this->infor1 = $infor1; 
    }

    public function getInfor2() {
        return $this->infor2;
    }

    public function setInfor2($infor2) {
        $this->infor2 = $infor2;
    }

    public function getInfor3() {
        return $this->infor3;
    }

    public function setInfor3($infor3) {
        $this->infor3 = $infor3;
    }

    public function getInfor4() {
        return $this->infor4;
    }

    public function setInfor4($infor4) {
        $this->infor4 = $infor4;
    }

    public function getImgs() {
        return $this->imgs;
    }

    public function setImgs($imgs) {
        $this->imgs = $imgs;
    }

}
