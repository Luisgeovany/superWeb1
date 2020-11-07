<?php

class BaseDatos{
    // Atributos--Variables
   public $usuarioBD="root";
   public $passwordBD="";


    //funcion especial que se llama constructor
   public function __construct(){

   }

    // metodos == Funciones
   public function conectarBD(){

       

      try{
         $infoDB="mysql:host=localhost;dbname=tienda18";
         $conexionBD=new PDO($infoDB,$this->usuarioBD,$this->passwordBD);
         return($conexionBD);

      }catch(PDOException $error){
           echo($error-> getMessage());
      }
   }

   public function agregarDatos($consultaSQl){

      //!. conectarse a la base de datos
      $conexionBD=$this->conectarBD();

      //2. preparar la consulta que se va a realizar
      $consultaInsertarDatos=$conexionBD->prepare($consultaSQl);

      //3. ejecutar la consulta
      $resultado=$consultaInsertarDatos->execute();

      //4. verificar el resultado
      if($resultado){
         echo("Registro con Exito");
      }else {
         echo("Error Agregando registro");
      }


   }


}

?>