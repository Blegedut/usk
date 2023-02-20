@extends('layouts.master')
@section('content')
    @if (session('status'))
        <div class="alert alert-{{ session('status') }}">
            {{ session('message') }}
        </div>
    @endif
    <div class="row">
        <div class="col-9">
            <h4>Buku yang sudah dikembalikan</h4>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <a href="{{ Route('user.form_peminjaman') }}" class="btn btn-primary float">Pinjam</a>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Kondisi Buku</th>
                            <th>Denda</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $key => $b)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $b->user->username }}</td>
                                <td>{{ $b->buku->judul_buku }}</td>
                                <td>{{ $b->tanggal_pengembalian }}</td>
                                <td>{{ $b->tanggal_pengembalian }}</td>
                                <td>{{ $b->kondisi_saat_dipinjam }}</td>
                                <td>{{ $b->denda }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    </div>
@endsection
