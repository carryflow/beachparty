@extends('admin.layouts.app')

@section('content')

<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-cube text-danger icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="card-text text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Los ingresos totales</font></font></p>
            <div class="fluid-container">
              <h3 class="card-title font-weight-bold text-right mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 65,650</font></font></h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 65% menor crecimiento
        </font></font></p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-receipt text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="card-text text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pedidos</font></font></p>
            <div class="fluid-container">
              <h3 class="card-title font-weight-bold text-right mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3455</font></font></h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3">
          <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Ventas sabias del producto
        </font></font></p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-poll-box text-teal icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="card-text text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ventas</font></font></p>
            <div class="fluid-container">
              <h3 class="card-title font-weight-bold text-right mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5693</font></font></h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Ventas semanales
        </font></font></p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-account-location text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="card-text text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Empleados</font></font></p>
            <div class="fluid-container">
              <h3 class="card-title font-weight-bold text-right mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">246</font></font></h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Ventas sabias del producto
        </font></font></p>
      </div>
    </div>
  </div>
</div>
@endsection
