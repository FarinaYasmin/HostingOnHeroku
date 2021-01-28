@extends('Backend.layout.master')

@section('title')
Home - Sarawak Baitulmal Management System (SBMS)
@endsection

@section('styles')
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Home</h1>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Baru</div>

          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Semakan</div>

          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengesahan</div>
            <div class="row no-gutters align-items-center">

            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pembayaran</div>

          </div>
          <div class="col-auto">
            <i class="fas fa-comments fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Content Row -->

<!-- css for img -->

<style>
  * {
    box-sizing: border-box;
  }

  .column {
    float: left;
    width: 33.33%;
    padding: 5px;
  }

  /* Clearfix (clear floats) */
  .row::after {
    content: "";
    clear: both;
    display: table;
  }

  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }
</style>

<!-- Data Table -->
<div class="card mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No Rujukan</th>
            <th>Program Bantuan</th>
            <th>Cawangan</th>
            <th>Nama Penuh</th>
            <th>Tarikh Permohonan</th>
            <th>Nama Bank</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>PMII/BKO/2021/3</th>
            <th>PMII</th>
            <th>Sarikei</th>
            <th>Farina Yasmin Binti Abdul Manap</th>
            <th>2020/02/01</th>
            <th>Bank Kerjasama</th>
          </tr>
          <tr>
            <th>PMII/BKO/2021/3</th>
            <th>PMII</th>
            <th>Sarikei</th>
            <th>Farina Yasmin Binti Abdul Manap</th>
            <th>2020/02/01</th>
            <th>Bank Kerjasama</th>
          </tr>
          <tr>
            <th>PMII/BKO/2021/3</th>
            <th>PMII</th>
            <th>Sarikei</th>
            <th>Farina Yasmin Binti Abdul Manap</th>
            <th>2020/02/01</th>
            <th>Bank Kerjasama</th>
          </tr>
          <tr>
            <th>PMII/BKO/2021/3</th>
            <th>PMII</th>
            <th>Sarikei</th>
            <th>Farina Yasmin Binti Abdul Manap</th>
            <th>2020/02/01</th>
            <th>Bank Kerjasama</th>
          </tr>
          <tr>
            <th>PMII/BKO/2021/3</th>
            <th>PMII</th>
            <th>Sarikei</th>
            <th>Farina Yasmin Binti Abdul Manap</th>
            <th>2020/02/01</th>
            <th>Bank Kerjasama</th>
          </tr>
          <tr>
            <th>PMII/BKO/2021/3</th>
            <th>PMII</th>
            <th>Sarikei</th>
            <th>Farina Yasmin Binti Abdul Manap</th>
            <th>2020/02/01</th>
            <th>Bank Kerjasama</th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- end data table -->
@endsection

@section('scripts')

@endsection