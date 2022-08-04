@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Настройка</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('main.listing')}}">Home</a></li>

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
          <div class="col-1 mb-3">
            <a href="{{route('admin.setting.create')}}" class="btn btn-block btn-primary">Создать</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Название</th>
                      <th colspan="3">Действие</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($settings as $setting)


                    <tr>
                      <td>{{$setting->id}}</td>
                      <td>{{$setting->title}}</td>
                      <td><a href="{{route('admin.setting.show',$setting->id)}}"><i class="far fa-eye"></i></a></td>
                      <td><a href="{{route('admin.setting.edit',$setting->id)}}"><i class="fas fa-pencil-alt"></i></a></td>
                      <td>
                        <form action="{{route('admin.setting.delete',$setting->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="border-0 bg-white">
                            <i class="fas fa-trash text-danger" role="button"></i></a>
                          </button>

                        </form>
                      </td>

                    </tr>
                    @endforeach
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
