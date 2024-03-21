<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>page register | login</title>
    <link rel="stylesheet" href="{{ asset('assets')}}/css/styleform.css " />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="form-structor">
      <div class="signup">
        <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
        <div class="form-holder">
            <form method="POST" action="{{ route('register') }}" id="myForm">
                @csrf
           <input type="text" class="input" placeholder="Username" value="{{ old('usesrname') }}" name="username" />
          <input type="text" class="input" placeholder="Nama Lengkap" value="{{ old('name') }}" name="namaLengkap"/>
          <input type="text" class="input" placeholder="Masukkan Alamat"  value="{{ old('alamat') }}" name="alamat" />
          <input type="email" class="input" placeholder="Email" value="{{ old('email') }}"name="email"/>
          <input type="password" class="input" placeholder="Password" required autocomplete="new-password" name="password"/>
        </div>
        <button class="submit-btn"  type="submit">Sign up</button>
        </form>
      </div>
      <div class="login slide-up">
        <div class="center">
          <h2 class="form-title" id="login"><span>or</span>Log in</h2>
          <div class="form-holder">
            <form action="{{ route('login') }}" method="post" id="myForm">
                @csrf
            <input type="email" class="input" placeholder="Email" name="email" value="{{ old('email') }}"/>
            <input type="password" class="input" placeholder="Password" name="password" value="{{ old('password') }}" />
          </div>
          <button class="submit-btn" type="submit">Log in</button>
          </form>
        </div>
      </div>
    </div>
    <script src="{{ asset('assets') }}/js/script.js"></script>

    @if ($errors->any())
    <script>
        // Ambil pesan error dari Laravel dan tampilkan menggunakan SweetAlert
        var errorMessage = "";
        @foreach ($errors->all() as $error)
            errorMessage += "{{ $error }}\n";
        @endforeach

        Swal.fire({
    text: errorMessage,
    background: 'white' // Atur latar belakang menjadi putih
        });
    </script>

@endif
  </body>
</html>
