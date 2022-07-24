<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

{{--    For mask number of telephone--}}

</head>
<body>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <h2>Welcome to MarketPlace 👋</h2>
                                <h3 class="text-3xl font-medium text-muted">Регистрация</h3>



                                <form action="{{ route("register_process") }}" class="space-y-5 mt-3" method="POST">

                                @csrf <!-- {{ csrf_field() }} -->

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="checkFlorUL" id="exampleRadios1" value="фл" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Физическое лицо
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="checkFlorUL" id="exampleRadios2" value="юл">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Юридическое лицо
                                        </label>
                                    </div>

                                    @error('checkFlorUL')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <input name="name" type="text" class="form-control mt-2" placeholder="Имя">

                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <input name="surname" type="text" class="form-control mt-2" placeholder="Фамиля">

                                    @error('surname')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    {{-- user_iin--}}
{{--                                    <div class="dropdown">--}}

{{--                                           {{ dd($country->id)}}--}}

{{--                                    </div>--}}

                                    <input name="user_iin" type="text" class="form-control mt-2"  placeholder="Ваш ИИН">
                                    @error('user_iin')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <input name="email" type="text" class="form-control mt-2" placeholder="User email">
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <input name="password" type="password" class="form-control mt-2" placeholder="Пароль" />

                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <input name="password_confirmation" type="password" class="form-control mt-2" placeholder="Подтверждение пароля" />


                                    <div>
                                        <a href="{{ route("login") }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Есть аккаунт?</a>

                                        <a href="{{ route("send_sms") }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Подтвердить номер</a>

                                    </div>

                                    <button type="submit" class="form-control mt-3 bg-light" >Зарегистрироваться</button>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://newgensoft.com/wp-content/uploads/2020/11/Webinar-1920x1300-1.jpg" class="img-fluid" alt="Sample image">

                            </div>

                        </div>
                    </div>
                </div>
            </div>

</body>
</html>
