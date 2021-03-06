@extends('index')

@section('container')
<!-- Contact Section Form-->
<div class="row justify-content-center" style="margin: 20vh 5vw">
    <div class="col-lg-8 col-xl-7">
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" action="/login">
            @csrf
            <h1>LOGIN</h1>

            <!-- Email address input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="email" type="email" placeholder="name@example.com" name="email" value="{{old('email')}}"
                    data-sb-validations="required,email" />
                <label for="email">Email address</label>
                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
            </div>

            <!-- Password input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="password" type="password" placeholder="password..." name="password" value="{{old('password')}}"
                    data-sb-validations="required" />
                <label for="password">Password</label>
                <div class="invalid-feedback" data-sb-feedback="password:required">Password is required.</div>
            </div>
            
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="" id="submitErrorMessage">
                @if ($errors->any())
                        @foreach ($errors->all() as $err )
                            <div class="text-center text-danger mb-3">{{ $err }}</div>
                        @endforeach
                @endif
            </div>

            <!-- Submit Button-->
            <button class="btn btn-primary btn-xl" id="loginButton" type="submit">Login</button>
        </form>
    </div>
</div>
</div>

@endsection