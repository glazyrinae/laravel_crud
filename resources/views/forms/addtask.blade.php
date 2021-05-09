@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/taskadd.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script>
    $(function () {
        $("#datestart").datepicker({
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date());
        $("#dateend").datepicker({
            autoclose: true,
            todayHighlight: false
        });
    });
    </script>
@endpush
@extends('layouts.default')
@section('title')
addtask
@stop
@section('content')
<br>
<h2>Add new task</h2>
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{ $error }}</div>
    @endforeach
@endif
<form class="row g-3" action='addtask' method="POST">
    @csrf
  <div class="col-12">
    <label for="inputAddress" class="form-label">Title</label>
    <input name='title' type="text" class="form-control" id="inputAddress"
    placeholder="Example title: I want to read a book">
  </div>
  <div class="col-md-12">
    <label for="inputState" class="form-label">Priority</label>
    <select id="inputState" name='priopity' class="form-select">
      <option selected>Low</option>
      <option>Medium</option>
      <option>Hight</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label ">Start</label>
    <div id="datestart" class="input-group date" data-date-format="mm-dd-yyyy">
        <input name="datestart" class="form-control" type="text" class="form-control" readonly />
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
    </div>
  </div>
  <div class="col-md-6">
      <label for="inputEmail4" class="form-label ">End</label>
      <div id="dateend" class="input-group date" data-date-format="mm-dd-yyyy">
          <input name="dateend" class="form-control" type="text" class="form-control" readonly />
          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      </div>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Description task</label>
    <textarea class="form-control" id="message" name="description"
    placeholder="Enter your massage for us here and you remind your task" rows="7"></textarea>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input name='hidden' class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Hide down the task from guest
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Add task</button>
  </div>
</form>
@stop
