@extends('layout')


@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Search Companies</h1>

    </div>
    <div class="container">

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Web</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <th scope="row">{!! $company->company_id !!}</th>
                            <td>{!! $company->company_name !!}</td>
                            <td>{!! $company->company_web !!}</td>
                            <td>{!! $company->company_phone !!}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {!! $companies->render() !!}
        </div>

    @endsection
