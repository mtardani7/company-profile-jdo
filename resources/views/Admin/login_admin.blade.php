<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<nav class="navbar" data-bs-theme="dark" style="height: 60px; background-color: #1A4870"></nav>

<div class="teks" style="padding-top: 10px; text-align: center;">
    <h2 style=" font-weight: 700;">Login Admin</h2>
    <img src="{{ asset('assets/image/logo.png') }}" alt="Logo" style="width: 370px; padding-top: 20px;">
</div>

<div class="form" style="margin-left: 150px; margin-top: 30px;">
    <!-- Success Alert -->
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- Error Alert -->
    {{-- @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif --}}
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1"
                style="width: 945px; border: 1px black solid;" name="email" required value="{{old('email')}}">
        </div>
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="inputPassword5" class="form-label" style="font-weight: bold;">Password</label>
        <div style="position: relative; width: 945px;">
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"
                style="width: 100%; border: 1px black solid;" name="password" required>
            <span id="togglePassword"
                style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                👁️
            </span>
        </div>
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror


        <div style="display: flex; margin-left: 450px; margin-top: 30px; margin-bottom: 20px;">
            <button type="submit" class="btn btn"
                style="border-radius: 30px; background-color: #1A4870; color: white;">Login</button>
        </div>
    </form>
</div>
<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordField = document.getElementById('inputPassword5');
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);

        // Optionally change the eye icon (you can use a different icon or approach here)
        this.textContent = type === 'password' ? '👁️' : '🙈';
    });
</script>
