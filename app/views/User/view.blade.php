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
        <h3><i class="glyphicon glyphicon-list"></i><b> Tabel User </b></h3></div>
        
    <table class="table">
        <table class="table table-bordered" style="text-align: center">
            <tr class="alert-info" >
                <td><b>No</b></td>
                <td><b>ID User</b></td>
                <td><b>User Name</b></td>
                <td><b>Email</b></td>
                <td><b>Aksi</b></td>
            </tr>
            <?php $i = 1;
            foreach ($isi as $value) { ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['username']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td>
                        <a href="{{ URL::to('/user/edit/' . $value->id) }}" class="btn btn-info">
                            <i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="{{ URL::to('/user/hapus/' . $value->id) }}" class="btn btn-danger">
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