<?php
require_once 'php/connect.php';
$sql = "SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5G Thailand</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Section Navbar -->
    <?php include_once('include/navbar.php') ?>
    <!-- Section Carousel -->
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1523731407965-2430cd12f5e4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80')">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">5G Thailand</h1>
                        <p class="lead">เทคโนโลยี 5G อนาคตความเร็วสูง</p>
                    </div>
                    <div class="blackscreen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('https://images.pexels.com/photos/1553879/pexels-photo-1553879.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">5G Thailand</h1>
                        <p class="lead">เทคโนโลยี 5G อนาคตความเร็วสูง</p>
                    </div>
                    <div class="blackscreen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1507358522600-9f71e620c44e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80')">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">5G Thailand</h1>
                        <p class="lead">เทคโนโลยี 5G อนาคตความเร็วสูง</p>
                    </div>
                    <div class="blackscreen"></div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>
    <!-- Section Hope -->
    <section class="jumbotron jumbotron-fluid text-center hope p-4">
        <div class="container">
            <h1 class="border-short-bottom">Road to 5G</h1>
            <p class="lead">ประเทศไทยพร้อมจะยกระดับคุณภาพชีวิตของคนไทยให้ดียิ่งขึ้น ด้วยเทคโนโลยี 5G ที่ประสิทธิภาพสูง</p>
            <p class="lead">ก้าวไปด้วยกัน ก้าวไปได้ไกล ประเทศไทยไม่หยุดนิ่ง</p>
        </div>
    </section>
    <!-- Section Timeline -->
    <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge">
                            <p>1980</p>
                        </div>
                        <div class="timeline-card">
                            <h5>1G</h5>
                            <p class="text-muted">- การสื่อสารแบบคลื่นวิทยุ (Analog)</p>
                            <p class="text-muted">- ความเร็วในการรับส่งข้อมูลสูงสุด 2.4 Kbps.</p>
                            <p class="text-muted">- สามารถสื่อสารกันได้ภายในวงจำกดเท่านั้น</p>
                            <p class="text-muted">- สามารถโทรออก – รับสาย ได้อย่างเดียว</p>
                            <p class="text-muted">- โทรศัพท์มีขนาดใหญ่และหนักมาก</p>
                            <p class="text-muted">- คุณภาพเสียงและความปลอดภัยต่ำ</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p>1991</p>
                        </div>
                        <div class="timeline-card">
                            <h5>2G</h5>
                            <p class="text-muted">- การสื่อสารแบบ Digital</p>
                            <p class="text-muted">- ความเร็วในการรับส่งข้อมูลสูงสุด 6.4 Kbps.</p>
                            <p class="text-muted">- เทคโนโลยี GSM (Global System for Mobilization) </p>
                            <p class="text-muted">- โทรศัพท์สามารถติดต่อสื่อสารได้ทั่วโลกเรียกว่า Roaming</p>
                            <p class="text-muted">- สามารถรับส่งข้อความ SMS ได้</p>
                            <p class="text-muted">- เริ่มมีการดาวน์โหลด Ringtone (monotone), Wallpaper ขาว-ดำ หรือภาพที่มีคุณภาพต่ำ</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">  
                        </div>
                        <div class="timeline-card">
                            <h5>2.5G</h5>
                            <p class="text-muted">- เทคโนโลยี GPRS (General Pocket Radio Service)</p>
                            <p class="text-muted">- ความเร็วในการรับส่งข้อมูลสูงสุด 6.4 - 144 Kbps.</p>
                            <p class="text-muted">- สามารถรับส่งข้อความได้ทั้ง SMS และ MMS</p>
                            <p class="text-muted">- มีบริการอินเตอร์เน็ตความเร็วต่ำ</p>
                            <p class="text-muted">- สามารถรับส่ง e-mail ได้</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">  
                        </div>
                        <div class="timeline-card">
                            <h5>2.75G</h5>
                            <p class="text-muted">- เทคโนโลยี EDGE (Enhance Data rate for Global Evolution)</p>
                            <p class="text-muted">- ความเร็วในการรับส่งข้อมูลสูงสุด 70 - 180 Kbps.</p>
                            <p class="text-muted">- รองรับ Ringtone แบบ MP3</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <p>2001</p>
                        </div>
                        <div class="timeline-card">
                            <h5>3G</h5>
                            <p class="text-muted">- ความเร็วในการรับส่งข้อมูลสูงสุด 2  Mbps.</p>
                            <p class="text-muted">- Always On คือโทรศัพท์มีการเชื่อมต่อ 3G ตลอดเวลา</p>
                            <p class="text-muted">- โทรศัพท์มือถือถูกเรียกว่า Smart phone ครั้งแรก</p>
                            <p class="text-muted">- สามารถรับส่งข้อมูลขนาดใหญ่ได้</p>
                            <p class="text-muted">- อินเตอร์เน็ตความเร็วสูง </p>
                            <p class="text-muted">- Video Conferencing, TV Steaming, Game Online</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p>2009</p>
                        </div>
                        <div class="timeline-card">
                            <h5>4G</h5>
                            <p class="text-muted">- ความเร็วในการรับส่งข้อมูล 100Mbps. – 1Gbps. </p>
                            <p class="text-muted">- เทคโนโลยี LTE (Long Term Evolution)</p>
                            <p class="text-muted">- อินเตอร์เน็ตความเร็วสูง สามารถดูหนัง ฟังเพลง ได้ไม่สะดุด </p>
                            <p class="text-muted">- คุณภาพข้อมูลและความปลอดภัยสูง</p>
                            <p class="text-muted">- สินค้าแบบ IOT สูงขึ้นมาก</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <p>2020?</p>
                        </div>
                        <div class="timeline-card">
                            <h5>5G</h5>
                            <p class="text-muted">- ความเร็วในการรับส่งข้อมูลมากกว่า  1Gbps. อาจมากกว่า 4G ถึง 20 เท่า</p>
                            <p class="text-muted">- สามารถดาวน์โหลดวีดิโอแบบ HD ขนาด 8 GB ได้ในเวลา 1 วินาที</p>
                            <p class="text-muted">- รองรับ WWWW. (World Wide Wireless Web) ที่จะเกิดขึ้นได้ในอนาคต</p>
                        </div>
                    </li>
                    <li class="timeline-arrow">
                        <i class="fa fa-chevron-down"></i>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Section Blog -->
    <!-- <section class="container my-4">
        <h1 class="border-short-bottom">บทความ</h1>
        <div class="row">
            <?php while ($row = $result->fetch_assoc()) { ?>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-img">
                        <img class="card-img-top" src="<?php echo $base_path_blog.$row['image'] ?>" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['subject'] ?></h5>
                        <p class="card-text"><?php echo $row['sub_title'] ?></p>
                    </div>
                    <div class="p-3">
                        <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-block blogbotton">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>
            <?php } ?>
        </div>
    </section> -->
    <!-- Section Footer -->
    <?php include_once('include/footer.php') ?>

    <!-- Section On to Top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>