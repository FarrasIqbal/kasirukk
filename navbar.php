<nav class="navbar navbar-expand navbar bg-primary" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="."><i class="bi bi-cup-hot-fill me-2"></i>Long's Caffe</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php
                            echo $hasil['username'];
                        ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-in-right me-2"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>