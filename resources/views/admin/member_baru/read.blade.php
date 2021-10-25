@extends('admin.layouts')

@section('content')
    <div  class="modal fade" id="modalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-info">
            <div class="modal-content">
                <div id="modalMdContent"></div>
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
                                        <a href="/admin/member_baru/detail/{{$data->id}}" class="btn btn-info btn-flat modalMd" data-toggle="modal" data-target="#modalMd">
                                            Detail
                                        </a>


                                        <a href="/admin/member_baru/approve/{{$data->id}}" class="btn btn-success btn-flat">
                                            Approve
                                        </a>
                                        <a href="/admin/member_baru/reject/{{$data->id}}" class="btn btn-danger btn-flat">
                                            Reject
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


@section('js')
    <script type="text/javascript">
        $(document).on('ajaxComplete ready', function () {
            $('.modalMd').off('click').on('click', function () {
                $('#modalMdContent').load($(this).attr('value'));
                $('#modalMdTitle').html($(this).attr('title'));
            });
        });
    </script>
@endsection