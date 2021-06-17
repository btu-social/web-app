@include('header', array('title' => 'Şifremi Unuttum', 'page' => 'auth'))

    <div class="bg-secondary container-fluid d-flex align-items-center justify-content-center m-0 p-0 min-vh-100 w-100">
        <div class="container d-lg-flex justify-content-center align-items-center">
            <div class="text-center p-2 col-lg-6 col-12 d-flex align-items-center justify-content-center">
                <form method="POST" action="{{ route('password.email') }}" class="card col-xl-9 col-lg-10 col-md-10 col-12 p-5 shadow-lg">
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <x-jet-validation-errors class="mb-4 text-danger text-start" />

                    @csrf
                    <div>
                        <h5>Şifremi Unuttum</h5>
                        <br>
                        <div>
                            <label class="sr-only float-start">E-posta*</label>
                            <x-jet-input id="email" class="form-control" type="email" placeholder="Öğrenci Mailinizi Giriniz" name="email" :value="old('email')" required autofocus />
                            <div class="mt-3">
                                <x-jet-button class="btn btn-success w-100">
                                    {{ __('Gönder') }}
                                </x-jet-button>
                            </div>
                        </div>
                        <hr class="mx-5 my-3">
                    </div>
                </form>
            </div>
        </div>
    </div>

@include('footer', array('page' => 'flow'))
