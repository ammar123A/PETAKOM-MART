@extends('layout.master')
@section('content')

<!DOCTYPE html>
<html>

<body>

<div class = 'container'>

@if(session('success'))
<div class="alert alert-primary" role="alert">
  {{session('success')}}
</div>
    @endif  

<div class="row">
    <div class="col-5 ">
        <h1>Manage Inventory</h1>
    </div>
    <div class="col-6">
                <a href="Add" class="btn btn-info btn-sm">Add Inventory</a>
                </div>

    <div class="card shadow mb-1">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Product Name</th>
                                <th>Company</th>
                                <th>Quantity</th>
                                <th>Price</th>
                               
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($data_inventory as $inventory)
                            <tr>
                                <td>{{$inventory->PCode}}</td>
                                <td>{{$inventory->PName}}</td>
                                <td>{{$inventory->Description}}</td>
                                <td>{{$inventory->qty}}</td>
                                <td>{{$inventory->price}}</td>
                                
                                <td><a href="datainventory/{{$inventory->id}}/edit">Edit</a></td>
                                <td><a href="datainventory/{{$inventory->id}}/delete" onclick = "return confirm('Are you sure?')">Delete</a></td>
                            </tr>
                            @endforeach

                            </tr>
                           
                            </tbody>
                    </table>
                </div>
            </div>

          </div>
        
</html>    


@endsection