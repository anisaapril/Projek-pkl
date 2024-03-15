@extends('adminlte::page')
@section('title', 'Data Propinsi')
@section('content')
<div class="container-fluid">
   <nav class="page-breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">
            Data Propinsi</li>
      </ol>
   </nav>
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
               <span id="card-title">
                  <h2>{{__('Data Propinsi')}}</h2>
               </span>

               <div class="float-right">
                  <a href="{{ route('propinsi.create') }}" class="btn btn-primary btn-sm float-right" 
                  data-placement="left"
                  title="Tambah rekaman baru">
                  <i class="fa fa-fw fa-plus"></i>
                  {{__('Tambah')}}</a>
               </div>
            </div>
         </div>

         @if ($message = Session::get('success'))
         <div class="alert alert-success">
            <p>{{$$message}}</p>
         </div>
         @endif

         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-striped table-hover">
                  <thead class="thead">
                     <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Propinsi</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($propinsi as $prop)
                     <tr> 
                        <td>{{++$i}}</td>
                        <td>{{$prop->kode_propinsi}}</td>
                        <td>{{$prop->nama_propinsi}}</td>
                        <td>
                           <form action="{{ route('propinsi.destroy', $prop->kode_propinsi) }}"
                           method="POST">
                           
                           <a class="btn btn-sm btn-primary"
                           href="{{ route('propinsi.show', $prop->kode_propinsi)}}">
                              <i class="fa fa-fw fa-eye"></i>Lihat</a>

                           <a class="btn btn-sm btn-success"
                           href="{{route('propinsi.edit', $prop->kode_propinsi) }}">
                              <i class="fa fa-fw fa-edit"></i>Edit</a>
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-sm btn-danger delete-button">
                              <i class="fa fa-fw fa-trash"></i> DELETE</button>
                           </form>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      {!! $propinsi->links('pagination::bootstrap-4') !!}
   </div>
</div>
</div>

@endsection
