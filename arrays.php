<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $indice = 1;
   //recorrer el array persona por elemento con indice
   $persona = array("nombre"=>"Sara","apellido"=>"Martinez","edad"=>23,"ciudad"=>"Barcelona");
   foreach ($persona as  $i) {
       
       echo"Dato ".$indice." : ".$i.
       "<br>";
       $indice++;
       if ($indice == 5) {
           $indice = 1;
        }
    }
    echo "<br>";
    
    //recorrer el array persona por categoría
    foreach ($persona as $i => $y) {
        
        echo $i." : ". $y.
        "<br>";
    }
    //recorrer el array persona por elemento con indice cambiando la edad
    
       $persona["edad"] = 24;
        echo  "<br>";
        foreach ($persona as  $i) {
     
            echo"Dato ".$indice." : ".$i.
            "<br>";
            $indice++;
          }
          echo  "<br>";


          //borrar la clave ciudad y su elemento para mostrarlo con var dump
        unset($persona["ciudad"]);
         var_dump($persona);
         echo  "<br>";

         //Usar explode para separar el string apartir de cada coma, y crear un array con esos elementos
         //mostrandolos de forma descendente
  $letters = "a,b,c,d,e,f";
  $letras = explode(",",$letters);
        echo "<br>";
   for ($i=count($letras) -1; $i >= 0; --$i) 
   { 
   echo"letter ". ($i+1).":".$letras[$i] ;
   echo "<br>";
   }
   
   //Crear array asociativo, ordenandolos  de mayor a menor

   echo "<br>";
   $notas_estudiantes = array("Miguel"=>5, "Luis"=>7, "Marta"=>10, "Isabel" => 8, "Aitor" => 4, "Pepe"=> 1);
   arsort($notas_estudiantes);
   $keys = array_keys($notas_estudiantes);
   $clength = count($notas_estudiantes);
   for($x = 0; $x < $clength; $x++) {
    $nombres = $keys[$x];
     echo "Nombre: ".$nombres."---"." Nota: ".$notas_estudiantes[$nombres];
     echo "<br>";
   }

   //Calcular nota media, mostrando dos decimales
   //Mostrar los alumnos cuya nota sea mayor a la nota media
   $notas_total = 0;
   foreach ($notas_estudiantes as $nombres => $notas)
   {
        $notas_total += $notas_estudiantes[$nombres];
   }
   $nota_media = number_format($notas_total/5,2 );
   echo "<br>";
   
   echo "<br>";
   echo "Nota media: ".$nota_media;
   echo "<br>";
   echo "Notas medias mayores a ".$nota_media.".";
   foreach ($notas_estudiantes as $nombres => $notas)
   {
        if ($notas_estudiantes[$nombres] >= $nota_media)
        {   echo "<br>";
            echo $nombres." : ".$notas_estudiantes[$nombres];
            
        }
   }
 echo "<br>";
 foreach ($notas_estudiantes as $nombres => $notas)
 {
     foreach ($notas_estudiantes as $nombres1 => $notas2)
     if ($notas_estudiantes[$nombres] > $notas_estudiantes[$nombres1] )
     {     
         echo "La nota más alta es ".$notas_estudiantes[$nombres]." y el mejor o la mejor alumna es
         ".$nombres;
         echo "<br>";
        
        break;
    }
    break;
   }




   

   ?>



  
 


 









  
   






    
    
</body>
</html>