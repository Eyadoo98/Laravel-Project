@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Post</div>

                <div class="panel-body">

                  @if(count($errors)>0)

                  <ul class="navbar-nav mr-auto">
                    @foreach ($errors->all() as $e)
                    
                      
                      {{$e}}
                      <br>
                      </ul>
                    @endforeach
                    
                  @endif
                  
                    <form action="/post/store" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control"  name="title" placeholder="Enter Title">
                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control" name="content" rows="6" cols="8"></textarea>
                          </div>  
                        
                          <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control-file" name="image">
                          </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
