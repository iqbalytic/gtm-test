<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J4N3WT2WFD"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-J4N3WT2WFD');
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>LR Test - Home</title>
  </head>
  <body>

    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-6">
          <h1>Hello, world!</h1>
          <button id="btn-hardcoded" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalHardcode">Click Hardcoded</button>
          <button class="trackable-button btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDOM">Click via DOM</button>

          <div class="modal fade" id="modalHardcode" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Hardcode Test</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Udahan</button>
                  <button type="button" class="btn btn-primary">Lanjut</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modalDOM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Hardcode Test</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Udahan</button>
                  <button type="button" class="btn btn-primary">Lanjut</button>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    

    
    <!--script hardcode GTM-->
    <script>
      document.getElementById('btn-hardcoded').addEventListener('click', function () {
        dataLayer.push({
          event: 'hardcoded_click',
          label: 'Hardcoded Button'
        });
      });
    </script>
  </body>
</html>