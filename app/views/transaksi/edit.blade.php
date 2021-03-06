@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-danger">
        <div class="panel-heading"><i class="glyphicon glyphicon-edit"></i> Form Edit</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/transaksi/prosessimpan/" . $isi->id); ?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->id; ?>" readonly="" name="id" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jumlah</label>
                    <div class="col-sm-4">
                        <input type="text"value="<?php echo $isi->jumlah; ?>"  name="jml" class="form-control " placeholder="Jumlah">
                        <p style="color: red"> {{ $errors->first('Jumlah') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Tujuan</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->no_tujuan; ?>" name="notu" class="form-control " placeholder="No Tujaun">
                        <p style="color: red"> {{ $errors->first('No Tujuan') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Transaksi</label>
                    <div class="col-sm-5">
                        <input type="date" value="<?php echo $isi->tgl; ?>" name="tgl" class="form-control" placeholder="date">
                        <p style="color: red"> {{ $errors->first('date') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i> Edit </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop