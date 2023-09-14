<header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img src="/assets/images/toplogo.png" alt="wonder world international school logo" class="img-fluid">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation" style="margin-top: -40px;margin-left: -10px;">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == "/index.php" || $_SERVER['REQUEST_URI'] == "/"){echo "active";} ?>" aria-current="page" href="index.php">Home</a>
                        </li>
                        
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li> -->

                        <li class="nav-item dropdown <?php if($_SERVER['REQUEST_URI'] == "/about.php" || $_SERVER['REQUEST_URI'] == "/history.php"|| $_SERVER['REQUEST_URI'] == "/our-service.php" || $_SERVER['REQUEST_URI'] == "/wwis-hybrid-curriculum.php" || $_SERVER['REQUEST_URI'] == "/admissions-and-curricular.php" || $_SERVER['REQUEST_URI'] == "/student-and-staff-responsibility-and-dress-code.php" || $_SERVER['REQUEST_URI'] == "/covid-protocols.php"){echo "active";} ?>">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?php if($_SERVER['REQUEST_URI'] == "/history.php"){echo "active";} ?>" href="history.php">History</a></li>
                        <li><a class="dropdown-item <?php if($_SERVER['REQUEST_URI'] == "/about.php"){echo "active";} ?>" href="about.php">About us</a></li>
                          <li><a class="dropdown-item <?php if($_SERVER['REQUEST_URI'] == "/our-service.php"){echo "active";} ?>" href="our-service.php">Our services</a></li>
                          <li><a class="dropdown-item <?php if($_SERVER['REQUEST_URI'] == "/wwis-hybrid-curriculum.php"){echo "active";} ?>" href="wwis-hybrid-curriculum.php">WWIS Hybrid Curriculum</a></li>
                          <li><a class="dropdown-item <?php if($_SERVER['REQUEST_URI'] == "/admissions-and-curricular.php"){echo "active";} ?>" href="admissions-and-curricular.php">Admissions & Curricular</a></li>
                          <li><a class="dropdown-item <?php if($_SERVER['REQUEST_URI'] == "/student-and-staff-responsibility-and-dress-code.php"){echo "active";} ?>" href="student-and-staff-responsibility-and-dress-code.php">Students and Staff</a></li>
                          <li><a class="dropdown-item <?php if($_SERVER['REQUEST_URI'] == "/covid-protocols.php"){echo "active";} ?>" href="covid-protocols.php">Covid</a></li>
                          
                        </ul>
                      </li>

                        <li class="nav-item <?php if($_SERVER['REQUEST_URI'] == "/gallery.php"){echo "active";} ?>">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item <?php if($_SERVER['REQUEST_URI'] == "/contact.php"){echo "active";} ?>">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://oguaschoolz.com/admin">Portal</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- //header -->