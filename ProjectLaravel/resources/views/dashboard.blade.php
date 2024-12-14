<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💻Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Dashboard.css">
</head>

<body>
    <div class='dashboard'>
        @include("includes.header")
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
            
                <a href="#" class="dashboard-nav-item1">
                    <i class="fas fa-user"></i>
                    Profile
                </a>
            </header>
            <div class='dashboard-content'>
                <div class='container'>
                    <h3>Dashboard</h3>
                    <div class='card'>
                        <div class='card-header'>
                            <div class="row justify-content-center">
                                <div class="col-md-3 border rounded p-4 my-2" style=" background-color:  #b3b3ff; ">
                                    <i class="fa fa-user" style="font-size: 30px"></i>
                                    <h4>Total Users:</h4>
                                </div>
                                
                                <div class="col-md-3 border rounded p-4 my-2 " style=" background-color:  #d580ff; " >
                                    <i class="fas fa-dolly" style="font-size: 30px"></i>

                                    <h4>Total Order:</h4>

                                </div>
                                <div class="col-md-3 border rounded p-4 my-2" style=" background-color:  #85e085; ">
                                    <i class="fa fa-money-bill-wave" style="font-size: 30px"></i>
                                    <h4>Total Sales:</h4>

                                </div>
                                <div class="col-md-3 border rounded p-4 my-2" style=" background-color: #4dc3ff;">
                                    <i class="fa fa-hamburger" style="font-size: 30px"></i>
                                    <h4>Total Products:</h4>

                                </div>


                            </div>
                        </div>
                        <div class='card-body'>
                            @yield('content')
                            <!-- <p>Your account type is: Administrator</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const mobileScreen = window.matchMedia("(max-width: 990px )");
        $(document).ready(function () {
            $(".dashboard-nav-dropdown-toggle").click(function () {
                $(this).closest(".dashboard-nav-dropdown")
                    .toggleClass("show")
                    .find(".dashboard-nav-dropdown")
                    .removeClass("show");
                $(this).parent()
                    .siblings()
                    .removeClass("show");
            });
            $(".menu-toggle").click(function () {
                if (mobileScreen.matches) {
                    $(".dashboard-nav").toggleClass("mobile-show");
                } else {
                    $(".dashboard").toggleClass("dashboard-compact");
                }
            });
        });
    </script>
</body>

</html>