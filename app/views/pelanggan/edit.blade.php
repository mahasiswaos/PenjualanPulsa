@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-danger">
        <div class="panel-heading"><i class="glyphicon glyphicon-edit"></i> Form Edit</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/pelanggan/prosessimpan/" . $isi->id); ?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->id; ?>" readonly="" name="id" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text"value="<?php echo $isi->nama; ?>"  name="nama" class="form-control " placeholder="Nama">
                        <p style="color: red"> {{ $errors->first('nama') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="jk">
                            <option value="" disabled="" selected=""></option>
                            <?php if ($isi->jk == "Pria") { ?>
                                <option value="Pria" selected="seleted">Pria</option>
                                <option value="Wanita">Wanita</option>
                            <?php } else { ?>
                                 <option value="Pria">Pria</option>
                                <option value="Wanita" selected="seleted">Wanita</option>
                            <?php }; ?>
                        </select>
                        <p style="color: red"> {{ $errors->first('jk') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $isi->alamat; ?>" name="alamat" class="form-control" placeholder="Alamat">
                        <p style="color: red"> {{ $errors->first('Alamat') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Hp</label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $isi->no_hp; ?>" name="nope" class="form-control" placeholder="0987654321">
                        <p style="color: red"> {{ $errors->first('nope') }} </p>
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