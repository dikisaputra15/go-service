@extends('layouts.master')

@section('title','Dashboard')

@section('conten')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard Teknisi</h1>
            </div>

            <div class="row">

                 <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                    <div class="inner">
                         <a href="{{url('pesananmasuk')}}"><h3>Pesanan Masuk</h3></a>

                        <p><br></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>

                    </div>
                </div>

            </div>

        </section>
    </div>
@endsection

@push('service')

@endpush
