<!DOCTYPE html>
<html>
    <head>
        <title>Teste PHP</title>

        <link rel="stylesheet" href="/style.css">

    </head>

    <body>

   
    <div style="background-color:blanchedalmond;display:flex; 
                justify-content:space-around; flex-wrap:wrap; 
                width:100%;gap:15px; height:auto">
 

    <?php

        $path = "D:/Users/santo/source/novo/[0015] simple-studio - Copia - Copia/Simple_Studio_1.0/HOME/";
        $diretorio = dir($path);
        $array2 = [];
        // echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";



            while($arquivo = $diretorio -> read())
            
            {
            // echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";

                    if($arquivo !="." && 
                       $arquivo !="..")

                    {
                        array_push($array2, $arquivo); 
                    }

            }
            
        $diretorio -> close();

// echo"$array2[1]";

         $count2 = count($array2);

            for ($i = 0; $i <  $count2; $i++) 

            {
                    $dress2_=$array2[$i];
                

                    echo "<img style='margin-top:50px; border-radius: 8px;border-color: transparent'  
                          src=/Simple_Studio_1.0/HOME/$dress2_  width=250 height=350 border=1/></a>";

                
            }


    ?>

</div>


    </body>


</html>