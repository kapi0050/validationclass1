<?php
class validclass
{
    public $err_name;
    public $err_kana;

    public function validname($name)
    {
        $this->err_name = '';
        if (empty($name)) {
            $this->err_name = '名前は入力必須です。';
        } elseif (strlen($name) >= 30) {
            $this->err_name = '名前が長すぎです';
        } elseif (strlen($name) <= 1) {
            $this->err_name = '名前が短すぎです';
        }
        return $this->err_name ;
    }
    public function validkana($kana)
    {
        $this->err_kana = '';
        if (empty($kana)) {
            $this->err_kana = 'フリガナは入力必須です。';
        }
        return $this->err_kana ;
    }
}
