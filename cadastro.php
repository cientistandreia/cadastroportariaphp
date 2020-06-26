<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 

$db_name="controleFrete"; // Database name 
$tbl_name="tb_veiculosPortaria2"; // Table name 
 if (isset($_POST["filter"])) $filter = @$_POST["filter"]; 
if (isset($_POST["cpf"])) $filter = @$_POST["cpf"];
//if (isset($_POST["km"])) $filter = @$_POST["km"];



   // $idVeiculosPortaria = filter_var($idVeiculosPortaria, FILTER_SANITIZE_NUMBER_INT);
       $cpf = filter_var($cpf, FILTER_SANITIZE_NUMBER_INT);
    $km = filter_var($km, FILTER_SANITIZE_NUMBER_INT);
    $hora = filter_var($hora, FILTER_SANITIZE_NUMBER_INT);
    $idveiculosPortaria = filter_var($idveiculosPortaria, FILTER_SANITIZE_NUMBER_INT);
   /* $idTerceiros = filter_var($idTerceiros, FILTER_SANITIZE_NUMBER_INT);
    $idTerceiros =  addslashes($_POST['idTerceiros']) ;
	$idFrota =  addslashes($_POST['idFrota']) ;*/
	$idveiculosPortaria = addslashes($_POST['idveiculosPortaria'] );
    $placa = addslashes($_POST['placa'] );
    $cpf = addslashes($_POST['cpf']) ;
    $motorista =  addslashes($_POST['motorista']);
   // $km =  addslashes($_POST['km']);
    $origem = addslashes($_POST['origem']);
    $destino =  addslashes($_POST['destino']);
    $hora =  addslashes($_POST['hora']);
  //  $statusPortaria =  addslashes($_POST['statusPortaria']);
    
   /* $idVeiculosPortaria = addslashes(trim($_GET["idVeiculosPortaria"]));
    $placa = addslashes(trim($_GET["placa"]));
    $cpf = addslashes(trim($_GET["cpf"]));
    $motorista = addslashes(trim($_GET["motorista"]));
    $origem = addslashes(trim($_GET["origem"]));
    $destino = addslashes(trim($_GET["destino"]));
    $hora = addslashes(trim($_GET["hora"]));
   $statusPortaria = addslashes(trim($_GET["statusPortaria"]));
   */

 
 
	// Manipulamos as variáveis para evitar problemas com aspas e outros caracteres protegidos do MySQL
	//$idFrota = mysql_escape_string($idFrota);
	$idveiculosPortaria = mysql_escape_string($idveiculosPortaria);
	$km = mysql_escape_string($km);
	$placa = mysql_escape_string($placa);
 	$cpf = mysql_escape_string($cpf);
 	$motorista = mysql_escape_string($motorista);
 	//$km = mysql_escape_string($km);
 	$origem = mysql_escape_string($origem);
 	$destino = mysql_escape_string($destino);
 	$hora = mysql_escape_string($hora);
 	    
   // Declare lookup input and output (initialized as nulls to suppress warnings) variables.  
    $idveiculosPortaria = 'idveiculosPortaria';
 	$km = 'km';
 	   /* $idFrota = 'idFrota';
	$idTerceiros = 'idTerceiros';*/
    $placa = 'placa';
    $cpf = 'cpf';
    $motorista = 'motorista';
    $km = 'km';
    $origem = 'origem';
    $destino = 'destino';
    $hora = 'hora';    
    


//	$cpf = isset($_POST['cpf']) ? mysql_real_escape_string($_POST['cpf']) : '';
 //  echo 'Funcionário: '. $cpf;
  //  echo 'Funcionário: '. $km;
       

   
	$link = mysql_connect('127.0.0.1:3306', 'bravo', 'bravo123');
	if (!$link) {
    	die('Não foi possível conectar: ' . mysql_error());
	}

if (!mysql_select_db('controleFrete')) {
    die('Could not select database: ' . mysql_error());
}

 
$_POST['entrada'] = 1;

$_POST['saida'] = 2;

