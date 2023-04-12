@extends('master')

@section('title')
    Contact Page
@endsection

@section('body')

   <section class="pt-5">
       <div class="container">
           <div class="row">
               <div class="col-md-8 mx-auto">
                   <p class="text-center text-danger">{{ Session::has('message') ? Session::get('message'):'' }}</p>
                   <form action="{{route('store')}}" method="post">
                       @csrf
                       <div class="card mt-5">
                           <h1 class="text-center text-success">CONTACT US</h1>
                           <div class="card-body">
                               <div class="mb-3">
                                   <label class="form-label"><i>Name</i></label>
                                   <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" required>
                               </div>

                               <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label"><i>Email</i></label>
                                   <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                               </div>

                               <div class="mb-3">
                                   <label class="form-label"><i>Phone Number</i></label>
                                   <input type="number" name="number" class="form-control" id="exampleInputNumber" aria-describedby="numberHelp" required>
                               </div>
                               <div class="mb-3">
                                   <label class="form-label"><i>Received By</i>Received By</label>
                                   <select name="user_id" id="" class="form-control">
                                       @foreach($user as $row)
                                           <option value="{{ $row->id }}">{{ $row->name }}</option>
                                       @endforeach
                                   </select>
                               </div>

                               <div class="mb-3">
                                   <label class="form-label"><i>Description</i></label>
                                   <textarea type="text" name="description" class="form-control" id="exampleInputDescription" aria-describedby="descriptionHelp" required></textarea>
                               </div>

                               <button type="submit" class="btn btn-danger">Submit</button>
                           </div>

                       </div>
                   </form>
               </div>

           </div>
           <div class="row">
               <div class="col-md-12">
                   <div class="container">
                       <div class="row">
                           <div class="card mt-5">
                               <h1 class="text-center text-success">Table Data Show</h1>
                           </div>
                           <div class="card-body">
                               <table class="table table-bordered table-hover table-striped w-100 mb-5">
                                   <thead>
                                   <tr>
                                       <th>SL NO</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Number</th>
                                       <th>Message</th>
                                       <th>Received By</th>
                                       <th>Action</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($show as $data)
                                       <tr class="text-center">
                                           <td>{{$loop->iteration}}</td>
                                           <td>{{ $data->name }}</td>
                                           <td>{{ $data->email }}</td>
                                           <td>{{ $data->number }}</td>
                                           <td>{{ $data->message }}</td>
                                           <td>{{$data->user->name}}</td>
                                           <td>
                                               <a href="{{ route('edit',['id'=> $data->id]) }}" class="btn btn-success btn-sm ">
                                                   <i class="fa-solid fa-pen-to-square"></i>
                                               </a>
                                               <a href="{{ route('delete',['id'=> $data->id]) }}" class="btn btn-danger btn-sm ">
                                                   <i class="fa-solid fa-trash"></i>
                                               </a>
                                           </td>
                                       </tr>
                                   @endforeach
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
{{--       <div style="background: repeat top left;--}}
{{--            width:800px;--}}
{{--            /*border:3px;*/--}}
{{--            height:300px;--}}
{{--            font-size:14px"></div>--}}
   </section>

@endsection
