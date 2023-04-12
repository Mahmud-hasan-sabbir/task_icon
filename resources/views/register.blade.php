@extends('master')
@section('title')
    Register form
@endsection

@section('body')
    <section class="py-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 mx-auto">
                    <div class="card bg-dark p-4 rounded-4">
                        <div class="card-header">
                            <h5 class="text-success text-center">Sign Up</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-success text-center">{{ Session::has('message') ? Session::get('message') : '' }}</p>
                            <form action="{{ route('sign-up') }}" method="post">
                                @csrf
                                <div class="row mt-2">
                                    <label for="" class="col-md-4 text-white">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4 text-white">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4 text-white">password</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success float-end" value="Register">
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
