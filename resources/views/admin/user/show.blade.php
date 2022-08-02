@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex align-items-center">
            <h1 class="m-0 mr-2">{{$user->name}}</h1>
            <a href="{{route('admin.user.edit',$user->id)}}" class="text-success"><i class="fas fa-pencil-alt"></i></a>
            <form action="{{route('admin.user.delete',$user->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="border-0 bg-white">
                <i class="fas fa-trash text-danger" role="button"></i></a>
              </button>
              
            </form> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">

                  <tbody>

                    <tr>
                      <td>ID</td>
                      <td>{{$user->id}}</td>
                      
                      
                    </tr>
                    <tr>
                      <td>Имя</td>
                      <td>{{$user->name}}</td>
                      
                      
                    </tr>
                    <tr>
                      <td>Почта</td>
                      <td>{{$user->email}}</td>
                      
                      
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>

      </div>
    </section>
    <!-- /.content -->
  </div>
  @endsection