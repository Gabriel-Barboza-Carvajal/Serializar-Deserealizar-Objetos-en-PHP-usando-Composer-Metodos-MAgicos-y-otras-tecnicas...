<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './vendor/autoload.php';

        use Symfony\Component\Serializer\Encoder\JsonEncoder;
        use Symfony\Component\Serializer\Encoder\XmlEncoder;
        use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
        use Symfony\Component\Serializer\Serializer;

        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);
        include './modelo/distrito.php';
        $distrito = new distrito('numero', 'nombre', ' secuencia');
        echo "<h1>serializando...</h1><br>";

        $jsondis = $serializer->serialize($distrito, 'json');
        print_r($jsondis);
        echo "<br><h1>deserealizando...</h1><br>";
        $al = $serializer->deserialize($jsondis, distrito::class, 'json');
        print_r($al);
        var_dump($al);
//-------------------------------------------------------------------------------------
//        include './modelo/distrito.php';
//        $distrito = new distrito('numero', 'nombre', ' secuencia');
//        echo "<h1>serializando...</h1><br>";
//
//        $jsondis = $serializer->serialize($distrito,'json');
//        print_r($jsondis);
//        
//        echo "<br><h1>deserealizando...</h1><br>";
//        $disDeser = new distrito();
//        $disDeser = json_decode($jsondis);
//        print_r($disDeser);
//-------------------------------------------------------------------------------------
//        include './modelo/distrito.php';
//        $distrito = new distrito('numero','nombre',' secuencia');
//        echo "<h1>serializando...</h1><br>";
////        $jsondis= json_encode($distrito->__serialize());
//        $jsondis= json_encode($distrito->__serialize());
//        print_r($jsondis);
//        
//        echo "<br><h1>deserealizando...</h1><br>";
//        $disDeser= json_decode($jsondis);
//        print_r($disDeser);
//        include './cargarArchivo.php';
//        $carga = new cargarArchivo();
//        $division = $carga->devolverXMLCostaRica();
//        $jsonDiv = json_encode($division);
//        $deserializando = json_decode($jsonDiv);
//        $myfile = fopen("cr.txt", "w") or die("Unable to open file!"); // w para escribir este quita todo el texto
//        
//        fwrite($myfile, $jsonDiv);
//        
//        fclose($myfile);
//        echo'';
//        //----------------------------
//          include './modelo/canton.php';
//          $cant = new canton('asdf','1234');
//          echo $cant->mostrar();
//          $x=new distrito('123', '123');
//          $x->setSecuencia('2222');
//          $a=array($x);
//          
//          $cant->agregarCantones($a);
//          
//          print_r($cant->distritos);
        ?>
    </body>
</html>
