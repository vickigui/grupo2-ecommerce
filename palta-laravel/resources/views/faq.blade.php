@extends('plantilla')
@section('titulo')
  PALTA - Preguntas Frecuentes
@endsection


@section('contenido')


  <div class="container-fluid sectionHeader">
    <h1 class="text-center">Preguntas Frecuentes</h1>
  </div>

  <div class="pregunta text-center">
    <a data-toggle="collapse" href="#respuesta1">
      <h5>¿Cuál es el monto mínimo de compra?</h5>
    </a>
    <div class="collapse" id="respuesta1">
      <p>El monto mínimo de compra es de $500, una vez alcanzado ese valor se habilitará el botón para finalizar la compra.</p>
    </div>
  </div>

  <div class="pregunta text-center">
    <a data-toggle="collapse" href="#respuesta2">
      <h5>¿Cuál es el costo del envío?</h5>
    </a>
    <div class="collapse" id="respuesta2">
      <p>El envío es sin cargo.</p>
    </div>
  </div>

  <div class="pregunta text-center">
    <a data-toggle="collapse" href="#respuesta3">
      <h5>¿Cuáles son los medios de pago?</h5>
    </a>
    <div class="collapse" id="respuesta3">
      <p>El pedido podrá abonarse en efectivo, o por MercadoPago.</p>
    </div>
  </div>

  <div class="pregunta text-center">
    <a data-toggle="collapse" href="#respuesta4">
      <h5>¿Dónde puedo recibir mi pedido?</h5>
    </a>
    <div class="collapse" id="respuesta4">
      <p>Podes recibir tu pedido en el domicilio que indiques en los datos de la orden, puede ser tu casa, trabajo o lugar que designes.</p>
    </div>
  </div>

  <div class="pregunta text-center">
    <a data-toggle="collapse" href="#respuesta5">
      <h5>¿Cuáles son las zonas de entrega disponible?</h5>
    </a>
    <div class="collapse" id="respuesta5">
      <p>Actualmente realizamos envíos en Nordelta.</p>
    </div>
  </div>

  <div class="pregunta text-center">
    <a data-toggle="collapse" href="#respuesta6">
      <h5>¿Cuáles son los dias y horarios de entrega?</h5>
    </a>
    <div class="collapse" id="respuesta6">
      <p>Se realizan las entregas los dias Martes, Jueves y Sabados en la franja horaria de 14hs a 18hs.</p>
    </div>
  </div>

  <div class="pregunta text-center">
    <a data-toggle="collapse" href="#respuesta7">
      <h5>¿Cómo modifico el pedido?</h5>
    </a>
    <div class="collapse" id="respuesta7">
      <p>El pedido puede ser modificado desde el Carrito de Compra.<br>Allí podrás tanto eliminar como modificar cantidades de productos.<br>Haciendo clic en el + o el - para subbir o bajar las cantidades y en el icono de basurero para eliminarlo.</p>
    </div>
  </div>

  <div class="pregunta text-center">
    <a data-toggle="collapse" href="#respuesta8">
      <h5>¿Cómo finalizo el pedido?</h5>
    </a>
    <div class="collapse" id="respuesta8">
      <p>Una vez que hayas seleccionado todos los productos que vas a adquirir, a través del Carrito de <br>Compra seleccioná la opción “Finalizar Compra” y completá los datos.</p>
    </div>
  </div>

  <div class="pregunta text-center">
    <a data-toggle="collapse" href="#respuesta9">
      <h5>¿Qué debo hacer si el producto no llega en buen estado?</h5>
    </a>
    <div class="collapse" id="respuesta9">
      <p>Ponete en contacto con nosotros y te enviaremos uno nuevo. Este proceso está garantizado.</p>
    </div>
  </div>

  <div class="pregunta text-center">
    <a data-toggle="collapse" href="#respuesta10">
      <h5>¿Qué hago si recibo el pedido incompleto?</h5>
    </a>
    <div class="collapse" id="respuesta10">
      <p>Al momento de recibir el pedido de forma incompleta es muy probable que nosotros ya estemos al tanto de esto.<br>De todas formas por favor comunícate con nosotros.<br>Solo deberás abonar el valor de lo que recibas, los productos faltantes deberán ser descontados del total.</p>
    </div>
  </div>

  <div class="pregunta text-center">
    <a data-toggle="collapse" href="#respuesta11">
      <h5>¿Cuál es nuestro horario de atención?</h5>
    </a>
    <div class="collapse" id="respuesta11">
      <p>Los pedidos realizados a través de la página web pueden realizarse durante las 24hs los 7 días de la semana.</p>
    </div>
  </div>

  <div class="pregunta text-center">
    <a data-toggle="collapse" href="#respuesta12">
      <h5>¿Se realizan repartos los días feriados?</h5>
    </a>
    <div class="collapse" id="respuesta12">
      <p>Los días feriados no se realizan envíos.</p>
    </div>
  </div>
@endsection
