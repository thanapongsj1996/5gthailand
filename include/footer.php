<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php")?>
<section class="position-relative py-5 jarallax" data-jarallax='{"speed": 0.3}' style="background-image: url(https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1652&q=80);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="assets/images/logo_engineering.png" class="img-fluid" width="150px">
                <h2 class="text-white display-4 font-weight-bold">5G Thailand</h2>
                <div class="star-rating">
                    <span>☆</span>
                    <span>☆</span>
                    <span>☆</span>
                    <span>☆</span>
                    <span>☆</span>
                    <div class="star-current" style="width: 80%;">
                        <span>★</span>
                        <span>★</span>
                        <span>★</span>
                        <span>★</span>
                        <span>★</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="semi-footer p-5 text-center text-md-left">
        <div class="row ml-0 mr-0">
            <div class="col-md-4">
                <a class="navbar-brand" href="#">
                    <img src="https://www.eng.chula.ac.th/wp-content/uploads/2018/01/logo.png" width="35" height="35"
                        class="d-inline-block align-top" alt="">
                    5G Thailand
                </a>
                <p>
                    <i class="fa fa-phone"></i> 081-234-5678<br>
                    <i class="fa fa-envelope"></i> example01@test.com<br>
                    <i class="fa fa-address-card"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dignissimos, ea.
                </p>
                <p>
                    <a href="">
                        <i class="fa fa-facebook-square fa-2x"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-youtube-square fa-2x"></i>
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <h4>เมนู</h4>
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo $file_name == 'index' ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'about' ? 'active' : '' ?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'blog' || $file_name == 'blog-detail' ? 'active' : '' ?>">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'contact' ? 'active' : '' ?>">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-5">
                <h4>บทความแนะนำ</h4>
            </div>
        </div>
    </footer>
    <footer class="footer">
        <span>COPYRIGHT &copy; 2018</span>
        <a href="">5G Thaniland</a>
        All Right Reserved
    </footer>