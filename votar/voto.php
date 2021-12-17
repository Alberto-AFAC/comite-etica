<?php include ("../conexion/conexion.php"); session_start(); 

 if (isset($_SESSION['usuario'])) { }else{  header('Location: ../');  }

       $id = $_SESSION['usuario']['id_usu'];
       $usu = $_SESSION['usuario']['usuario'];
       $pass = $_SESSION['usuario']['password'];

unset($_SESSION['consul']);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Collapsed Sidebar Layout</title>
  <!-- Tell the browser to be responsive to screen width -->
   <link href="../boots/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../dist/css/card.css">
  <script src="../dist/js/sweetalert2.all.min.js"></script>
  <link href="../dist/css/sweetalert2.min.css" type="text/css" rel="stylesheet">

</head>

<style type="text/css">
#exito,#vacio,#error,#errores{
    margin: 0 auto;
    color: black;
    width: 90%;
    padding: 0.4em 0;
    display: none;
    background: white;
} 
#exito,#hecho{
  border: 2px solid green;
}
#vacio{
  border: 2px solid #f39c12;
}
#error,#errores{
   border: 2px solid red; 
}
#hecho{
    margin: 0 auto;
    color: black;
    width: 90%;
    padding: 0.4em 0;
    background: white;
}
#butsel{
  padding: 0.5em 1em 0.5em 1em;
}
</style>
<!-- ADD THE CLASS sidebar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">


<link rel="stylesheet" type="text/css" href="../css/style.css">

<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
     <nav class="navbar navbar-static-top">
          <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

         <li class="dropdown user user-menu">
                   

                <div class="pull-right" style="margin-top:1em ">
                  <a href="../conexion/cerrar_session.php" class="btn btn-primary btn-flat">CERRAR SESIÓN </a>
               </div>
           
          </li>

          <li class="dropdown user user-menu">
             <img href="#" data-toggle="control-sidebar" src="../dist/img/AFAC.png" ALIGN=RIGHT class="img" alt="User Image" style="cursor: pointer;padding-right:  0.5em; margin: 0.5em;">
          </li>
        </ul>
      </div>
    </nav>
  </header>


</script>
  <div class="content-wrapper">


    <section class="content-header">
      <h1>ELEGIDOS COMITÉ DE ÉTICA <br>
      </h1>


<?php if($_SESSION['usuario']['privilegios']=='ADMINISTRADOR' || $_SESSION['usuario']['privilegios']=='SUPER_ADMIN' || $pass == '7141408'){ ?>
<ol class="breadcrumb">
<li><a style="font-size: 14px" href="voto.php"><i class="active" class="fa fa-home"></i> INICIO</a>
</li>
<li><a style="font-size: 14px" href="participantes.php"><i class="fa fa-user"></i> PARTICIPANTES</a></li>
</ol>

<?php } ?>      
      
  </section>


  <section class="content">
  <div class="row">
        <!-- left column -->

        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->



<div class="box box-info">

<div class="box-header with-border">


<div class="box-header with-border">
<!-- <h2>21 de diciembre de 2021</h2>
 --><h3>Difusión de los nombres del personal elegido para formar parte del Comité de Ética y de Prevención de Conflictos de Interés 2021-2024 </h3>
</div>
<form id="formulario1" action="" method="POST" onsubmit="return votarpor(this)">
<br>
<div class="modal-header padding">
<b><p class="text-center padding" id="errores">ERROR AL REALIZAR SU VOTO</p></b>
<b><p class="text-center padding" id="exito">¡SU VOTO SE REALIZÓ CON ÉXITO !</p></b>
<b><p class="text-center padding" id="vacio">SELECCIONE OPCIÓN  </p></b>
</div>
<div class="modal-body" id="body">
<input type="hidden" name="idarper" id="idarper" value="1">
<input  type="hidden" name="perid" id="perid" value="<?php echo $id?>">
<div class="form-group">
<div class="col-sm-12">    
<div class="form-group">
</div>
<?php
$query3 = "SELECT * FROM personal WHERE gstNmpld = '3100248' || gstNmpld = '7141384' || gstNmpld = '7135156' ORDER BY gstNombr DESC ";
      $result3 = mysqli_query($conexion,$query3);

 while($data3 = mysqli_fetch_assoc($result3)){  ?>
<div class="form-group">
<?php if($data3['gstNmpld']=='3100248'){ ?>
<div class="col-sm-4">
<label>DIRECCIÓN EJECUTIVA</label>
<label class="label2">NOMBRE(S)</label>
<input type="text"onkeyup="mayus(this);"class="form-control disabled inputalta" value="<?php echo $data3['gstNombr'].' '.$data3['gstApell']?>" disabled="">
</div>
<?php }else if($data3['gstNmpld']=='7141384'){ ?>
<div class="col-sm-4">
<label>DIRECCIÓN DE ÁREA</label>
<label class="label2">NOMBRE(S)</label>
<input type="text"onkeyup="mayus(this);"class="form-control disabled inputalta" value="<?php echo $data3['gstNombr'].' '.$data3['gstApell']?>" disabled="">
</div>
<?php }else{ ?>
<div class="col-sm-4">
<label>SUBDIRECCIÓN DE ÁREA</label>
<label class="label2">NOMBRE(S)</label>
<input type="text"onkeyup="mayus(this);"class="form-control disabled inputalta" value="<?php echo $data3['gstNombr'].' '.$data3['gstApell']?>" disabled="">
</div>
<?php } ?>
</div>

<?php } ?>

</div>
</div>
</div>
</form>
     

</div>


<div class="box-header with-border">

<form id="formulario4" action="" method="POST" onsubmit="return votarpor(this)">
<br>
<div class="modal-header padding">

<b><p class="text-center padding" id="errores">ERROR AL REALIZAR SU VOTO</p></b>
<b><p class="text-center padding" id="exito">¡SU VOTO SE REALIZÓ CON ÉXITO !</p></b>
<b><p class="text-center padding" id="vacio">SELECCIONE OPCIÓN  </p></b>

</div>

<div class="modal-body" id="body">
<input type="hidden" name="idarper" id="idarper" value="4">
<input  type="hidden" name="perid" id="perid" value="<?php echo $id?>">

<div class="form-group">
<div class="col-sm-12">  
<div class="form-group">  

</div>
<?php
$query3 = "SELECT * FROM personal WHERE gstNmpld = '3100121' || gstNmpld = '3100199' || gstNmpld = '7141443' ";
      $result3 = mysqli_query($conexion,$query3);
?>

<?php while($data3 = mysqli_fetch_assoc($result3)){ ?>


<div class="form-group">

<?php if($data3['gstNmpld']=='3100121'){ ?>
<div class="col-sm-4">
<label>JEFATURA DE DEPARTAMENTO</label>
<label class="label2">NOMBRE(S)</label>
<input type="text"onkeyup="mayus(this);"class="form-control disabled inputalta" value="<?php echo $data3['gstNombr'].' '.$data3['gstApell']?>" disabled="">
</div>
<?php }else if($data3['gstNmpld']=='3100199'){ ?>
<div class="col-sm-4">
<label>ENLACE</label>
<label class="label2">NOMBRE(S)</label>
<input type="text"onkeyup="mayus(this);"class="form-control disabled inputalta" value="<?php echo $data3['gstNombr'].' '.$data3['gstApell']?>" disabled="">
</div>
<?php }else{ ?>
<div class="col-sm-4">
<label>OPERATIVO</label>
<label class="label2">NOMBRE(S)</label>
<input type="text"onkeyup="mayus(this);"class="form-control disabled inputalta" value="<?php echo $data3['gstNombr'].' '.$data3['gstApell']?>" disabled="">
</div>
<?php } ?>
</div>



<?php } ?>
</select>

</div>
</div>

</div>


</form>

</div>            <!-- /.box-header -->



<div class="box-header with-border">

<form id="formulario6" action="" method="POST" onsubmit="return votarpor(this)">
<br>
<div class="modal-header padding">
<b><p class="text-center padding" id="errores">YA VOTO POR EL NOMINADO</p></b>
<b><p class="text-center padding" id="exito">¡SU VOTO SE REALIZÓ CON ÉXITO !</p></b>
<b><p class="text-center padding" id="vacio">SELECCIONE OPCIÓN  </p></b>

