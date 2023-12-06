<?php require("header.php")?>



<!--welcome-hero start -->
<section id="home" class="welcome-hero">
    <div class="container">
        <div class="welcome-hero-txt">
            <h2 style="color: #FAD641">hành trình mùa hè <br> yêu thương </h2>
            <p>
                Trên mảnh đất hình chữ S
            </p>
        </div>
        <div class="welcome-hero-serch-box">
            <div class="welcome-hero-form">
                <div class="single-welcome-hero-form">
                    <h3>điều gì?</h3>
                    <form action="index.html">
                        <input type="text" placeholder="Ví dụ: khách sạn, nhà hàng..." />
                    </form>
                    <div class="welcome-hero-form-icon">
                        <i class="flaticon-list-with-dots"></i>
                    </div>
                </div>
                <div class="single-welcome-hero-form">
                    <h3>địa điểm</h3>
                    <form action="index.html">
                        <input type="text" placeholder="Ví dụ: Hà Nội, Quảng Ninh" />
                    </form>
                    <div class="welcome-hero-form-icon">
                        <i class="flaticon-gps-fixed-indicator"></i>
                    </div>
                </div>
            </div>
            <div class="welcome-hero-serch">
                <button class="welcome-hero-btn" onclick="window.location.href='#'">
                        tìm kiếm  <i data-feather="search"></i> 
                </button>
            </div>
        </div>
    </div>

</section><!--/.welcome-hero-->
<!--welcome-hero end -->

<!--list-topics start -->
<section id="list-topics" class="list-topics">
    <div class="container">
        <div class="list-topics-content">
            <ul>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-restaurant"></i>
                        </div>
                        <h2><a href="#">nhà hàng</a></h2>
                        <p>150 điểm</p>
                    </div>
                </li>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-travel"></i>
                        </div>
                        <h2><a href="#">điểm đến</a></h2>
                        <p>214 điểm</p>
                    </div>
                </li>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-building"></i>
                        </div>
                        <h2><a href="#">khách sạn</a></h2>
                        <p>185 điểm</p>
                    </div>
                </li>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-pills"></i>
                        </div>
                        <h2><a href="#">chăm sóc sức khỏe</a></h2>
                        <p>200 điểm</p>
                    </div>
                </li>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-transport"></i>
                        </div>
                        <h2><a href="#">phương tiện</a></h2>
                        <p>120 điểm</p>
                    </div>
                </li>
            </ul>
        </div>
    </div><!--/.container-->

</section><!--/.list-topics-->
<!--list-topics end-->

<!--works start -->
<section id="works" class="works">
    <div class="container">
        <div class="section-header">
            <h2 style="color: #762115">chia sẻ kinh nghiệm</h2>
            <p>Chia sẻ những kinh nghiệm quý giá</p>
        </div><!--/.section-header-->
        <div class="works-content">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-how-works">
                        <div class="single-how-works-icon">
                            <i class="flaticon-lightbulb-idea"></i>
                        </div>
                        <h2><a href="#blog">chia sẻ</a></h2>
                        <p>
                            Chia sẻ những điều thú vị
                        </p>
                        <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#blog'">
                            Đến
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-how-works">
                        <div class="single-how-works-icon">
                            <i class="flaticon-networking"></i>
                        </div>
                        <h2><a href="costume.php">Trang phục</a></h2>
                        <p>
                            Trang phục cần chuẩn bị cho chuyến đi dài
                        </p>
<select class="form-select" id="redirectSelect">
  <option value="">--Chọn--</option>
  <option value="costume-ocean.php">Du lịch biển</option>
  <option value="costume-hike.php">Leo núi</option>
  <option value="costume-jungle.php">Đi rừng</option>
</select>

<script>
  const redirectSelect = document.getElementById('redirectSelect');

  redirectSelect.addEventListener('change', (event) => {
    const selectedOptionValue = event.target.value;

    if (selectedOptionValue) {
      window.location.href=selectedOptionValue;
    }
  });
</script>                   
			</div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-how-works">
                        <div class="single-how-works-icon">
                            <i class="flaticon-location-on-road"></i>
                        </div>
                        <h2><a href="tool.php">Dụng cụ</a></h2>
                        <p>
                            Những đồ dùng cần thiết nên mang theo
                        </p>
                        <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='tool.php'">
                            Đến
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.works-->
<!--works end -->

