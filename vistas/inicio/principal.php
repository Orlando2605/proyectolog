<body background="./assets/img/1.jpg">
<style>
    .did {
    
        background-image: url(./assets/img/1.jpg);
    }
    .did2 {
    
    background-image: url(./assets/img/2.jpeg);
}
</style>
<div class="content-wrapper">
        <div class="page-title did">
          <div>
            <h1><i class=""></i>Principal</h1>
            <p></p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>
        <div class="row did">
          <div class="col-md-6 did">
            <div class="card did2">
              <h3 class="card-title">Cantidad de Calzados</h3>
                <p><?php $p=$this->modelo->Cantidad()?>
                <?=$p->Cantidad?>   
              </p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
</body>