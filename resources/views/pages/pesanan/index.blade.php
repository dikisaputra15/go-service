@extends('layouts.appfront')

@section('title', 'My Order')

@push('style')

@endpush

@section('main')
<x-alert></x-alert>
<main class="main">

    <section id="about" class="about section">
      <div class="container">
        <div class="row">
            <h2 style="text-align: center;">My Order</h2>

            <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th>No</th>
                        <th>Tempat Service</th>
                        <th>Nama Pelanggan</th>
                        <th>Jenis Kerusakan</th>
                        <th>Biaya</th>
                        <th>Jasa Antar</th>
                        <th>Tarif Jemput</th>
                        <th>Total Biaya</th>
                        <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                   @php
                       $no = 1;
                   @endphp
                  @foreach ($data as $dat)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$dat->name}}</td>
                        <td>{{$dat->nama_pelanggan}}</td>
                        <td>{{$dat->jenis_kerusakan}}</td>
                        <td>{{$dat->biaya}}</td>
                        <td>{{$dat->nama_jasa}}</td>
                        <td>{{$dat->tarif_antar}}</td>
                        <td>{{$dat->total_biaya}}</td>
                        <td>{{$dat->status_order}}</td>
                    </tr>
                @endforeach
                  </tbody>
    </table>
      </div>
      </div>

    </section>

  </main>

@endsection

@push('scripts')
<script>
  $(function () {
    $("#example").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@endpush
