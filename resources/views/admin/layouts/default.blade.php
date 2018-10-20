
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    
    <title>SaladStore - Dashboard</title>

     <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('dashboard\bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="{{asset('dashboard\dashboard.css')}}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">SaladStore</a>
        {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                {{-- <a class="nav-link" href="#">Sign out</a> --}}
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Sign out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            {{-- Route::currentRouteName() --}}
                            <a class="nav-link{{ Route::currentRouteName() === 'admin.index' ? ' active' : '' }}" href="{{ route('admin.index') }}">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ Route::currentRouteName() === 'admin.orders.index' ? ' active' : '' }}" href="{{ route('admin.orders.index') }}">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link{{ Route::currentRouteName() === 'admin.index' ? ' active' : '' }}" href="#">
                                <span data-feather="shopping-cart"></span>
                                Products
                            </a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link{{ Route::currentRouteName() === 'admin.index' ? ' active' : '' }}" href="#">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Reports
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link{{ Route::currentRouteName() === 'admin.ingredients.index' ? ' active' : '' }}" href="{{ route('admin.ingredients.index') }}">
                                <span data-feather="layers"></span>
                                Integrations
                            </a>
                        </li>
                    </ul>
                    
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Year-end sale
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">
                        {{ Route::currentRouteName() === 'admin.index' ? 'Dashboard' : ''}}
                        {{ Route::currentRouteName() === 'admin.ingredients.index' ? 'Ingredients' : '' }}
                        {{ Route::currentRouteName() === 'admin.ingredients.create' ? 'Create ngredient' : '' }}
                        {{ Route::currentRouteName() === 'admin.orders.index' ? 'Orders' : '' }}
                        {{ Route::currentRouteName() === 'admin.orders.create' ? 'Create an order' : '' }}
                    </h1>
                            {{-- <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <button class="btn btn-sm btn-outline-secondary">Share</button>
                                    <button class="btn btn-sm btn-outline-secondary">Export</button>
                                </div>
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                    <span data-feather="calendar"></span>
                                    This week
                                </button>
                            </div> --}}
                        </div>

                @yield('content')
                
                
                
                
            </main>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="dashboard/jquery-slim.min.js"><\/script>')</script>
    <script src="{{asset('dashboard/popper.min.js')}}"></script>
    <script src="{{asset('dashboard/bootstrap.min.js')}}"></script>
    
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>
</html>
