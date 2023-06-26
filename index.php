<?php
class Automobile {

    public $brand;
    public $doorCar;    
    public $price;
    static public $counter = 0;


    public function __construct($brand, $doorCar, $price)
    {
        
        $this->brand = $brand;
        $this->doorCar = $doorCar;       
        $this->price = $price;
        self :: countCar();
        
    }


  public function carPrint(){
    return "Marchio: ". $this->brand . "\n" . "Numero porte :" . $this->doorCar . "\n" . "prezzo :" . $this->price;
}

static public function countCar(){
    self::$counter++;
}

}



$automobile = new Automobile("Ferrari", "5 porte", "4000");
// echo Automobile::$counter;





class Suv extends Automobile{
    public $model;
    static public $counter1 = 0;

    public function __construct($brand, $doorCar,$price,$model)
    {
        parent::__construct($brand, $doorCar, $price);

        $this->model = $model;

        self::countSuv();
    }

    public function Car(){
        echo "Acquista la nuova auto ". $this->model;
    }
    
    static public function countSuv(){
        self::$counter1++;
    }
}

$suv = new Suv("Ferrari", 4, "90000", "Range");
// echo Suv::$counter1;

// echo $suv->Car();

class Jeep extends Suv
{
    public function __construct($brand, $doorCar,$price,$model){
        parent::__construct($brand, $doorCar,$price,$model);
        
    }

    public function neve(){
        echo $this->model . " " . "Può andare sulla neve \n";
    }

}

$jeep = new Jeep ("volswgen", 5, 45639874, "Gianni");

// echo $jeep->neve();

class Motore extends Automobile{

    static public $counterMotori = 0;

    public $cilindrata;

    public function __construct($brand, $doorCar,$price, $cilindrata)
    {
        parent::__construct($brand, $doorCar,$price);
        $this->cilindrata = $cilindrata;
        self::counterMotori();
    }

    public function motore(){
        echo "Modello " . $this->brand. " " . "Prezzo ". $this->price. " " . "Cilindrata " . $this->cilindrata. " " ."Per vivere emozioni uniche \n";
    }

    static public function counterMotori(){
        self::$counterMotori++;
    }

    
}



$motore1 = new Motore("Honda", " ", 323214, "300cc");
$motore2 = new Motore("Yamaha", " ", 56435, "450cc");
$motore3 = new Motore("Quasimodo", " ", 123312, "125cc");

echo $motore1->motore();
echo $motore2->motore();
echo $motore3->motore();
echo Motore::$counterMotori;


