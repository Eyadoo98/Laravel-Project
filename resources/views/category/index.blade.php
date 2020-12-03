@extends('layouts.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Categores</div>

                <div class="panel-body">

                    <table class="table table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($sel as $all)                                            
                          <tr>
                            <th scope="row">{{$all->name}}</th>
                            <td>    
                                <a href="/category/Edit/{{$all->id}}">
                                    <span class="glyphicon glyphicon-edit"></span>                                    
                                </a>
                            </td>
                            <td>
                                <a href="/category/Delete/{{$all->id}}">
                                    
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
