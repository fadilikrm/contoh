@extends('layouts.template')
@section('content2')
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form action="{{ route('simpanregister')}}" method="POST" class="user">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="name" placeholder="Masukkan Nama Anda">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="email" placeholder="Masukkan Email Anda">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="password" placeholder="Masukkan Password Anda">
                            </div>
                          
                        
                            <button class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="save">
                                Register
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection