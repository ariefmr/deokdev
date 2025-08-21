<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Document Verification</title>
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <div>
        <nav>
          {{-- <a href="#"><img src="{{ $s3URL . $verification->logo }}" style="width:12%;padding:7px;" /></a> --}}
        </nav>
      </div>
    </header>
    <!-- MIDDLE CONTENT -->
    <iframe id="iframeCode"  src="" style="width:100%;height:100vh;border-style:none;"></iframe>
    <script>
      document.getElementById('iframeCode').setAttribute("src",'https://c12efd312112.ngrok-free.app/credential/qe9v6y87146');
      // const urlParams = new URLSearchParams(window.location.search);
      // const file = urlParams.get('file');
      // if(file){
      // }
    </script>

  </body>

  <style>

  </style>
</html>
