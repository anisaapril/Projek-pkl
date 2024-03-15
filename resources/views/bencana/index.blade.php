@extends('adminlte::page')
@section('title', 'Data Bencana')
@section('content')
<div class="container-fluid">
   <nav class="page-breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">
            Data Bencana</li>
      </ol>
   </nav>
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
               <span id="card-title">
                  <h2>{{__('Data Bencana')}}</h2>
               </span>

               <div class="float-right">
                  <a href="{{ route('bencana.create') }}" class="btn btn-primary btn-sm float-right" 
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
                        <th>Nama Bencana</th>
                        <th>Jenis Bencana</th>
                         <th>Kode Jenis Bencana</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($bencana as $ben)
                     <tr> 
                        <td>{{++$i}}</td>
                        <td>{{$ben->kode_bencana}}</td>
                        <td>{{$ben->nama_bencana}}</td>
                        <td>{{$ben->jenis_bencana}}</td>
                        <td>{{$ben->kode_jenis_bencana}}</td>
                        
                        <td>
                           <form action="{{ route('bencana.destroy', $ben->kode_bencana) }}"
                           method="POST">
                           
                           <a class="btn btn-sm btn-primary"
                           href="{{ route('bencana.show', $ben->kode_bencana)}}">
                              <i class="fa fa-fw fa-eye"></i>Lihat</a>

                           <a class="btn btn-sm btn-success"
                           href="{{route('bencana.edit', $ben->kode_bencana) }}">
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
      {!! $bencana->links('pagination::bootstrap-4') !!}
   </div>
</div>
</div>

@endsection
