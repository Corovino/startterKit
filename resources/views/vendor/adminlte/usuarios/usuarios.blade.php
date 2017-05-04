@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

 <div class="row">
         <div class="col-xs-12">
           <div class="box">
             <div class="box-header">
               <h3 class="box-title">Usuarios</h3>

               <div class="box-tools">
                 <div class="input-group input-group-sm" style="width: 150px;">
                   <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                   <div class="input-group-btn">
                     <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                   </div>
                 </div>
               </div>
             </div>
             <!-- /.box-header -->
             <div class="box-body table-responsive no-padding">
               <table class="table table-hover">
                 <tbody><tr>
                   <th>ID</th>
                   <th>Usuarios</th>
                   <th>Rol</th>
                   <th>Correo</th>
                 </tr>
                 <tr>
                 @foreach ($data as $indexKey => $user)
                     
                     <td>{{ $indexKey }}</td>
                     <td>{{ $user->name }}</td>
                     <td><span class="label label-success">Administrador</span></td>
                     <td>{{ $user->email }}</td>
                 @endforeach
                   
                 </tr>
                 
               </tbody></table>
             </div>
             <!-- /.box-body -->
           </div>
           <!-- /.box -->
         </div>
       </div>
@endsection