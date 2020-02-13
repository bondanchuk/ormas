@extends('base.login_base')
@section('content')
<div class="loginColumns text-center d-flex justify-content-center animated fadeInDown">
    <div class="card p-5 col-12 col-md-8 col-lg-6">
        <div>
            <img src="{{site_url('assets/img/bintan.png')}}" width="100"></h1>
        </div>
        <h3>Login - ORMAS</h3>
        <p>Kabupaten Bintan
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>
        <div class="text-warning">{{$pesan}}</div>
        {{form_open('auth/login',['class'=>'m-t', 'role'=>'form'])}}
        @php
        $username=[
        'name' => 'username',
        'type' => 'text',
        'class' => 'form-control',
        'placeholder' => 'Masukkan username..'
        ];
        $password=[
        'name' => 'password',
        'type' => 'password',
        'class' => 'form-control',
        'placeholder' => 'Masukkan password..'
        ];
        @endphp
        <div class="form-group">
            {{form_input($username)}}
        </div>
        <div class="form-group">
            {{form_input($password)}}
        </div>
        {{form_submit('submit', 'Masuk', 'class="btn btn-primary block full-width m-b"')}}
        {{form_close()}}
        <p class="m-t"> <strong>Copyright &copy; 2020</strong> <br>
        Diskominfo All Right Reserved </p>
    </div>
</div>
@endsection