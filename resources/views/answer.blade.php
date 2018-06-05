@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="form-area">
                            <form role="form" action="submit" method="get" name="secret" id="secret">
                                @csrf
                                <br style="clear:both">

                                <div class="form-group">
                                    <select class="form-control" id="location" name="location" placeholder="Location" required>
                                        <option value="-1">Select a Location</option>

                                        @foreach ($locations as $l)
                                            <option value={{ $l->id }}>{{ $l->name }}</option>
                                        @endforeach

                                    </select>

                                </div>

                                <input type="submit" class="btn btn-primary pull-right" value="SEND!">
                            </form>
                        </div>

                        <form action="uploadtable" method="post" enctype="multipart/form-data">
                            Select file to upload:
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                            <input type="submit" value="Upload File" name="submit">
                        </form>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
