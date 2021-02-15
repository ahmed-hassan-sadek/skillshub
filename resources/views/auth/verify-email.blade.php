@extends('web.layout')

@section('title')
    Verify Email
@endsection

@section('main')

    <div class="alert alert-success">
        A Verification Email sent Successfully , please check your inbox
    </div>

    <div id="contact" class="section">

    <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- login form -->
                <div class="col-md-6 col-md-offset-3">
                    <div class="contact-form">

                        <form method="POST" actions="{{ url('email/verification-notification' ) }}">
                            @csrf
                            <button class="main-button icon-button pull-right" type="Submit"> Resend Email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection