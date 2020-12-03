@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Category {{$edit->name}}</div>

                <div class="panel-body">

                  
                    <form action="/category/Update/{{$edit->id}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label>Name Of Category</label>
                          <input type="text" class="form-control"  name="category" value={{$edit->name}}>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
