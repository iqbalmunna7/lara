
@extends('master')

@section('tittle')
    <title>full-name</title>
@endsection


@section('body')
    <Section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="{{ route('get-full-name') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">First name</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Last name</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">result</label>
                                <div class="col-md-8">
                                    <input type="text" name="result" class="form-control" value="{{ isset($fullName) ? $fullName: "" }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Get Full Name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </Section>

@endsection
