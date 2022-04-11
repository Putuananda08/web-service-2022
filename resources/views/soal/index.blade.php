@extends('template.master')

@section('judul', 'Data Soal')

@section('isi')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header bg-info">
                            <h3 class="card-title"> Data Soal</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{ url('add-soal') }}" role="button" class="btn btn-success mb-3"><i class="fas fa-add">Tambah Data</i></a>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="bg-info">
                                    <th>Id</th>
                                    <th>Nama MK</th>
                                    <th>Dosen</th>
                                    <th>Jumlah Soal</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->nama_mk }}</td>
                                    <td>{{ $row->dosen }}</td>
                                    <td>{{ $row->jumlah_soal }}</td>
                                    <td>{{ $row->keterangan }}</td>
                                    <td> <a href="#"> DELETE </a> <a href="#"> UPDATE </a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection