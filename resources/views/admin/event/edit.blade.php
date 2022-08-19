@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование товара</h1>
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
                <form action="{{route('admin.event.update', $event->id)}}" method="POST" class="w-25">
                    @csrf
                    <div class="form-group">
                        <label for>Название</label>
                        <input type="text" class="form-control" name="title" placeholder="Название ивента">

                    </div>
                    <div class="form-group">
                        <label for class="w-25">Описание ивента</label>
                        <textarea id="summernote" name="description">
                   {{old('description')}}
                  </textarea>

                    </div>
                    <div class="form-group">
                        <label for>Локация ивента</label>
                        <input type="text" class="form-control" name="location" placeholder="Локация ивента">

                    </div>
                    <div class="form-group">
                        <label for>Номер телефона</label>
                        <input type="number" class="form-control" name="phone" placeholder="Номер телефона">

                    </div>
                    <div class="form-group">
                        <label for>Координаты широты</label>
                        <input type="text" class="form-control" name="latitude" placeholder="Координаты широты">

                    </div>
                    <div class="form-group">
                        <label for>Координаты длины</label>
                        <input type="text" class="form-control" name="longitude" placeholder="Координаты длины">

                    </div>
                    <div class="form-group">
                        <label for>Людей в ивенте</label>
                        <input type="text" class="form-control" name="people_count" placeholder="Людей в ивенте">

                    </div>
                    <div class="form-group">
                        <label>Выберите категорию</label>
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}"
                                    {{$category->id == old('category_id') ? 'selected' : ''}}>{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for>Название города</label>
                        <input type="text" class="form-control" name="city_id" placeholder="Название города">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Добавить превью евента</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label">Выберите изображение</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузка</span>
                            </div>
                        </div>
                    </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Добавить">
            </form>
      </div>

      </div>

      </div>
    </section>
    <!-- /.content -->
  </div>
  @endsection
