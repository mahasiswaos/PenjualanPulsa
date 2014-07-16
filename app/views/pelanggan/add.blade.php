@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i><b> Form Tambah Pelanggan</b></div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/pelanggan/simpan"); ?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">User Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control " placeholder="Nama">
                        <p style="color: red"> {{ $errors->first('Nama') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="jk">
                            <option value="" disabled="" selected="">Pilih...!</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                        <p style="color: red"> {{ $errors->first('JK') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-5">
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                        <p style="color: red"> {{ $errors->first('Alamat') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">NO Hp</label>
                    <div class="col-sm-5">
                        <input type="text" name="nope" class="form-control" placeholder="No Hp">
                        <p style="color: red"> {{ $errors->first('nope') }} </p>
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