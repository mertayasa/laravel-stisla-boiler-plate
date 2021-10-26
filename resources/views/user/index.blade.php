@extends('layouts.app')
@section('content')
<section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h4>Data Pengguna</h4>
            @if (userRole() == 'admin')
              <a href="{{route('user.create')}}" class="btn btn-primary">Tambah Pengguna</a>
            @endif
          </div>
          <div class="col-12">
              @include('layouts.flash')
          </div>
          <div class="card-body">
              @include('user.datatable')
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
