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
            <form action="{{ route('posts.store') }}" method="post" role="form">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Введите название поста</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Введите описание поста</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="description" name="description">
                    </div>
                    <div class="form-group">
                        <label for="content">Введите описание поста</label>
                        <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" placeholder="content" name="content">
                    </div>
                    <div class="form-group">
                        <label for="category_id">Введите описание поста</label>
                        <input type="text" class="form-control @error('category_id') is-invalid @enderror" id="category_id" placeholder="category_id" name="category_id">
                    </div>

                    <div class="form-group">
                        <label for="views">Введите описание поста</label>
                        <input type="text" class="form-control @error('views') is-invalid @enderror" id="views" placeholder="views" name="views">
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Введите описание поста</label>
                        <input type="text" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" placeholder="thumbnail" name="thumbnail">
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