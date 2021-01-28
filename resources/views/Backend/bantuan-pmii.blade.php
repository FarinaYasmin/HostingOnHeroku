@extends('Backend.layout.master')

@section('title')
PMII - Sarawak Baitulmal Management System (SBMS)
@endsection

@section('styles')

@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Program Membangunkan Institusi Islam (PMII)</h1>

<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">About PMII</h6>
    </div>
    <div class="card-body">
    Institusi Islam adalah lambang serta syiar keagungan ajaran Islam itu sendiri maka sewajarnya ia diberi kedudukan yang istimewa dan keutamaan oleh masyarakat Islam. Berkesinambungan dengan itu, Tabung Baitulmal Sarawak telah meletakkan suatu gagasan demi membantu institusi Islam yang memerlukan bantuan. Manakala badan-badan kebajikan yang lainnya turut mendapat imbalan yang berpatutan daripada Tabung Baitulmal Sarawak dengan tujuan memperkasakan serta merangsang aktiviti kemasyarakatan dan melebarkan ruang lingkup dakwah Islamiah di Sarawak.
    </div>
</div>

<!-- ****** Categories Area Start ****** -->
<section class="categories_area clearfix" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ url('/masjidsurau') }}">
                        <img src="backend/img/catagory-img/c1.jpeg" alt="">
                                <p>Bantuan Am Masjid Dan Surau</p>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".6s">
                    <a href="{{ url('/bko') }}">
                        <img src="backend/img/catagory-img/c2.jpeg" alt="">
                            <p>Bantuan Kepada Badan-Badan Kebajikan Dan Organisasi</p>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ url('xtvtagama') }}">
                        <img src="backend/img/catagory-img/c5.jpeg" alt="">
                            <p>Bantuan Kepada Aktiviti-Aktiviti Keagamaan dan Keraian Islam</p>
                    </a>
                    </div>
                </div>
        </div>
    </section>
    <!-- ****** Categories Area End ****** -->

@endsection

@section('scripts')

@endsection