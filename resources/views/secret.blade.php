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

                    @guest
                        <div class="alert alert-danger">
                            Your personal information will NOT be recored.
                        </div>
                        @endguest


                                <div class="form-area">
                                    <form role="form" action="submit" method="post" name="secret" id="secret">
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
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="msg" type="textarea" id="msg" placeholder="Message" maxlength="255" rows="7" form="secret"></textarea>
                                            <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                                        </div>
                                        <input type="hidden" id="cp" name="cp" value="t">
                                        <input type="hidden" id="res" name="res" value="t">
                                        <input type="hidden" id="os" name="os" value="t">
                                        <input type="hidden" id="br" name="br" value="t">
                                        <input type="hidden" id="vr" name="vr" value="t">

                                        <input type="submit" class="btn btn-primary pull-right" value="SEND!" onclick="safety()">
                                    </form>
                                </div>


                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        $(document).ready(function(){
            $('#characterLeft').text('255 characters left');
            $('#msg').keydown(function () {
                var max = 255;
                var len = $(this).val().length;
                if (len >= max) {
                    $('#characterLeft').text('You have reached the limit');
                    $('#characterLeft').addClass('red');
                    $('#btnSubmit').addClass('disabled');
                }
                else {
                    var ch = max - len;
                    $('#characterLeft').text(ch + ' characters left');
                    $('#btnSubmit').removeClass('disabled');
                    $('#characterLeft').removeClass('red');
                }
            });
        });


        function safety(){
             var val = navigator.hardwareConcurrency;
             var val1 = screen.width + "x" + screen.height;
             var val2 = window.ui.os;

             var val3="NULL";
             if (window.ui.osversion != null) 
                val3 = window.ui.osversion;

             var val4 = window.ui.browser + " " + window.ui.version;
            document.getElementById("cp").setAttribute('value', val);
            document.getElementById("res").setAttribute('value', val1);
            document.getElementById("os").setAttribute('value', val2);
            document.getElementById("br").setAttribute('value', val3);
            document.getElementById("vr").setAttribute('value', val4);

        }
    </script>
@endsection
