<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Foto</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/styleform.css" />
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
        <h2 class="form-title" id="signup"><span>or</span>Tambah Foto</h2>
        <div class="form-holder">
            <form method="POST" action="{{route ('update', $data->id)}}" enctype="multipart/form-data">
                @csrf
          <input type="text" class="input" placeholder="Judul Foto" name="judulFoto" id="judulFoto" value="{{ $data->judulFoto }}"/>
          <input type="text" class="input" placeholder="Deskripsi Foto" name="deskripsiFoto" id="deskripsiFoto" value="{{ $data->deskripsiFoto }}"/>
          <input type="file" class="input-gambar" id="lokasiFile" name="lokasiFile" value="{{ $data->lokasiFile }}" />
         
        </div>
        <button type="submit" class="submit-btn" >Submit</button>
         </form>
      </div>
    </div>
  </body>
</html>
