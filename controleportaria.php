<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title>Lista por filtros</title>
<style type="text/css">
</style>
</head>
<body>
<center>
    <br />
   
    </center>
</body>
</html>

<title>Entre com o CPF se for terceiros e km se for frota</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
<style type="text/css">
html {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    line-height: 16px;
    color: #666666;

}

body {
    margin: 0;
    padding: 0;
}
 
#maior {
    width: 100%;
    height: auto;
     padding-right: 100px;
}
 
#menor {
    width: 420px;
    margin: 30px auto;
    padding: 20px;
    background: #cccccc;
    border: 1px solid #777777;

    border-radius: 8px;
    -moz-border-radius: 8px;
    -webkit-border-radius: 8px;
    -webkit-box-shadow: 0px 3px 4px rgba(50, 50, 50, 1);
    -moz-box-shadow: 0px 3px 4px rgba(50, 50, 50, 1);
    box-shadow: 0px 3px 4px rgba(50, 50, 50, 1);
 
}
 
form {
    display: inline-block;
}
 
h2 {
    font-size: 30px;
    color: #555555;
    text-align: center;
    margin: 0 0 20px 0;
    text-shadow: 0px 1px 0px #ffffff;
}
:-moz-placeholder {
    color: blue;
}
 
:-webkit-input-placeholder {
    color: blue;
}
*:focus {outline: none;}
.form_registro input, .form_registro textarea {
    border:1px solid #aaa;
    box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
    border-radius:2px;
}
.form_registro input:focus, .form_registro textarea:focus {
    background: #fff;
    border:1px solid #555;
    box-shadow: 0 0 3px #aaa;
}

label {
    float: left;
    clear: center;
    margin: 11px 20px 0 0;
    width: 95px;
    text-align: right;
    font-size: 16px;
    color: #333333;
    text-shadow: 0px 1px 0px #ffffff;
    padding-right: 20px;
}
 
input {
    width: 240px;
    height: 25px;
    padding: 4px 20px 4px 20px;
    margin: 0 0 20px 0;
    border-radius: 6px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    color: #666666;
    border: 0;
    border: 1px solid #aaaaaa;
}
 input[type="select"] {
    width: 24px;
    height: 24px;
    vertical-align: bottom;
}
textarea {
    width: 280px;
    height: 120px;
    padding: 12px 0px 0px 20px;
    margin: 0 0 20px 0;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border: 0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    color: #666666;
    border: 1px solid #aaaaaa;
}
 
input:focus {
    background: #fafafa;
    border: 1px solid #50504a;
    -moz-box-shadow: 0px 0px 3px 0px #50504a;
    -webkit-box-shadow: 0px 0px 3px 0px #50504a;
    box-shadow: 0px 0px 3px 0px #50504a;
}
 
textarea:focus {
    background: #fafafa;
    border: 1px solid #50504a;
    -moz-box-shadow: 0px 0px 3px 0px #50504a;
    -webkit-box-shadow: 0px 0px 3px 0px #50504a;
    box-shadow: 0px 0px 3px 0px #50504a;
}
 
 
 
 input[type=submit] {
    width: 150px;
    height: 50px;
    font-size: 24px;
    color: #333;
    float: right;
    padding-right: 100px;
    padding-left:150px;
    margin-right: 1500px;
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border: 1px solid #777777;
     background: #aaaaaa;
    text-shadow: 0px 1px 0px #ffffff;
}
	
	
  input[type="dropdown"]:required {
    display: none;
  }
  input[type="dropdown"]:required:invalid + label:before {
    content: "\2610";
    padding-right: 0.2em;
    font-size: 1.6em;
    color: yellow;
  }
  input[type="dropdown"]:required:valid + label:before {
    content: "\2611";
    padding-right: 0.2em;
    font-size: 1.6em;
    color: green;
  }
  
  