/*
if (isset($_POST['km']) && $_POST['km'] == 'km' ){  

 $cpf = "";
  //$post = (!empty($_POST)) ? true : false;
  //   $km = isset($_POST['km']) ? mysql_real_escape_string($_POST['km']) : '';
  
//echo $km = 'KM é exigido.',$_POST['km'] ;
 
//$sql1 ="insert into tb_veiculosPortaria2 (km)" values ($_POST['km']) or die (mysql_error());
//$query=mysql_query($sql1);

 $cpfSQL= "INSERT INTO  controleFrete.tb_veiculosPortaria2
(idveiculosPortaria,cpf,placa,motorista,km,origem,destino,hora,
 statusPortaria) values('".$_POST['idveiculosPortaria']."','".false."','".$_POST['placa']."','".$_POST['motorista']."','".$_POST['km']."',
'".$_POST['origem']."','".$_POST['destino']."', '".$_POST['hora']."',".$_POST['statusPortaria'].") "or die (mysql_error());


$result=mysql_query($cpfSQL);	

 //mysql_query($link,$cpfSQL);
   Print '<script>alert("KM registrado com sucesso!");</script>'; // Prompts the user
       Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php


} else if (isset($_POST['cpf']) && $_POST['cpf'] == 'cpf'){
 $kmSQL= "INSERT INTO  controleFrete.tb_veiculosPortaria2
(idveiculosPortaria,cpf,placa,motorista,km,origem,destino,hora,
 statusPortaria) values('".$_POST['idveiculosPortaria']."','".false."','".$_POST['placa']."','".$_POST['motorista']."','".$_POST['km']."',
'".$_POST['origem']."','".$_POST['destino']."', '".$_POST['hora']."',".$_POST['statusPortaria'].") "or die (mysql_error());


$resul=mysql_query($kmSQL);	

 //mysql_query($link,$cpfSQL);
   Print '<script>alert("KM registrado com sucesso!");</script>'; // Prompts the user
       Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php

}


if (isset($_POST['km']) && $_POST['km'] == 'km'){
$kmSQL= "INSERT INTO  controleFrete.tb_veiculosPortaria2
(idveiculosPortaria,cpf,placa,motorista,km,origem,destino,hora,
 statusPortaria) values('".$_POST['idveiculosPortaria']."','".false."','".$_POST['placa']."','".$_POST['motorista']."','".$_POST['true']."',
'".$_POST['origem']."','".$_POST['destino']."', '".$_POST['hora']."',".$_POST['statusPortaria'].") "or die (mysql_error());


$result=mysql_query($kmSQL);	

 //mysql_query($link,$cpfSQL);
   Print '<script>alert("cpf registrado com sucesso!");</script>'; // Prompts the user
       Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php


}
*/

//&& mysqli_num_rows($link) == 0
if(@$_POST['submit']== true  ){
//var checkBox = document.form_registro.checkbox;
$link = mysql_connect('127.0.0.1:3306', 'bravo', 'bravo123');
	  mysql_select_db("controleFrete", $link);
	  
	    $filter=$_POST['filter'];
   


        $km = "";
  
      // Validate the ICQ number using FILTER_VALIDATE_INT:
      
 
     // $cpf = filter_input(INPUT_POST, 'cpf', FILTER_VALIDATE_INT);
 
      //    echo "<CPF: $cpf</p>\n";

   // $km = filter_input(INPUT_POST, 'km', FILTER_VALIDATE_INT);
        // $filter = isset($km) ? $km : $km;
       //  $filter = isset($_POST['cpf']) ? $_POST['cpf'] : true ;    
  //if ( !isset( $_REQUEST['sort'][0]['filter'] ) ) { $_REQUEST['sort'][0]['filter'] = "cpf"; }
//$filter = isset($_REQUEST['cpf']) ? $_REQUEST['cpf'] : false;

 //if( $filter != $_POST['cpf'])
 /*else  if(@$_POST['cpf']==true){

 echo 'teste';
/* $query= "INSERT INTO  controleFrete.tb_veiculosPortaria2
(idveiculosPortaria,cpf,placa,motorista,km,origem,destino,hora,
 statusPortaria) values('".$_POST['idveiculosPortaria']."','".$_POST['cpf']."','".$_POST['placa']."','".$_POST['motorista']."',0,
'".$_POST['origem']."','".$_POST['destino']."', '".$_POST['hora']."',".$_POST['statusPortaria'].") " or die($db->error);
$result=mysql_query($query);
$mysqli->query($query);
   $kmSQL= "INSERT INTO  controleFrete.tb_veiculosPortaria2
(idveiculosPortaria,cpf,placa,motorista,km,origem,destino,hora,
 statusPortaria) values('".$_POST['idveiculosPortaria']."','".$_POST['cpf']."','".$_POST['placa']."','".$_POST['motorista']."','".false."',
'".$_POST['origem']."','".$_POST['destino']."', '".$_POST['hora']."',".$_POST['statusPortaria'].") ";
echo $kmSQL;
 
$resul=mysql_query($kmSQL) or die (mysql_error());
   Print '<script>alert("CPF registrado com sucesso!");</script>'; // Prompts the user
       Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php


echo  "<br />cpf = " . $_POST["cpf"] ;*///
 /*$kmSQL= "INSERT INTO  controleFrete.tb_veiculosPortaria2
(idveiculosPortaria,cpf,placa,motorista,km,origem,destino,hora,
 statusPortaria) values('".$_POST['idveiculosPortaria']."','".false."','".$_POST['placa']."','".$_POST['motorista']."','".$_POST['km']."',
'".$_POST['origem']."','".$_POST['destino']."', '".$_POST['hora']."',".$_POST['statusPortaria'].") "or die (mysql_error());




printf ("New Record has km %d.\n", $_POST['cpf']);

echo  "<br />cpf = " . $_POST["km"] ;
//printf ("New Record has cpf %d.\n", $_POST['km']);
echo $query;

$cpf='';
printf ("New Record has km %d.\n", $_POST['km']);

//else if(mysql_query( $link, $kmSQL )){
  // Standard form submission
*/

//$result=mysql_query($kmSQL);

//$kmSQL=mysql_query($query);   

//echo 'cpf 0';

/* echo $_POST['cpf'];
 $query= "INSERT INTO  controleFrete.tb_veiculosPortaria2
(idveiculosPortaria,km,placa,motorista,'cpf',origem,destino,hora,
 statusPortaria) values('".$_POST['idveiculosPortaria']."','".true."','".$_POST['placa']."','".$_POST['motorista']."',0,
'".$_POST['origem']."','".$_POST['destino']."', '".$_POST['hora']."',".$_POST['statusPortaria'].") " or die($db->error);
$result=mysql_query($query);
printf ("New Record has cpf %d.\n", $_POST['cpf']);

echo 'teste1';

$cpf = 'km';
$cpf = 'cpf';*/
}
//$col = mysql_query("SELECT ".$cpf." FROM tb_veiculosPortaria2");

  
  if (isset($_POST['km'])) {$km = $_POST['km'];
        Print '<script>alert("km registrado com sucesso!");</script>'; // Prompts the user
       Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
  
  }
  
  
  
  
