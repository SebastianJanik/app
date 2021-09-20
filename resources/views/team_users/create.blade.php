@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Apply to the team') }}</div>

                    <div class="card-body">
                        <team-users-create></team-users-create>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
