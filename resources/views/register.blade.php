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
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">

            <h1>REGISTER</h1>

            <!-- Name input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                    data-sb-validations="required" />
                <label for="name">Name</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>

            <!-- Email address input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="email" type="email" placeholder="name@example.com"
                    data-sb-validations="required,email" />
                <label for="email">Email address</label>
                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
            </div>

            <!-- Email address input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="confirmEmail" type="email" placeholder="name@example.com"
                    data-sb-validations="required,email" />
                <label for="email">Confirm Email address</label>
                <div class="invalid-feedback" data-sb-feedback="confirmEmail:required">A confirm email is required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Confirm Email is not the same.</div>
            </div>

            <!-- Password input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="password" type="password" placeholder="password..."
                    data-sb-validations="required" />
                <label for="password">Password</label>
                <div class="invalid-feedback" data-sb-feedback="password:required">Password is required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Password is wrong.</div>
            </div>

            {{-- <!-- Phone number input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                    data-sb-validations="required" />
                <label for="phone">Phone number</label>
                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                </div>
            </div> --}}

            <!-- Message input-->
            {{-- <div class="form-floating mb-3">
                <textarea class="form-control" id="message" type="text"
                    placeholder="Enter your message here..." style="height: 10rem"
                    data-sb-validations="required"></textarea>
                <label for="message">Message</label>
                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                </div>
            </div> --}}

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
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>

            <!-- Submit Button-->
            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Register</button>
        </form>
    </div>
</div>
</div>

@endsection