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
        <h3><i class="glyphicon glyphicon-list"></i><b> Tabel Pelanggan </b></h3></div>
        
    <table class="table table-bordered" style="text-align: center">
        <tr class="alert-info">
            <td><b>No</b></td>
            <td><b>ID </b></td>
            <td><b>Nama Pelanggan</b></td>
            <td><b>Alamat</b></td>
            <td><b>Jenis Kelamin</b></td>
            <td><b>No HP</b></td>
            <td><b>Aksi</b></td>
        </tr>
        <?php
        $i = 1;
        foreach ($isi as $value) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['nama']; ?></td>
                <td><?php echo $value['jk']; ?></td>
                <td><?php echo $value['alamat']; ?></td>
                <td><?php echo $value['no_hp']; ?></td>
                <td>
                    <a href="{{ URL::to('/pelanggan/edit/' . $value->id) }}" class="btn btn-info">
                        <i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="{{ URL::to('/pelanggan/hapus/' . $value->id) }}" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i> Hapus</a>
                </td>
            </tr>
            <?php
            $i++;
        }
        ?>
    </table>
    <div style="text-align: center">
        <?php echo $isi->links(); ?>
    </div>
</div>
@stop