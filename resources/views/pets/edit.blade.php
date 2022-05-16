@extends('pets.layout')
   
@section('content')
    <div class="row">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pets.index') }}"> Back</a>
        </div>
        <div class="col-lg-12 margin-tb">
        <br>
            <div class="pull-left">
                <h2>Update record</h2>
            </div>
            <br>
            
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('pets.update',$pet->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pet Name:</strong>
                    <input type="text" name="name_of_pet" class="form-control" placeholder="Input new Pet Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Animal Type:</strong>
                    <input type="text" name="type_of_animal" class="form-control" placeholder="Input new Animal Type">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pet Owner:</strong>
                    <input type="text" name="owner_of_pet" class="form-control" placeholder="Input new Pet Owner">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pet Owner Address:</strong>
                    <input type="text" name="address_of_owner" class="form-control" placeholder="Input new Pet Address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-15 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection