@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Books List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Issue ID</th>
          <th scope="col">Issue Date</th>
          <th scope="col">Return Date</th>
          <th scope="col">Book Name</th>
          <th scope="col">Issued Member Id</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach($books as $book)
          <td>{{$book->issueId}}</td>
          <td>{{$book->issueDate}}</td>
          <td>{{$book->retDate}}</td>
          <td>{{$book->bookName}}</td>
          <td>{{$book->memId}}</td>
          <td>
            <span><a href=""><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></button></span></a>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></button></span>
          </td>
        </tr>
        @endforeach
  </div>
</div>


@endsection
