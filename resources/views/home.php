<?php

include('templates/top.php');
include('templates/header.php');
?>
<section class="bg-home">

<div class="container mTop-15">

  <!-- Nav tabs -->
  <ul id="myTabs" class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">Informacion sobre la anemia</a></li>
    <li role="presentation"><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab">Listado de Alimentos</a></li>
    <li role="presentation"><a href="#tab3" aria-controls="messages" role="tab" data-toggle="tab">Dashboard</a></li>
    <!-- <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li> -->
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="tab1">
      <div class="tab-home-top">
        <div class="btn mRight-15">
          IMPRIMIR
        </div>
        <div class="btn mRight-15">
          <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartir</a></div>
        </div>
      </div>
      <div class="tab-home-wrap">
        <div class="row">
          <div class="col-md-4 tab-home-left">
            <button class="btn btn-primary">Qué es</button>
            <button class="btn btn-primary">Causas</button>
            <button class="btn btn-primary">Quienes Corren Riesgos</button>
            <button class="btn btn-primary">Signos y Síntomas</button>
            <button class="btn btn-primary">Prevención</button>
            <button class="btn btn-primary">Tratamientos</button>
          </div>
          <div class="col-md-8 tab-home-right">
            <div id="content">

            </div>

          </div>
        </div>
      </div>


    </div>
    <div role="tabpanel" class="tab-pane" id="tab2">
      <div class="row">
        <div class="col-md-6">
          <div class="margin-15">
            <div id="map"></div>

          </div>

        </div>
        <div class="col-md-6">
          <div class="margin-15">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
              </div>
              <div class="panel-body">
                <ul class="list-group">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Morbi leo risus</li>
                  <li class="list-group-item">Porta ac consectetur ac</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                  <li class="list-group-item">Morbi leo risus</li>
                  <li class="list-group-item">Porta ac consectetur ac</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                  <li class="list-group-item">Morbi leo risus</li>
                  <li class="list-group-item">Porta ac consectetur ac</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div role="tabpanel" class="tab-pane" id="tab3">
      <div class="dashboard">
        <div class="row margin-15 mBottom-15">
          <div class="col-md-6">
            <figure>
              <img src="https://pbs.twimg.com/profile_images/842460218147631108/q583oGK5.jpg" alt="">
            </figure>
          </div>
          <div class="col-md-6">
            <ul class="datos">
              <li><span class="name">Persona que esta acargo</span></li>
              <li><span>Edad :</span> XXX</li>
              <li><span>Fecha de Nacimiento :</span> XXX</li>
              <li><span>Ingreso :</span> XXX</li>
              <li><span>Dni :</span> XXX</li>
              <li><span>Peso :</span> XXX</li>
              <li><span>Talla :</span> XXX</li>
            </ul>
          </div>
        </div>
        <?php
        $tope = [
          array('11','99','circle-3'),
          array('10','10.9','circle-1'),
          array('7.9','9.9','circle-2'),
        ];
        $niños = [
          array('1','Rubi Mendosa','10.5'),
          array('1','jose Perez','11'),
          array('1','Maria Gonzales','8'),
          array('2','Patricia Carrasco','25'),
          array('2','Wendy Sulca','11'),
          array('2','Elisabet','10.5'),
          array('2','Cesar PP','8'),
        ]
        ?>
        <div class="row fila">
          <div class="col-md-6">
            <h3>Sin Anemia</h3>
          </div>
          <div class="col-md-6">

                <ul class="lista">
                <?php foreach ($niños as $key => $value): ?>
                  <?php
                  $class = '';
                  if($value[2] >= $tope[0][0]){
                    $class = $tope[0][2];
                  }
                  if($value[2] >= $tope[1][0] && $value[2] <  $tope[1][1]){
                    $class = $tope[1][2];
                  }
                  if($value[2] >= $tope[2][0] && $value[2] < $tope[2][1]){
                    $class = $tope[2][2];
                  }
                  ?>
                  <?php if ($value[0] == 1): ?>
                  <li><a href="#" class="">
                    <div class="name">
                      <?= $value[1] ?>
                    </div>
                    <div class="circle <?= $class ?>">
                      <?= $value[2] ?>
                    </div>
                  </a></li>
                <?php endif; ?>
                <?php endforeach; ?>
                </ul>


          </div>
        </div>
        <div class="row fila">
          <div class="col-md-6">
            <h3>Con Anemia</h3>
          </div>
          <div class="col-md-6">
              <ul class="lista">
              <?php foreach ($niños as $key => $value): ?>
                <?php
                $class = '';
                if($value[2] >= $tope[0][0]){
                  $class = $tope[0][2];
                }
                if($value[2] >= $tope[1][0] && $value[2] <  $tope[1][1]){
                  $class = $tope[1][2];
                }
                if($value[2] >= $tope[2][0] && $value[2] < $tope[2][1]){
                  $class = $tope[2][2];
                }
                ?>

                <?php if ($value[0] == 2): ?>
                <li><a href="#" class="">
                  <div class="name">
                    <?= $value[1] ?>
                  </div>
                  <div class="circle <?= $class ?>">
                    <?= $value[2] ?>
                  </div>
                </a></li>
              <?php endif; ?>

              <?php endforeach; ?>
              </ul>
        </div>

        </div>


      </div>

    </div>
  </div>

</div>
</section>
<?php
  include('templates/footer.php');
  include('templates/bottom.php');
?>
