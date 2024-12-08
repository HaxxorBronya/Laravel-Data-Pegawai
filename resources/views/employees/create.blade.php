@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body shadow-sm">
            <div class="mb-3 p-2">
                <h1>Tambah Pegawai</h1>
            
                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Posisi</label>
                        <input type="text" name="position" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="hire_date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection