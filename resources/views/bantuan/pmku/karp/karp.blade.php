@extends('bantuan.layout.master')

@section('title')
PMII - Sarawak Baitulmal Management System (SBMS)
@endsection

@section('styles')

@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Bantuan Keperluan Awal Rawatan/Perubatan</h1>

<div class="row">
    &emsp; <a class="btn btn-info" href="{{ url('/pmku-karp') }}">Permohonan Atas Talian</a>

    <br><br>

    <!-- Data Table -->

    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

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
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($karp as $k)
                    <tr>
                        <th>PMKU/KARP/2021/{{ $k->id }}</th>
                        <th>PMKU</th>
                        <th>Sarikei</th>
                        <th>{{ $k->nama_penuh }}</th>
                        <th>{{ $k->created_at }}</th>
                        <th>{{ $k->nama_bank }}</th>
                        <td class="text-center">
                            <a href="{{ URL::to('/edit/pmku-karp/'.$k->id) }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{ URL::to('/delete/pmku-karp/'.$k->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda pasti?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- end data table -->
@endsection

@section('scripts')

@endsection