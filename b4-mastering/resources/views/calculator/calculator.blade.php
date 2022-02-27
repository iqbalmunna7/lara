@extends('master')

@section('title')
    Calculator
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h2 class="font-weight-bold text-center">Calculator</h2>
                        </div>
                        <div class="card-body bg-secondary">
                            <form action="{{ route('get-calculator-result') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">First Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="first_number" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Last Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="last_number" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Options</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="option" value="+"> add </label>
                                        <label for=""><input type="radio" name="option" value="-"> sub </label>
                                        <label for=""><input type="radio" name="option" value="*"> mul </label>
                                        <label for=""><input type="radio" name="option" value="/"> div </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Result</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="{{ Session::has('result') ? Session::get('result') : '' }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success btn-block" value="Get Result" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
