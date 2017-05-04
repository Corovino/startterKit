@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

 <div class="row">

         <div class="col-xs-12">

          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalRol">Crear Rol</button>

           <div class="box">
             <div class="box-header">
               <h3 class="box-title">Roles</h3>

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
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Slug</th>
                    <th>Descripción</th>
                  </tr>
                </thead>
                 <tbody id="rolTable">
                 @foreach ($data as $indexKey => $rol)
                  <tr>
                     <td>{{ $indexKey }}</td>
                     <td>{{ $rol->name }}</td>
                     <td><span class="label label-success">{{ $rol->slug }}</span></td>
                     <td>{{ $rol->description }}</td>
                  </tr>   
                 @endforeach
                   
                 
                 
               </tbody></table>
             </div>
             <!-- /.box-body -->
           </div>
           <!-- /.box -->
         </div>
   </div>


@include('adminlte::layouts.modals.create_rol')     
@include('adminlte::layouts.partials.scripts_rol')      
@endsection












