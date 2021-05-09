@extends('layouts.default')
@section('title')
List of tasks
@stop
@section('content')
<br>
<h2>The list of tasks</h2>
<table class="table">
  <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Priority</th>
        <th scope="col">Date for start</th>
        <th scope="col">End</th>
        <th scope="col">Description</th>
      </tr>
  </thead>
  <tbody>
          @foreach($list as $item)
          <tr>
              <td scope="row">{{$item->id}}</td>
              <td scope="row">{{$item->title}}</td>
              <td scope="row">{{$item->priopity}}</td>
              <td scope="row">{{$item->datestart}}</td>
              <td scope="row">{{$item->dateend}}</td>
              <td scope="row">{{$item->description}}</td>
          </tr>
          @endforeach
  </tbody>
</table>
@stop
