@extends('template.master')

@section('judul', 'Data Mahasiswa')

@section('isi')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header bg-info">
                            <h3 class="card-title"> Data Mahasiswa ILKOM A</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{ url('add-mahasiswa') }}" role="button" class="btn btn-success mb-3"><i class="fas fa-add">Tambah Data</i></a>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="bg-info">
                                    <th>No</th>
                                    <th>Nim</th>
                                    <th>Nama</th>
                                    <th>Semester</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->nim }}</td>
                                    <td>{{ $row->nama_mahasiswa }}</td>
                                    <td>{{ $row->semester }}</td>
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