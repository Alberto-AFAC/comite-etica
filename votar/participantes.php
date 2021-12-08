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
                  <a href="../conexion/cerrar_session.php" class="btn btn-primary btn-flat">Cerrar sesión</a>
                </div>
           
          </li>

          <li class="dropdown user user-menu">
             <img href="#" data-toggle="control-sidebar" src="../dist/img/AFAC.png" ALIGN=RIGHT class="img" alt="User Image" style="cursor: pointer;padding-right:  0.5em; margin: 0.5em;">
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="content-wrapper">


    <section class="content-header">
      <h1>VOTACIÓN COMITÉ DE ÉTICA <br>
      </h1>


<?php if($_SESSION['usuario']['privilegios']=='ADMINISTRADOR' || $_SESSION['usuario']['privilegios']=='SUPER_ADMIN' || $pass == '7141408'){ ?>
<ol class="breadcrumb">
        <li><a style="font-size: 14px" href="votar.php"><i class="fa fa-home"></i> INICIO</a>
        </li>
        <li><a style="font-size: 14px" href="participantes.php"><i class="active" class="fa fa-user"></i> PARTICIPANTES</a>
        </li>
<!--         <li></li> -->
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

<?php if($_SESSION['usuario']['privilegios']=='ADMINISTRADOR' || $_SESSION['usuario']['privilegios']=='SUPER_ADMIN' || $pass == '7141408'){ ?>
<section class="content">
<div class="box-body">
  <div id="refresh">
<table style="width: 100%;" id="data-table-votacion" class="table display table-striped table-bordered"></table>
</div>
</div>
</section>
<?php } ?>
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
      $('#buscador1').load('select/buscarnom1.php');
      $('#buscador2').load('select/buscarnom2.php');
      $('#buscador3').load('select/buscarnom3.php');
      $('#buscador4').load('select/buscarnom4.php');
      $('#buscador5').load('select/buscarnom5.php');
      $('#buscador6').load('select/buscarnom6.php');                          
      $('#seleccionar').load('select/tablanom.php'); 
});

</script>

<script type="text/javascript">

function votar(){

var perid = document.getElementById('perid').value;
var idevl = document.getElementById('idevl').value;
var idarper = document.getElementById('idarper').value;

dato = 'perid='+perid+'&idevl='+idevl+'&idarper='+idarper+'&opcion=votar';
  
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
            //console.log(respuesta);
            if (respuesta == 0) {
            $("#butsel").toggle('toggle');
            $("#exito").toggle('toggle');
            $("#body").toggle('toggle');
               setTimeout("location.href = 'voto.php'", 1500);
         
            } else {
              $("#errores").toggle('toggle');
              setTimeout(function() {
              $("#errores").toggle('toggle');
              }, 3000);
            }
        });
    }

} 


var dataSet = [
<?php 
$query = "SELECT *,COUNT(idevl) AS votos FROM votacion
INNER JOIN personal ON idevl = gstIdper AND idasnt = 2 GROUP BY idevl";
$resultado = mysqli_query($conexion, $query);
  $n = 0;
      while($data = mysqli_fetch_array($resultado)){ 
$n++;

if($data['idareas']==1){
  $cargo = 'DIRECCIÓN EJECUTIVA';
}else if($data['idareas']==2){
  $cargo = 'DIRECCIONES DE ÁREA';  
}else if($data['idareas']==3){
  $cargo = 'SUBDIRECCIONES DE ÁREA';  
}else if($data['idareas']==4){
  $cargo = 'JEFATURAS DE DEPARTAMENTO';  
}else if($data['idareas']==5){
  $cargo = 'ENLACES';  
}else if($data['idareas']==6){
  $cargo = 'OPERATIVO';  
}


?>
["<?php echo  $n?>","<?php echo $cargo?>","<?php echo  $data['gstNombr']?>","<?php echo $data['gstApell']?>","<?php echo  $data['votos']?>"],

<?php } ?>
];

var tableGenerarReporte = $('#data-table-votacion').DataTable({
  "order": [[ 3, "ASC" ]],
    "language": {
    "searchPlaceholder": "Buscar datos...",
    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
    },
    orderCellsTop: true,
    fixedHeader: true,
    data: dataSet,
    columns: [{
            title: "#"
        },
        {
            title: "CARGO"
        },
        {
            title: "NOMBRE"
        },
        {
            title: "APELLIDOS"
        },
        {
            title: "|| VOTOS"
        }    
      ],
    });


</script>


	
<?php




?>