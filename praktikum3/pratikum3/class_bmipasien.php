<?php
class BMIPasien {
    public $name;
    public $weight;
    public $height;
    public $age;
    public $gender;
    public $BMIres;
    public $BMIstatus = '';

    function __construct($name, $weight, $height, $age, $gender)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->height = $height;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function hasilBMI() {
        $this->height = $this->height / 100;
        $this->BMIres = $this->weight / ($this->height * $this->height);
        return $this->BMIres;
    }

    public function statusBMI() {
        if($this->BMIres < 18.5) {
            return $this->BMIstatus = 'Kekurangan berat badan';
        } else if ($this->BMIres >= 18.5 && $this->BMIres <= 24.9) {
            return $this->BMIstatus = 'Berat Normal';
        } else if ($this->BMIres >= 25.0 && $this->BMIres <= 29.9) {
            return $this->BMIstatus = 'Kelebihan berat badan';
        } else {
            return $this->BMIstatus = 'Kegemukan (Obesitas)';
        }
    }

}

?>