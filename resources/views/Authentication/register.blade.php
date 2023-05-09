<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Games4u</title>
    <link rel="icon" href="/images_site/frame_37612.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
            integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>


</head>

<body class="bg-black">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 mt-lg-5 pt-lg-5 ">
            <div class="card p-3">
                <div class="card-body">
                    <h1 class="text-center text-white">Sign Up</h1>
                    <h5 class="text-center text-white">Create your Games4u account</h5>
                    @if(Session::has('email_error'))
                        <script>
                            alert("Email already exists !");
                        </script>
                    @endif


                    <form action="/authentication/store_register" method="POST" class="mt-5 text-white" id="form">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="First_Name" class="form-label">First Name</label>
                                    <input type="text" class="form-control bg-dark text-white" id="First_Name"
                                           name="First_Name">
                                    <div id="firstname_div" class="red"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" class="form-control bg-dark text-white" id="Email" name="Email">
                                    <div id="email_div" class="red"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="Password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <input type="Password" class="form-control bg-dark text-white" id="Password"
                                               name="Password">
                                        <button class="btn btn-outline-secondary" type="button" id="btn_Password"><i
                                                class='bx bx-show'></i></button>
                                    </div>
                                    <div id="password_div" class="red"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="Last_Name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control bg-dark text-white" id="Last_Name"
                                           name="Last_Name">
                                    <div id="lastname_div" class="red"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="Phone" class="form-label">Phone No.</label>
                                    <input type="text" class="form-control bg-dark text-white" id="Phone" name="Phone">
                                    <div id="phone_div" class="red"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="Confirm_password" class="form-label">Confirm password</label>
                                    <div class="input-group">
                                        <input type="Password" class="form-control bg-dark text-white"
                                               id="Confirm_password" name="Confirm_password">
                                        <button class="btn btn-outline-secondary" type="button"
                                                id="btn_Confirm_password"><i class='bx bx-show'></i></button>
                                    </div>
                                    <div id="confirm_div" class="red"></div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="form-check col d-flex justify-content-center">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                           require>&nbsp;
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree with the terms of use
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col d-grid gap-2 col-4 mx-auto">
                                    <button class="btn btn-buy btn-lg" id="submit_s" type="submit">Sign up</button>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col text-center">Already have an Account ? <a href="/authentication/login"
                                                                                          class="more-link">Sign in</a>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#btn_Password').on('click', function () {
            const passwordInput = $('#Password');

            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text');
            } else {
                passwordInput.attr('type', 'password');
            }
        });
        $('#btn_Confirm_password').on('click', function () {
            const passwordInput = $('#Confirm_password');

            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text');
            } else {
                passwordInput.attr('type', 'password');
            }
        });

        const form = $('#form');
        const first_name = $('#First_Name');
        const email = $('#Email');
        const Password = $('#Password')
        const Last_Name = $('#Last_Name')
        const Phone = $('#Phone')
        const Confirm_password = $('#Confirm_password')
        const checkbox = $('#flexCheckDefault')
        const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/;

        Password.add(Confirm_password).on('input', function (event) {
            const passwordValue = Password.val();
            const confirmPasswordValue = Confirm_password.val();

            if (passwordValue === confirmPasswordValue) {
                Confirm_password.removeClass('is-invalid')
                Confirm_password.addClass('is-valid')
            } else {
                Confirm_password.removeClass('is-valid')
                Confirm_password.addClass('is-invalid')
            }

        });
        form.on('submit', (event) => {

            if (!passwordPattern.test(Password.val())) {
                event.preventDefault();
                Password.addClass('is-invalid')
                $('#password_div').empty().append('Your password must contain:<br>- At least 8 characters<br>- At least one lowercase letter<br>- At least one uppercase letter<br>- At least one number');
            }
            if (first_name.val() === '') {
                event.preventDefault();
                first_name.addClass('is-invalid')
                $('#firstname_div').empty().append('Field is required');
            }
            if (Password.val() !== Confirm_password.val()) {
                event.preventDefault();
                Confirm_password.addClass('is-invalid')
                Confirm_password.removeClass('is-valid')
                $('#confirm_div').empty().append('Your confirmation password must match the original password.');
            }
            if (email.val() === '') {
                event.preventDefault();
                email.addClass('is-invalid')
                $('#email_div').empty().append('Field is required');
            }
            if (Password.val() === '') {
                event.preventDefault();
                Password.addClass('is-invalid')
                $('#password_div').empty().append('Field is required');
            }
            if (Last_Name.val() === '') {
                event.preventDefault();
                Last_Name.addClass('is-invalid')
                $('#lastname_div').empty().append('Field is required');
            }
            if (!checkbox.prop('checked')) {
                event.preventDefault();
                checkbox.addClass('is-invalid');
                alert('You must agree to the terms and conditions')
            }
            if (Phone.val() === '') {
                event.preventDefault();
                Phone.addClass('is-invalid')
                $('#phone_div').empty().append('Field is required');
            }
            if (Confirm_password.val() === '') {
                event.preventDefault();
                Confirm_password.addClass('is-invalid')
                $('#confirm_div').empty().append('Field is required');
            }
        });

        checkbox.on('input', function () {
            checkbox.removeClass('is-invalid')
        })
        first_name.on('input', function () {
            first_name.removeClass('is-invalid')
            $('#firstname_div').empty().append('')
        })
        email.on('input', function () {
            email.removeClass('is-invalid')
            $('#email_div').empty().append('')
        })
        Password.on('input', function () {
            Password.removeClass('is-invalid')
            $('#password_div').empty().append('')
        })
        Last_Name.on('input', function () {
            Last_Name.removeClass('is-invalid')
            $('#lastname_div').empty().append('')
        })
        Phone.on('input', function () {
            Phone.removeClass('is-invalid')
            $('#phone_div').empty().append('')
        })
        Confirm_password.on('input', function () {
            Confirm_password.removeClass('is-invalid')
            $('#confirm_div').empty().append('')
        })

    });
</script>
</body>
