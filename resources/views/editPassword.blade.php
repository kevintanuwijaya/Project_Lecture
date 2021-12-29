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
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="/edit/password" method="POST">
            @csrf
            <h1>CHANGE PASSWORD PAGE</h1>

            <!-- New Password input-->
            <input type="hidden" name="email" value="{{$user->email}}">
            <div class="form-floating mb-3">
                <input class="form-control" id="password" type="password" placeholder="password..." name="password" 
                    data-sb-validations="required" value="{{old('password')}}" />
                <label for="password">New Password</label>
                <div class="invalid-feedback" data-sb-feedback="password:required">Password is required.</div>
            </div>

            <!-- New Password input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="confirmed_password" type="password" placeholder="confirm password..." name="confirmed_password"
                    data-sb-validations="required" value="{{old('confirmed_password')}}"/>
                <label for="password">Confirm New Password</label>
                <div class="invalid-feedback" data-sb-feedback="confirmed_password:required">Password is required.</div>
                <div class="invalid-feedback" data-sb-feedback="confirmed_password:same:password">Confirm New Password is not the same.</div>
            </div>

            
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
            <button class="btn btn-primary btn-xl" id="saveButton" type="submit">Save</button>
        </form>
    </div>
</div>
</div>

@endsection