</div>

<div class="modal-body" id="body">
<input type="hidden" name="idarper" id="idarper" value="6">
<input  type="hidden" name="perid" id="perid" value="<?php echo $id?>">

<div class="form-group">
<div class="col-sm-12">    
<div class="form-group">

</div>
<?php
$query3 = "SELECT * FROM personal WHERE gstNmpld = '7141449'";
      $result3 = mysqli_query($conexion,$query3);
?>

<?php while($data3 = mysqli_fetch_assoc($result3)){ ?>


<div class="form-group">
<div class="col-sm-4">
<label>OPERATIVO</label>
<label class="label2">NOMBRE(S)</label>
<input type="text"onkeyup="mayus(this);"class="form-control disabled inputalta" value="<?php echo $data3['gstNombr'].' '.$data3['gstApell']?>" disabled="">
</div>
</div>

<?php } ?>
</select>

</div>
</div>

</div>


</form>


</div>   



         <!-- /.box-header -->
<!-- /.box-header -->

        <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>


      <!-- /.box -->
    </section>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
<!--     <div class="pull-right hidden-xs">
      <b>-------</b> ------
    </div>
    <strong>----------<a href="#">--------</a>.</strong>-----. -->
  </footer>

  <!-- Control Sidebar -->
 


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">AVISO </h4>
              </div>
              <div class="modal-body">
                <p><div id="nominar"></div></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">CONTINUAR NOMINANDO </button>
                <a href="../conexion/cerrar_session.php"><button type="button" class="btn btn-primary">
                  CERRAR SESIÓN </button></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script></body>
</html>

<link rel="stylesheet" type="text/css" href="../boots/bootstrap/css/select2.css">

<script src="../js/select2.js"></script>

<script type="text/javascript">
   $(document).ready(function(){
      // $('#buscador1').load('select/buscarnom1.php');
      // $('#buscador2').load('select/buscarnom2.php');
      // $('#buscador3').load('select/buscarnom3.php');
      // $('#buscador4').load('select/buscarnom4.php');
      // $('#buscador5').load('select/buscarnom5.php');
      // $('#buscador6').load('select/buscarnom6.php');                          
      // $('#seleccionar').load('select/tablanom.php'); 
});

</script>

<script type="text/javascript">


function votarpor(){

var perid = document.getElementById('perid').value;
var idevl = document.getElementById('idevl').value;
var idarper = document.getElementById('idarper').value;

dato = 'perid='+perid+'&idevl='+idevl+'&idarper='+idarper+'&opcion=votarpor';
 // alert(dato); 
 if (perid == '' || idevl == '0' || idarper == '0') {
              $("#vacio").toggle('toggle');
              setTimeout(function() {
              $("#vacio").toggle('toggle');
              }, 3000);
        return;

    } else {
        $.ajax({
            url: '../php/votar.php',
            type: 'POST',
            data: dato
        }).done(function(respuesta) {
            // alert(respuesta);
            if (respuesta == 0) {
            $("#butsel").toggle('toggle');
            $("#exito").toggle('toggle');
            $("#body").toggle('toggle');
               setTimeout("location.href = 'votar.php'", 1500);


         
            } else {
              $("#errores").toggle('toggle');
              setTimeout(function() {
              $("#errores").toggle('toggle');
              }, 3000);
            }
        });
    }

} 

   
   function valor(v){

    $("#nominar").html('LE HACE FALTA VOTAR POR <b>'+' '+v+' '+'</b> CANDIDATOS');
   }




</script>

<?php 

$queri = "SELECT count(*) AS ttl FROM votacion  
          INNER JOIN personal ON gstIdper = idevl
          WHERE perid = $id AND idasnt = 2
          " ;
$result = mysqli_query($conexion, $queri);
$resut = mysqli_fetch_array($result);

 $re = $resut['ttl']+1;
  
    if($re==7)
    {
      $re=6;
    }
?>
<script type="text/javascript">

        $("#formulario<?php echo $re?>").show();

</script>  
<?php
$res = 7-$resut['ttl'];
if($resut['ttl']==7){
}
?>
	
