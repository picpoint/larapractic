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
                    <h3 class="card-title">Создание тегов</h3>
                </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('tags.store') }}" method="post" role="form">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="cat">Введите название тега</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="cat" placeholder="Тег" name="title">
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