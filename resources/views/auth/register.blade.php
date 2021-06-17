@include('header', array('title' => 'Kayıt Ol', 'page' => 'auth'))

<div class="bg-secondary container-fluid d-flex align-items-center justify-content-center m-0 p-0 min-vh-100 w-100">
    <div class="container d-lg-flex justify-content-center align-items-center">
        <div class="text-center p-2 col-lg-6 col-12 d-flex align-items-center justify-content-center">
            <div class="card col-xl-9 col-lg-10 col-md-10 col-12 p-5 shadow-lg">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-success">
                        {{ session('status') }}
                    </div>
                @endif
                <x-jet-validation-errors class="mb-4 text-danger text-start" />
                <form class="col-12" method="POST" action="{{ route('register') }}">
                    @csrf

                    <h5>Kayıt Olun</h5>
                    <br>
                    <div>
                        <label class="sr-only float-start">Ad*</label>
                        <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <label class="sr-only float-start">E-posta*</label>
                        <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                        <label class="sr-only float-start">Şifre*</label>
                        <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        <label class="sr-only float-start">Şifre Tekrar*</label>
                        <x-jet-input id="password_confirmation" class="form-control mt-3" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <div class="mt-3">
                            <x-jet-button class="btn btn-success w-100">
                                {{ __('Kayıt Ol') }}
                            </x-jet-button>
                        </div>
                        
                    </div>
                    <hr class="mx-5 my-3">
                    <div id="formFooter" class="mt-3">
                        <div class="mt-3"> <p class="underlineHover" href="signin.html">Kayıtlı Mısın ?</p></div>
                        <a type="button" class="btn btn-primary w-100 text-white" href="{{ route('login') }}">Giriş Yap</a>
                    </div>
                </form>
            </div>     
        </div>
    </div>
</div>

@include('footer', array('page' => 'flow'))
