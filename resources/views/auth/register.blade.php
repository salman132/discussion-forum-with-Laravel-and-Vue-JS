@extends('layouts.app')

@section('banner-content')
    <div class="py-2" style="margin-left: 26%">
        <div class="col-md-12">
            <div class="row">
                <div class="container">

                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="text-dark">
                                            Register
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                       <div class="py-1">
                                           <form class="form-type-material" action="{{route('register')}}" method="post">
                                               @csrf
                                               <div class="form-group">
                                                   <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name" value="{{old('name')}}">
                                                   @error('name')
                                                   <span class="invalid-feedback text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                   @enderror
                                               </div>

                                               <div class="form-group">
                                                   <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{old('email')}}">
                                                   @error('email')
                                                   <span class="invalid-feedback text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                   @enderror

                                               </div>

                                               <div class="form-group">
                                                   <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                                   @error('password')
                                                   <span class="invalid-feedback text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                   @enderror
                                               </div>

                                               <div class="form-group">
                                                   <input type="password" class="form-control" placeholder="Password (confirm)" name="password_confirmation">
                                               </div>


                                               <button class="btn btn-bold btn-block btn-primary" type="submit">Register</button>
                                           </form>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>

    @endsection
