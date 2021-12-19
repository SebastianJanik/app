@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('All teams') }}</div>

                    <div class="card-body">
                        @foreach($teams as $team)
                            <div class="row">
                                <div class="card" id="all_teams">
                                    {{$loop->iteration}}.
                                </div>
                                <div class="card" id="all_teams_names">
                                    {{__($team->name)}}
                                </div>
                                @role('admin')
                                <div class="card-button" id="all_teams_button">
                                    <a href="{{route('teams.edit', $team->id)}}">
                                        <button>{{__('Edit team')}}</button>
                                    </a>
                                </div>
                                @endrole
                                <div class="card-button">
                                    <a href="{{route('teams.show', $team->id)}}">
                                        <button>{{__('Show team')}}</button>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

