@extends('Backend.layout.master')

@section('title')
PMTK - Sarawak Baitulmal Management System (SBMS)
@endsection

@section('styles')

@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Program Mengukuhkan Tradisi Keilmuan (PMTK)</h1>

<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">About PMTK</h6>
    </div>
    <div class="card-body">
    Tabung Baitulmal Sarawak memandang berat dan serius dalam usaha memartabatkan Umat Islam supaya menjadi insan yang berwibawa, berketerampilan, disegani dan paling utama menjadi intelektual yang tertaqwa kepada Allah s.w.t. Sabda Rasulullah s.a.w yang bermaksud :
    <br><br> “Manusia yang terbaik ialah mukmin yang berilmu” (Riwayat Al-Baihaqi).
    <br><br> Demi matlamat murni itu, telah memperuntukan sejumlah dan yang besar untuk menjayakan program tersebut memandangkan ia adalah perancangan jangka panjang dan bertepatan dengan konsep kail. Aktiviti-aktiviti di bawah Program Mengukuhkan Tradisi Keilmuan yang dibiayai melalui Dana Zakat
    </div>
</div>

<!-- ****** Categories Area Start ****** -->
<section class="categories_area clearfix" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ url('/srm') }}">
                        <img src="backend/img/catagory-img/c1.jpeg" alt="">
                                <p>Bantuan Pengajian Sekolah Rendah/Menengah</p>
                    </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                    <a href="{{ url('/ipt') }}">
                        <img src="backend/img/catagory-img/c3.jpeg" alt="">
                            <p>Bantuan Kemasukan Ke IPT</p>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ url('/sijil') }}">
                        <img src="backend/img/catagory-img/c4.jpeg" alt="">
                            <p>Bantuan Peringkat Sijil/Kursus</p>
                    </a>
                    </div>

        </div>
    </section>
    <!-- ****** Categories Area End ****** -->

@endsection

@section('scripts')

@endsection