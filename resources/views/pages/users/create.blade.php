@extends('layouts.master')

@section('title','Form Tambah')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Form Tambah User</h3>
    </div>
    <div class="card-body">
    <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="form-group">

                                    <label for="role" class="form-label">Role Akses</label>
                                    <select name="role" id="role" class="form-control @error('role') is-invalid @enderror" required>
                                        <option value="">-- Pilih Role --</option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role }}">{{ $role }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                </div>

                 <div id="teknisiFields" style="display:none;">
                    <div class="form-group">
                        <label for="saldo">Isi Saldo</label>
                        <input type="number" class="form-control" name="saldo" id="saldo" min="0">
                    </div>
                    <div class="form-group">
                        <label for="teknisi_id">Pilih Teknisi</label>
                        <select name="teknisi_id" id="teknisi_id" class="form-control">
                            <option value="">-- Pilih Teknisi --</option>
                            @foreach($teknisis as $teknisi)
                                <option value="{{ $teknisi->id }}">{{ $teknisi->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>


@endsection

@push('service')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const roleSelect = document.getElementById('role');
    const teknisiFields = document.getElementById('teknisiFields');

    roleSelect.addEventListener('change', function () {
        if (this.value === 'teknisi') {
            teknisiFields.style.display = 'block';
        } else {
            teknisiFields.style.display = 'none';
        }
    });
});
</script>
@endpush
