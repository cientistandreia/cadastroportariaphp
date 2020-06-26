
<table class="myTtable" id="one" cellpadding="0" cellspacing="0"  rules="none" style="border: 1px;">
    <tbody>
       
   
   
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        foreach ($_FILES['files']['name'] as $f => $name) {
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $name)){
                        $string = file($name);
                        if ( is_file( $name)){
                            echo '<hr>Arquivo --> ' . $name . '<hr>'; 
                            foreach($string as $linha){
                                $identificador = substr($linha, 0, 3);
    
        if($identificador == '000'){
            
        	 echo '<thead ><tr>';
             echo '<tr> <th id="one"><h>' 	    ."Identificador "		  .'</th></h>';
             echo '<th id="one" ><h>'       	. "Remetente "   		  .'</th></h>'; 
             echo '<th id="one" ><h>'      		. "Destinatário "  		  .'</th></h>';
             echo '<th id="one" ><h>'       	. "Data "        		  .'</th></h>';  
             echo '<th id="one" ><h>'       	. "Hora "         		  .'</th></h>';
             echo '<th id="one" ><h>'           . "Intercâmbio "      	  .'</th></h>'; 
             echo '<th id="one" ><h>'       	. "Filler " 		      .'</th></h></tr></thead>';
            
             echo '<tbody ><tr ><th id="one" >'	. substr($linha, 0, 3) 	  .'</th>';
             echo '<th id="one" >'				. substr($linha, 3, 35)   .'</th>';
             echo '<th id="one" >' 				. substr($linha, 38, 35)  .'</th>';
             echo '<th id="one" >'				. substr($linha, 73, 6)   .'</th>';
             echo '<th id="one" >' 				. substr($linha, 79, 4)   .'</th>';
             echo '<th id="one" >' 				. substr($linha, 83, 12)  .'</th>';    
             echo '<th id="one" >'				. substr($linha, 95, 155) .'</th></tr>';
             echo '</tr></tbody>';
             echo '<td rowspan="7" ></td>';
        }
        
        if($identificador == '540'){
            echo '<tr>';
           echo '<td rowspan="3" >'; 
           echo '<thead ><tr><th id="one" ><h>'  . "Identificador "			.'</th></h>';
            echo '<th id="one" ><h>'			  . "Documento "             . '</th></h>';
            echo '<th id="one" ><h>' 			  . "Filler "            	. '</th></h></tr></thead>';
            echo '<tbody><tr ><th id="one" >'     . substr($linha, 0, 3)     . '</th>';
            echo '<th id="one" >'				  . substr($linha, 3, 14)    . '</th>';
            echo '<th id="one" >'				  . substr($linha, 17, 233)  . '</th></tr></tbody></br>';    
            echo '</tr></td>';
            
        }
        
        if($identificador == '541'){
            echo '<tr>';
            echo '<td rowspan="4" >';
            
            echo '<thead ><tr  ><th id="one" ><h>'		 . "Identificador "   		. '</th></h>';
            echo '<th id="one" ><h>' 					 . "CNPJ "  		 		.  '</th></h>';     
            echo '<th id="one" ><h>' 					 . "Razao Social "    		. '</th></h>';
            echo '<th id="one" ><h>'					 . "Filler "    	 		. '</th></h></tr></thead>';
            echo '<tbody align="left"><tr><th  id="one" >'	         . substr($linha, 0, 3)     . '</th>';
            echo '<th id="one" >'  						 .substr($linha, 3, 14)     . '</th>';
            echo '<th id="one" >' 						 . substr($linha, 17, 50)   . '</th>';
            echo '<th id="one" >'   					 . substr($linha, 67, 183)  . '</tr></th></tbody>';    
            echo '</tr></td>';
        }
        
        if($identificador == '542'){
        echo '<td rowspan="30" >';
            echo '<tr>';
                   echo '<thead ><tr><th id="one" ><h>' . "Identificador " 		   . '</th></h>';            
            echo '<th id="one" ><h>'			. "CNPJ do Emissor "       . '</th></h>';
            echo '<th id="one" ><h>' 			. "Série da Nota Fiscal "  . '</th></h>';
            echo '<th id="one" ><h>'			. "Número da Nota Fiscal " . '</th></h>';
            echo '<th id="one" ><h>'			. "Entrega "               . '</th></h>';
            echo '<th id="one" ><h>'			. "Data "                  . '</th></h>';
            echo '<th id="one" ><h>'			. "Hora "                  . '</th></h></thead>';
            echo '<tbody ><tr><th id="one" >'    . substr($linha, 0, 3)     . '</th>';  
            echo '<th id="one" >' 				. substr($linha, 3, 14)    . '</th>'; 
            echo '<th id="one" >'				. substr($linha, 17, 3)    . '</th>'; 
            echo '<th id="one" >' 				. substr($linha, 20, 9)    . '</th>';
            echo '<th id="one" >' 				. substr($linha, 29, 3)    . '</th>'; 
            echo '<th id="one" >' 				. substr($linha, 32, 8)    . '</th>';  
            echo '<th id="one" >' 				. substr($linha, 40, 4)    . '</th></tr></tbody>';


            echo '<thead ><td rowspan="7" ><th id="one"><h>'		            . "Entrada "          				 . '</th>';
            echo '<th id="one" ><h>' 		            	. "Número dos parceiros (empresas) " . '</th></h>';
            echo '<th id="one" ><h>' 			. "Nome dos parceiros (empresas) "   . '</th></h>';
            echo '<th id="one" ><h>'			. "Nome do parceiro (único) "        . '</th></h>';
            echo '<th id="one" ><h>' 			. "Nome do segundo parceiro (único) ". '</th></h>';
            echo '<th id="one" ><h>'			. "Filial Emissora "                 . '</th></h>';
            echo '<th id="one" ><h>'  			. "Série do CTE "    				 . '</th></h></td></thead>'; 
            echo '<tbody><td rowspan="7"> <tr><th id="one" >' . substr($linha, 44, 2)   			 . '</th>'; 
            echo '<th id="one" >' 				. substr($linha, 46, 20)  			 . '</th>'; 
            echo '<th id="one" >'  				. substr($linha, 66, 20)  			 . '</th>';  
            echo '<th id="one" >'				. substr($linha, 86, 20)  			 . '</th>';
            echo '<th id="one" >' 				. substr($linha, 106, 20) 			 . '</th>';  
            echo '<th id="one" >'				. substr($linha, 126, 10) 			 . '</th>';
            echo '<th id="one" >'				. substr($linha, 136, 5)   			 . '</th> </tr></td></tbody>';
   
            echo '<tr><thead >';           
            echo '<tr><td rowspan="7" ><th id="one"><h>' 		. "Tipo de Entrega "       						. '</th></h>';
            echo '<th id="one" ><h>' 			. "Empresa Emissora da Nota Fiscal " 			. '</th></h>';
            echo '<th id="one" ><h>' 			. "Filial da Empresa emissora da Nota Fiscal "  . '</th></h>';
            echo '<th id="one" ><h>'            . "Data no destino da NF "  		   			. '</th></h>';
            echo '<th id="one" ><h>'			. "Hora no destino da NF "             			. '</th></h>';
            echo '<th id="one" ><h>' 			. "Data início no destino da NF " 			    . '</th></h>'; 
            echo '<th id="one" ><h>' 			. "Hora início no destino da NF " 			    . '</th></h> </tr></td></thead> ';  
            echo '<tbody ><td rowspan="7" ><th id="one">'		. substr($linha, 153, 1)   						. '</th>';
            echo '<th id="one" >'				. substr($linha, 154, 5)   						. '</th>';
            echo '<th id="one" >' 				. substr($linha, 159, 5)   						. '</th>';
            echo '<th id="one" >' 				. substr($linha, 164, 8)   						. '</th>';                                
            echo '<th id="one" >' 				. substr($linha, 172, 4)  						. '</th>';
            echo '<th id="one" >'				. substr($linha, 176, 8)  						. '</th>';     					    
            echo '<th id="one" >'				. substr($linha, 184, 4)  						. '</th>  </tr> </td></tbody>'; 
           
            
                   
            echo '<thead><tr><td rowspan="7" ><th id="one" ><h>' . "Data término no destino da NF "		           . '</th></h>';  
            echo '<th id="one" ><h>'			. "Hora término no destino da NF "  		       . '</th></h>';
            echo '<th id="one" ><h>' 			. "Número do CTE "        						   . '</th>';
            echo '<th id="one" ><h>' 			. "Data saída no destino da NF "     			   .	 '</th></h>';   
            echo '<th id="one" ><h>' 			. "Hora saída no destino da NF "    			   . '</th></h>'; 
            echo '<th id="one" ><h>' 			. "CNPJ do Emissor da Nota Fiscal devolvida"       . '</th></h>';       
            echo '<th id="one" ><h>'			. "Série da Nota Fiscal devolvida "  			   . '</th></h></tr> </td></thead>';   
                                  
            echo '<tbody ><td rowspan="7" ><th id="one">'     	. substr($linha, 188, 8)   . '</th>';                                 
            echo '<th id="one" >' 				. substr($linha, 196, 4)   . '</th>';
            echo '<th id="one" >' 				. substr($linha, 141, 12)  . '</th>';
            echo '<th id="one" >' 				. substr($linha, 200, 8)   . '</th>';                                
            echo '<th id="one" >' 				. substr($linha, 208, 4)   . '</th>';              
            echo '<th id="one" >'				. substr($linha, 212, 14)  . '</th>';                          
            echo '<th id="one" >' 				. substr($linha, 226, 3)   . '</th> </tbody>';                            
            echo '</tr>';
       
            echo '<thead ><tr>';
            echo '<td rowspan="2" ><th id="one"><h>' 			. "Número da Nota Fiscal devolvida "  . '</th></h>';    
            echo '<th id="one" ><h>' 			. "Filler "                           . '</th></h></td></thead>';   
            echo '</tr>';
                              
            echo '<tbody ><td rowspan="2"><th  id="one" >'	    . substr($linha, 229, 9)   . '</th>';                         
            echo '<th id="one">'				. substr($linha, 238, 12)  . '</th></tr></td></td></tbody>';    
            echo '</tr>';   

           }
             
         if($identificador == '543'){
                echo '<td rowspan="5" >';

             echo '<thead align="left"><tr>';
             echo '<tr><tr><th id="one" ><h>' . "Identificador "  		  . '</th></h>';  
         	 echo '<th id="one" ><h>' 		  . "Texto 1 "                . '</th></h>';  
             echo '<th id="one" ><h>' 		  . "Texto 2 "                . '</th></h>';  
             echo '<th id="one" ><h>' 		  . "Texto 3 "                . '</th></h>';  
             echo '<th id="one" ><h>' 		  . "Filler "                 . '</th></tr></h></thead>';  
             echo '<tbody ><th  id="one">'    . substr($linha, 0, 3)      . '</th>';
             echo '<th  id="one" >'			  . substr($linha, 3, 70)     . '</th>'; 
             echo '<th  id="one" >'  		  . substr($linha, 73, 70)    . '</th>';
             echo '<th  id="one" >'			  . substr($linha, 143, 70)   . '</th>';
             echo '<th  id="one" >'			  . substr($linha, 213, 37)   . '</th></tr></td></tbody>';    
             echo '</tr>';
        
             }
             
          if($identificador == '544'){
            echo '<td rowspan="6" >';

              echo '<thead align="left"><tr>';
              echo '<tr><tr><th  id="one" ><h>' . "Identificador "  					. '</th></h>';            
          	  echo '<th id="one" ><h>'		    . "Quantidade da nota " 				. '</th></h>';               
              echo '<th id="one" ><h>'		    . "Quantidades de Volumes Entregues" 	. '</th></h>';  
              echo '<th id="one" ><h>' 		    . "Código do Produto "  			    . '</th></h>';              
              echo '<th id="one" ><h>' 		    . "Nome do Produto "    				. '</th></h>';               
              echo '<th id="one" ><h>' 		    . "Filler "   							. '</th></tr></h></thead>';                         
              echo '<tbody align="left"><th id="one" >'      . substr($linha, 0, 3)      			. '</th>'; 
              echo '<th id="one" >'			    . substr($linha, 11, 8)    				. '</th>';
              echo '<th id="one" >'			    . substr($linha, 3, 8)      			. '</th>'; 
              echo '<th id="one" >'			    . substr($linha, 19,20)    				. '</th>'; 
              echo '<th id="one" >'			    . substr($linha, 39, 50)  			    . '</th>';  
              echo '<th id="one" >'			    . substr($linha, 89, 161)   			. '</th></tr></td></tbody>';    
              echo '</tr>';
        
        
            }
         
          if($identificador == '545'){
                  echo '<td rowspan="7" >';

          	  echo '<thead align="left"><tr>';
              echo '<tr><th id="one" ><h>'  . "Identificador "   		. '</th></h>'; 
              echo '<th id="one" ><h>'     	. "CNPJ contratante " 		. '</th></h>'; 
              echo '<th id="one" ><h>'      . "CNPJ emissor "      		. '</th></h>'; 
              echo '<th id="one" ><h>'     	. "Emissor do CTRC "  		. '</th></h>'; 
              echo '<th id="one" ><h>'    	. "Série do CTE "     		. '</th></h>'; 
              echo '<th id="one" ><h>'      . "Número do CTE "     		. '</th></h>'; 
              echo '<th id="one" ><h>'   	. "Filler "             	. '</th></tr></h></thead>'; 
              echo '<tbody><th id="one" >' 	. substr($linha, 0, 3)      . '</th>';
       		  echo '<th id="one" >'			. substr($linha, 3, 14)     . '</th>';
              echo '<th id="one" >' 		. substr($linha, 17, 14)    . '</th>';
              echo '<th id="one" >'			. substr($linha, 31, 10)    . '</th>';
              echo '<th id="one" >'			. substr($linha, 41, 5)     . '</th>';
              echo '<th id="one" >'			. substr($linha, 46, 12)    . '</th>';
              echo '<th id="one" >' 		. substr($linha, 58, 192)   . '</th></td></tbody>';    
        
              echo '</tr>';
       }
         
          if($identificador == '549'){
        echo '<td rowspan="3" >';

              echo '<thead ><tr>';
              echo '<th id="one" ><h>'       . "Identificador "       . '</th></h>';
              echo '<th id="one" ><h>'       . "Número "              . '</th></h>';
              echo '<th id="one" ><h>'       . "Filler "              . '</th></tr></h></thead>';
              echo '<tbody ><th id="one" >'   . substr($linha, 0, 3)   . '</th>';
              echo '<th id="one" >'          . substr($linha, 3, 4)   . '</th>';
              echo '<th id="one" >'          . substr($linha, 7, 243) . '</th></td></tbody>';    
              echo '</tr>';
      
             }
             
        
        //echo $identificador . ' - ' . $linha . '<br>';
        //exit;
    }
                        }
                        else{
                        echo 'Arquivo inválido !!!';
                        }
                }
        }
        exit;
}

?></tbody>
</table>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
        <p><input type="file" id="file" name="files[]" multiple="multiple" >
    <p><input type="submit" value="Gerar EDI">
  </form>
</body>
</html>

