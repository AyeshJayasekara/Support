@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body" id="questions">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Showing questions..
                        <br>

                        <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Question</th>
                            <th scope="col">Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($questions as $q)
                        <tr>
                            <th scope="row">{{ $q->id }}</th>
                            <th scope="row">{{ $q->subject }}</th>
                            <td>{{ $q->question }}</td>
                            <td><a href="{{action('HomeController@delete', ['id' => $q->id])}}">Delete</a></td>

                        </tr>
                        @endforeach
                        </tbody>

                        </table>
                         {{ $questions->render() }}
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    setTimeout(function(){
        window.location.reload(1);
    }, 5000);
</script>
@endsection
