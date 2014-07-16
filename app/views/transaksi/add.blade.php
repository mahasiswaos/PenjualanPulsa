@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i><b> Form Tambah Transaksi</b></div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/transaksi/simpan"); ?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jumlah Pengisian</label>
                    <div class="col-sm-4">
                        <input type="text" name="jml" class="form-control " placeholder="Rp_">
                        <p style="color: red"> {{ $errors->first('Jumlah') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Tujuan</label>
                    <div class="col-sm-5">
                        <input type="text" name="notu" class="form-control" placeholder="No Tujuan">
                        <p style="color: red"> {{ $errors->first('No') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Transaksi</label>
                    <div class="col-sm-5">
                        <input type="date" name="tgl" class="form-control" placeholder="YYYY/MM/DD">
                        <p style="color: red"> {{ $errors->first('Tanggal') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop