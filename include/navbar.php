<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php") ?>
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark bg-alpha">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="https://www.eng.chula.ac.th/wp-content/uploads/2018/01/logo.png" width="40" height="40" class="d-inline-block align-top"
                    alt="">
                5G Thailand
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey" aria-controls="navbarKey"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarKey">
                <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item <?php echo $file_name == 'index' ? 'active':''  ?>">
                        <a class="nav-link" href="index.php">Home &ensp; |<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'about' ? 'active':''  ?>">
                        <a class="nav-link" href="about.php">&ensp;Road to 5G &ensp;&ensp;|</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'Uses case' ? 'active':''  ?>">
                        <a class="nav-link" href="Uses cases.php">&ensp;Use cases &ensp;&ensp;|</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == '' ? 'active':''  ?>">
                        <a class="nav-link" href="">&ensp;Key technologies &ensp;&ensp;|</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == '' ? 'active':''  ?>">
                        <a class="nav-link" href="">&ensp;Training Courses &ensp;&ensp;|</a>
                    <li class="nav-item <?php echo $file_name == 'blog'|| $file_name == 'blog-detail' ? 'active':''  ?>">
                        <a class="nav-link" href="blog.php">&ensp;Blog &ensp;&ensp;|</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'contact' ? 'active':''  ?>">
                        <a class="nav-link" href="contact.php">&ensp;Contact </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>