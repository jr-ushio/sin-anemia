<?php

include(SRC_PATH.'views/templates/top.php');
include(SRC_PATH.'views/templates/header.php');
?>
<section class="bg-home">

<div class="container mTop-15">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Informacion sobre la anemia</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Listado de Alimentos</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Dashboard</a></li>
    <!-- <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li> -->
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
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
            <button class="btn btn-success">Qué es</button>
            <button class="btn btn-success">Causas</button>
            <button class="btn btn-success">Quienes Corren Riesgos</button>
            <button class="btn btn-success">Signos y Síntomas</button>
            <button class="btn btn-success">Prevención</button>
            <button class="btn btn-success">Que Causaría</button>
          </div>
          <div class="col-md-8 tab-home-right">
            <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex aperiam, error, rerum sapiente eligendi debitis consequatur asperiores! Ut dicta atque dolorem facere sunt impedit, id facilis asperiores harum, praesentium nihil.</p>
            <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex aperiam, error, rerum sapiente eligendi debitis consequatur asperiores! Ut dicta atque dolorem facere sunt impedit, id facilis asperiores harum, praesentium nihil.</p>
            <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex aperiam, error, rerum sapiente eligendi debitis consequatur asperiores! Ut dicta atque dolorem facere sunt impedit, id facilis asperiores harum, praesentium nihil.</p>
          </div>
        </div>
      </div>


    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      <div id="chartdiv"></div>
    </div>

    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <!-- <div role="tabpanel" class="tab-pane" id="settings">...</div> -->
  </div>

</div>
</section>
<?php
  include(SRC_PATH.'views/templates/footer.php');
  include(SRC_PATH.'views/templates/bottom.php');
?>
