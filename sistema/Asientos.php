<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/Asientos.css">
  <link rel="stylesheet" href="../css/Alertas.css">

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/Alertas.js"></script>

  <title>Document</title>
</head>

<body>
  <main>
    <section class="sectionPrincipal">
      <div class="contEscenario">
        <img src="../image/bailando.png" alt="">
        <img src="../image/salsa.png" alt="">
      </div>

      <div class="contAsientos">
        <div class="contBloques" id="bloqueIzquierdo">
          
        </div>

        <div class="contBloques" id="bloqueCentral">
         
        </div>

        <div class="contBloques" id="bloqueDerecho">
        
        </div>
      </div>
      <button class="btnCancelar" onclick="cancelar();">Cancelar</button>
      <button class="btnContinuar" onclick="registroExitoso(); ">Continuar</button>
      <button class="btnRegresar" onclick="regresarInicio();">Inicio</button>
    </section>
  </main>
  <div id='system_alerts' class='system-alerts'></div>
</body>

<script src="../js/Asientos.js"></script>
<script>
  insertAsientosIzquierda();
  insertAsientosCentro();
  insertAsientosDerecha();
  obtenerDatos();
</script>

</html>