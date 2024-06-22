<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Enregistrement Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/assetes/vendors/feather/feather.css">
  <link rel="stylesheet" href="/assetes/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assetes/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assetes/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assetes//images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>
              <h6 class="font-weight-light">Il est facile de s'inscrire. Quelques étapes suffisent</h6>
              <form action="{{ route('register') }}" method="POST" class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" placeholder="Email">
                </div>
                
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"name="password" placeholder="Password">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      J'accepte toutes les conditions générales
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                <button class="btn btn-primary btn-block" type="submit"> Connexion </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                Vous avez déjà un compte ? <a href="{{ route('login') }}" class="text-primary">Connexion</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/assetes//js/off-canvas.js"></script>
  <script src="/assetes//js/hoverable-collapse.js"></script>
  <script src="/assetes/js/template.js"></script>
  <script src="/assetes/js/settings.js"></script>
  <script src="/assetes//js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
