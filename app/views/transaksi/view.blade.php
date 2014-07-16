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
        <h3><i class="glyphicon glyphicon-list"></i><b> Tabel Transaksi</b></h3></div>
        
    <table class="table table-bordered" style="text-align: center">
        <tr class="alert-info">
            <td><b>No</b></td>
            <td><b>ID</b></td>
            <td><b>Jumlah Pengisian</b></td>
            <td><b>No Tujuan</b></td>
            <td><b>Tangal Transaksi</b></td>
            <td><b>Aksi</b></td>
        </tr>
        <?php
        $i = 1;
        foreach ($isi as $value) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['jumlah']; ?></td>
                <td><?php echo $value['no_tujuan']; ?></td>
                <td><?php echo $value['tgl']; ?></td>
                <td>
                    <div class="btn">
                        <a href="{{ URL::to('/transaksi/edit/' . $value->id) }}" class="btn btn-info">
                            <i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="{{ URL::to('/transaksi/hapus/' . $value->id) }}" class="btn btn-danger">
                            <i class="glyphicon glyphicon-trash"></i> Hapus</a>
                    </div>

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
</div>
@stop