@extends('layouts.main')

@section('container')
<table border="1" cellspacing=0 cellpadding=10>
        <thead>
            <a href="{{ url('create') }}" class="btn btn-primary">Create</a>
            <br>
               <tr>
                   <!-- th - table head
                   rowspan - menggabung baris
                   colspan - menggabung kolom
                   -->
                   
                   <th rowspan="2">No</th>
                   <th rowspan="2">Title</th>
                   <th rowspan="2">Slug</th>
                   <th rowspan="2">Author</th>
                   <th rowspan="2">Create Date</th>
                   <th rowspan="2">Action</th>

               </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($blog as $b)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $b->title }}</td>
                <td>{{ $b->slug }}</td>
                <td>{{ $b->author }}</td>
                <td>{{ $b->created_at }}</td>
                <td>
                    <a href="{{ url('edit/'.$b->id) }}" class="btn btn-success">Edit</a> 
                    <form onsubmit="return confirm('Hapus ?')" action="{{ url('delete/'.$b->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td> 
            </tr>
            @endforeach
            
        </tbody>
    </table>

@endsection