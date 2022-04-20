<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Dashboard</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    </head>
    <body>
        <div class="wrapper" style="">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 class="text-center">Library Management System</h3>
                </div>

                <ul class="list-unstyled">
                    <li>
                        <a href="#bookSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            Books
                        </a>
                        <ul class="collapse list-unstyled" id="bookSubmenu">
                            <li>
                              <a href="addBooks">
                                <i class="glyphicon glyphicon-plus"></i>
                                Add New Book
                              </a>
                            </li>
                            <li>
                              <a href="booksList">
                                <i class="glyphicon glyphicon-list"></i>
                                Books List
                              </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#catSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-tags"></i>
                            Categories
                        </a>
                        <ul class="collapse list-unstyled" id="catSubmenu">
                            <li>
                              <a href="addCategories">
                                <i class="glyphicon glyphicon-plus"></i>
                                Add New Category
                              </a>
                            </li>
                            <li>
                              <a href="categoriesList">
                                <i class="glyphicon glyphicon-list"></i>
                                Categories List
                              </a>
                            </li>
                        </ul>
                    </li>
                  <li >
                        <a href="#issueBookSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-share"></i>
                            Book Issue
                        </a>
                        <ul class="collapse list-unstyled" id="issueBookSubmenu">
                            <li>
                              <a href="issueBooks">
                                <i class="glyphicon glyphicon-check"></i>
                                Issue A Book
                              </a>
                            </li>
                            <li>
                              <a href="issuedBooks">
                                <i class="glyphicon glyphicon-ok"></i>
                                Issued Books
                              </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#memberSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i>
                            Members
                        </a>
                        <ul class="collapse list-unstyled" id="memberSubmenu">
                            <li>
                              <a href="addMembers">
                                <i class="glyphicon glyphicon-plus"></i>
                                Add New Member
                              </a>
                            </li>
                            <li>
                              <a href="membersList">
                                <i class="glyphicon glyphicon-list"></i>
                                Members List
                              </a>
                            </li>
                        </ul>
                    </li>
                  
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default" style="background-color:orange; text-decoration-color: black;">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            ,<h1>Welcome</h1>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                   </a>
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="mainContentArea">
                @yield('content')
                </div>
            </div>
        </div>
        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
