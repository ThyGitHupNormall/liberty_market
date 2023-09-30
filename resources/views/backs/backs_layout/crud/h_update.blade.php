@extends('backs.backs_layout.crud.layout.layout')
@section('content')
<form>
    <label for="formGroupExampleInput">Please input data</label>
    <br>
    <br>
    <div class="form-group">
      <label for="formGroupExampleInput">label</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Label input">
    </div>
    <br>
    <div class="form-group">
      <label for="formGroupExampleInput2">Title</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Title Input">
    </div>
    <br>
    <br>
    <div class="form-group">
      <label for="formGroupExampleInput2">Description</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Input Descrition">
    </div>
    <br>
    <button type="button" class="btn btn-success">Update</button>
  </form>
@endsection
