@extends('layout.frontend')

@section('title','Admin Login | ' . $sitesetting->title)
@section('meta_keywords','key')
@section('meta_description','descpt')

@section('body')

<div class="login">
    <div class="container">
        <div class="card shadow-lg">
            <form action="check_user" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-input @error('email') error @enderror">
                        <input type="text" name="username" id="username" value="{{ old('username') }}" required autocomplete="off">
                        <label for="username" class="label-name">
                            <span class="content-name">Email/Username <small>(Required)</small></span>
                        </label>
                    </div>
                    @error('email')
                        <div class="error-msg">{{ $message }}</div>
                    @enderror
                    <div class="spacer"></div>
                    <div class="form-input @error('password') error @enderror">
                        <input type="password" name="password" id="password" required autocomplete="off">
                        <label for="password" class="label-name">
                            <span class="content-name">Password <small>(Required)</small></span>
                        </label>
                    </div>
                    @error('password')
                        <div class="error-msg">{{ $message }}</div>
                    @enderror
                    <div class="spacer"></div>
                    <div class="option-item">
                        <button class="default-btn" type="submit">
                            <i class="flaticon-user"></i> Login <span></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')

    <style>
        .login {
            margin: auto;
            padding: 100px 50px;
        }
        .card {
            margin: auto;
            width: 40%;
            border-radius: 25px
        }
        .card-body .option-item {
            text-align: center;
            margin-top: 30px;
        }
        .spacer {
            height: 10px
        }
        .error, .error input {
            color: red;
        }
        .error label {
            border-color: red;
        } 
        .error-msg {
            color: red;
            font-size: small;

        }
    </style>
    
@endsection