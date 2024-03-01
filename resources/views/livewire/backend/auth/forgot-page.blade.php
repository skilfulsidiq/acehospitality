{{-- <main>
    <title>Landmark - Forgot password</title>
    <!-- Section -->
    <section class="vh-lg-100 mt-4 mt-lg-0 bg-soft d-flex align-items-center auth_bg" style="background-image:url({{asset('logo/main.jpg')}})" >
        <div class="container">
            <div class="row justify-content-center form-bg-image">

                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="signin-inner my-3 my-lg-0 bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                        <h1 class="h3">Forgot your password?</h1>
                        <p class="mb-4">Don't fret! Just type in your email and we will send you a code to reset your password!</p>
                        <form wire:submit.prevent="recoverPassword" method="POST">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Your Email</label>
                                <div class="input-group">
                                    <input wire:model='email' type="email" class="form-control" id="email" autofocus>
                                </div>
                                @error('email') <div class="error">{{ $message }}</div> @enderror
                            </div>
                            <!-- End of Form -->
                            @if($mailSentAlert)
                                <div class="alert alert-success" role="alert">
                                    An email containing the password reset link has been sent.
                                </div>
                            @endif
                            @if($showDemoNotification)
                                <div class="alert alert-danger" role="alert">
                                    You cannot do that in the demo version.
                                </div>
                            @endif
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Recover password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main> --}}
<div>
     <div class="text-center">
        <h5 class="mb-0">Forgot  your password</h5>
        <p class="text-muted mt-2">Don't fret! Just type in your email and we will send you a code to reset your password!</p>
    </div>

    <!-- Section -->
    {{-- <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center auth_bg" style="background-image:url({{asset('logo/main.jpg')}})">
        <div class="container"> --}}
            {{-- <p class="text-center"><a href="{{ route('dashboard') }}" class="text-gray-700"><i
                class="fas fa-angle-left me-2"></i> Back to homepage</a></p> --}}
            <div class="row justify-content-center" >
                <div class="container">

                         <form wire:submit.prevent="recoverPassword" method="POST">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Your Email</label>
                                <div class="input-group">
                                    <input wire:model.lazy='email' type="email" class="form-control" id="email" autofocus>
                                </div>
                                @error('email') <div class="error">{{ $message }}</div> @enderror
                            </div>
                            <!-- End of Form -->
                            {{-- @if($mailSentAlert)
                                <div class="alert alert-success" role="alert">
                                    An email containing the password reset link has been sent.
                                </div>
                            @endif --}}
                            {{-- @if($showDemoNotification)
                                <div class="alert alert-danger" role="alert">
                                    You cannot do that in the demo version.
                                </div>
                            @endif --}}
                            <div class="d-flex justify-content-center ">
                                <div>
                                      <x-general.button class="btn btn-primary auth-btn"> Recover password</x-general.button>
                                </div>

                                {{-- <button type="submit" class="btn btn-gray-800">Recover password</button> --}}
                                <div class="mt-5 text-center">
                                    <a href="{{ route('login') }}">Back to login</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            {{-- </div>
    </section> --}}
</div>
