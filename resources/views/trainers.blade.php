@extends('layout')

@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Trainers</h1>

    </div>

    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trainers as $trainer)
                        <tr>
                            <th scope="row">{!! $trainer->trainer_id !!}</th>
                            <td>{!! $trainer->trainer_name !!}</td>
                            <td>{!! $trainer->trainer_email !!}</td>
                            <td>{!! $trainer->trainer_phone !!}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {!! $trainers->render() !!}
        </div>
    @endsection
