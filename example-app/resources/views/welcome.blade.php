@extends('layout.main')
@section('head')
    <title>Home</title>
@endsection
@section('main')
    <div class="container-fluid jumbotron jbg"></div>
    <div class="container-fluid text-center" style="margin-top: 20px;">
        <h1>Selamat Datang</h1>
        <p>Dataset yang digunakan diambil dari Excel Pak Subi. <br>
        Dataset ini berisi Data barang sebuah toko.</p>
        <p>Silahkan klik menu <b>Visualisasi</b>  dibawah ini untuk melihat hasil visualisasi dari data tersebut. <br>Klik menu <b>Dataset</b> untuk melihat dataset.</p>
        <a href="/laravel"><button class="btn btn-primary">Visualisasi</button></a> <a href="https://docs.google.com/spreadsheets/d/1QvrhRdE0s_HuHdfdN5TUH2fJAJaKkgy5/edit?usp=sharing&ouid=116057325822054093789&rtpof=true&sd=true"><button class="btn btn-primary" style="margin-left:15px">Dataset</button></a>
    </div>
@endsection
