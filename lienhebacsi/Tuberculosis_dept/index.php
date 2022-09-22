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
      <script>
      src = "./javascript/search_city"
      </script>
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
                        <li><a href="../../Frontend/index.php"> <i class="fa-sharp fa-solid fa-house"></i> Trang chủ</a>
                        </li>
                        <li><a href="../../hosobenhan/index.php"> <i class="fa-solid fa-book"></i>Hồ sơ bệnh án </a></li>
                        <li ><a href="../../chandoan/index.php"> <i class="fa-sharp fa-solid fa-stethoscope"></i>Chẩn đoán </a></li>
                        <li class="lienhebacsi"><a href="../All/index.php"> <i class="fa-sharp fa-solid fa-user-doctor"></i>Liên hệ bác sĩ</a></li>
                        <li><a href="../../tintucsuckhoe/index.php"> <i class="fa-solid fa-newspaper"></i>Tin tức sức khỏe </a> </li>
                        <li><a href="../../Kienthuccanbiet/index.php"> <i class="fa-solid fa-snowflake"></i>Kiến thức cần biết </a></li>
                        <li><a href="../../hoidap24/index.php"> <i class="fa-sharp fa-solid fa-question"></i>Hỏi đáp 24/7 </a> </li>
                        <li><a href="../../caidat/index.php"> <i class="fa-sharp fa-solid fa-gear"></i>Cài đặt </a> </li>
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
            <div class="main-top">
                  <ul>
                        <li class="all"> <a href="../All/index.php" class="all"> <i class="fa-brands fa-windows"></i> Tất cả</a> </li>
                        <li class="khambenh"> <a href="../Outpatient_dept/index.php" class="khambenh"> <i class="fa-sharp fa-solid fa-stethoscope"></i>Khám bênh</a> </li>
                        <li class="hoisuccapcuu"> <a href="../Emergency_room/index.php" class="hoisuccapcuu"> <i class="fa-sharp fa-solid fa-stethoscope"></i> Hồi sức cấp cứu </a></li>
                        <li class="noitonghop"> <a href="../General_medical/index.php" class="noitonghop"> <i class="fa-sharp fa-solid fa-stethoscope"></i> Nội tổng hợp </a></li>
                        <li class="noitimmach"> <a href="../Cardiology_dept/index.php" class="noitimmach"> <i class="fa-sharp fa-solid fa-stethoscope"></i> Nội tim mạch</a></li>
                        <li class="noitieuhoa"> <a href="../Gastroenterology_dept/index.php" class="noitieuhoa"> <i class="fa-sharp fa-solid fa-stethoscope"></i> Nội tiêu hoá </a></li>
                        <li class="lao"> <a href="../Tuberculosis_dept/index.php" class="lao"> <i class="fa-sharp fa-solid fa-stethoscope"></i> Lao </a></li>
                  </ul>
            </div>
            <div class="main-bottom">
                  <div class="main-bottom-left">
                        <table class="table1" cellspacing="20px">
                              <tr>
                                    <td class="o">
                                          <table class="table2">
                                                <tr>
                                                      <td rowspan="3" class="img" cellspan="1">
                                                            <img src="images/user.png" width="100px">
                                                      </td>
                                                      <td>
                                                            <h4 class="fullname-doctor">BS.Nguyễn Minh Hiền</h4>
                                                      </td>
                                                <tr>
                                                      <td>
                                                            <p class="khoa">Hồi sức cấp cứu </p>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <td>
                                                            <p class="address-dortor">Hà Nội</p>
                                                      </td>
                                                </tr>
                                          </table>
                                          <table class="table3">
                                                <tr>
                                                      <td>
                                                            <a href="#" class="button1 phone">
                                                                  <span>
                                                                        <i class="fa-solid fa-phone"></i>
                                                                  </span>
                                                                  <span class="button-text">
                                                                        Đặt lịch tư vấn
                                                                  </span>
                                                            </a>
                                                      </td>
                                                      <td>
                                                            <a href="#" class="button1 calender">
                                                                  <span>
                                                                        <i class="fa-regular fa-calendar-days"></i>
                                                                  </span>
                                                                  <span class="button-text">
                                                                        Đặt lịch khám
                                                                  </span>
                                                            </a>
                                                      </td>
                                                </tr>
                                          </table>
                                    </td>
                                    <td class="o">
                                          <table class="table2">
                                                <tr>
                                                      <td rowspan="3" class="img" cellspan="1">
                                                            <img src="images/user.png" width="100px">
                                                      </td>
                                                      <td>
                                                            <h4 class="fullname-doctor">BS.Nguyễn Minh Hiền</h4>
                                                      </td>
                                                <tr>
                                                      <td>
                                                            <p class="khoa">Hồi sức cấp cứu </p>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <td>
                                                            <p class="address-dortor">Hà Nội</p>
                                                      </td>
                                                </tr>
                                          </table>
                                          <table class="table3">
                                                <tr>
                                                      <td>
                                                            <a href="#" class="button1 phone">
                                                                  <span>
                                                                        <i class="fa-solid fa-phone"></i>
                                                                  </span>
                                                                  <span class="button-text">
                                                                        Đặt lịch tư vấn
                                                                  </span>
                                                            </a>
                                                      </td>
                                                      <td>
                                                            <a href="#" class="button1 calender">
                                                                  <span>
                                                                        <i class="fa-regular fa-calendar-days"></i>
                                                                  </span>
                                                                  <span class="button-text">
                                                                        Đặt lịch khám
                                                                  </span>
                                                            </a>
                                                      </td>
                                                </tr>
                                          </table>
                                    </td>
                              </tr>
                              <tr>
                                    <td class="o">
                                          <table class="table2">
                                                <tr>
                                                      <td rowspan="3" class="img" cellspan="1">
                                                            <img src="images/user.png" width="100px">
                                                      </td>
                                                      <td>
                                                            <h4 class="fullname-doctor">BS.Nguyễn Minh Hiền</h4>
                                                      </td>
                                                <tr>
                                                      <td>
                                                            <p class="khoa">Hồi sức cấp cứu </p>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <td>
                                                            <p class="address-dortor">Hà Nội</p>
                                                      </td>
                                                </tr>
                                          </table>
                                          <table class="table3">
                                                <tr>
                                                      <td>
                                                            <a href="#" class="button1 phone">
                                                                  <span>
                                                                        <i class="fa-solid fa-phone"></i>
                                                                  </span>
                                                                  <span class="button-text">
                                                                        Đặt lịch tư vấn
                                                                  </span>
                                                            </a>
                                                      </td>
                                                      <td>
                                                            <a href="#" class="button1 calender">
                                                                  <span>
                                                                        <i class="fa-regular fa-calendar-days"></i>
                                                                  </span>
                                                                  <span class="button-text">
                                                                        Đặt lịch khám
                                                                  </span>
                                                            </a>
                                                      </td>
                                                </tr>
                                          </table>
                                    </td>
                                    <td class="o">
                                          <table class="table2">
                                                <tr>
                                                      <td rowspan="3" class="img" cellspan="1">
                                                            <img src="images/user.png" width="100px">
                                                      </td>
                                                      <td>
                                                            <h4 class="fullname-doctor">BS.Nguyễn Minh Hiền</h4>
                                                      </td>
                                                <tr>
                                                      <td>
                                                            <p class="khoa">Hồi sức cấp cứu </p>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <td>
                                                            <p class="address-dortor">Hà Nội</p>
                                                      </td>
                                                </tr>
                                          </table>
                                          <table class="table3">
                                                <tr>
                                                      <td>
                                                            <a href="#" class="button1 phone">
                                                                  <span>
                                                                        <i class="fa-solid fa-phone"></i>
                                                                  </span>
                                                                  <span class="button-text">
                                                                        Đặt lịch tư vấn
                                                                  </span>
                                                            </a>
                                                      </td>
                                                      <td>
                                                            <a href="#" class="button1 calender">
                                                                  <span>
                                                                        <i class="fa-regular fa-calendar-days"></i>
                                                                  </span>
                                                                  <span class="button-text">
                                                                        Đặt lịch khám
                                                                  </span>
                                                            </a>
                                                      </td>
                                                </tr>
                                          </table>
                                    </td>
                              </tr>
                        </table>
                  </div>
                  <div class="main-bottom-right">
                        <h3 class="main-bottom-right-title">Chọn tỉnh/thành phố</h3>
                        <div class="search-city">
                              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Tên tỉnh/thành phố"
                                    title="Type in a name">
                              <ul id="myUL">
                                    <li><a href="#">An Giang</a></li>
                                    <li><a href="#">Bà Rịa-Vũng Tàu</a></li>
                                    <li><a href="#">Bắc Giang</a></li>
                                    <li><a href="#">Bắc Kạn</a></li>
                                    <li><a href="#">Bạc Liêu</a></li>
                                    <li><a href="#">Bắc Ninh</a></li>
                                    <li><a href="#">Bến Tre</a></li>
                                    <li><a href="#">Bình Định</a></li>
                                    <li><a href="#">Bình Dương</a></li>
                                    <li><a href="#">Bình Phước</a></li>
                                    <li><a href="#">Bình Thuận</a></li>
                                    <li><a href="#">Cà Mau</a></li>
                                    <li><a href="#">Cần Thơ</a></li>
                                    <li><a href="#">Cao Bằng</a></li>
                                    <li><a href="#">Đà Nẵng</a></li>
                                    <li><a href="#">Đắk Lắk</a></li>
                                    <li><a href="#">Điện biên</a></li>
                                    <li><a href="#">Đồng Nai</a></li>
                                    <li><a href="#">Đồng Tháp</a></li>
                                    <li><a href="#">Gia Lai</a></li>
                                    <li><a href="#">Hà Giang</a></li>
                                    <li><a href="#">Hà Nam</a></li>
                                    <li><a href="#">Hà Nội</a></li>
                                    <li><a href="#">Hà Tĩnh</a></li>
                                    <li><a href="#">Hải Dương</a></li>
                                    <li><a href="#">Hải Phòng</a></li>
                                    <li><a href="#">Hậu Giang</a></li>
                                    <li><a href="#">Hòa Bình</a></li>
                                    <li><a href="#">Hưng Yên</a></li>
                                    <li><a href="#">Khánh Hòa</a></li>
                                    <li><a href="#">Kiên Giang</a></li>
                                    <li><a href="#">Kon Tum</a></li>
                                    <li><a href="#">Lai Châu</a></li>
                                    <li><a href="#">Lâm Đồng</a></li>
                                    <li><a href="#">Lạng Sơn</a></li>
                                    <li><a href="#">Lào Cai</a></li>
                                    <li><a href="#">Long An</a></li>
                                    <li><a href="#">Nam Định</a></li>
                                    <li><a href="#">Nghệ An</a></li>
                                    <li><a href="#">Ninh Bình</a></li>
                                    <li><a href="#">Ninh Thuận</a></li>
                                    <li><a href="#">Phú Thọ</a></li>
                                    <li><a href="#">Quảng Bình</a></li>
                                    <li><a href="#">Quảng Ngãi</a></li>
                                    <li><a href="#">Quảng Ninh</a></li>
                                    <li><a href="#">Quảng Trị</a></li>
                                    <li><a href="#">Sóc Trăng</a></li>
                                    <li><a href="#">Sơn La</a></li>
                                    <li><a href="#">Tây Ninh</a></li>
                                    <li><a href="#">Thái Bình</a></li>
                                    <li><a href="#">Thái Nguyên</a></li>
                                    <li><a href="#">Thanh Hóa</a></li>
                                    <li><a href="#">Thừa Thiên Huế</a></li>
                                    <li><a href="#">Tiền Giang</a></li>
                                    <li><a href="#">TP Hồ Chí Minh</a></li>
                                    <li><a href="#">Trà Vinh</a></li>
                                    <li><a href="#">Tuyên Quang</a></li>
                                    <li><a href="#">Vĩnh Long</a></li>
                                    <li><a href="#">Vĩnh Phúc</a></li>
                                    <li><a href="#">Yên Bái</a></li>
                              </ul>
                              <script>
                              function myFunction() {
                                    var input, filter, ul, li, a, i, txtValue;
                                    input = document.getElementById("myInput");
                                    filter = input.value.toUpperCase();
                                    ul = document.getElementById("myUL");
                                    li = ul.getElementsByTagName("li");
                                    for (i = 0; i < li.length; i++) {
                                          a = li[i].getElementsByTagName("a")[0];
                                          txtValue = a.textContent || a.innerText;
                                          if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                li[i].style.display = "";
                                          } else {
                                                li[i].style.display = "none";
                                          }
                                    }
                              }
                              </script>
                        </div>
                  </div>
            </div>
      </div>
</body>

</html>

</div>
</div>
</div>
</body>

</html>