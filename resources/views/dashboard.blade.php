@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-success pull-right">Create Post</a>
                    <h3>Welcome {{Auth::user()->name}}!</h3>
                    <h4>Your Blog Posts:</h4>
                @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Modify</th>
                            <th>Remove</th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
                                {!!Form::close()!!}</td>
                            </tr>
                        @endforeach
                    </table>
                    @else
                        <div class="alert alert-danger">
                        <hr>
                        <p>You have no posts to display.</p>
                        <hr>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
