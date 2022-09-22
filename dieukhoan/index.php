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
                        <li><a href="../chandoan/index.php">
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
                  <h4>Chính sách quyền riêng tư </h4>
                  <p>
                        Chào mừng bạn đến với hệ thống “Chăm sóc sức khỏe tại nhà” (hoặc gọi tắt là “phần mềm” hoặc “ứng
                        dụng”) </br>
                        Chúng tôi cam kết nghiêm túc thực hiện trách nhiệm của mình liên quan đến bảo mật thông tin theo
                        các quy định về bảo vệ bí
                        mật thông tin cá nhân của pháp luật Việt Nam và tôn trọng quyền riêng tư và sự quan tâm của tất
                        cả người dùng đối với Phần mềm
                        (chúng tôi gọi các dịch vụ chúng tôi cung cấp trên Phần mềm là “Các Dịch Vụ”).</br>
                        Chúng tôi nhận biết tầm quan trọng của “dữ liệu cá nhân” mà bạn đã tin tưởng giao cho chúng tôi
                        và tin rằng chúng tôi có trách nhiệm quản lý,
                        bảo vệ và xử lý dữ liệu cá nhân của bạn một cách thích hợp. Chính sách quyền riêng tư này
                        (“Chính sách quyền riêng tư” hay “Chính Sách”) được
                        thiết kế để giúp bạn hiểu được cách thức chúng tôi thu thập, sử dụng, tiết lộ và/hoặc xử lý dữ
                        liệu cá nhân mà bạn đã cung cấp cho chúng tôi và/hoặc
                        lưu giữ về bạn, cũng như để giúp bạn đưa ra quyết định đúng trước khi cung cấp cho chúng tôi bất
                        kỳ dữ liệu cá nhân nào của bạn.</br>
                        Vui lòng đọc kỹ Chính sách quyền riêng tư này. Nếu bạn có bất kỳ thắc mắc nào về thông tin này
                        hoặc các phương pháp bảo mật thông tin của chúng tôi,
                        vui lòng liên hệ với chúng tôi theo thông tin liên hệ đăng tải trên Website của Sở Y Tế.</br>
                        Bằng việc sử dụng Các Dịch Vụ, đăng ký một tài khoản với chúng tôi, truy cập Phần mềm của chúng
                        tôi, hoặc tiếp cận Các Dịch Vụ, bạn xác nhận và đồng ý rằng bạn chấp nhận các phương pháp, yêu
                        cầu, và/hoặc chính sách được mô tả trong Chính sách quyền riêng tư này, và theo đây bạn đồng ý
                        cho phép chúng tôi thu thập, sử dụng, tiết lộ và/hoặc xử lý dữ liệu cá nhân của bạn như mô tả
                        trong đây.
                  </p>
                  <h3>
                        NẾU BẠN KHÔNG ĐỒNG Ý CHO PHÉP XỬ LÝ DỮ LIỆU CÁ NHÂN CỦA BẠN NHƯ MÔ TẢ TRONG CHÍNH SÁCH NÀY, VUI
                        LÒNG KHÔNG
                        SỬ DỤNG CÁC DỊCH VỤ CỦA CHÚNG TÔI HAY TRUY CẬP PHẦN MỀM CỦA CHÚNG TÔI.
                  </h3>
            </div>
            <div class="main-right">
                  <h4>
                        Điều khoản sử dụng dịch vụ:
                  </h4>
                  <p>
                        • Để bảo vệ quyền của các bạn một cách hiệu quả hơn, chúng tôi đã cung cấp điều khoản sử dụng
                        dịch vụ và quy định sử dụng phần mềm giải thích chi tiết về điều khoản và quy định việc bạn sử
                        dụng các dịch vụ của chúng tôi
                        • Bằng việc sử dụng Các Dịch Vụ hoặc đồng ý với các Điều Khoản Dịch Vụ, bạn đồng ý cho phép
                        chúng tôi thu thập, sử dụng, tiết lộ và/hoặc xử lý Nội Dung và dữ liệu cá nhân của bạn như mô tả
                        trong Chính sách quyền riêng tư của chúng tôi
                  </p>
                  <h4>
                        Điều khoản chung:
                  </h4>
                  <p>
                        Toàn bộ các thông tin về sức khỏe và hông tin cá nhân khác của người dùng phát sinh trong quá
                        trình vận hành dịch vụ được bảo mật và chỉ sử dụng cho mục đích triển khai các biện pháp chăm
                        sóc và bảo vệ sức khỏe người bệnh F0 trên địa bàn thành phố.</br>
                        Chính sách của chúng tôi về sự riêng tư có thể thay đổi trong từng thời điểm. Chúng tôi sẽ không
                        giảm quyền của bạn theo Chính sách về sự riêng tư này khi không có sự đồng ý rõ ràng của bạn.
                        Chúng tôi sẽ đăng bất kỳ thay đổi nào đối với chính sách về sự riêng tư trên trang này, nếu
                        những thay đổi đó quan trọng, chúng tôi sẽ cung cấp thông báo nổi bật hơn (đối với một số dịch
                        vụ nhất định, thông báo bằng email về các thay đổi của chính sách về sự riêng tư).</br>
                        Chính sách quyền riêng tư này là một phần không tách rời với Quy Định Sử Dụng Phần Mềm của chúng
                        tôi. Xin vui lòng đọc thêm các Quy Định Sử Dụng để hiểu rõ các quy định, điều khoản, chính sách
                        và hướng dẫn của chúng tôi trước khi bạn truy cập Phần mềm và/hoặc đăng ký và/hoặc sử dụng các
                        Dịch Vụ trên Phần mềm của chúng tôi.
                  </p>
                  <h3>
                        TÔI ĐÃ ĐỌC CHÍNH SÁCH NÀY VÀ ĐỒNG Ý VỚI TẤT CẢ CÁC ĐIỀU KHOẢN CÓ TRONG NỘI DUNG BÊN TRÊN VÀ BẤT
                        KỲ BẢN CHỈNH SỬA NÀO CỦA NỘI DUNG BÊN TRÊN SAU NÀY. BẰNG VIỆC TIẾP TỤC TRUY CẬP VÀ SỬ DỤNG PHẦN
                        MỀM, TÔI HIỂU RẰNG TÔI ĐANG TẠO RA MỘT CHỮ KÝ ĐIỆN TỬ MÀ NÓ CÓ GIÁ TRỊ VÀ HIỆU LỰC TƯƠNG TỰ NHƯ
                        CHỮ KÝ TÔI KÝ BẰNG TAY.
                  </h3>
            </div>
      </div>
      </div>
</body>

</html>