@extends('layout.bootstrapadmin.index')

@section('content')
@if (Session::has('message'))
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif

<div class="panel panel-primary">
    <div class="panel-heading">
        <h1><i class="glyphicon glyphicon-list"></i> Aplikasi Penjualan Pulsa </h1></div>
    <table class="table" style="text-align: center; font-size: medium">
        <tr class="alert-info">
            <td><b><h4>Nama Kelompok</h4></b></td>
            <td><b><h4>Nim</h4></b></td>
            <td><b><h4>Alamat</h4></b></td>
        </tr>
        <tr>
            <td>Muh. Farij Wajdi</td>
            <td>1010510107</td>
            <td>Lombok Timur, Sepit</td>
        </tr>
        <tr>
            <td>Zaenul Panani</td>
            <td>1010510106</td>
            <td>Lombok Timur, Sepit</td>
        </tr>
        <tr>
            <td>Andi kurnia Wahyudi</td>
            <td>1010510211</td>
            <td>Lombok Timur, Keruak</td>
        </tr>
    </table>
</div>
@stop