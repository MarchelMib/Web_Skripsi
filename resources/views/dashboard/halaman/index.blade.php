@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Halaman</p>
    <div class="pb"><a href="{{ route('halaman.create') }}" class="btn btn-primary">+ Tambah Halaman</a></div>
    <div class="table-responsvi">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Judul</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection


