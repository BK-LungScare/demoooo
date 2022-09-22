<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>BK-LungScare/Hosocanhan</title>
      <link rel="stylesheet" type="text/css" href="CSS/style_layout.css" />
      <link rel="stylesheet" type="text/css" href="CSS/style_menu.css" />
      <link rel="stylesheet" type="text/css" href="CSS/style_search.css" />
      <link rel="stylesheet" type="text/css" href="CSS/style_main.css" />
      <script src="https://kit.fontawesome.com/85d100eacf.js" crossorigin="anonymous"></script>
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
</head>

<body>
      <!--Thanh tìm kiếm ______________________________________________________________________________________________________________________________________________________________-->
      <div class="Search">
            <div class="control">
                  <!--Nút điều chuyển hướng-->
                  <a href="#" class="button-icon-right">
                        <span>
                              <i class="fa-solid fa-chevron-right"></i>
                        </span>
                  </a>
                  <a href="#" class="button-icon-left">
                        <span>
                              <i class="fa-solid fa-chevron-left"></i>
                        </span>
                  </a>
                  <a href="#" class="button-icon-goback">
                        <span>
                              <i class="fa-solid fa-arrow-rotate-left"></i>
                        </span>
                  </a>
            </div>
            <div class="wrap">
                  <!--Ô tìm kiếm-->
                  <form action="" class="search" method="post">
                        <input type="text" class="searchTerm" placeholder="Tìm kiếm">
                        <button type="submit" class="searchButton">
                              Submit
                        </button>
                  </form>
            </div>
            <div class="news">
                  <a href="#">
                        <i class="fa-solid fa-bell"></i>
                  </a>
            </div>
            <div class="user">
                  <h4 class="fullname">
                        Nguyễn Thiên Bình
                        <a href="#" class="icon_user">
                              <i class="fa-solid fa-circle-user"></i>
                        </a>
                  </h4>

            </div>
      </div>
      <!--Phần menu____________________________________________________________________________________________________________________________________________________________________-->
      <div id="menu">
            <div id="logo">
                  <!--Logo__________________________________________________________________________-->
                  <img src="images/2. BKLungScare_Logo(3).jpg" width="150px" margin-left="40px" />
            </div>
            <div id="new_profile">
                  <a href="#" class="button">
                        <span class="button-icon">
                              <i class="fa-solid fa-plus"></i>
                        </span>
                        <span class="button-text">
                              Hồ sơ mới
                        </span>
                  </a>
            </div>
            <div id="listmenu">
                  <!--Listmenu____________________________________________________________________-->
                  <ul>
                        <li><a href="../Frontend/index.php"> <i class="fa-sharp fa-solid fa-house"></i> Trang chủ</a>
                        </li>
                        <li><a href="../hosobenhan/index.php">
                                    <i class="fa-solid fa-book"></i>Hồ sơ bệnh án </a>
                        </li>
                        <li class="chandoan"><a href="../chandoan/index.php">
                                    <i class="fa-sharp fa-solid fa-stethoscope"></i> Chẩn đoán </a>
                        </li>
                        <li><a href="../lienhebacsi/All/index.php">
                                    <i class="fa-sharp fa-solid fa-user-doctor"></i>Liên hệ bác sĩ</a>
                        </li>
                        <li><a href="../tintucsuckhoe/index.php">
                                    <i class="fa-solid fa-newspaper"></i> Tin tức sức khỏe </a>
                        </li>
                        <li><a href="../Kienthuccanbiet/index.php"> <i class="fa-solid fa-snowflake"></i> Kiến thức cần
                                    biết </a></li>
                        <li><a href="../hoidap24/index.php"> <i class="fa-sharp fa-solid fa-question"></i> Hỏi đáp 24/7
                              </a> </li>
                        <li><a href="../caidat/index.php"> <i class="fa-sharp fa-solid fa-gear"></i> Cài đặt </a> </li>
                  </ul>
            </div>
            <div id="weather">
                  <!--Thời tiết _______________________________________________________________________-->
                  <!-- weather widget start -->
                  <div id="m-booked-bl-simple-1539">
                        <div class="booked-wzs-160-110 weather-customize" style="background-color:#137AE9;width:174px;"
                              id="width1">
                              <div class="booked-wzs-160-110_in">
                                    <div class="booked-wzs-160-data">
                                          <div class="booked-wzs-160-left-img wrz-18"></div>
                                          <div class="booked-wzs-160-right">
                                                <div class="booked-wzs-day-deck">
                                                      <div class="booked-wzs-day-val">
                                                            <div class="booked-wzs-day-number"><span
                                                                        class="plus">+</span>32
                                                            </div>
                                                            <div class="booked-wzs-day-dergee">
                                                                  <div class="booked-wzs-day-dergee-val">&deg;</div>
                                                                  <div class="booked-wzs-day-dergee-name">C</div>
                                                            </div>
                                                      </div>
                                                      <div class="booked-wzs-day">
                                                            <div class="booked-wzs-day-d"><span
                                                                        class="plus">+</span>34&deg;
                                                            </div>
                                                            <div class="booked-wzs-day-n"><span
                                                                        class="plus">+</span>25&deg;
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="booked-wzs-160-info">
                                                      <div class="booked-wzs-160-city">Bac Giang</div>
                                                      <div class="booked-wzs-160-date">, 07</div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="booked-wzs-center"><span class="booked-wzs-bottom-l"> Xem Dự báo 7
                                                ngày</span></div>
                              </div>
                        </div>
                  </div>
                  <script type="text/javascript">
                  var css_file = document.createElement("link");
                  var widgetUrl = location.href;
                  css_file.setAttribute("rel", "stylesheet");
                  css_file.setAttribute("type", "text/css");
                  css_file.setAttribute("href", 'https://s.bookcdn.com/css/w/booked-wzs-widget-160.css?v=0.0.1');
                  document.getElementsByTagName("head")[0].appendChild(css_file);

                  function setWidgetData_1539(data) {
                        if (typeof(data) != 'undefined' && data.results.length > 0) {
                              for (var i = 0; i < data.results.length; ++i) {
                                    var objMainBlock = document.getElementById('m-booked-bl-simple-1539');
                                    if (objMainBlock !== null) {
                                          var copyBlock = document.getElementById('m-bookew-weather-copy-' + data
                                                .results[i].widget_type);
                                          objMainBlock.innerHTML = data.results[i].html_code;
                                          if (copyBlock !== null) objMainBlock.appendChild(copyBlock);
                                    }
                              }
                        } else {
                              alert('data=undefined||data.results is empty');
                        }
                  }
                  var widgetSrc =
                        "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=121080;type=1;scode=124;ltid=3457;domid=1180;anc_id=27095;countday=undefined;cmetric=1;wlangID=33;color=137AE9;wwidth=174;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";
                  widgetSrc += ';ref=' + widgetUrl;
                  widgetSrc += ';rand_id=1539';
                  var weatherBookedScript = document.createElement("script");
                  weatherBookedScript.setAttribute("type", "text/javascript");
                  weatherBookedScript.src = widgetSrc;
                  document.body.appendChild(weatherBookedScript)
                  </script>
                  <!-- weather widget end -->
            </div>
            <div id="listmenu2">
                  <!--Phần menu dưới_________________________________________________________________-->
                  <ul>
                        <li><a href=""> Hỗ trợ </a> </li>
                        <li><a href="../dieukhoan/index.php"> Điều khoản và chính sách </a>
                        </li>
                  </ul>
            </div>
      </div>
      <div class="main">
            <div class="main-left">
                  <div class="main-left-header">
                        <p>Tải tệp</p>
                  </div>
                  <div class="main-left-form">
                        <form method="post" enctype="multipart/form-data">
                              <p>
                                    <label>
                                          <i class="fa-solid fa-cloud-arrow-up"></i> Tải lên</label><br />
                                    <input type="file" name="file" multiple="multiple" value="Tải lên" />
                              </p>

                              <p>
                                    <input type="submit" value="Gửi lên" />
                              </p>
                        </form>
                  </div>
            </div>
            <div class="main-right">
            </div>
      </div>
</body>

</html>