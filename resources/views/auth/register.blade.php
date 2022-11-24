<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
   
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div id="second">
                    <x-guest-layout>
                        <x-auth-card>
                            <x-slot name="logo">
                                <a href="/">
                                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                                </a>
                            </x-slot>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />

                                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />

                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-input-label for="email" :value="__('Email')" />

                                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />

                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>


                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="mt-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-primary-button class="ml-4 btn btn-primary">
                                        {{ __('Register') }}
                                    </x-primary-button>
                                </div>
                            </form>

                        </x-auth-card>
                    </x-guest-layout>

                </div>
            </div>
        </div>
    </div>
</body>

</html>