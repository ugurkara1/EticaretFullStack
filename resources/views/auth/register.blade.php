@extends("layouts.admin.auth")
@section("title","Kayıt Ol")
@push('css')

@endpush

@section('body')
    <div class="px-4 py-5 auth-form-wrapper">
        <a href="#" class="mb-2 noble-ui-logo d-block">GDG<span>ETicaret</span></a>
        <h5 class="mb-4 text-muted font-weight-normal">Hesap Oluşturun</h5>
        <form class="forms-sample " action="{{route('register')}} " method="POST" id="registerForm">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <div class="form-group">
            <label for="name">Ad Soyad</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid
            @enderror"  id="name"  placeholder="Ad Soyad" value="{{old('name')}}">
            @error('name')
                <div class="invalid-feedback d-block">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid
            @enderror" id="email" placeholder="Email" value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback d-block">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Parola</label>
            <input type="password" name="password"class="form-control @error('password') is-invalid
            @enderror" id="password"  placeholder="Parola">
            @error('password')
            <div class="invalid-feedback d-block">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password_confirmation">Parola Tekrarı</label>
            <input type="password" class="form-control @error('password_confirmation') is-invalid
            @enderror" id="password_confirmation"  placeholder="Parola Tekrarı" name="password_confirmation">
            @error('password_confirmation')
            <div class="invalid-feedback d-block">{{$message}}</div>
            @enderror
        </div>
        <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" id="autoCheck" name="remember">
            Beni Hatırla
            </label>
        </div>
        <div class="mt-3">
            <a href="javascript::void(0)" id="btnRegister" class="mb-2 mr-2 text-white btn btn-primary mb-md-0">Kayıt Ol</a>
            <button type="button" class="mb-2 btn btn-outline-primary btn-icon-text mb-md-0">
            <i class="mdi mdi-google" ></i>
            Google ile Kayıt ol
            </button>
        </div>
        <a href="{{route('login')}}" class="mt-3 d-block text-muted">Giriş Yap</a>
        </form>
    </div>
@endsection

@push('js')
    <script src="{{asset('assets/assets/js/auth/register.js')}}"></script>
@endpush
