@extends('pets.layout')
 
 @section('content')
     <div class="row" >
         <div class="col-lg-12 margin-tb">
             <div class="pull-left">
                 <h2>List of all Pets</h2>
             </div>
             <div class="pull-right">
                 <a class="btn btn-success" href="{{ route('pets.create') }}"> Create new record</a>
             </div>
             <br>
         </div>
     
    
     @if ($message = Session::get('success'))
         <div class="alert alert-success">
             <p>{{ $message }}</p>
         </div>
     @endif
    
     <table class="table table-bordered">
         <tr>
             <th>ID</th>
             <th>Pet Name</th>
             <th>Animal Type</th>
             <th >Owner</th>
             <th width="250px">Owner's Address</th>
         </tr>
         @foreach ($pets as $pet)
         <tr>
             <td>{{ $pet->id }}</td>
             <td>{{ $pet->name_of_pet}}</td>
             <td>{{ $pet->type_of_animal}}</td>
             <td>{{ $pet->owner_of_pet}}</td>
             <td>{{ $pet->address_of_owner}}</td>
             <td>
                 <form action="{{ route('pets.destroy',$pet->id) }}" method="POST">
    
                     <a class="btn btn-info" href="{{ route('pets.show',$pet->id) }}">Show</a>
     
                     <a class="btn btn-primary" href="{{ route('pets.edit',$pet->id) }}">Edit</a>
    
                     @csrf
                     @method('DELETE')
                    <button type="submit" class="btn btn-danger" 
                    onclick="return confirm('Are you sure you want to delete the selected record?')">Delete</button>
                 </form>
             </td>
         </tr>
         @endforeach
     </table>
     </div>
 @endsection