input[type="dropdown"]:required:invalid + label { color: yellow; }
  input[type="dropdown"]:required:valid + label { color: green; }
  
    .box{
        padding: 20px;
        display: none;
        margin-top: 20px;
        border: 1px solid #000;
    }
    .cpf{ border    background: #ff0000; }
    .km{ border background: #00ff00; }
   
   



</style>

</style>
</head>
</script>
<script>
$(document).ready(function(){
	  $("input").keyup(function(){
	    var val01 = $("#cpf").val();
	   var val01 = document.formName.optionName;
	    var val01 = document.getElementById("cpf");
	    var val01 = terceirosSelection.options[terceirosSelection.selectedIndex].value;
	    
	    var val06 = $("#km").val();
	    var val06 = document.formName.optionName;
	    var val06 = document.getElementById("km");
	    var val06 = terceirosSelection.options[terceirosSelection.selectedIndex].value;
	   
	
	    
	    var val02 = $("statusPortaria").val();
	   // var val03 = $("#idveiculosPortaria").val();
	    var val04 = $("#placa").val();
	    var val05 = $("#motorista").val(); 
	  
	    var val07 = $("#origem").val();
	    var val08 = $("#destino").val();
	    var val09 = $("#hora").val();
	    //var val09 = $("#idTerceiros").val();
	    
	    
	    
	    if (terceiros == "cpf" && document.all.terceiros.innerHTML) {
	      document.all.terceiros.innerHTML = what.options[what.selectedIndex].value  
	    
	    }
	    
	      if (frota == "km" && document.all.frota.innerHTML) {
	      document.all.frota.innerHTML = what.options[frota.selectedIndex].value  
	    
	    }
	    
	    // check if each input has at least one character
	    // if yes, we display the CAPTCHA
	    if(val01 != "" && val02 != "" && val03 != "" && val04 != "" && val05 != "" && val06 != "" && val07 != "" && val08 != "" && val09 != "" && val10 != "") {
	      $("#captcontainer").slideDown(450);
	    }
	  });
	    
        $("select").change(function(){

          
            $( "select option:selected").each(function(){
                if($(this).attr("value")=="cpf"){
                    $(".box").hide();
                    $(".cpf").show();
                }
                if($(this).attr("value")=="km"){
                    $(".box").hide();
                    $(".km").show();
                }
            
            });
        }).change();

    errorPlacement: function (error, element) {
        error.insertAfter($(element).parent('div'));
    },
    rules: {
        cpf: {
            required: true,
            cpf: true
        }
    },
    messages: {
        cpf: {
            cpf: "Entre com o CPF",
            km: "Entre com o km"
        }
    }
        return false;
    }
    
	    $.ajax({
	      url: "cadastro.php",
	      cache: false
	    }).done(function(newstr) {
	       
	      var newhtml = "<p><strong>CAPTCHA Value</strong>: "+newstr+"<br>";
	      newhtml += "<strong>Entered Text</strong>: "+usercaptchaval+"<br></p>";
	      $("#result").html(newhtml);
	    });
	  });
	});


 


$('select').each(function(){
  if($(this).find('option').length === 1){
    $(this).replaceWith(function(){
       return $('<label />').html($(this).text());
    });
  }
});


function getStrength(){  
  var classID = $('#className').val();  
          
  $.ajax({  
   url: 'cadastro.php',  
   data: 'km=' + km,  
   dataType: 'html',  
   success: function( data ){  
     $('#km').html( data );  
   }  
   });  
 }  
 
 $('input[name=km]').focus();
 var km = document.getElementById("km");

km.addEventListener("input", function(e) {
    var text = km.value;
 
}, false);



@media (min-width: 768px) {
	.form-inline input {
         border-radius: 6px 0 0 6px;
     }
    .form-inline select {
        border-radius: 0 6px 6px 0;
        border-left-width: 0;
    }
}
 
 
</script>

<?php 
include_once "valida-cpf.php";
include_once "cadastro.php";

$km = strtolower($_GET["km"]);
if (!$km) return;

  
  
  
function filter(item){
$.ajax({
type: "POST",
url: "listar.php",
data: { value: item},
success:function(data){
  $("#result").html(data);
}
});
}

$_GET['cpf'] = $cpf;
echo filter_has_var(INPUT_GET, 'cpf') ? 'Exist' : 'Not exist';

$_GET['km'] = $km;
echo filter_has_var(INPUT_GET, 'km') ? 'Exist' : 'Not exist';


    $option = isset($_POST['filter']) ? $_POST['filter'] : false;
   
   if($option) {
      echo htmlentities($_POST['filter'], ENT_QUOTES, "UTF-8");
   } else {
     echo "KM ou CPF exigidos";
     exit; 
   }
   

 $filter = isset($_POST['cpf']) ? $_POST['cpf'] : false;
   if($filter) {
      echo htmlentities($_POST['cpf'], ENT_QUOTES, "UTF-8");
   } else if{
   $filter = isset($_POST['km']) ? $_POST['km'] : false;
     echo htmlentities($_POST['km'], ENT_QUOTES, "UTF-8");

     exit; 
   }
   
   function selected( $value, $selected ){
    return $value==$selected ? ' selected="selected"' : '';
}

}

if (isset($_POST["filter"])) $filter = @$_POST["filter"]; 
if (isset($_POST["cpf"])) $filter = @$_POST["cpf"];
if (isset($_POST["km"])) $filter = @$_POST["km"];

  
echo $_GET['idveiculosPortaria'];

?> 

<tr><div class="style">
	<body>
		<td> <label for="filter_cpf_km"> 
 			<div class="cpf box" id="cpf" data-role="fieldcontain"  ng-controller="ParentController">
			<label for="cpf">  <a href="#" id="filter" class="filter" rel=".clone">	  <p class="clone"></label>  
		   <?php if(isset($_POST['cpf']!=$cpf) || !empty($_POST['cpf']) ) echo 'checked="checked"'  htmlspecialchars($_POST['cpf']); ?></p>
      </div>
 
       <p id="demo"></p> 

	<div class="km box" id="km" data-role="fieldcontain" ng-controller="ChildController">
		<label for="km"><p><a href="#" id="filter" class="filter" rel=".clone"></a></p>  <p class="clone"> 
			<?php if(isset($_POST['km']) || !empty($_POST['km'])) echo 'checked="checked"' htmlspecialchars($_POST['km']); ?> 
  				<input type="hidden" name="km" autofocus="true" id="km" class='input' result="km" " /></p>
 	</div>
  	</td></label>
  </div>
</tr>

<FORM id="formID " name ="form_registro" method ="post" action ="cadastro.php" >
	<div id="maior">
 	  <body>
    	  <td> <label for="filter_cpf_km"> 
 		<div class="cpf box" id="cpf" data-role="fieldcontain"  ng-controller="ParentController">
			<label for="cpf">       </label>  
		        <?php if(isset($_POST['cpf']!=$cpf) || !empty($_POST['cpf']) ) echo 'checked="checked"'  htmlspecialchars($_POST['cpf']); ?></p>
        </div>
   
      </div>
      
              <p id="demo"></p> 

	<div class="km box" id="km" data-role="fieldcontain" ng-controller="ChildController">
		<label for="km">	
 		<p><a href="#" id="filter" class="filter" rel=".clone"></a></p>  <p class="clone">  
 		<?php if(isset($_POST['km']) || !empty($_POST['km'])) echo 'checked="checked"' htmlspecialchars($_POST['km']); ?> 
 		 <input type="hidden" name="km" autofocus="true" id="km" class='input' result="km" " /></p>
	</div>
  </td></label>
<div class="cpf box"></div>

	
  <div id="menor">
<div id="input_div"> 
  </tr>

</div>

<tr>
	<label>Funcionário:</label> <div> <select name="filter" id="" onchange="changeValue();" value="">  
 		<option>Escolha o tipo:</option>
 			<php if ($filter == "cpf")?> { 
 				 <optgroup label="cpf" value="cpf">
  					<option label="cpf" id="cpf" type="dropdown" class="cpf" data-active="cpf" onchange="getStrength()" name="cpf" value="cpf" >CPF para terceiros: </option>  
  					 </optgroup>}
			<php if ($filter == "km")?>  {
  				 <optgroup label="km" value="km"> 
                 	<option id="km" label="km"  data-active="km" type="dropdown" class="km"  onchange="getStrength()" name="km" value="km" >KM para frota:</option>
                 	</optgroup>
}	</select>

	<input class="span3 form-control   cpf " name="cpf" id="cpf" type="text" value="" aria-label="..." placeholder="Entre com o CPF ou o KM" maxlength="11" size="11" required> <span class="input-group-btn km cpf">
  
    <div class="km box"> </div>

</body>
  
</select> </div>  </label>
<label for="statusPortaria">  </label>
<tr><br>
 <?php if(isset($statusPortaria)=='1')?>
    <input type="radio" name="statusPortaria" value="1" onClick="enableElement(this.form.work_permit);">  Entrada<br>
    
  <?php if(isset($statusPortaria=='2'))?><input type="radio" name="statusPortaria" value="2" onClick="disableElement(this.form.work_permit);"> Saída 
</tr>

<br><br><br><br><br><br>
 

	<label for="placa">	Placa: </label>
     <input name='placa' class="formtext" id='placa'  placeholder=" Entre com a placa do veículo" type='text' class="form-control" data-qnum="1" maxlength="7" size="7" required value=''><br/><br/>


     <label for="motorista"> Motorista:</label>
     <input name='motorista' class="formtext" id='motorista' placeholder= "Entre com o nome do Motorista" type='text' class="form-control" data-qnum="1" size=20 maxlength="20" required value=''><br/><br/>


	 <label for="origem">  Origem:</label>
   <input name='origem' class="formtext" type='text' class="form-control" id='origem'  placeholder= "Entre com a origem do veículo" size="30"  maxlength="30" required value=''><br/><br/>
   
      <label for="destino">  Destino:</label>
       <input name='destino' class="formtext" type='text' class="form-control" id='destino'  placeholder= "Entre com o destino do veículo" size="30" maxlength="30" required value=''><br/><br/>
	    
	    

	<div class="input-group-btn press-it-btn"> 
</div>

	</div> 	
</div> <input class="btn btn-primary span2 pull-right btn btn-default" Name = "submit"   id="result" type="submit" onclick="myFunction()" onClick="submit">
	
	</form>	<div id="result"> 


	
  </div> 
</div> 
</div>
</div>
</div>
      
</tr>
  </body> 
</select>
        &nbsp;&nbsp;&nbsp;
</div>
</form>
</form>       

<!DOCTYPE html>
