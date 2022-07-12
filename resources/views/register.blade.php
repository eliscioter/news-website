@extends('index')
@section('title', 'Register')

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
            height: 100vh;
        }
       
        .content > div {
            height: 100%;
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
            padding: 5px;
        }
        .form-submit {
            padding: 20px;
            
        }
        .form-submit > input {
            padding: 8px;
            border-radius: 10px;
            background-color: grey;
            color: white;
        }
        .register-link {
            padding: 20px;
            font-size: 0.8em;
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
            <h1>Registration</h1>

                <form action="">
                    <div class="form-input">
                        <label for="email">Email:</label>
                        <input type="email">
                    </div>
                    <div class="form-input">
                        <label for="username">Username:</label>
                        <input type="text">
                    </div>
                    <div class="form-input">
                        <label for="password">Password:</label>
                        <input type="password" >
                    </div>
                    <div class="form-input">
                        <label for="confirm-pass">Confirm password:</label>
                        <input type="password" >
                    </div>
                    <div class="form-submit">
                        <input type="submit" style="float: right">
                    </div>
                </form>
                <div>
                    <span class="register-link">
                        <a href="/sign_in">
                            I already have an account!
                        </a>
                    </span>
                </div>
                

            </div>
            
        </div>
    </section>
@endsection