if (isset($_POST['cpf'])) {$cpf = $_POST['cpf'];    


  mysql_query("INSERT INTO  controleFrete.tb_veiculosPortaria2
(idveiculosPortaria,cpf,placa,motorista,km,origem,destino,hora,
 statusPortaria) values('".$_POST['idveiculosPortaria']."','".true."','".$_POST['placa']."','".$_POST['motorista']."','".false."',
'".$_POST['origem']."','".$_POST['destino']."', '".$_POST['hora']."',".$_POST['statusPortaria'].")") or die (mysql_error());
 // inserts value into table users
        Print '<script>alert("CPF registrado com sucesso!");</script>'; // Prompts the user
       Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
  echo  "<br />cpf = " . $_POST["cpf"] ;}


//echo 'kmteste';
  
  
  
  
  if ($km == 1) 
    {


        $exists .= "u";
    }
  
  

/*

if (isset($km) && isset($cpf))
{

$insert = "INSERT INTO  controleFrete.tb_veiculosPortaria2
(idveiculosPortaria,cpf,placa,motorista,km,origem,destino,hora,
 statusPortaria) values('".$_POST['idveiculosPortaria']."','".true."','".$_POST['placa']."','".$_POST['motorista']."','".false."',
'".$_POST['origem']."','".$_POST['destino']."', '".$_POST['hora']."',".$_POST['statusPortaria'].")") or die (mysql_error());
$result = mysql_query($link,$insert);

if ($result == 'true') {echo "<p>post is added.</p>";}
else {echo "<p>Entre com o km.</p>";

$insertkm = "INSERT INTO  controleFrete.tb_veiculosPortaria2
(idveiculosPortaria,cpf,placa,motorista,km,origem,destino,hora,
 statusPortaria) values('".$_POST['idveiculosPortaria']."','".false."','".$_POST['placa']."','".$_POST['motorista']."','".true."',
'".$_POST['origem']."','".$_POST['destino']."', '".$_POST['hora']."',".$_POST['statusPortaria'].")") or die (mysql_error());
$result = mysql_query($link,$insertkm);

}
}
else
{
echo "<p>Fill all fields.</p>";
}*/
  
  
  
/*if (!$col){
    //$insert_col = "ALTER TABLE ".$table." ADD ".$col_name." DATETIME NOT NULL";

    mysql_query("ALTER TABLE ".$km."tb_veiculosPortaria2 ADD ".$cpf." integer");

    echo $cpf.' has been added to the database';
} else {
    echo $cpf.' is already exists';
}*/
//if ( !isset( $_REQUEST['sort'][0]['filter']   ) ) { $_REQUEST['sort'][0]['filter'] = "km"; }
  /*$kmSQL= "INSERT INTO  controleFrete.tb_veiculosPortaria2
(idveiculosPortaria,cpf,placa,motorista,km,origem,destino,hora,
 statusPortaria) values('".$_POST['idveiculosPortaria']."',0,'".$_POST['placa']."','".$_POST['motorista']."','".$_POST['km']."',
'".$_POST['origem']."','".$_POST['destino']."', '".$_POST['hora']."',".$_POST['statusPortaria'].")
";
echo $kmSQL;
$resul=mysql_query($kmSQL);

printf ("New Record has km %d.\n", $km);
echo 'teste1';
/*$kmSQL1="insert into tb_veiculosPortaria2 set 
km = case when km = '' then $cpf else km end,
cpf = case when cpf = '' and cpf <> '' then $km else cpf end ";
$resul=mysql_query('Inserção com km');
echo $km=$_POST['km'];
echo htmlentities($_POST['km'], ENT_QUOTES, "UTF-8");
    echo $kmSQL;
     mysql_query($kmSQL) or die (mysql_error()); 
     
     mysql_query("UPDATE tb_veiculosPortaria2 SET cpf=0") or trigger_error(mysql_error(),E_USER_ERROR);
     mysql_query("UPDATE tb_veiculosPortaria2 SET km='".$_POST['km']."'") or trigger_error(mysql_error(),E_USER_ERROR);
     mysql_query("SELECT idveiculosPortaria,cpf=0,placa,motorista,km,origem,destino,hora, statusPortaria FROM
		tb_veiculosPortaria2");
		
		

  $km = $_POST['km'];
  $sqlKM = "update tb_veiculosPortaria2 set km='".$_POST['km']."' where idveiculosPortaria='$idveiculosPortaria'" or die (mysql_error());
*/

/*	mysql_query("UPDATE tb_veiculosPortaria2 SET km=km+1   //changing flag to 1 so user cannot vote again
        WHERE $km='km'");//}

*/
if  ($entrada==$_POST['statusPortaria'])
{
echo 'O status da portaria é : entrada'; echo '<br />';


}

else if  ($saida==$_POST['statusPortaria'] )
{
echo 'O status da portaria é de saída';echo '<br />';
}

  
 /* if(isset($_POST['CADASTRAR'])):



$sql1 ="insert into terceiros (cpf)" values ('$cpf')
$query=mysql_query($sql1);



$sql2 ="insert into terceiros (cpf)" values ('$cpf')
$query=mysql_query($sql2);


mysql_close($query);

endif;
*/


// Update only those which haven't been updated in the meantime
//mysql_query("UPDATE items SET jobserver = 'current_job_server' WHERE itemId IN (".join(',',mysql_fetch_assoc($jobs)).") AND updated_at < ".$timestamp);

//  $query = mysql_query( $sql ) or die(mysql_error());
  
   

 
 
  
    // returns true if duplicated
function duplicate_catch_error ($database_connection) {
    $mysql_error = array (1022 => "Can't write; duplicate key in table '%s'",1062 => "Duplicate entry '%s' for key %d", 1586 => "Duplicate entry '%s' for key '%s'");  // also allows for the use of sscanf
    if (array_key_exists(mysql_error($database_connection),$mysql_error)) // checks if error is in array
        return true;
    else
        return false;
}



//mysqli_query($link, $query) or die(mysqli_error($link)); 

if(!is_numeric($cpf)) {$cpf=0;}
 $cpf=floatval($cpf);
 $cpf=intval($cpf);
 $cpf=$cpf * 1;

if(!is_numeric($km)) {$km=0;}
 $km=floatval($km);
 $km=intval($km);
 $km=$value * 1;

if(!is_numeric($idveiculosPortaria)) {$idveiculosPortaria=0;}
 $idveiculosPortaria=floatval($idveiculosPortaria);
 $idveiculosPortaria=intval($idveiculosPortaria);
 $idveiculosPortaria=$value * 1;

?>

 
