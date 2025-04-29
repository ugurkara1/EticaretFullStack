@extends('layouts.admin.auth')
@section("title","Kayıt Ol")
@push('css')

@endpush

@section('body')
    <div class="px-4 py-5 auth-form-wrapper">
        <a href="#" class="mb-2 noble-ui-logo d-block">GDG<span>ETicaret</span></a>
        <h5 class="mb-4 text-muted font-weight-normal">Hoşgeldiniz. Hesabınıza giriş yapabilirsiniz.</h5>
        <form class="forms-sample">

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Parola</label>
            <input type="password" name="password"class="form-control" id="password"  placeholder="Parola">
        </div>
        <div class="form-group">
        <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" id="autoCheck" name="remember">
            Beni Hatırla
            </label>
        </div>
        <div class="mt-3">
            <a href="javascript:void(0)" class="mb-2 mr-2 text-white btn btn-primary mb-md-0">Giriş Yap</a>
            <button type="button" class="mb-2 btn btn-outline-primary btn-icon-text mb-md-0">
            <i class="mdi mdi-google" ></i>
            Google ile Kayıt ol
            </button>
        </div>
        <a href="{{route('register')}}" class="mt-3 d-block text-muted">Hesap Oluştur</a>
        </form>
    </div>
@endsection

@push('js')

@endpush
