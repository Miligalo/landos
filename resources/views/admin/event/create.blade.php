@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавить товар</h1>
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
            <form action="{{route('admin.event.store')}}" method="POST" class="w-25" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label for>Название</label>
                <input type="text" class="form-control" name="title" placeholder="Название ивента">
                 @error('title')
                    <div class="text-damger">Это поле нужно заполнить</div>
                @enderror
              </div>
              <div class="form-group">
                <label for class="w-25">Описание ивента</label>
                  <textarea id="summernote" name="description">
                   {{old('description')}}
                  </textarea>
                  @error('description')
                  <div class="text-damger">Описание товара нужно заполнить</div>
              @enderror
              </div>
              <div class="form-group">
                <label for>Локация ивента</label>
                <input type="text" class="form-control" name="location" placeholder="Локация ивента">
                 @error('location ')
                    <div class="text-damger">Это поле нужно заполнить</div>
                @enderror
              </div>
                <div class="form-group">
                    <label for>Номер телефона</label>
                    <input type="number" class="form-control" name="phone" placeholder="Номер телефона">
                    @error('phone')
                    <div class="text-damger">Это поле нужно заполнить</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for>Координаты широты</label>
                    <input type="text" class="form-control" name="latitude" placeholder="Координаты широты">
                    @error('latitude')
                    <div class="text-damger">Это поле нужно заполнить</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for>Координаты длины</label>
                    <input type="text" class="form-control" name="longitude" placeholder="Координаты длины">
                    @error('longitude')
                    <div class="text-damger">Это поле нужно заполнить</div>
                    @enderror
                </div>
              <div class="form-group">
                <label for>Людей в ивенте</label>
                <input type="text" class="form-control" name="people_count" placeholder="Людей в ивенте">
                 @error('location ')
                    <div class="text-damger">Это поле нужно заполнить</div>
                @enderror
              </div>

{{--                <div class="header-search-select-item" style="margin: 20px 20px 60px 40px;">--}}
{{--                    <select data-placeholder="Выбери категорию" class="chosen-select" size="10" >--}}
{{--                        <option>Выбери город</option>--}}
{{--                        @foreach($cities as $city)--}}
{{--                            <option value="{{$city->id}}"--}}
{{--                                {{$city->id == old('city_id') ? 'selected' : ''}}>{{$city->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}
                <div class="form-group">
                    <label>Выберите город</label>
                    <select name="city_id" class="form-control">
                        @foreach ($cities as $city)
                            <option value="{{$city->id}}"
                                {{$city->id == old('city_id') ? 'selected' : ''}}>{{$city->name}}</option>
                        @endforeach
                    </select>
{{--                <div class="header-search-select-item" style="margin: 20px 20px 60px 40px;">--}}
{{--                    <select name="category_id" data-placeholder="Выбери категорию" class="chosen-select" >--}}
{{--                        <option>Выбери категорию</option>--}}
{{--                        @foreach($categories as $category)--}}
{{--                            <option value="{{$category->id}}">{{$category->title}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}

                    <div class="header-search-select-item" style="margin: 20px 20px 60px 40px;">
                        <select name="category_id" data-placeholder="Выбери категорию" class="chosen-select" >
                            <option>Выбери категорию</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
              <div class="form-group">
                <label for="exampleInputFile"></label>
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
    </section>
    <!-- /.content -->
  </div>

  @endsection
