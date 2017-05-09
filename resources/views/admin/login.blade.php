@extends('layout.admin')

@section('my-css')
@endsection

@section('content')

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">h</h1>

            </div>
            <h3>欢迎使用 hAdmin</h3>

            <form class="m-t" role="form" method="post" action="{{ URL('/admin/Logins') }}">
                {{--<input name="_token" type="hidden" value="{{csrf_token()}}">--}}
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="用户名" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="密码" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>

                {{--<p class="text-muted text-center"> <a href="login.html#"><small>忘记密码了？</small></a> | <a href="register.html">注册一个新账号</a>--}}
                {{--</p>--}}

            </form>
        </div>
    </div>

    @if (isset($errmsg))
        <div class="alert alert-success">
            {{ $errmsg }}
        </div>
    @endif
    @if ((Session('errmsg')))
        <div class="alert alert-success">
            {{ Session('errmsg') }}
        </div>
    @endif
@endsection


@section('my-js')
@endsection
