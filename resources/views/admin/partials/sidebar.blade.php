<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="{{route('dashboard.index')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></div>
                                Dashboard
                            </a>
                           
                            <!-- <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></div>
                                Admin
                            </a> -->
                            <a class="nav-link" href="{{route('admin.user')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></div>
                                User List
                            </a>
                            <a class="nav-link" href="{{route('orders.index')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></div>
                                Order List
                            </a>
                            <a class="nav-link" href="{{route('admin.item')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></i></div>
                               Manage Item
                            </a>
                            <a class="nav-link" href="{{route('admin.report')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></i></div>
                               Report
                            </a>
                            <!-- <a class="nav-link" href="#"> -->
                                <!-- <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></i></div> -->
                                
                            <!-- </a> -->
                            <!-- <a class="nav-link" href="{{route('admin.plant.type')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></i></div>
                                Plant Type 
                            </a> -->
                           
                           
                            <!-- <a class="nav-link" href="{{route('admin.plantingtool')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></i></div>
                                Planting Tool
                            </a> -->

                            
                            <!-- <a class="nav-link" href="{{route('admin.soil_texture')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></div>
                                Soil Texture
                            </a> -->
                            <!-- <a class="nav-link" href="{{route('admin.picture')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></div>
                                Picture
                            </a> -->
                            <!-- <a class="nav-link" href="{{route('admin.pesticide.list')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></div>
                                Pesticide
                            </a> -->
                            <!-- <a class="nav-link" href="{{route('admin.stock')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></div>
                                Stock
                            </a> -->
                            
                            <!-- <a class="nav-link" href="{{route('admin.payment.create')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></div>
                                Payment
                            </a> -->
                            <!-- <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></div>
                                Invoice
                            </a> -->
                            <!-- <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></div>
                                Report
                            </a> -->
                            <a class="nav-link" href="{{route('user.feedback')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-caret-square-right' style='font-size:24px'></i></div>
                                Feedback
                            </a>
                            




                          
                            
                            <!-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div> -->
                            
                        </div>
                    </div>
                    <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                    Landscape Tree Management System
                    </div> -->
                </nav>
            </div>