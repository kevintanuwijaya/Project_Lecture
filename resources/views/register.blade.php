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
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="/register" method="POST">
            @csrf
            <h1>REGISTER</h1>

            <!-- Name input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="name" type="text" placeholder="Enter your name..." name="name" value="{{old('name')}}"
                    data-sb-validations="required" />
                <label for="name">Name</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>

            <!-- Email address input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="email" type="email" placeholder="name@example.com" name="email" value="{{old('email')}}"
                    data-sb-validations="required,email" />
                <label for="email">Email address</label>
                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
            </div>

            <!-- Email address input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="confirmed_email" type="email" placeholder="name@example.com" name="confirmed_email" value="{{old('confirmed_email')}}"
                    data-sb-validations="required,email" />
                <label for="email">Confirm Email address</label>
                <div class="invalid-feedback" data-sb-feedback="confirmed_email:required">A confirm email is required.</div>
                <div class="invalid-feedback" data-sb-feedback="confirmed_email:email">Email is not valid.</div>
                <div class="invalid-feedback" data-sb-feedback="confirmed_email:same:email">Confirm Email does not the same</div>
            </div>

            <!-- Password input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="password" type="password" placeholder="password..." name="password" value="{{old('password')}}"
                    data-sb-validations="required" />
                <label for="password">Password</label>
                <div class="invalid-feedback" data-sb-feedback="password:required">Password is required.</div>
            </div>

            <!-- Password input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="confirmed_password" type="password" placeholder="confirm password..." name="confirmed_password" value="{{old('confirmed_password')}}"
                    data-sb-validations="required" />
                <label for="password">Confirm Password</label>
                <div class="invalid-feedback" data-sb-feedback="confirmed_password:required">Password is required.</div>
                <div class="invalid-feedback" data-sb-feedback="confirmed_password:same:password">Confirm Password is not the same.</div>
            </div>


            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <a
                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
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
            <button class="btn btn-primary btn-xl" id="registerButton" type="submit">Register</button>
        </form>
    </div>
</div>
</div>

@endsection