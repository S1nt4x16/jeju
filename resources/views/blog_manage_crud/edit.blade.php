@extends('layouts.main')

@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog_Manage-Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>
                <img src="{{ asset('img/luffy.jpg') }}" height="100px"> Edit Post
            </h1>
            <hr>
            <a href="." class="btn btn-primary" style="float: right;">Kembali</a> <br><br>
    <form action="{{ url('update') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $id }}">
        <div class="mb-2">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $bm->title }}" required autofocus>
        </div>
        <div class="mb-2">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control"  value="{{ $bm->slug }}" required>
        </div>
        <div class="mb-2">
            <label for="auth"or class="form-label">Author</label>
            <input type="text" name="author" class="form-control"  value="{{ $bm->author }}">
        </div>
        <div class="form-group"> 
            <label for="body">Body/Isi</label>
            <textarea class="form-control" name="body" id="TextArea" rows="10">{{ $bm->body }}</textarea>
        </div>
        <br>
        <div>
             <input type="reset" class="btn btn-md btn-warning">
             <button type="submit" name="simpan" class="btn btn-md btn-primary">Simpan</button>
        </div>
    </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>

@endsection