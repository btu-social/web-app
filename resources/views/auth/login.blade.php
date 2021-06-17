@include('header', array('title' => 'Giriş Yap', 'page' => 'auth'))

<div class="bg-secondary container-fluid d-flex align-items-center  m-0 p-0 min-vh-100 w-100">
    <div class="container d-lg-flex justify-content-center align-items-center">
        <div class="col-lg-6 col-12 d-flex  align-items-center justify-content-center">
            <div class="text-center">
                <img src="assets/img/logo.jpg" class="rounded-2" alt="BTU Social Logo" height="70">
                <h4 class="py-2 text-white" style="text-indent: 10px;">BTÜ Öğrencilerinin Buluşma Noktası</h4>
            </div>
        </div>
        <div class="text-center p-2 col-lg-6 col-12 d-flex align-items-center justify-content-center ">
            <div class="card col-xl-9 col-lg-10 col-md-10 col-12 p-5 shadow-lg">
                <x-jet-validation-errors class="mb-4 text-danger text-start" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h5>Devam etmek için giriş yapın.</h5>
                    <br>
                    <div>
                        <label class="sr-only float-start">E-posta*</label>
                        <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                        <label class="sr-only float-start">Şifre*</label>
                        <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        <div class="form-check mt-3 text-start">
                            <x-jet-checkbox id="remember_me" name="remember" class="form-check-input"/>
                            <label class="form-check-label" for="flexCheckDefault">
                                Beni hatırla
                            </label>
                        </div>
                        <div class="mt-3">
                            <x-jet-button class="btn btn-primary w-100">
                                {{ __('Giriş Yap') }}
                            </x-jet-button>
                        </div>
                        <div class="mt-3"> <a class="underlineHover" href="{{ route('password.request') }}">Şifreni mi unuttun ?</a></div>
                    </div>
                    <hr class="mx-5 my-3">
                    <div id="formFooter" class="mt-3">
                        <a type="button" class="btn btn-secondary w-100 text-white" href="{{ route('register') }}">Yeni Kayıt Oluştur</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('footer', array('page' => 'flow'))
