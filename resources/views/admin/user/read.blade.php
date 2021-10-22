@extends('admin.layouts')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                        <a href="/admin/user/create" class="btn btn-primary btn-flat pull-right">
                            <i class="fa fa-user-plus"></i>
                        </a>
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
                                <tr>
                                    <td>admin</td>
                                    <td>admin@gmail.com</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="/admin/user/update" class="btn btn-primary btn-flat">
                                            Edit
                                        </a>
                                        <a href="/admin/user/delete" class="btn btn-danger btn-flat">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
