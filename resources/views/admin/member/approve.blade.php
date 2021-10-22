@extends('admin.layouts')

@section('content')
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-info">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Detail Member</h4>
              </div>
              <div class="modal-body">
                <h4 class="modal-title">Data Diri </h4>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama : </label>
                    <p>tes</p>
                </div>
                <h4 class="modal-title">Akun Treding </h4>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama : </label>
                    <p>tes</p>
                </div>
                <h4 class="modal-title">Data Bank </h4>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama : </label>
                    <p>tes</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>NIK</th>
                                    <th>Username</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $data)
                                <tr>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->nik_ktp }}</td>
                                    <td>{{ $data->username }}</td>
                                    <td>
                                        <a href="/admin/member_baru/detail" class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModal">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
