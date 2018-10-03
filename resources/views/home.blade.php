@extends('user.sideapp')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-7 col-md-offset-2 mt-5 mb-5">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Welcome To</h3></div>
                <div class="panel-heading"><h3>M. Keramat Ali Hall</h3></div>

                <div class="panel-body mt-5">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <b>You are logged in!</b><br>
                    <b>Now you can complain in the complain box</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
