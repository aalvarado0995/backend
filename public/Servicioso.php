<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
   <link rel="stylesheet" href="assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="assest/css/font-awesome.min.css">
     <link rel="stylesheet" href="assest/css/Master2.css">
    <style>
      .rojo{color: #3A4FC9;}
  </style>
</head>

<body> 
    <!--Encabezado-->
    <div class="container-fluid"></div>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <img src="assest/img/Tele.png" width="60px" alt="Logo" >
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Servicios.html">Servicios <span class="sr-only">(actual)</span></a>
      </li>
   
 </div>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="articulos.html">Articulos <span class="sr-only">(actual)</span></a>
      </li>
  
      </div>
      
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="Clientes.html">Clientes <span class="sr-only">(actual)</span></a>
      </li>
           </ul>
    
    
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="cotizacion.html">Cotizacion <span class="sr-only">(actual)</span></a>
      </li>
           </ul>
    
    </div>
     </ul>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item ">
        <a class="nav-link" href="Login.html">Login</a>
       
     
     </ul>
      </div>
    </div>
    </nav>
     <!--Zona de despliegue-->
     <div class="topnav">
     <div class="container-fluid">
     <div class="md-form active-cyan active-cyan-2 mb-3">
      <form action="articulos.html">
       <input type="text" placeholder="Search.." name="search">
       <button type="submit"><i class="fa fa-search"></i></button>
      </form>
     </div>
    </div>
    </div>
     
     
     
     
      <!--Zona de despliegue-->
       <div class="container mt-2">
        <div class="row">
         <div class= "col"><a href="#addservicio" data-toggle= "modal" class="btn btn-light">
         <i class="fa fa-plus fa -x2 text-danger float-rigth"></i>
         </a>
         </div>
        </div>
       </div>

     <!--./Zona de ventanas de modales-->
     <!--INICIO DEL MODAL AGREGAR-->
<div class="modal" tabindex="-1" role="dialog" id=addservicio>
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
   <!-----CAMPOS DE DEL REGISTRO DEL CLIENTE----->
   <form id="frmEditar" action="agregarServicio.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
     <div class="modal-body">
          <div class="card-body">
              <div class="form-group">
               <label for="Id_servicio">Id Servicio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-address-book text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Id_servicio" aria-describedby="idHelp" placeholder="Id Servicio" name="Id_servicio">
                </div>
                <small id="idHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="tipo_servicio">Tipo servicio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="tipo_servicio" aria-describedby="nombreHelp" placeholder="Tipo servicio" name="tipo_servicio">
                </div>
                <small id="nombreHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="Descripcion">Descripción servicio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user-o text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Descripcion" aria-describedby="nombreHelp" placeholder="Descripcion servicio" name="Descripcion">
                </div>
                <small id="nombreHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="Precio">Precio de venta</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-usd text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Precio" aria-describedby="direccionHelp" placeholder="Precio" name="Precio">
                </div>
                <small id="direccionHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                 <label for="costo">Costo</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-usd text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="costo" aria-describedby="corroHelp" placeholder="Costo" name="Costo">
                </div>
                 <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="Id_articulo">Id Articulos</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-barcode text-black-50"></i></div>
                  </div>
                   <input type="text" class="form-control" id="Id_articulo" aria-describedby="telPhoneHelp" placeholder="Articulos" name="Id_articulo">
                </div>
                <small id="telPhoneHelp" class="form-text text-muted"></small>
              </div>
          </div>
       
    </div>
    <!-----FIN DE LOS CAMPOS DE DEL REGISTRO DEL CLIENTE----->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" id="btnActualizar">Guardar cambios</button>
        </div>
   </form>
    </div>
    </div>
</div>
   
     <!--FIN DEL MODAL AGREGAR-->
     
     
     
  <!--INICIO DEL MODAL VER-->
   <div class="modal" tabindex="-1" role="dialog" id="verservicio" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Datos del cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
          <!-----CAMPOS DEL REGISTRO DEL CLIENTE----->
     <div class="modal-body">
          <div class="card-body">
              <div class="form-group">
               <label for="Id_servicio">Id Servicio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-address-book text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Id_servicio" aria-describedby="idHelp" placeholder="Id Servicio" name="Id_servicio">
                </div>
                <small id="idHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="tipo_servicio">Tipo servicio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="tipo_servicio" aria-describedby="nombreHelp" placeholder="Tipo servicio" name="tipo_servicio">
                </div>
                <small id="nombreHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="Descripcion">Descripción servicio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user-o text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Descripcion" aria-describedby="nombreHelp" placeholder="Descripcion servicio" name="Descripcion">
                </div>
                <small id="nombreHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="Precio">Precio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-usd text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Precio" aria-describedby="direccionHelp" placeholder="Precio" name="Precio">
                </div>
                <small id="direccionHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                 <label for="costo">Costo</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-usd text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="costo" aria-describedby="corroHelp" placeholder="Costo" name="Costo">
                </div>
                 <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="Id_articulo">Id Articulos</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-barcode text-black-50"></i></div>
                  </div>
                   <input type="text" class="form-control" id="Id_articulo" aria-describedby="telPhoneHelp" placeholder="Articulos" name="Id_articulo">
                </div>
                <small id="telPhoneHelp" class="form-text text-muted"></small>
              </div>
          </div>
          <!-----FIN DE LOS CAMPOS DEL REGISTRO DEL CLIENTE----->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
      </div>
  </div>
   
  <!--FIN DEL MODAL VER-->
  
   <!--INICIO DEL MODAL EDITAR-->
   
     <div class="modal" tabindex="-1" role="dialog" id="editservicio">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Datos del articulo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       
        <!-----CAMPOS DE DEL REGISTRO DEL CLIENTE----->
        <form id="formEditar">
     <div class="modal-body">
          <div class="card-body">
              <div class="form-group">
               <label for="Id_servicio">Id Servicio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-address-book text-black-50"></i></div>
                  </div> 
                  <input type="text" class="form-control" id="Id_servicio" aria-describedby="idHelp" placeholder="Id Servicio" name="Id_servicio">
                </div>
                <small id="idHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="tipo_servicio">Tipo servicio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="tipo_servicio" aria-describedby="nombreHelp" placeholder="Tipo servicio" name="tipo_servicio">
                </div>
                <small id="nombreHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="Descripcion">Descripción servicio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user-o text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Descripcion" aria-describedby="nombreHelp" placeholder="Descripcion servicio" name="Descripcion">
                </div>
                <small id="nombreHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="Precio">Precio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-usd text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Precio" aria-describedby="direccionHelp" placeholder="Precio" name="Precio">
                </div>
                <small id="direccionHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                 <label for="costo">Costo</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-usd text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="costo" aria-describedby="corroHelp" placeholder="Costo" name="Costo">
                </div>
                 <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="Id_articulo">Id Articulos</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-barcode text-black-50"></i></div>
                  </div>
                   <input type="text" class="form-control" id="Id_articulo" aria-describedby="telPhoneHelp" placeholder="Articulos" name="Id_articulo">
                </div>
                <small id="telPhoneHelp" class="form-text text-muted"></small>
              </div>
              </form>
          </div>
     </div>
           <!-----FIN DE LOS CAMPOS DE DEL REGISTRO DEL CLIENTE----->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" id="btnActualizar">Guardar cambios</button>
           </div>
        </div>
    </div>
   </div>
    </div>
  
      <!--FIN DEL MODAL EDITAR-->
      
      <!--INICIO DEL MODAL ELIMINAR-->
  <div class="modal" tabindex="-1" role="dialog" id="deletearticulo">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">¿Desea eliminar registro?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>

  <!--FIN DEL MODAL ELIMINAR-->
  
     <div class="container">
        <table class="table table-light table-striped">
            <thead>
              <tr>
                <th>Sec.</th>
                <th>Id_servicio</th>
                <th>tipo_servicio</th>
                <th>Costo</th>
                <th>Id_articulo</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody id="servicio"></tbody>
        </table>
    </div>
  <!--FIN DEL MODAL ELIMINAR-->
    <!--./Zona de despliegue-->
       <!--Zona de Js-->
    <script src="assest/js/jquery-3.3.1.js"></script>
    <script src="assest/js/bootstrap.min.js"></script>
    <!--validar-->
    <script src="assest/js/jquery.validate.min.js"></script>
    <script src="assest/js/additional-methods.min.js"></script>
    <script src="assest/js/localization/messages_es.js"></script>
    <!--validar personalizada-
    <script src="assest/js/Validar.Clientes.js"></script>
       -->
    <script>

     $(function(){
     $('#Id_servicio').on ('blur',function(){
     var Id_servicio=$(this).val();
     $.ajax({
     type:'POST',
     url:'buscarServicio.php',
     dataType:'json',
     data:'Id_servicio='+Id_servicio })
     .done(function(respuesta){
      //console.log(respuesta);
     if (respuesta.exito){
      alert('Ya existe');
      $('#Id_servicio').select();
      
     }
     else{
      $('#tipo_servicio').focus();
      
     }
     
     
      })
     .fail(function(e){
     console.log(e.responseText);
     });
     });
     });
     </script>
    
    <script>
        
       
      $(function()
		  {
      $.ajaxSetup({cache:false});
      $.getJSON('listarServicios.php',function(datos){
       //console.log(dastos); 
			$.each(datos.servicio, function(indice, servicio){
      //Console.log
     //armar la tabla
      $('#servicio').append('<tr><td>'+(indice+1)+
																					   '</td><td>'+servicio.Id_servicio+
                       '</td><td>'+servicio.tipo_servicio+
                       '</td><td>'+servicio.costo+
                       '</td><td>'+servicio.Id_articulo+
                       '</td><td>'+servicio.Descripcion+
                        '</td><td>'+servicio.Precio+
                       '</td><td><a href="#deleteservicio" data-toggle="modal"><a href="#editservicio" data-toggle="modal" data Id_servicio="'+servicio.Id_servicio+'"data tipo_servicio="'+servicio.tipo_servicio+'"data Costo="'+servicio.costo+'" data Id_articulo="'+servicio.Id_articulo+'" data Descripcion="'+servicio.Descripcion+'" data Precio="'+servicio.Precio+'" > <i class= "btn btn-warning btn-sm fa fa-edit" id="btn_editar"></i></a>&nbsp;<a href="#verservicio" data-toggle="modal" ><i class= "btn btn-info btn-sm fa fa-eye" id="btn_ver" ></i></a>&nbsp;<a href="#" class= "btn btn-danger btn-sm" id="btn_borrar"><i class="fa fa-trash"></i></a></td></tr>');                                   });

                }).fail(function(e){
            console.log(e.responseText);
            
            });//fin de fail
              //esto es llamar ventana modal y mostar datos
             //usar directamente la ventana modal, quitar el id btn_editar
             $('#editservicio').on('shown.bs.modal', function(evt){
             evt.preventDefault();
             var acliente=$(evt.relatedTarget);//aqui solo obtenemos los elementos data
             console.log(aServicio);
                                                        
             $('#id2').val(acliente.data('id'));
             $('#ncontacto2').val(acliente.data('nombre_contacto'));
             $('#nempresa2').val(acliente.data('nombre_empresa'));
             $('#direccion2').val(acliente.data('direccion'));
             $('#correo2').val(acliente.data('correo'));
             $('#telefono2').val(acliente.data('telefono'));
             });
         
          });
      </script>
     
     
</body>

</html>