
@include('Admin.includes.head')
@section('title')

    {{__('Admin.Auth.login.login')}}
@endsection

    <div class="auth-container d-flex mt-5">
        <div class="container mx-auto align-self-center">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            @if(session()->has('invalid'))
                                <div class="alert alert-danger">
                                    {{ session()->get('invalid') }}
                                </div>
                            @endif
                            <form method="POST"  action="{{route('login')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-3">

                                        <h2>
                                            {{__('Admin.Auth.login.login')}}
                                        </h2>
                                        <p>Enter your email and password to login</p>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" value="{{old('email')}}" class="form-control">
                                        </div>
                                        @error('email')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            <h4 class="alert-heading">Alert Danger</h4>
                                            <div class="alert-body">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        @error('password')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            <h4 class="alert-heading">Alert Danger</h4>
                                            <div class="alert-body">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-4">
                                            <button type="submit" class="btn btn-secondary w-100">SIGN IN</button>
                                        </div>
                                    </div>
                        </div>
                            </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>



