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
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
!--><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
/* Button Style */
button.submit {
    background-color: #68b12f;
    background: -webkit-gradient(linear, left top, left bottom, from(#68b12f), to(#50911e));
    background: -webkit-linear-gradient(top, #68b12f, #50911e);
    background: -moz-linear-gradient(top, #68b12f, #50911e);
    background: -ms-linear-gradient(top, #68b12f, #50911e);
    background: -o-linear-gradient(top, #68b12f, #50911e);
    background: linear-gradient(top, #68b12f, #50911e);
    border: 1px solid #509111;
    border-bottom: 1px solid #5b992b;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    box-shadow: inset 0 1px 0 0 #9fd574;
    -webkit-box-shadow: 0 1px 0 0 #9fd574 inset ;
    -moz-box-shadow: 0 1px 0 0 #9fd574 inset;
    -ms-box-shadow: 0 1px 0 0 #9fd574 inset;
    -o-box-shadow: 0 1px 0 0 #9fd574 inset;
    color: white;
    font-weight: bold;
    padding: 6px 20px;
    text-align: center;
    text-shadow: 0 -1px 0 #396715;
    
    
}
button.submit:hover {
    opacity:.85;
    cursor: pointer;
}
button.submit:active {
    border: 1px solid #20911e;
    box-shadow: 0 0 10px 5px #356b0b inset;
    -webkit-box-shadow:0 0 10px 5px #356b0b inset ;
    -moz-box-shadow: 0 0 10px 5px #356b0b inset;
    -ms-box-shadow: 0 0 10px 5px #356b0b inset;
    -o-box-shadow: 0 0 10px 5px #356b0b inset;
     
}
::-webkit-validation-bubble-message {
    padding: 1em;
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
	/* width: 200px;
    height: 50px;
    font-size: 24px;
    color: #333333;
    float: right;
    padding: 5px 10px;
    margin: 0;
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border: 1px solid #777777;
    background: #aaaaaa;
    text-shadow: 0px 1px 0px #ffffff;*/
	
  input[type="checkbox"]:required {
    display: none;
  }
  input[type="checkbox"]:required:invalid + label:before {
    content: "\2610";
    padding-right: 0.2em;
    font-size: 1.6em;
    color: red;
  }
  input[type="checkbox"]:required:valid + label:before {
    content: "\2611";
    padding-right: 0.2em;
    font-size: 1.6em;
    color: green;
  }
  
  
input[type="checkbox"]:required:invalid + label { color: red; }
  input[type="checkbox"]:required:valid + label { color: green; }
  
    .box{
        padding: 20px;
        display: none;
        margin-top: 20px;
        border: 1px solid #000;
    }
    .cpf{ background: #ff0000; }
    .km{ background: #00ff00; }
   
</style>

</style>
</head>
</script>
<script>
$(document).ready(function(){
	  $("input").keyup(function(){
	    var val01 = $("#cpf").val();
	   /* var terceiros = document.formName.optionName;
	    var terceiros = document.getElementById("cpf");
	    var terceiros = terceirosSelection.options[terceirosSelection.selectedIndex].value;
	     */
	    var val06 = $("#km").val();
	    var frota = document.formName.optionName;
	    var frota = document.getElementById("km");
	    var frota = terceirosSelection.options[terceirosSelection.selectedIndex].value;
	   
	
	    
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
	   
	  $("#signup").submit(function(e){
	    e.preventDefault();
	    var usercaptchaval = $("#captcha").val();
	    if(usercaptchaval == "") {
	      usercaptchaval = "None!";
	    }
	    
	    
        $("select").change(function(){
        
      /*   if(this.selectedIndex == '')
            {
                $("input#cpf").val('');  
                $("input#km").val('');  
                return false;   
            }
          $("input#cpf").val(JSONObject[this.selectedIndex-1].cpf);  
          $("input#km").val(JSONObject[this.selectedIndex-1].km);  
          */
          
          
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
    },
    submitHandler: function (form) {
        $.ajax({
            url: '/textMessage/' + $("select#areaCode").filter(":selected").val() + $('input[name="k"]').val(),
            method: "GET",
            success: function () {
                console.log(form);
            }
        });
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



	function checaObrigatorios(formID) {
  var val01;
  if( formID.cpf.value ) val01 = formID.cpf.value;
  if( !val01 || val01 == "cpf" ) {
    alert("Coloque o cpf do motorista!" );
    return false;
  }
 
    function valor(cpf) {
if(cpf=="cpf") {
document.form.cpf.style.display="block";
//document.form.cnpj.style.display="none";
}
if(!isset($_POST['formID']))
{
  $errorMessage .= "<li>Se for terceiros entre com o CPF</li>";
}


function checaObrigatorios(formID) {
  var val06;
  if( formID.km.value ) val06 = formID.km.value;
  if( !val06 || val06 == "km" ) {
    alert("Coloque o km do motorista!" );
    return false;
  }
 
    function valor(km) {
if(km=="km") {
document.form.km.style.display="block";
//document.form.j.style.display="none";
}
if(!isset($_POST['formID']))
{
  $errorMessage .= "<li>Se for frota entre com o KM</li>";
}

/*function checkCheckBoxes(theForm) {
	if (
	theForm.checkbox_1.checked == false &&
	theForm.checkbox_2.checked == false ) 
	{
		alert ('You didn\'t choose any of the checkboxes!');
		return false;
	} else { 	
		return true;
	}
}*/

p.label_checkbox_pair {
clear: both;
float: none;
}
p.label_checkbox_pair input {
clear: left;
float: left;
margin-left: 80px;
}
p.label_checkbox_pair label {
clear: left;
display: block;
float: left;
margin-left: 10px;
width: 200px;
}

$('select').each(function(){
  if($(this).find('option').length === 1){
    $(this).replaceWith(function(){
       return $('<label />').html($(this).text());
    });
  }
});
/*
$(function(){
var removeLink = ' <a class="remove" href="#" onclick="$(this).parent().slideUp(function(){ $(this).remove() }); return false">remove</a>';

$('a.add').relCopy({ append: removeLink});
});


(function($) {

	$.fn.relCopy = function(options) {
		var settings = jQuery.extend({
			excludeSelector: ".exclude",
			emptySelector: ".empty",
			copyClass: "copy",
			append: '',
			clearInputs: true,
			limit: 0 // 0 = unlimited
		}, options);
		
		settings.limit = parseInt(settings.limit);
		
		// loop each element
		this.each(function() {
			
			// set click action
			$(this).click(function(){
				var rel = $(this).attr('rel'); // rel in jquery selector format				
				var counter = $(rel).length;
				
				// stop limit
				if (settings.limit != 0 && counter >= settings.limit){
					return false;
				};
				
				var master = $(rel+":first");
				var parent = $(master).parent();						
				var clone = $(master).clone(true).addClass(settings.copyClass+counter).append(settings.append);
				
				//Remove Elements with excludeSelector
				if (settings.excludeSelector){
					$(clone).find(settings.excludeSelector).remove();
				};
				
				//Empty Elements with emptySelector
				if (settings.emptySelector){
					$(clone).find(settings.emptySelector).empty();
				};								
				
				// Increment Clone IDs
				if ( $(clone).attr('id') ){
					var newid = $(clone).attr('id') + (counter +1);
					$(clone).attr('id', newid);
				};
				
				// Increment Clone Children IDs
				$(clone).find('[id]').each(function(){
					var newid = $(this).attr('id') + (counter +1);
					$(this).attr('id', newid);
				});
				
				//Clear Inputs/Textarea
				if (settings.clearInputs){
					$(clone).find(':input').each(function(){
						var type = $(this).attr('type');
						switch(type)
						{
							case "button":
								break;
							case "reset":
								break;
							case "submit":
								break;
							case "checkbox":
								$(this).attr('checked', '');
								break;
							default:
							  $(this).val("");
						}						
					});					
				};
				
				$(parent).find(rel+':last').after(clone);
				
				return false;
				
			}); // end click action
			
		}); //end each loop
		
		return this; // return to jQuery
	};
	
})(jQuery);
*/
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


var cpf = document.getElementById("cpf");
var km = document.getElementById("km");




 angular.module('customTriggerExample', [])
.controller('ExampleController', ['$scope', function($scope) {
  $scope.user = {};
}]);

var opts = [
        {key:1, label: "km"},                                            
        {key:2, label: "cpf"}                                                                               
];
 
gantt.config.lightbox.sections = [
    {name:"km", height:38, map_to:"text", type:"textarea",focus:true},
    {name:"cpf", height:22, map_to:"priority",type:"select",options:opts},                                                                        
 //   {name:"time", height:72, type:"duration", map_to:"auto"}
];

gantt.init("gantt_here");
gantt.load("cadastro.php");

function myFunction() {
    var km = document.getElementById('km');
    
    if (km.checked){
        alert("checked") ;
    }else   if (cpf.checked){
         var cpf = document.getElementById('cpf');
    }
}

function alertaChecked(){
    var cpf = document.getElementById('cpf');
    
    if (cpf.checked){
        alert("checked") ;
    }else   if (km.checked){
         var cpf = document.getElementById('km');
    }
} 

document.getElementById("submit").onclick = function () {
 
 // document.getElementById("cpf").setCustomValidity("Indique se for terceiros é cpf, se for frota é km");  
   if (km.checked) {
        console.log("escolheu 'km'");
        document.getElementById("km").setCustomValidity("Indique se for frota é km");
 
populatekmCPF("km", "filter");
    } else  if (cpf.checked){
        document.getElementById("cpf").setCustomValidity("Indique se for terceiros é cpf");
		populatekmCPF("km", "filter");
        console.log("entre com o cpf");
    }

    {
    
    /*    console.log("escolheu 'cpf'");
    } else {
        console.log("não escolheu 'cpf'");
    }
    */
    
    if(!form.filter.checked) {
      alert("Por favor escolhe se você deseja entrar com o cpf ou com a frota");
      form.terms.focus();
      return false;
    }
};


/*
document.addEventListener("DOMContentLoaded", function() {

    var myForm = document.getElementById("cpf");
    var checkForm = function(e) {

      if(!this.terms.checked) {
        alert("Indique se for o CPF");
        this.terms.focus();
        e.preventDefault(); // equivalent to return false
        return;
      }
    };

    // attach the form submit handler
    myForm.addEventListener("submit", checkForm, true);

    var myCheckbox = document.getElementById("km");
    var myCheckboxMsg = "Please indicate that you accept the Terms and Conditions";

    // set the starting error message
    myCheckbox.setCustomValidity(myCheckboxMsg);

    // attach checkbox handler to toggle error message
    myCheckbox.addEventListener("change", function() {
      this.setCustomValidity(this.validity.valueMissing ? myCheckboxMsg : "");
    }, false);

  }, false);
  
  */
  
//use the id to get Javascript access to the DIV
var cpf=document.getElementById('cpf');
//put the output of PHP into the div
cpf.innerHTML=ajaxRequest.responseText;


//use the id to get Javascript access to the DIV
var km=document.getElementById('km');
//put the output of PHP into the div
km.innerHTML=ajaxRequest.responseText;

 document.getElementById("km").label = "km";
    document.getElementById("demo").innerHTML = "O novo valor inserido será do km.";


app.controller('ParentController', function($scope) {
  $scope.km = {greeted: false};
});

app.controller('ChildController', function($scope) {
  $scope.cpf = function() {
    $scope.km.greeted = true;
  }
});

@media (min-width: 768px) {
	.form-inline input {
         border-radius: 6px 0 0 6px;
     }
    .form-inline select {
        border-radius: 0 6px 6px 0;
        border-left-width: 0;
    }
}
 
 
 jQuery('#km').submit(function() {
  ajax('{{=URL('new_post')}}',
       ['km'], 'target');
  return true;
});
  
$("#km").select2({
    width: "50%",
    formatResult: function (state) {
	        if (!state.cpf) return state.text;
	        if ($(state.element).data('active') == "km") {
	            return state.text + "<i class='fa fa-dot-circle-o'></i>";
	        } else {
	            return state.text;
	        }
	    },
	    formatSelection: function (state) {
	        if ($(state.element).data('active') == "km") {
	            return state.text + "<i class='fa fa-dot-circle-o'></i>";
	        } else {
	            return state.text;
	        }
	    }
	});
//- See more at: http://www.javabeat.net/jquery-select2-plugin/#sthash.D5Ysv5yu.dpuf
</script>
<!--<script type= "text/javascript" src = "filter_cpf_km.js"></script>
Entre com o CPF:   <select type="text" id="cpf" name ="cpf"></select>
Select State: <select name ="filter" id ="filter"></select>
 <script language="javascript">
populatekmCPF("cpf", "filter");
populatekmCPF("km", "filter");
 </script>
!-->

<?php 
include_once "valida-cpf.php";
include_once "cadastro.php";
define('IN_SCRIPT',1);
define('HESK_PATH','../');

/* Get all the required files and functions */
require(HESK_PATH . 'hesk_settings.inc.php');
require(HESK_PATH . 'inc/common.inc.php');
require(HESK_PATH . 'inc/database.inc.php');

//hesk_dbConnect();

$km = strtolower($_GET["km"]);
if (!$km) return;

$sql = "select km,cpf from id_veiculosPortaria2 ";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
 $pkm = $rs['km'];
 $pcpf = $rs['cpf'];
 echo "$pserie|$pid\n";
}


/*

if(isset($_POST[cpf]) && $_POST[cpf] != "") {
  $km = $_POST['km'];
  $sqlKM = "update tb_veiculosPortaria2 set km='$km' where idveiculosPortaria='$idveiculosPortaria'";
mysql_query($sql);
  }else if (isset($_POST[km]) && $_POST[km] != ""){
    $cpf = $_POST['cpf'];
 $sql = "update tb_veiculosPortaria2 set cpf='$cpf' where idveiculosPortaria='$idveiculosPortaria'";
mysql_query($sql);
 
  }*/
  
  
  
  
  
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
   

  /* $id=mysql_escape_String($_POST['id']);
$cpf=$_POST['cpf'];
$km=$_POST['km'];
$sql = "update fullnames set firstname='$firstname',lastname='$lastname' where id='$id'";
mysql_query($sql);*/
function changeValue(){
    option document.getElementById('filter').value;

    if(option=="cpf"){
            document.getElementById('cpf').value="cpf Selecionado";
    }
        else if(option=="km"){
            document.getElementById('km').value="km selecionado";
        }

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

 $(document).ready(function() {
    $('#search_cpf_km').load('cadastro.php');
  });
  
  
  if(isset($_POST['km']))
{
$km = $_POST['km'];
echo 'Result: '.$km;


$sql1 ="insert into tv_veiculosPortaria2 (km)" values ('$km')
$query=mysql_query($sql1);




} else if (isset($_POST['cpf']))
{
$sql2 ="insert into terceiros (cpf)" values ('$cpf')
$query=mysql_query($sql2);

$cpf = $_POST['cpf'];
echo 'Result: '.$cpf;
}


?>    


 <div id="result">   </div> </label>

<div class="style">


<html xmlns="http://www.w3.org/1999/xhtml"><head profile="http://gmpg.org/xfn/11">



<FORM id="km " name ="form_registro" method ="post" enctype="multipart/form-data" action ="cadastro.php" >
  
<p>
</p>


<tr>



  <body><ul class="dropdown-menu" role="menu">
      <td> <label for="filter_cpf_km"> 
 <div class="cpf box" id="cpf" data-role="fieldcontain"  ng-controller="ParentController">Você selecionou:
<label for="cpf">   <li><a href="#" id="filter" class="filter" rel=".clone">	  <p class="clone">    CPF:    </label>  
		  <?php if(isset($_POST['cpf']) || !empty($_POST['cpf']) ) echo 'checked="checked"'  htmlspecialchars($_POST['cpf']); ?>
		<input type="text"  class="formtext" onchange="this.setCustomValidity(validity.valueMissing ? 'Indique se você deseja entrar com o cpf' : '');" 
         name="filter" id="cpf" size="11" maxlength="11"  result="cpf" onclick="alertaChecked()"  checked="checked" ng-checked='cpf' ng-click='toggleValue1()' />
            <?php if(isset($_POST['cpf']!=$cpf) || !empty($_POST['cpf']) ) echo 'checked="checked"'  htmlspecialchars($_POST['cpf']); ?></p>
     <a ng-click="cpf()">CPF</a><button type="reset" value="Entre com o Km">
  
      </div>
   
      </div></li>
        <p id="demo"></p> 

<div class="km box" id="km" data-role="fieldcontain" ng-controller="ChildController">
<label for="km">	   <li>
 <p><a href="#" id="filter" class="filter" rel=".clone"></a></p>  <p class="clone">  <?php if(isset($_POST['km']) || !empty($_POST['km'])) echo 'checked="checked"' htmlspecialchars($_POST['km']); ?> 
<input type="checkbox"  onclick="alertaChecked()" name="filter" autofocus="autofocus" id="km" class='input'  onchange="this.setCustomValidity(validity.valueMissing ? 'Indique se você deseja entrar com o km' : '');" required result="km"  checked="checked" />
  <input type="hidden" name="km" autofocus="true" id="km" class='input' result="km" " /></p>
 </div>
  </td></li></label>
      <!--    </option> <pre>username = "{{filter.cpf}}"</pre>
       <pre>userdata = "{{filter.km}}"</pre>
      !--></tr>
      
</div>

<div class="cpf box">Você selecionou <strong> a opção cpf</strong> cpf</div>



<div ng-controller="ExampleController">


<div class="container container-fluid">
  <div class="span7 pull-right well modal-header">
	<div id="maior" style="text-align:center; vertical-align:middle;">
  <div id="menor">
  <div id="input_div">
<a href="#"  name="idveiculosPortaria" id="idveiculosPortaria">Quantia de motoristas</a>
  <!--  <input type="button" value="-"  onclick="minus()">
     !-->
  <input type="hidden" name="idveiculosPortaria" id="idveiculosPortaria" value="" required onclick="idveiculosPortaria()">
    
 <input name="idveiculosPortaria" type="number" min="0" max="150" size="10" range="1" value="1" id="idveiculosPortaria" required>
   <!-- http://jsfiddle.net/Pk4eQ/1/<input type="button" value="+" onclick="plus()"><br>
http://www.scriptol.com/javascript/javascript-ini.php!-->

</div>
<tr>
  
   
 <label>Funcionário: <div> <select name="filter" id="" onchange="changeValue();" value="">  
 <option>Escolha o tipo:</option>
 <php if ($filter == "cpf")?> { 
  <optgroup label="cpf" value="cpf"><?php if (empty($_POST['cpf'])==$_POST['km'] ) { echo 'checked="checked"'; } ?> 
  <option label="cpf" id="cpf" type="dropdown" class="cpf" data-active="cpf" onchange="getStrength()" name="cpf" value="cpf" >CPF para terceiros: </option>   </optgroup>}
  <php if ($filter == "km")?>  {
  <optgroup label="km" value="km"> 
  <option id="km" label="km"  data-active="km" type="dropdown" class="km"  onchange="getStrength()" name="km" value="km" >KM para frota:</option></optgroup>
}

 <label for="km" id="km" name="km">	  km:</label>  
       <?php if (empty($_POST['km'])==$_POST['cpf'] ) { echo 'checked="checked"'; } ?> 
     <!--   <input name='km' class="formtext" id='km'  placeholder=" Entre com o km do veículo" type='text' class="form-control"
         data-qnum="1" maxlength="11" size="11" required  value=''><br/><br/>
		!-->	<input class="span3 form-control   km " name="km" id="km" type="text" value="" aria-label="..." placeholder="Entre com o km"  ><span class="input-group-btn">
		<input class="span3 form-control   cpf " name="cpf" id="cpf" type="text" value="" aria-label="..." placeholder="Entre com o CPF" > <span class="input-group-btn">
		
    <div class="km box">
    
    </br></br>
    Você selecionou <strong>a  opção km</strong> </div>
</ul>
</body>

   
</select> </div> <br> </label>


<br><br><br><br><br><br><br><br><br><br>
<tr><td><label for="statusPortaria">

 <?php if(isset($statusPortaria)=='1')?>
    <input type="radio" name="statusPortaria" value="1" onClick="enableElement(this.form.work_permit);">  Entrada</label></td>
    
<td>  <label><?php if(isset($statusPortaria=='2'))?><input type="radio" name="statusPortaria" value="2" onClick="disableElement(this.form.work_permit);"> Saída 
  </label>
  </td></tr>
  
<!--  <?php if(isset($errors['statusPortaria'])) { echo '<span style="color: red">'.$errors['statusPortaria'].'</span>'; } ?>
    <form> <body>  <label for="entrada"><tr> <td  >Entrada<input type="checkbox" name="statusPortaria" value="1"> <?php if($statusPortaria=='1')?></label>
     </td>  <label for="saida"> <td  >Saída  <input type="checkbox" name="statusPortaria" value="2">   <?php if($statusPortaria=='2')?> </td></tr></label>
     </body> </form>  <php  
    $sql = "SELECT status, idveiculosPortaria FROM tb_veiculosPortaria ORDER BY idveiculosPortaria";  
      $query = mysql_query($sql,$conn);
        while($row = mysql_fetch_array($status))    {  
      echo ("<option value=$row[status]>$row[status]</option>");   
               }  ?>--!>


<!--	<label for="idveiculosPortaria" >	Número: </label>
   <input name='idveiculosPortaria' class="formtext" id='idveiculosPortaria'  placeholder="Entre com o número sequencial" type='text' class="form-control" data-qnum="1" maxlength="5" size="5" required value=''><br/><br/>
!-->
<br><br><br><br><br><br><br><br>

 

	<label for="placa">	Placa: </label>
     <input name='placa' class="formtext" id='placa'  placeholder=" Entre com a placa do veículo" type='text' class="form-control" data-qnum="1" maxlength="7" size="7" required value=''><br/><br/>


     <label for="motorista"> Motorista:</label>
     <input name='motorista' class="formtext" id='motorista' placeholder= "Entre com o nome do Motorista" type='text' class="form-control" data-qnum="1" size=20 maxlength="20" required value=''><br/><br/>


	 <label for="origem">  Origem:</label>
   <input name='origem' class="formtext" type='text' class="form-control" id='origem'  placeholder= "Entre com a origem do veículo" size="30"  maxlength="30" required value=''><br/><br/>
   
      <label for="destino">  Destino:</label>
       <input name='destino' class="formtext" type='text' class="form-control" id='destino'  placeholder= "Entre com o destino do veículo" size="30" maxlength="30" required value=''><br/><br/>
	
      <label for="hora" id="hora" >Horário:</label>
        <input id="hora" placeholder="Entre com a hora" name="hora" size="4" maxlength = "4"  required value=''">
<!--<button type="submit" name="submit"  id="result"  onclick="myFunction()" onClick="submit">Entre com o CPF</button>
	!--></div>
	</div>
    	</select>
          <!--	  <div class="input-group-btn">   Insira o cpf </button>
          </div>!-->
          <input class="btn btn-primary span2 pull-right btn btn-default" Name = "submit"   id="result" type="submit" onclick="myFunction()" onClick="submit">
        
       
		</form>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</tr>
  <!-- <input type="hidden" name="contents" value="<?php echo htmlspecialchars($contents); ?>">
 <Input id="result" type = "submit" Name = "submit"   onclick="myFunction()" VALUE = "Envie " onClick="submit">     !-->
  </body>  <?php if(isset($_POST['cpf']) || !empty($_POST['cpf']) ) echo 'checked="checked"'  htmlspecialchars($_POST['cpf']); ?>

            <?php if(isset($_POST['km']) || !empty($_POST['km']) ) echo 'checked="checked"'  htmlspecialchars($_POST['km']); ?>

</select>
        &nbsp;&nbsp;&nbsp;
  <script src="script/jquery-1.8.1.min.js" type="text/javascript"></script>
<script src="script/my_script.js" type="text/javascript"></script>
</div>
</form>
</form>       

<!DOCTYPE html>
