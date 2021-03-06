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
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="/edit" method="POST">
            @csrf
            <h1>EDIT PROFILE PAGE</h1>

            <input type="hidden" name="email" value="{{$user->email}}">
            <!-- Name input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="name" name="name"  type="text" placeholder="Enter your name..."
                    data-sb-validations="required" value="@if (old('name')){{old('name')}}@else{{$user->name}}@endif"/>
                <label for="name">Name</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>

            <!-- Add Phone number input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890"
                    data-sb-validations="required" value="@if (old('phone')){{old('phone')}}@else{{$user->phone}}@endif"/>
                <label for="phone">Change Phone number</label>
                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                </div>
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
            <a class="btn btn-link" href="{{url('/edit/password')}}">Change Password</a>
        </form>
    </div>
</div>
</div>

@endsection