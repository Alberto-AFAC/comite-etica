<?php include ("../../conexion/conexion.php");

    
      //$sql = "SELECT idarper,gstCodig,gstNivel FROM codigo WHERE estado = 0";
      //$puesto = mysqli_query($conexion,$sql);
    ?>

	<!-- 		<select  id="idarper" class="form-control" name="idarper" type="text" data-live-search="true" style="width: 100%" >
			<option value="0">CODIGO PRESUPUESTAL</option> 
			<?php //while($idpst = mysqli_fetch_row($puesto)):?>                      
			<option value="<?php //echo $idpst[0]?>"><?php //echo $idpst[1]?></option>
			<?php //endwhile; ?>
			</select> -->
<!-- 			<label>SELECCIONE CARGO</label> 
 -->			<select id="idarper" class="form-control" name="idarper" type="text" data-live-search="true" style="width: 100%">
			<option value="0">SELECCIONE SUBDIRECCIONES DE ÁREA</option>
			<option value="3">SUBDIRECCIONES DE ÁREA</option>
			</select>

	<script type="text/javascript">
		$(document).ready(function(){
			// $('#idarper').select2();

			$('#idarper').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#idarper').val(),
					url:'session/',
					success:function(r){
						$('#seleccionar').load('select/tablanom.php');
					}
				});
			});
		});
	</script>
	