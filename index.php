<?php
/**
 * Tipos de variables en PHP
 */

 /**
  * String
  */
$name ="Jair"; 
$lastname="Rojas";

/**
 * int
 */
$age=21; 
/**
 * Double
 */
$size=1.72; 

/**
 * Booleano
 */
$booleanTrue=true; 
$booleanFalse=false; //Booleano
/**
 * Arreglos
 */
$array=[];
$array2=array();
$arrayValues=[10,'sting',true,['Otro valor']];

/**
 * Constantes
 */
const CONSTANTE_1='Valor Constante 1';
const CONSTANTE_2=23;

/**
 * Objetos
 */
$object = new stdClass();

/**
 * Clases
 */
/*class Auto{
    var $color;
    string $marca;
    array $array;
    bool  $propiedadBoolean = false;
    $propiedadSinTipoDeDato=[];
}*/
class Auto{
   int $numberOfDoors=0;

   public function_constructor(public int $numberOfDoors)
   {
        this.numberOfDoors=$doors;
        $this->numberOfDoors=$doors;*/
    }

    public function getDetails(string $time){
        //Equivante al System Out Println
        echo 'Time $time';
        echo "Time $time";
        echo "Hola Mundo";
        echo 'Hola Mundo';
    }
}
/**
 * Crear instancias de clases
 */
$autoInstance = new Auto(4);
$autoInstance2=Auto(4);

/**
 * Ciclos
 */
for($i=0,$i<10;$i++){
    echo $i."\n";
}
¿>
