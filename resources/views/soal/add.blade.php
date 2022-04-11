@extends('template.master')

@section('judul','tambah-soal')

@section('isi')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary" style="float: right;">
                            <h3 class="card-title">Tambah Data Soal</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('soal.getDataS') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="nama">id</label>
                                    <input type="hidden" id="nama" name="id" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nama">nama_mk</label>
                                    <input type="text" id="nama" name="nama_mk" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="dosen">dosen</label>
                                    <input type="text" id="dosen" name="dosen" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="jml">jumlah_soal</label>
                                    <input type="text" id="jml" name="jumlah_soal" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="ket">keterangan</label>
                                    <input type="text" id="ket" name="keterangan" class="form-control">
                                </div>
                               
                                <input type="submit" name="submit" value="Simpan Data">
                            <a class="btn btn-default" href="{{ url('data-soal') }}" role="button">Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection