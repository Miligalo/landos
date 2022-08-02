@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование категорию</h1>
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

          <div class="col-12">
            <form action="{{route('admin.category.update', $category->id)}}" method="POST" class="w-25">
            @csrf
            @method('PATCH')
              <div class="form-group">
                <label for>Название</label>
                <input type="text" class="form-control" name="title" placeholder="Название категории" value="{{$category->title}}">

              </div>
              <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
          </div>

      </div>

      </div>
    </section>
    <!-- /.content -->
  </div>
  @endsection
