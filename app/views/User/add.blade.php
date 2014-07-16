@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i><b> Form Tambah User</b></div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/user/simpan"); ?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">User Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="username" class="form-control " placeholder="Username">
                        <p style="color: red"> {{ $errors->first('Username') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <p style="color: red"> {{ $errors->first('Password') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <p style="color: red"> {{ $errors->first('Email') }} </p>
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