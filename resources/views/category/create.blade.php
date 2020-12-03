@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Category</div>

                <div class="panel-body">

                  
                    <form action="/category/store" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label>Name Of Category</label>
                          <input type="text" class="form-control"  name="category" placeholder="Enter category">
                        </div>

                        @if(count($errors)>0)

                        <ul class="navbar-nav mr-auto">
                          @foreach ($errors->all() as $e)                                      
                              {{$e}}
                            <br>
                            </ul>
                          @endforeach                    
                        @endif
                        <br>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
