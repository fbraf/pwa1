<?php
    class Student
    {
        private $ime;
        private $starost; 

        public  function __construct()
        {
            $this->ime = "";
            $this->starost = 0;
        }
        public function getIme()
        {
            return $this->ime;
        }
        public function pozdrav()
        {
            return "Zdravo aj sam " . $this->ime . " i imam " . $this->starost . " godina. <br>";
        }
        public function setIme($novo_ime)
        {
            if(strtolower(trim($novo_ime)) == "radoslav")
            {
                echo "A necu da se zovem radoslav";
                return;
            }
            else{
                $this->ime = $novo_ime;
                echo "reimenovao sam se <br>";
            }
        }
        public function getStarost()
        {
            return $this->starost;

        }
        public function rodjendan()
        {
            $this->starost++;
        }

    }

    $pera = new Student("Petar",25);
    $pera->pozdrav();
    $pera->setIme("radoslav");
    $pera->rodjendan();
    echo $pera->pozdrav();
?>