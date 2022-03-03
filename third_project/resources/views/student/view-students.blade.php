@extends ('master')

@section('title')
    students info
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
               @foreach($students as $student)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $student['image'] }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5>Student Name :{{ $student['name'] }}</h5>
                            <h5>Student Phone :{{ $student['phone'] }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>

@endsection
