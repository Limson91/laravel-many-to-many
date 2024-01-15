@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="fs-4 text-secondary my-4">
            {{__('Dashboard')}}
        </h3>

        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        {{__('User Dasboard')}}
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div role="alert "class="alert-alert-success">
                                {{session('status')}}
                            </div>
                        @endif

                        {{__('Accesso consentito!')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection