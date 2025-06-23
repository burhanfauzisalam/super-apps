@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Master Data Karyawan</h1>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
                <button class="btn btn-sm btn-info"><span class="fas fa-plus"></span>&nbsp;Tambah Data</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="text-center">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>Burhan</td>
                        <td>burhan@example.com</td>
                        <td>
                            <button class="btn btn-sm btn-success">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
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