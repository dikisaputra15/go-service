@extends('layouts.master')

@section('title','Form Tambah')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Form Update Status</h3>
    </div>
    <div class="card-body">
    <form action="{{ url('prosesstatus') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group" hidden>
                    <label>id</label>
                    <input type="text" class="form-control" name="id_track" value="{{$order->id}}">
                </div>
                <div class="form-group">
                    <label>status</label>
                    <select class="form-control" name="status">
                        <option value="teknisi menjemput">teknisi menjemput</option>
                        <option value="sedang dikerjakan">sedang dikerjakan</option>
                        <option value="selesai (belum dibayar)">selesai (belum dibayar)</option>
                        <option value="selesai (sudah dibayar)">selesai (sudah dibayar)</option>
                    </select>
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

@endpush
