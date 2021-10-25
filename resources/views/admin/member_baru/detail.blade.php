@extends('admin.layouts')

@section('content')
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Detail Member</h4>
    </div>
    <div class="modal-body">
        <table class="table table-condensed" style="margin-top: 10px; border-top: solid 1px white;">
            <thead>
                <tr style="background:#212529;">
                    <td>DATA DIRI</td> <td> </td> <td> </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $users->nama }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{ $users->email }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td>{{ $users->nik_ktp }}</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td>{{ $users->username }}</td>
                </tr>
                <tr style="background:#212529;">
                    <td> AKUN TRADING</td> <td> </td> <td> </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td>{{ $users->username_trading }}</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td>{{ $users->password_trading }}</td>
                </tr>
                 <tr style="background:#212529;">
                    <td>AKUN BANK</td> <td> </td> <td> </td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td>{{ $users->nama_bank }}</td>
                </tr>
                <tr>
                    <td>Nomor</td>
                    <td>:</td>
                    <td>{{ $users->nomor_rekening }}</td>
                </tr>
                <tr>
                    <td>Cabang</td>
                    <td>:</td>
                    <td>{{ $users->nama_cabang }}</td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td>:</td>
                    <td>{{ $users->foto_rekening }}</td>
                </tr>
           </thead>
        </table>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
    </div>
@endsection
