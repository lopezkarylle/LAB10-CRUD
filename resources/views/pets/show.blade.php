@extends('pets.layout')
@section('content')
    <div class="row">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pets.index') }}"> Back</a>
            </div>
        <div class="col-lg-12 margin-tb" style="right: 15px">
            <br>
            <div class="pull-left">
                <h1> Show Record</h1>
                <br>
            </div>
        </div>
    </div>
   
    <div class="card" style="width: 18rem; left: 40%;">
        <div class="card-header">
        <strong>Record of your pet</strong>
        </div>
       
        <ul class="list-group list-group-flush">
            
        <li class="list-group-item"><strong>Pet Name:</strong>
            {{ $pet->name_of_pet }}
        </li>
        <li class="list-group-item"><strong>Animal Type:</strong>
            {{ $pet->type_of_animal }}
        </li>
        <li class="list-group-item"><strong>Pet Owner:</strong>
            {{ $pet->owner_of_pet }}
        </li>
        <li class="list-group-item"><strong>Pet Owner Address:</strong>
            {{ $pet->address_of_owner }}
        </li>
        </ul>
        </div>
    </div>
    </div>
@endsection