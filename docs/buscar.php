<?php
$opcion=$_GET["opcion"];
$criterio=$_GET["criterio"];
if($opcion=="buscarNombre"){ 

		echo "<div class='form-group has-error'>
                <div class='col-md-8'>
                  <label style='color: rgb(255, 0, 0);'><i class='fa fa-minus-square' aria-hidden='true'></i> Codigo</label>
                  <input class='form-control' type='text' id='codigo' name='codigo' value='' placeholder='Codigo Generico' disabled>
                  <p style='color: rgb(255, 0, 0);'>Complete este campo</p>
                </div>
              </div>";
	
}

?>