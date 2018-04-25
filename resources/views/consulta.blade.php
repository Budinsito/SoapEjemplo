<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
      


      <form class="form-control" method="GET" action="{{ route('formulario') }}" >
        <h4>CONSULTA DE AFILIADOS</h4>
        <div class="form-row">
            <div class="col-md-4">
                <div class="radio">
                  <label for="radios-0">
                    <input name="radioDni" id="radioDni" value="1" checked="checked" type="radio">
                    Nro DNI
                  </label>
              </div>
            </div>
        </div>


        <div class="form-row">

              <div class="form-group col-md-2">
                  <label for="inputText">Tipo de Documento</label>
              </div>

              <div class="form-group col-md-3">
                          <select id="selectipdoc" name="selectipdoc" class="form-control">
                    <option value="1">DNI</option>
                    <option value="2">Carnet de Extranjeria</option>
                    </select>
                     </div>        
        </div>


          <div class="form-row">

            
              
                <div class="form-group col-md-2">
                  <label class="col-md-4 control-label" for="textinput">Nro Documento</label>  
                </div>
               
              {{-- <div class="col-md-2"> 
                    <input id="txtnrodoc" name="txtnrodoc" placeholder="" class="form-control input-md" type="text" value="{{ $data
                    ->NroDocumento }}">
                </div> --}}
                
                   <div class="col-md-2">
                    <input id="txtnrodoc" name="txtnrodoc" placeholder="" class="form-control input-md" type="text" value="{{ $valorpac->ConsultarAfiliadoFuaEResult->NroDocumento }}">
                </div>
          </div>



              <form class="form-control">
        
        <div class="form-row">
            <div class="col-md-4">
                <div class="radio">
                  <label for="radios-0">
                    <input name="radioafi" id="radioafi" value="1" checked="checked" type="radio">
                    Nro de Afiliación
                  </label>
              </div>
            </div>             

        </div>



        <div class="form-row">

            
              
              <div class="form-group col-md-5">
                  <label class="col-md-4 control-label" for="textinput">Nro de Afiliación</label>  
                </div>
                  <div class="col-md-5">
                      <label class="col-md-6 control-label text-success" for="textinput">FILIACION TEMPORAL</label>  
                </div>
              </div>

    


                <div class="form-check form-check-inline">
                  <label class="col-md-12 control-label" for="textinput">Nro de Afiliación</label>  
                </div>

                <div class="form-check form-check-inline">
                  <input id="txtNroafi01" name="txtNroafi01" placeholder="" class="form-control input-md" type="text">
                </div>

                <div class="form-check form-check-inline">
                  <input id="txtNroafi02" name="txtNroafi02" placeholder="" class="form-control input-md" type="text">
                </div>

                <div class="form-check form-check-inline">
                  <input id="txtNroafi03" name="txtNroafi03" placeholder="" class="form-control input-md" type="text">
                </div>

        

                    <div class="form-row">
                        <div class="col-md-8">
                          <button id="btnbuscar" name="btnbuscar" class="btn btn-success">Buscar</button>
                          <button id="btnclear" name="btnclear" class="btn btn-inverse">Limpiar</button>
                        </div>
                    </div>


        </div>


   </form>
</div>


<div class="container">


<form class="form-horizontal">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtMate">Apellido Materno</label>  
  <div class="col-md-4">
  <input id="txtMate" name="txtMate" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtApe">Apellido Paterno</label>  
  <div class="col-md-4">
  <input id="txtApe" name="txtApe" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtName1">Nombres</label>  
  <div class="col-md-4">
  <input id="txtName1" name="txtName1" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtName2"></label>  
  <div class="col-md-4">
  <input id="txtName2" name="txtName2" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtSexo">Sexo</label>  
  <div class="col-md-4">
  <input id="txtSexo" name="txtSexo" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtFnac">Fecha de Nacimiento</label>  
  <div class="col-md-4">
  <input id="txtFnac" name="txtFnac" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtEstab">Estab. del asegurado</label>  
  <div class="col-md-4">
  <input id="txtEstab" name="txtEstab" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtTSeguro">Tipo de Seguro</label>  
  <div class="col-md-4">
  <input id="txtTSeguro" name="txtTSeguro" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtTSeguro3"></label>  
  <div class="col-md-4">
  <input id="txtTSeguro3" name="txtTSeguro3" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtEstab2"></label>  
  <div class="col-md-4">
  <input id="txtEstab2" name="txtEstab2" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtTSeguro"></label>  
  <div class="col-md-4">
  <input id="txtTSeguro" name="txtTSeguro" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtIdSi">idSiasis</label>  
  <div class="col-md-4">
  <input id="txtIdSi" name="txtIdSi" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcod">Codigo</label>  
  <div class="col-md-4">
  <input id="txtcod" name="txtcod" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="txtcod">Tipo de Seguro</label>  
  <div class="col-md-4">
  <input id="txtTSeguro" name="txtTSeguro" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="txtcod">Fecha de Afilicacion</label>  
  <div class="col-md-4">
  <input id="txtTAfi" name="txtTAfi" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="txtcod">Caducidad</label>  
  <div class="col-md-4">
  <input id="txtCadu" name="txtCadu" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="txtcod">Lugar de Referencia</label>  
  <div class="col-md-4">
  <input id="txtRefe" name="txtRefe" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnAceptar"></label>
  <div class="col-md-4">
    <button id="btnAceptar" name="btnAceptar" class="btn btn-primary">Aceptar</button>
  </div>
</div>


</fieldset>
</form>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>