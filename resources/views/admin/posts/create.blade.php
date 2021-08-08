@extends('admin.layouts.layout')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Главная страница админки</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
            <div class="card card-primary m-5">
                <div class="card-header">
                    <h3 class="card-title">Создание постов</h3>
                </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('posts.store') }}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Введите название поста</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Цитата</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" placeholder="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">Контент</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" placeholder="Контент" name="content" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Категория поста</label>
                        <select class="form-control" class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                            <option>Выберите категорию</option>
                            @foreach($categories as $key => $value)
                                <option value="{{$key}}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="tags">Теги</label>
                        <select class="select2" multiple="multiple" name="tags[]" data-placeholder="Выбор тегов" style="width: 100%;" id="tags">
                            @foreach($tags as $key => $value)
                                <option value="{{$key}}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="thumbnail">Загрузить файл</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                                <label class="custom-file-label" for="thumbnail">Выбор файла</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузить</span>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </div>
@endsection