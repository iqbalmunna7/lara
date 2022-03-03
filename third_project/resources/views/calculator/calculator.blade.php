
@extends('master')

@section('tittle')
    <title>calculator</title>
@endsection

@section('body')
    <Section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="font-weight-bold text-center">Calculator</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('get-calculator-result') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">First number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="first_number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Last number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="last_number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Options</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="option" value="+" class="">add</label>
                                        <label for=""><input type="radio" name="option" value="-" class="">sub</label>
                                        <label for=""><input type="radio" name="option" value="*" class="">mul</label>
                                        <label for=""><input type="radio" name="option" value="/" class="">div</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">result</label>
                                    <div class="col-md-8">
                                        <input type="text" name="result" class="form-control" value="{{ Session::has("result") ? Session::get('result') : "" }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-outline-success btn-block" value="Get result">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Section>
@endsection