<!--explore start -->
<section id="explore" class="explore">
    <div class="container">
        <div class="section-header">
            <h2 style="color: #762115">địa điểm</h2>
            <p>Khám phá những địa điểm hấp dẫn chờ được khám phá</p>
        </div><!--/.section-header-->
        <div class="explore-content">
            <div class="row">
                <div class=" col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="assets/images/explore/e1.jpg" alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">best rated</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-1">
                            <h2><a href="#">Chuỗi Ân Nam Quán</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">5.0</span>
                                <a href="#"> 10 ratings</a> 
                                <span class="explore-price-box">
                                    form
                                    <span class="explore-price">5$-300$</span>
                                </span>
                                    <a href="#">resturent</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="assets/images/explore/person.png" alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Chuỗi Ân Nam Quán là chuỗi nhà hàng đặc sản miền Trung, bởi vậy phong cách trang trí của chuỗi này cũng rất giản dị và mộc mạc với bàn ghế tre cùng một tông màu tối giản.
Tuy đơn giản nhưng thực khách nhìn vào vẫn thấy rõ sự gọn gàng, sạch sẽ bởi sự thoáng đãng trong không gian và đồng điệu trong từng món đồ.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn open-btn" onclick="window.location.href='#'">open now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="contents/2c0aa0661c9bb5c5ec8a.jpg" alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">featured</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-2">
                            <h2><a href="#">Nhà hàng Phương Nam - Món ăn miền Nam</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">4.5</span>
                                <a href="#"> 8 ratings</a> 
                                <span class="explore-price-box">
                                    form
                                    <span class="explore-price">50$-500$</span>
                                </span>
                                    <a href="#">resturent</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="assets/images/explore/person.png" alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Nhà hàng Phương Nam tự hào là nhà hàng lấy nguyên liệu tự nhiên như nấu ăn ở nhà, đảm bảo tiêu chí về độ tươi ngon, chất lượng và an toàn từ nguyên liệu tới các loại gia vị nên bạn hoàn toàn yên tâm trải nghiệm ẩm thực tại chuỗi nhà hàng Phương Nam. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn open-btn" onclick="window.location.href='#'">open now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="contents/43a6b382027fab21f26e.jpg" alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">featured</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-2">
                            <h2><a href="#">Nhà hàng Nét Huế</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">4.5</span>
                                <a href="#"> 8 ratings</a> 
                                <span class="explore-price-box">
                                    form
                                    <span class="explore-price">50$-500$</span>
                                </span>
                                    <a href="#">resturent</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="assets/images/explore/person.png" alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Đối với những bạn miền trong đã đặt vé máy bay Hà Nội thì hãy thưởng thức hương vị quê nhà tại nhà hàng Nét Huế. Đây là nhà hàng mang lại cho thực khách đến Hà Nội những hương vị Huế đúng điệu nhất, cũng là nhà hàng món Huế được yêu thích nhất tại thủ đô. Các món bún bò Huế, bánh khoai, bánh nậm,... khiến ai ai thưởng thức cũng phải xuýt xoa trầm trồ khen ngợi hương vị của nó.                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn open-btn" onclick="window.location.href='#'">open now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.explore-->
<!--explore end -->

<!--reviews start -->
<section id="reviews" class="reviews">
    <div class="section-header">
        <h2>đánh giá của khách hàng</h2>
        <p>Phản hồi của khách hàng nói về chúng tôi</p>
    </div><!--/.section-header-->
    <div class="reviews-content">
        <div class="testimonial-carousel">

            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="assets/images/clients/c1.png" alt="clients">
                        </div><!--/.testimonial-img-->
                        <div class="testimonial-person">
                            <h2>Tom Leakar</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div><!--/.testimonial-person-->
                    </div><!--/.testimonial-info-->
                </div><!--/.testimonial-description-->
            </div><!--/.single-testimonial-box-->
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="assets/images/clients/c2.png" alt="clients">
                        </div><!--/.testimonial-img-->
                        <div class="testimonial-person">
                            <h2>monirul islam</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div><!--/.testimonial-person-->
                    </div><!--/.testimonial-info-->
                </div><!--/.testimonial-description-->
            </div><!--/.single-testimonial-box-->
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="assets/images/clients/c3.png" alt="clients">
                        </div><!--/.testimonial-img-->
                        <div class="testimonial-person">
                            <h2>Shohrab Hossain</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div><!--/.testimonial-person-->
                    </div><!--/.testimonial-info-->
                </div><!--/.testimonial-description-->
            </div><!--/.single-testimonial-box-->
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="assets/images/clients/c4.png" alt="clients">
                        </div><!--/.testimonial-img-->
                        <div class="testimonial-person">
                            <h2>Tom Leakar</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div><!--/.testimonial-person-->
                    </div><!--/.testimonial-info-->
                </div><!--/.testimonial-description-->
            </div><!--/.single-testimonial-box-->
        </div>
    </div>

