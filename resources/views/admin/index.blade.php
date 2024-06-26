<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HlèAhi Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/assetes/vendors/feather/feather.css">
  <link rel="stylesheet" href="/assetes/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/assetes/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="/assetes/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/assetes/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="/assetes/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/assetes/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/assetes/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <h3>HlèAhi</h3>
      </div>
      {{-- <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div> --}}
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
    <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
    </div>
          <!-- To do section tab ends -->
          <!-- chat tab ends -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Tableau de bord</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Marché</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Gérer les marchés</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Mettre à jour les informations d'un marché</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Visualiser la carte d'un marché</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Utilisateur</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Créer un utilisateur</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Liste des utilisateur</a></li>
                
                

              </ul>
            </div>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Bienvenue cher utilisateur!</h3>
                  <h6 class="font-weight-normal mb-0">Notre plate-forme vou offre une navigation rapide et facile!<span class="text-primary"></span></h6>
                </div>
              </div>
            </div>
          </div>

            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Vue d'ensemble</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Nom du Marché:</th>
                          <th>Nom du Produit:</th>
                          <th>Nombre du produit</th>
			            <th>Nombre d'utilisateurs</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Gbégamey</td>
                        <td>Bananes</td>
                        <td>154</td>
                        <td>45</td>

                        </tr>
                        <tr>
                            <td>Tokplégbé</td>
                            <td>Carottes</td>
                            <td>200</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td>PK3</td>
                            <td>Friperie</td>
                            <td>5581</td>
                            <td>20</td>
                        </tr>
                        <tr>
                           <td>Midombo</td>
			            <td>chaussures aidas</td>
                        <td>854</td>
                        <td>96</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="/assetes/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/assetes/vendors/chart.js/Chart.min.js"></script>
  <script src="/assetes/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="/assetes/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="/assetes/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/assetes/js/off-canvas.js"></script>
  <script src="/assetes/js/hoverable-collapse.js"></script>
  <script src="/assetes/js/template.js"></script>
 <script>
    // Données statiques simulées pour l'exemple
    const data = {
      users: 1500,
      markets: [
        { name: 'Market A', products: 200 },
        { name: 'Market B', products: 300 },
        { name: 'Market C', products: 150 },
      ]
    };

    // Fonction pour mettre à jour les données sur le tableau de bord
    function updateDashboard() {
      document.getElementById('userCount').innerText = data.users;

      const marketsContainer = document.getElementById('marketsContainer');
      marketsContainer.innerHTML = '';

      data.markets.forEach(market => {
        const marketElement = document.createElement('div');
        marketElement.classList.add('market-info');
        marketElement.innerHTML = `
          <h4>${market.name}</h4>
          <p>Number of Products: ${market.products}</p>
        `;
        marketsContainer.appendChild(marketElement);
      });
    }

    // Appeler la fonction pour mettre à jour le tableau de bord une fois que le DOM est chargé
    document.addEventListener('DOMContentLoaded', function() {
      updateDashboard();
    });
  </script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/assetes/js/dashboard.js"></script>
  <script src="/assetes/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
