@extends('index')
@section('title', 'Sign in')

@section('css')
    <style>
        .sign-in-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height:100%;
        }
        .content {
            
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px auto 10px auto;
            padding: 10px;
            height: auto 70vh;
        }
       
        .content > div {
            height: auto 100%;
            border: 1px solid grey;
            border-radius: 10px;
            padding: 10px;
            display: grid;
            place-items: center;
        }
        
        .form-input {
            padding: 20px;
            display: grid;
        }
        .form-input > input {
            padding: 10px;
            border-radius: 10px;
        }
        .form-submit {
            padding: 0 20px 50px 20px;
        }
        .form-submit > input[type="submit"] {
            border-radius: 5px;
        }
        .form-submit > input {
            padding: 10px;
            border-radius: 10px;
            background-color: grey;
            color: white;
        }
        .register-link {
            padding: 20px;
            font-size: 0.8em;
        }
        .error-message {
            color: red;
        }
        @media (min-width: 992px) {
            .content > div {
               width: 25vw;
            }
            .content > div > form {
                width: 20vw;
            }
        }
    </style>
@endsection

@section('content')

    <section class="sign-in-container">

        <div class="content">

            <div>
            <h1>Sign in</h1>

                <form action="/users/authenticate" method="POST">
                    @csrf
                    <div class="form-input">
                        <label for="username">Username:</label>
                        <input type="text" name="username">
                        @error('username')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-input">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password">
                        @error('password')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-submit">
                        <input type="submit" style="float: right">
                    </div>
                </form>
                <div>
                    <span class="register-link">
                        <a href="/register">
                            Don't have an account yet?
                        </a>
                    </span>
                </div>
                

            </div>
            
        </div>
    </section>
@endsection