<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Accueil Admin</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/styles/style.css">
    <link rel="stylesheet" type="text/css" href="assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/src/plugins/datatables/css/responsive.bootstrap4.min.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>
<body>

<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>

    </div>
    <div class="header-right">
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">

                    <span class="user-name">@if(session()->has('admin'))
   {{ session('admin')->email }}
@endif</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="{{url('/logoutAdmin')}}"><i class="dw dw-logout"></i> Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="left-side-bar">
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
            
                <li>
                    <a href="{{url('/liste')}}" class="dropdown-toggle no-arrow">
                        <span class="icon-copy fa fa-newspaper-o" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="mtext">Aucune option</span>
                    </a>
                </li>
           

            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Tous les articles</h4>
                        </div>

                    </div>

                </div>
            </div>


			<h1 class="page-title">{{ $article->titre }}</h1>	

						<ul class="entry-meta">
							<li class="date">{{ $article->datecreation->format('d/m/Y') }}</li>						
							<li class="cat"><a href="">{{ $article->auteur->username }}</a></li>				
						</ul>						

						
						<h3 class="lead">{{$article->description}}</h3>
						{!!$article->contenu!!}
						
                    </table>
                </div>
            </div>
        </div>


    </div>
    <div class="footer-wrap pd-20 mb-20 card-box">
    © Copyright 2023
    </div>
</div>
</div>
<!-- js -->

<script src="assets/vendors/scripts/core.js"></script>
    <script src="assets/vendors/scripts/script.min.js"></script>
    <script src="assets/vendors/scripts/process.js"></script>
    <script src="assets/vendors/scripts/layout-settings.js"></script>
</body>
</html>