</section><!--/.reviews-->
<!--reviews end -->

<!-- statistics strat -->
<section id="statistics"  class="statistics">
    <div class="container">
        <div class="statistics-counter"> 
            <div class="col-md-3 col-sm-6">
                <div class="single-ststistics-box">
                    <div class="statistics-content">
                        <div class="counter">3 </div> <span></span>
                    </div><!--/.statistics-content-->
                    <h3>địa điểm</h3>
                </div><!--/.single-ststistics-box-->
            </div><!--/.col-->
            <div class="col-md-3 col-sm-6">
                <div class="single-ststistics-box">
                    <div class="statistics-content">
                        <div class="counter">1</div> <span></span>
                    </div><!--/.statistics-content-->
                    <h3>thể loại</h3>
                </div><!--/.single-ststistics-box-->
            </div><!--/.col-->
            <div class="col-md-3 col-sm-6">
                <div class="single-ststistics-box">
                    <div class="statistics-content">
                        <div class="counter">12</div> <span></span>
                    </div><!--/.statistics-content-->
                    <h3>khách</h3>
                </div><!--/.single-ststistics-box-->
            </div><!--/.col-->
            <div class="col-md-3 col-sm-6">
                <div class="single-ststistics-box">
                    <div class="statistics-content">
                        <div class="counter">2</div> <span></span>
                    </div><!--/.statistics-content-->
                    <h3>khách hàng hài lòng</h3>
               </div><!--/.single-ststistics-box-->
            </div><!--/.col-->
        </div><!--/.statistics-counter-->	
    </div><!--/.container-->

</section><!--/.counter-->	
<!-- statistics end -->

<!--blog start -->
<section id="blog" class="blog" >
    <div class="container">
        <div class="section-header">
            <h2>tin tức và bài đăng</h2>
            <p>Luôn luôn cập nhật với các bài đăng và tin tức của chúng tôi</p>
        </div><!--/.section-header-->
        <div class="blog-content">
            <div class="row">
                <?php 
                    require("bootdatabase.php");
                    function trimStringTo20Words($string) {
                        $words = explode(" ", $string);
                        $trimmedWords = array_slice($words, 0, 20);
                        $trimmedString = implode(" ", $trimmedWords) . "...";
                        return $trimmedString;
                    }                      
                    $kq = $db->query("SELECT * FROM post;");
                    foreach ($kq as $dong) {
                        echo '<div class="col-md-4 col-sm-6">
                                <div class="single-blog-item">
                                    <div class="single-blog-item-img">
                                        <img onclick="window.location.href=`article.php?id='.$dong["id"].'`" src="contents/'.$dong['image'].'" alt="blog image">
                                    </div>
                                    <div class="single-blog-item-txt">
                                        <h2>'.'<a href="article.php?id='.$dong['id'].'"><b>' . $dong['post_title'] . '</b></a></h2>
                                        <h4>posted <span>by</span>'.' <a href="#">'.$dong['post_author'].'</a></h4>
                                        <p>
                                            '.trimStringTo20Words($dong['post_content']).'
                                        </p>
                                    </div>
                                </div>
                            </div>';
                    }
                    // Ngắt kết nối cơ sở dữ liệu
                    $db->close();
                ?>
            </div>
        </div>
    </div><!--/.container-->
    
</section><!--/.blog-->
<!--blog end -->
			
<?php require("footer.php")?>