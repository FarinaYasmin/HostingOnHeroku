@extends('Backend.layout.master')

@section('title')
Program Bantuan - Sarawak Baitulmal Management System (SBMS)
@endsection

@section('styles')

@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Program Bantuan TBS</h1>

<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
    </div>
    <div class="card-body">
        The styling for this basic card example is created by using default Bootstrap utility classes. By using utility classes, the style of the card component can be easily modified with no need for any custom CSS!
    </div>
</div>

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

<div class="row">
    <div class="column">
        <p><a href=" ">
                <img src="backend\img\bg-img\pmku.jpeg" alt="pmku" style="width:80%">Program Memantapkan Kebajikan Ummah (PMKU)
        </a></p>
    </div>

    <div class="column">
        <p><a href=" ">
                <img src="backend\img\bg-img\pmtk.jpeg" alt="pmtk" style="width:80%">Program Mengukuhkan Tradisi Keilmuan (PMTK)
        </a></p>
    </div>

    <div class="column">
        <p><a href=" ">
                <img src="backend\img\bg-img\pmii.jpeg" alt="pmii" style="width:80%">Program Membangunkan Institusi Islam (PMII)
        </a></p>
    </div>
</div>


@endsection

@section('scripts')

@endsection