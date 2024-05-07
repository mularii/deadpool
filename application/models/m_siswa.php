<?php
class m_siswa extends CI_Model{
    
    public $agama, $tempat_agama;

    public function getagama($agama=null){
        $this->agama=$agama;
        if($this->agama == "Islam")
            {$this->tempat_agama="Masjid";}
        elseif($this->agama == "Kristen")
            {$this->tempat_agama= "Gereja Kristen";} 
        elseif($this->agama == "Katolik")
            {$this->tempat_agama= "Gereja Katolik";}
        elseif($this->agama == "Budha")
            {$this->tempat_agama= "Vihara";}
        elseif($this->agama == "Hindu")
            {$this->tempat_agama= "Pura";}
        elseif($this->agama == "Protestan")
            {$this->tempat_agama= "Gereja Protestan";}
        elseif($this->agama == "Khonghucu")
            {$this->tempat_agama= "Kelenteng";}
        return $this->tempat_agama;
    }
}