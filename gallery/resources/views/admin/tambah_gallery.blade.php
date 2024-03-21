<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Foto</title>
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
            <form method="POST" action="{{ route('simpanGallery') }}" id="myForm" enctype="multipart/form-data">
                @csrf
          <input type="text" class="input" placeholder="Judul Foto" name="judulFoto" id="judulFoto"/>
          <input type="text" class="input" placeholder="Deskripsi Foto" name="deskripsiFoto" id="deskripsiFoto"/>
          <input type="file" class="input-gambar"  id="lokasiFile" name="lokasiFile" />
         
        </div>
        <button type="submit" class="submit-btn" >Submit</button>
         </form>
      </div>
    </div>
  </body>
</html>
