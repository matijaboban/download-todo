@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="grid h-middle">
        <div class="grid__col grid__col--6 grid__col-offset--3 t-col-8 m-col-12">
            <div class="panel panel-default">
                <div class="section-header">
                    <div class="section-header__title">Login</div>
                </div>
                <div class="panel-body">

                    <form class="form h-block-ver-margin" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form__block form__block--fullwidth">
                            <label class="form__label">E-Mail Address</label>
                            <input type="email" class="form__field{{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                            <div class="form__notices">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                            @endif

                        </div>

                        <div class="form__block form__block--fullwidth">
                            <label class="form__label">Password</label>
                            <input type="password" class="form__field{{ $errors->has('password') ? ' has-error' : '' }}" name="password" >

                            @if ($errors->has('password'))
                            <div class="form__notices">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                            @endif

                        </div>

                        <div class="form__block form__block--fullwidth">
                            <label class="form__label"><input type="checkbox" name="remember"><span class="label_copy">Remember Me</span></label>
                        </div>

                        <div class="form-group">
                            <div class="grid">
                                <div class="grid__col grid__col--6 m-col-12">
                                    <button type="submit" class="btn btn-primary m-fullwidth">
                                        <i class="fa fa-btn fa-sign-in"></i>Login
                                    </button>
                                </div>
                                <div class="grid__col grid__col--6 m-col-12 grid__align-right">
                                    <a class="btn btn-link m-fullwidth" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
