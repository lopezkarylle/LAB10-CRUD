@extends('pets.layout')
 
@section('content')
<div class="row">
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('pets.index') }}"> Back</a>
    </div>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <h2>Create New</h2>
        </div>
        <br>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('pets.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pet Name:</strong>
                <input type="text" name="name_of_pet" class="form-control" placeholder="Input Pet name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Animal Type:</strong>
                <input type="text" name="type_of_animal" class="form-control" placeholder="Input Animal type">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pet Owner:</strong>
                <input type="text" name="owner_of_pet" class="form-control" placeholder="Input Pet owner">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pet Address:</strong>
                <input type="text" name="address_of_owner" class="form-control" placeholder="Input Pet address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection