@extends('master')

@section('title')
    Edit Page
@endsection

@section('body')

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="{{ route('update-contact',['id'=>$contact->id]) }}" method="post">
                        @csrf
                        <div class="card mt-5">
                            <h1 class="text-center text-success">Edit form</h1>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label"><i>Name</i></label>
                                    <input type="text" name="name" value="{{ $contact->name }}" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><i>Email</i></label>
                                    <input type="text" name="email" value="{{ $contact->email }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label"><i>Phone Number</i></label>
                                    <input type="number" value="{{ $contact->number }}" name="number" class="form-control" id="exampleInputNumber" aria-describedby="numberHelp">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label"><i>Description</i></label>
                                    <textarea type="text" name="description" class="form-control" id="exampleInputDescription" aria-describedby="descriptionHelp">{!! $contact->message !!}</textarea>
                                </div>

                                <button type="submit" class="btn btn-danger">Update Form</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection
