@extends('Backend.layout.master')

@section('title')
PMKU - Sarawak Baitulmal Management System (SBMS)
@endsection

@section('styles')

@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Program Memantapkan Kebajikan Ummah (PMKU)</h1>

<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">About PMKU</h6>
    </div>
    <div class="card-body">
    Sejajar dengan peranannya, Tabung Baitulmal Sarawak telah mengorak langkah bergerak kehadapan bagi membela nasib umat Islam yang terhimpit dalam kemiskinan dan kemalaratan hidup. Umpamanya golongan mustadafin yang amat memerlukan sokongan dan bantuan termasuk saraan hidup.
    <br> <br> Tabung Baitulmal Sarawak telah mewujudkan satu lagi program kemasyarakatan bagi menghulurkan bantuan kepada golongan ini daripada Dana Zakatnya
    </div>
</div>

<!-- ****** Categories Area Start ****** -->
<section class="categories_area clearfix" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ url('/karp') }}">
                        <img src="backend/img/catagory-img/c1.jpeg" alt="">
                                <p>Bantuan Keperluan Awal Rawatan/Perubatan</p>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".6s">
                    <a href="{{ url('/per') }}">
                        <img src="backend/img/catagory-img/c2.jpeg" alt="">
                            <p>Bantuan Perubatan</p>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                    <a href="{{ url('/bencanaalam') }}">
                        <img src="backend/img/catagory-img/c3.jpeg" alt="">
                            <p>Bantuan Kecemasan/Bencana Alam</p>
                    </a>
                    </div>
                </div>
        </div>
    </section>
    <!-- ****** Categories Area End ****** -->

@endsection

@section('scripts')

@endsection