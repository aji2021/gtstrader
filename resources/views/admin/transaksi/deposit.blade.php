@extends('admin.layouts')

@section('content')
    <section class="content-header">
        <h1> Deposit </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Transaksi</li>
        </ol>
    </section>
    <div class="row"> </div>

    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <h3 class="profile-username text-center">Dompet</h3>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Jumlah</b> <a class="pull-right"> <b> 1,322 </b> </a>
                            </li>
                        </ul>
                        <a href="/admin/transaksi/deposit" class="btn btn-primary btn-block">Deposit</a>
                        <a href="/admin/transaksi/withdraw" class="btn btn-primary btn-block">Withdraw</a>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>

                    <form class="form-horizontal" method="POST" action="/admin/transaksi/createdeposit">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pilih Bank</label>
                                <div class="col-sm-8">
                                    <select name="nama_bank_deposit" class="form-control select2"> 
                                        <option value="BCA-123"> BCA-1234</option>
                                        <option value="Mandiri-123"> Mandiri-1234</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jumlah Deposit</label>
                                <div class="col-sm-8">
                                    <input type="text" name="jumlah_deposit" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Bukti Bayar </label>
                                <div class="col-sm-8">
                                    <input type="text" name="bukti_pembayaran" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right">
                                Deposit 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
                                    <th>Tanggal</th>
                                    <th>Jumlah Deposit</th>
                                    <th>Bank</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($deposit as $data)
                                <tr>
                                    <td>{{ $data->tanggal }}</td>
                                    <td>{{ $data->jumlah_deposit }}</td>
                                    <td>{{ $data->nama_bank_deposit }}</td>
                                    <td>
                                        <div class="btn btn-danger btn-flat"> Progress </div>
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



