<div class="col-lg-3">
                <nav class="navbar bg-body-tertiary navbar-expand-lg rounded border mt-2">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" style="width: 250px;" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body ">
                                <ul class="navbar-nav nav justify-content-end flex-grow-1  flex-column nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo ((isset($_GET['x'])) && $_GET['x']=='home') || !isset($_GET['x']) ? 'active link-light' : 'link-dark' ; ?> " 
                                        aria-current="page"  href="home"><i class="bi bi-house-door-fill me-2"></i>Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='menu') ? 'active link-light' : 'link-dark' ?>" 
                                        aria-current="page"  href="menu"><i class="bi bi-basket-fill me-2"></i>Daftar Menu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='order') ? 'active link-light' : 'link-dark' ?>" 
                                        aria-current="page"  href="order"><i class="bi bi-basket-fill me-2"></i>Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='customer') ? 'active link-light' : 'link-dark' ?>" 
                                        aria-current="page"  href="customer"><i class="bi bi-person-video2 me-2"></i>Customer</a>
                                    </li>

                                    <?php if($hasil['level']==1){ ?>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='user') ? 'active link-light' : 'link-dark' ?>" 
                                        aria-current="page"  href="user"><i class="bi bi-building-add me-2"></i>User</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='report') ? 'active link-light' : 'link-dark'  ?>" 
                                        aria-current="page"  href="report"><i class="bi-flag-fill me-2"></i>Report</a>
                                    </li>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>