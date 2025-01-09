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
   
      foreach ($persona as $i => $y) {
      
          echo $i." : ". $y.
           "<br>";
        }
    
       $persona["edad"] = 24;
       /* $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964); 
        $car["year"] = 2024; */
        echo  "<br>";
        foreach ($persona as  $i) {
     
            echo"Dato ".$indice." : ".$i.
            "<br>";
            $indice++;
          }
          echo  "<br>";
        unset($persona["ciudad"]);
         var_dump($persona);
         echo  "<br>";

  $letters = "a,b,c,d,e,f";
  $letras = explode(",",$letters);
        echo "<br>";
   for ($i=count($letras) -1; $i >= 0; --$i) 
   { 
   echo"letter ". ($i+1).":".$letras[$i] ;
   echo "<br>";
   }
 
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
            echo $nombres.":".$notas_estudiantes[$nombres];
            
        }
   }
 echo "<br>";
 foreach ($notas_estudiantes as $nombres => $notas)
 {
     foreach ($notas_estudiantes as $nombres1 => $notas2)
     if ($notas_estudiantes[$nombres] > $notas_estudiantes[$nombres1] )
     {
         echo  $notas_estudiantes[$nombres];
         echo "<br>";
        
        break;
    }
    break;
   }




   

   ?>



  
 


 









  
   






    
    
</body>
</html>