
<nav class="navbar navbar-inverse" style="z-index:1;position: fixed;
  top: 0;
  width: 100%;  opacity: 0.9;
">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#" id="tituloNav"><u>PROYECTO DAW</u></a>
        </div>
        <ul class="nav navbar-nav" style="float:right;margin-right: 40px;height:75px;">
            <li class="botonesInicio"><a href="index.php?pagina=inicio"">INICIO</a></li>
            <li class="botonesInicio">    <a href="index.php?pagina=carta">CARTA</a>
            </li>
            <li class="botonesInicio">    <a href="index.php?pagina=reservas">RESERVAS</a>
            </li>
            <li class="botonesInicio">    <a href="index.php?pagina=contacto">CONTACTO</a>
            </li>
        </ul>
    </div>
</nav>
<h1 id="Titulo" style=" width: 300px;margin: auto;margin-top: 100px; height: auto;">Reservas</h1>
<form action="index.php?pagina=reservas" method="post" class="form-horizontal">
<div class="container" style="background-color: white;width:700px;height: auto;border-radius:5px;border: 10px solid black;">
    <span>Reservar mesa en</span><strong> Restaurante el Marqués</strong><br><span>c/ Medul nº22</span>
    <div class="col-xs-12" style="display: inline-flex;padding:10px;height: auto;">
        <div class="col-xs-6" style="z-index:0;background-color: grey;width: 350px;height: auto;margin-bottom:5px;padding-bottom:5px;height:auto;margin-right: 10px;"><span style="font-size: 70px;color:white;">1</span> <span style="color: white;">Selecciona el dia</span><hr>
        <input type="date" name="fecha" class="form-control" style="width: 200px;">
    </div>
        <div class="col-xs-6" style="z-index:0;background-color: grey;width: 350px;margin-bottom:5px;padding-bottom:5px;height: auto;"> <span style="font-size: 70px;color:white;">2</span> <span style="color: white;">Numero de personas</span><hr>
        <input type="number"  name="personas" style="width:100px;" class="form-control">
    </div>
    </div>
    <div class="col-xs-12" style="display: inline-flex;padding:10px;">
        <div class="col-xs-6" style="z-index:0;background-color: grey;width: 350px;height:auto;margin-bottom:5px;padding-bottom:5px;margin-right: 10px;"><span style="font-size: 70px;color:white;">3</span> <span style="color: white;">Selecciona la hora</span><hr>
            <select class="form-control" name="hora" style="width:100px;">
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>

            </select>
        </div>
        <div class="col-xs-6" style="z-index:0;background-color: grey;width: 350px;margin-bottom:5px;padding-bottom:5px;height: auto;"> <span style="font-size: 70px;color:white;">4</span> <span style="color: white;">Datos personales</span><hr>
            Nombre<input type="text" class="form-control" name="nombre" style="width:200px;">
            Email<input type="text" class="form-control" name="email" style="width:200px;">
        </div>

    </div>

    <div class="form-group" style="float: right;margin-right: 15px;">
        <input type="submit" class="btn btn-primary" name="Reservar" value="Reservar">
    </div>

</div>
</form>
