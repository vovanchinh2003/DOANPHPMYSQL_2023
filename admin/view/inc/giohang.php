<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/navar.css">
    <title>Điện thoại | Smartphone chính hãng, giá rẻ, trợ giá lên đời</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <header class="fs-header">
        <div class="f-hdtop">
            <div class="f-wrap">
                <a class="fs-logo" href="/" title="" aria-label="FPTShop"
                    onclick="ga('send', 'event', 'Header ', 'Click Header', 'Logo');">
                    <i class="ficon f-logo"></i>
                </a>
                <ul class="fs-hdmn">
                    <li>
                        <a href="/tin-tuc" title=""
                            onclick="ga('send', 'event', 'Header ', 'Click Header', 'Thông tin hay');">
                            <div class="base-ic">
                                <i class="demo-icon ic-doc"></i>
                            </div>
                            <span>Thông tin hay</span>
                        </a>
                        <ul class="fs-hdmsub fs-hdmsnews">
                            <li class="">
                                <a href="/tin-tuc" title="">Tin mới</a>
                            </li>
                            <li>
                                <a href="/tin-tuc/tin-khuyen-mai" title="">Khuyến mãi</a>
                            </li>
                            <li>
                                <a href="/tin-tuc/dien-may" title="">Điện máy - Gia dụng</a>
                            </li>
                            <li>
                                <a href="/tin-tuc/thu-thuat" title="">Thủ thuật</a>
                            </li>
                            <li>
                                <a href="/tin-tuc/for-gamers" title="">For Gamers</a>
                            </li>
                            <li>
                                <a href="/tin-tuc/video-hot" title="">Video hot</a>
                            </li>
                            <li>
                                <a href="/tin-tuc/danh-gia" title="">Đánh giá - tư vấn</a>
                            </li>
                            <li>
                                <a href="/tin-tuc/giai-tri" title="">App &Game</a>
                            </li>
                            <li>
                                <a href="/tin-tuc/su-kien" title="">Sự kiện</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/dich-vu" title="Thanh toán & tiện ích"
                            onclick="ga('send', 'event', 'Header ', 'Click Header', 'Thanh toán & tiện ích');">
                            <div class="base-ic">
                                <i class="demo-icon ic-pay-utilities"></i>
                            </div>
                            <span>Thanh toán &tiện ích</span>
                        </a>
                    </li>
                    <li>
                        <!-- <a class="js-open-login js-open-href" title="Tài khoản của tôi"
                            onclick="ga('send', 'event', 'Header ', 'Click Header', 'Tài khoản của tôi');">
                            <div class="base-ic  user-img" id="hidenShowDos">
                                <i class="demo-icon ic-user"></i>
                                <div class="ava-user" style="display:none;">
                                    <img id="user-img-st" src="/Content/v5d/account/images/user-login.png" alt="user" />
                                </div>
                            </div>
                            <span class="lg-name-view">Tài khoản của tôi</span>
                        </a> -->
                        <ul class="fs--sub-user" style="display:none;">
                            <li>
                                <a href="/tai-khoan/lich-su-tich-diem">
                                    <div class="base-ic">
                                        <i class="ic-doc"></i>
                                    </div>
                                    <span>Lịch sử tích điểm</span>
                                </a>
                            </li>
                            <li>
                                <a href="/tai-khoan/don-hang-cua-toi">
                                    <div class="base-ic">
                                        <i class="ic-th-list tabs__icon"></i>
                                    </div>
                                    <span>Đơn hàng của tôi</span>
                                </a>
                            </li>
                            <li>
                                <a href="/tai-khoan/thong-bao-cua-toi">
                                    <div class="base-ic">
                                        <i class="ic-noti tabs__icon" id="hidenShowDosInBell"></i>
                                    </div>
                                    <span>Thông báo của tôi</span>
                                </a>
                            </li>
                            <li>
                                <a class="head-logout">
                                    <div class="base-ic">
                                        <i class="ic-logout"></i>
                                    </div>
                                    <span>Thoát tài khoản</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://localhost/DO_AN_PHP_MYSQL_2023/admin/view/nic/giohang.php" title="" onclick="ga('send', 'event', 'Header ', 'Click Header', 'Giỏ hàng');">
                            <div class="base-ic">
                                <i class="demo-icon ic-cart"></i>
                            </div>
                            <span>Giỏ hàng</span>
                            <b class="fs-cartic countTotalCart" style="display: none;">0</b>
                        </a>
                    </li>
                </ul>
                <div class="fs-search">
                    <form action="" method="post">
                        <input type="text" name="searchTerm" placeholder="Nhập từ khóa tìm kiếm">
                        <span class="icon-cance" id="icon-cance" style="display:none" title="Xóa">✕</span>
                        <button type="submit" aria-label="Tìm kiếm" class="search-button" title="Tìm kiếm">
                            <input type="submit" name="search" value="Tìm kiếm">
                        </button>
                        <div class="fs-sresult" id="result" style="display : none !important;">
                            <div class="fs-sremain">
                                <ul></ul>
                            </div>
                        </div>
                        <div class="fs-result suggest-box sugg-his" style="display: none;">
                            <div class="suggest-title">
                                Lịch sử tìm kiếm
                                <span class="ic-clear">Xóa</span>
                            </div>
                            <ul></ul>
                        </div>
                        <div class="fs-result suggest-box suggest-box-propensity" style="display: none;">
                            <div class="suggest-title">Xu hướng tìm kiếm
                            </div>
                            <ul></ul>
                        </div>
                        <div class="fs-result suggest suggest-box" style="display: none;">
                            <div class="suggest-left">
                                <div class="fs-result-box fs-suggest-page" style="display: none;"></div>
                                <div class="fs-result-box fs-suggest-text">
                                    <ul></ul>
                                </div>
                                <div class="fs-result-box fs-suggest-cate">
                                    <ul></ul>
                                </div>
                            </div>
                            <div class="suggest-right">
                                <div class="fs-result-box fs-suggest-product">
                                    <div class="suggest-title">Sản phẩm được tìm nhiều
                                    </div>
                                    <ul></ul>
                                    <div class="suggest-title suggest-news">Bài viết được tìm nhiều
                                    </div>
                                    <ul class="news-list"></ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <input id="queryID" queryid="" hidden="" style="display:none">
            <input id="userIP" ip-user="" hidden style="display:none">
        </div>
        <nav class="fs-menu">
            <div class="f-wrap">
                <ul class="fs-mnul clearfix">
                    <li>
                        <a href="/dien-thoai" title="ĐIỆN THOẠI"
                            onclick="ga('send', 'event', 'Header ', 'Click Navigation Bar', 'ĐIỆN THOẠI');">
                            <div class="base-ic">
                                <i class="demo-icon ic-mobile-phone"></i>
                            </div>
                            ĐIỆN THOẠI <span class="ficon"></span>
                        </a>
                        <div class="fs-mnsub">
                            <div class="fs-mnbox">
                                <div class="fs-mntd fs-mntd1">
                                    <p class="fs-mnstit">H &#227;ng sản xuất</p>
                                    <ul class="fs-mnsul fs-mnsul3 clearfix">
                                        <?php
                                        include "../../../connect/config_oop.php";
                                        $sql = "SELECT * FROM nhasanxuat";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $TenNhaSanXuat = $row["TenNhaSanXuat"];
                                                ?>
                                                <li>
                                                    <a href="#" title="text">
                                                        <?php echo $TenNhaSanXuat ?>
                                                    </a>
                                                </li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                    <a href="/smartwatch" title="ĐỒNG HỒ THÔNG MINH"
                                        onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'ĐỒNG HỒ THÔNG MINH');">
                                        <p class="fs-mnstit">ĐIỆN THOẠI LOẠI MỚI</p>
                                    </a>
                                    <ul class="fs-mnsul fs-mnsul3 clearfix">
                                        <?php
                                        include "../../../connect/config_oop.php";
                                        $sql = "SELECT * FROM sanpham";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $TenSanPham = $row["TenSanPham"];
                                                ?>
                                                <li>
                                                    <a href="#" title="text">
                                                        <?php echo $TenSanPham ?>
                                                    </a>
                                                </li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="fs-mntd fs-mntd2">
                                    <p class="fs-mnstit">Mức gi &#225;</p>
                                    <ul class="fs-mnsul fs-mnsul1 clearfix">
                                        <li>
                                            <a href="/dien-thoai/duoi-2-trieu" title="Dưới 2 triệu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Dưới 2 triệu');">Dưới
                                                2 triệu</a>
                                        </li>
                                        <li>
                                            <a href="/dien-thoai/tu-2-4-trieu" title="Từ 2 - 4 triệu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Từ 2 - 4 triệu');">Từ
                                                2 - 4 triệu</a>
                                        </li>
                                        <li>
                                            <a href="/dien-thoai/tu-4-7-trieu" title="Từ 4 - 7 triệu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Từ 4 - 7 triệu');">Từ
                                                4 - 7 triệu</a>
                                        </li>
                                        <li>
                                            <a href="/dien-thoai/tu-7-13-trieu" title="Từ 7 - 13 triệu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Từ 7 - 13 triệu');">Từ
                                                7 - 13 triệu</a>
                                        </li>
                                        <li>
                                            <a href="/dien-thoai/tren-13-trieu" title="Tr&#234;n 13 triệu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Tr&#234;n 13 triệu');">Tr
                                                &#234;n 13 triệu</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fs-mntd fs-mntd3">
                                    <p class="fs-mnstit">Bán chạy nhất</p>
                                    <ul class="fs-mnsprod">
                                        <?php
                                        include "../../../connect/config_oop.php";
                                        $sql = "SELECT SanPham.MaSanPham, SanPham.TenSanPham, SanPham.GiaBan, SanPham.AnhSanPham, SUM(ChiTietHoaDon.SoLuongBan) AS TongSoLuongBan
                                        FROM SanPham
                                        JOIN ChiTietHoaDon ON SanPham.MaSanPham = ChiTietHoaDon.MaSanPham
                                        GROUP BY SanPham.MaSanPham, SanPham.TenSanPham, SanPham.GiaBan, SanPham.AnhSanPham
                                        ORDER BY TongSoLuongBan DESC
                                        LIMIT 3;";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $TenSanPham = $row["TenSanPham"];
                                                $GiaBan = $row["GiaBan"];
                                                $AnhSanPham = $row["AnhSanPham"];
                                                ?>
                                                <li class="clearfix">
                                                    <a class="fs-mnspimg" href="#">
                                                        <img style="width: 80px; height: 80px;"
                                                            src="data:image/jpeg;base64,<?php echo base64_encode($AnhSanPham); ?>"
                                                            alt="<?php echo $TenSanPham; ?>">
                                                    </a>
                                                    <div>
                                                        <span>
                                                            <a href="#" title="">
                                                                <?php echo $TenSanPham ?>
                                                            </a>
                                                        </span>
                                                        <p>
                                                            <?php echo $GiaBan ?>
                                                        </p>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/may-tinh-xach-tay"
                            onclick="ga('send', 'event', 'Header ', 'Click Navigation Bar', 'LAPTOP');" title="">
                            <div class="base-ic">
                                <i class="demo-icon ic-laptop"></i>
                            </div>
                            LAPTOP <span class="ficon"></span>
                        </a>
                        <div class="fs-mnsub">
                            <div class="fs-mnbox">
                                <div class="fs-mntd fs-mntd1">
                                    <p class="fs-mnstit">H &#227;ng sản xuất</p>
                                    <ul class="fs-mnsul fs-mnsul3 clearfix">
                                        <li>
                                            <a href="/may-tinh-xach-tay/apple-macbook" title="Apple (MacBook)"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Apple (MacBook)');">Apple
                                                (MacBook)</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/asus" title="Asus"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Asus');">Asus</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/msi" title="MSI"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'MSI');">MSI</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/hp" title="HP"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'HP');">HP</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/lenovo" title="Lenovo"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Lenovo');">Lenovo</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/acer" title="Acer"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Acer');">Acer</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/dell" title="Dell"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Dell');">Dell</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/gigabyte" title="Gigabyte"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Gigabyte');">Gigabyte</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/masstel" title="Masstel"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Masstel');">Masstel</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/microsoft" title="Microsoft (Surface)"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Microsoft (Surface)');">Microsoft
                                                (Surface)</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/lg" title="LG"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'LG');">LG</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/vaio" title="Vaio"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Vaio');">Vaio</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/chuwi" title="Chuwi"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Chuwi');">Chuwi</a>
                                        </li>
                                    </ul>
                                    <p class="fs-mnstit">
                                        <a href="/phan-mem"
                                            onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'PHẦN MỀM');">PHẦN
                                            MỀM</a>
                                    </p>
                                    <ul class="fs-mnsul fs-mnsul3 clearfix">
                                        <li>
                                            <a href="/phan-mem/diet-virus" title="Phần mềm Diệt Virus"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Diệt Virus');">Diệt
                                                Virus</a>
                                        </li>
                                        <li>
                                            <a href="/phan-mem/microsoft-office" title="Phần mềm Microsoft Office"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Microsoft Office');">Microsoft
                                                Office</a>
                                        </li>
                                        <li>
                                            <a href="/phan-mem/windows" title="Phần mềm windows"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Windows');">Windows</a>
                                        </li>
                                        <li>
                                            <a href="/phan-mem/phan-mem-khac" title="Phần mềm Phần mềm khác"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Phần mềm khác');">Phần
                                                mềm khác</a>
                                        </li>
                                    </ul>
                                    <p class="fs-mnstit">
                                        <a href="/may-in"
                                            onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'MÁY IN');">MÁY
                                            IN</a>
                                    </p>
                                    <ul class="fs-mnsul fs-mnsul3 clearfix">
                                        <li>
                                            <a href="/may-in?thuong-hieu=hp" title="HP"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'HP');">HP</a>
                                        </li>
                                        <li>
                                            <a href="/may-in?thuong-hieu=canon" title="Canon"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Canon');">Canon</a>
                                        </li>
                                        <li>
                                            <a href="/may-in?thuong-hieu=brother" title="Brother"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Brother');">Brother</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fs-mntd fs-mntd2">
                                    <p class="fs-mnstit">Mức gi &#225;</p>
                                    <ul class="fs-mnsul fs-mnsul1 clearfix">
                                        <li>
                                            <a href="/may-tinh-xach-tay/duoi-5-trieu" title="Dưới 5 triệu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Dưới 5 triệu');">Dưới
                                                5 triệu</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/tu-5-10-trieu" title="Từ 5 - 10 triệu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Từ 5 - 10 triệu');">Từ
                                                5 - 10 triệu</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/tu-10-15-trieu" title="Từ 10 - 15 triệu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Từ 10 - 15 triệu');">Từ
                                                10 - 15 triệu</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/tu-15-20-trieu" title="Từ 15 - 20 triệu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Từ 15 - 20 triệu');">Từ
                                                15 - 20 triệu</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/tu-20-25-trieu" title="Từ 20 - 25 triệu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Từ 20 - 25 triệu');">Từ
                                                20 - 25 triệu</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/tu-25-30-trieu" title="Từ 25 - 30 triệu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Từ 25 - 30 triệu');">Từ
                                                25 - 30 triệu</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-xach-tay/tren-30-trieu" title="Tr&#234;n 30 triệu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Tr&#234;n 30 triệu');">Tr
                                                &#234;n 30 triệu</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fs-mntd fs-mntd3">
                                    <p class="fs-mnstit">Bán chạy nhất</p>
                                    <ul class="fs-mnsprod">
                                        <?php
                                        include "../../../connect/config_oop.php";
                                        $sql = "SELECT SanPham.MaSanPham, SanPham.TenSanPham, SanPham.GiaBan, SanPham.AnhSanPham, SUM(ChiTietHoaDon.SoLuongBan) AS TongSoLuongBan
                                        FROM SanPham
                                        JOIN ChiTietHoaDon ON SanPham.MaSanPham = ChiTietHoaDon.MaSanPham
										where MaNhaSanXuat = 4
                                        GROUP BY SanPham.MaSanPham, SanPham.TenSanPham, SanPham.GiaBan, SanPham.AnhSanPham
                                        ORDER BY TongSoLuongBan DESC
                                        LIMIT 3;";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $TenSanPham = $row["TenSanPham"];
                                                $GiaBan = $row["GiaBan"];
                                                $AnhSanPham = $row["AnhSanPham"];
                                                ?>
                                                <li class="clearfix">
                                                    <a class="fs-mnspimg" href="#">
                                                        <img style="width: 80px; height: 80px;"
                                                            src="data:image/jpeg;base64,<?php echo base64_encode($AnhSanPham); ?>"
                                                            alt="<?php echo $TenSanPham; ?>">
                                                    </a>
                                                    <div>
                                                        <span>
                                                            <a href="#" title="">
                                                                <?php echo $TenSanPham ?>
                                                            </a>
                                                        </span>
                                                        <p>
                                                            <?php echo $GiaBan ?>
                                                        </p>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/may-tinh-bang"
                            onclick="ga('send', 'event', 'Header ', 'Click Navigation Bar', 'MÁY TÍNH BẢNG');">
                            <div class="base-ic">
                                <i class="demo-icon ic-tablet"></i>
                            </div>
                            MÁY TÍNH BẢNG

                        </a>
                        <div class="fs-mnsub">
                            <div class="fs-mnbox">
                                <div class="fs-mntd fs-mntd1">
                                    <p class="fs-mnstit">H &#227;ng sản xuất</p>
                                    <ul class="fs-mnsul fs-mnsul3 clearfix">
                                        <li>
                                            <a href="/may-tinh-bang/apple-ipad"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Apple (iPad)');"
                                                title="Apple (iPad)">Apple (iPad)</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-bang/samsung"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Samsung');"
                                                title="Samsung">Samsung</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-bang/masstel"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Masstel');"
                                                title="Masstel">Masstel</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-bang/lenovo"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Lenovo');"
                                                title="Lenovo">Lenovo</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-bang/xiaomi"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Xiaomi');"
                                                title="Xiaomi">Xiaomi</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-bang/oppo"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'OPPO');"
                                                title="OPPO">OPPO</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-bang/coolpad"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Coolpad');"
                                                title="Coolpad">Coolpad</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fs-mntd fs-mntd2">
                                    <p class="fs-mnstit">Mức gi &#225;</p>
                                    <ul class="fs-mnsul fs-mnsul1 clearfix">
                                        <li>
                                            <a href="/may-tinh-bang/duoi-2-trieu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Dưới 2 triệu');"
                                                title="Dưới 2 triệu">Dưới 2 triệu</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-bang/tu-2-trieu-den-5-trieu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Từ 2 triệu đến 5 triệu');"
                                                title="Từ 2 triệu đến 5 triệu">Từ 2 triệu đến 5 triệu</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-bang/tu-5-trieu-den-8-trieu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Từ 5 triệu đến 8 triệu');"
                                                title="Từ 5 triệu đến 8 triệu">Từ 5 triệu đến 8 triệu</a>
                                        </li>
                                        <li>
                                            <a href="/may-tinh-bang/tren-8-trieu"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Tr&#234;n 8 triệu');"
                                                title="Tr&#234;n 8 triệu">Tr &#234;n 8 triệu</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fs-mntd fs-mntd3">
                                    <p class="fs-mnstit">Bán chạy nhất</p>
                                    <ul class="fs-mnsprod">
                                        <li class="clearfix">
                                            <a class="fs-mnspimg" href="/may-tinh-bang/ipad-10-2-2021-wi-fi-64gb">
                                                <img data-src="https://images.fpt.shop/unsafe/fit-in/80x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/12/6/638059452014421919_ipad-gen-9-wifi-dd.jpg"
                                                    alt="iPad Gen 9 2021 10.2 inch WiFi 64GB" width="80" height="80"
                                                    loading="lazy" />
                                            </a>
                                            <div>
                                                <span>
                                                    <a href="/may-tinh-bang/ipad-10-2-2021-wi-fi-64gb" title="">iPad Gen
                                                        9 2021 10.2 inch WiFi 64GB</a>
                                                </span>
                                                <p>7.290.000 ₫</p>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a class="fs-mnspimg" href="/may-tinh-bang/samsung-galaxy-tab-a8-wifi">
                                                <img data-src="https://images.fpt.shop/unsafe/fit-in/80x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/4/19/638174908829566756_samsung-galaxy-tab-a8-wifi-dd.jpg"
                                                    alt="Samsung Galaxy Tab A8 WiFi" width="80" height="80"
                                                    loading="lazy" />
                                            </a>
                                            <div>
                                                <span>
                                                    <a href="/may-tinh-bang/samsung-galaxy-tab-a8-wifi" title="">Samsung
                                                        Galaxy Tab A8 WiFi</a>
                                                </span>
                                                <p>5.490.000 ₫</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fs-mntd fs-mntd4">
                                    <a target="_blank"
                                        href="https://fptshop.com.vn/may-tinh-bang/samsung-galaxy-tab-s6-lite-2022"
                                        title="H4_Tab S6 Lite">
                                        <img data-src="https://images.fpt.shop/unsafe/fit-in/248x248/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/7/6/638242377807332502_F-H4_248x248.png"
                                            alt="H4_Tab S6 Lite" width="248" height="248" loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a rel="nofollow" href="/apple" title="APPLE"
                            onclick="ga('send', 'event', 'Header ', 'Click Navigation Bar', 'APPLE');">
                            <div class="base-ic">
                                <i class="demo-icon ic-apple"></i>
                            </div>
                            APPLE <span class="ficon"></span>
                        </a>
                        <div class="fs-mnsub">
                            <div class="fs-mnbox">
                                <div class="fs-mntd fs-mntd1">
                                    <p class="fs-mnstit">C &#225;c sản phẩm Apple</p>
                                    <ul class="fs-mnsul fs-mnsul3 clearfix">
                                        <li>
                                            <a href="/apple/iphone" title="iPhone"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'iPhone');">iPhone</a>
                                        </li>
                                        <li>
                                            <a href="/apple/ipad" title="iPad"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'iPad');">iPad</a>
                                        </li>
                                        <li>
                                            <a href="/apple/macbook" title="Macbook"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Macbook');">MacBook</a>
                                        </li>
                                        <li>
                                            <a href="/apple/watch" title="Apple Watch"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Apple Watch');">Apple
                                                Watch</a>
                                        </li>
                                        <li>
                                            <a href="/apple/tai-nghe" title="Tai nghe"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Apple Tai nghe');">Apple
                                                Tai nghe</a>
                                        </li>
                                        <li>
                                            <a href="/apple/imac" title="iMac"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'iMac');">iMac</a>
                                        </li>
                                        <li>
                                            <a href="/apple/mac-mini" title="Mac Mini"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Mac Mini');">Mac
                                                Mini</a>
                                        </li>
                                        <li>
                                            <a href="/apple/sac-cap" title="Sạc & Cáp"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Sạc & Cáp');">Sạc
                                                &Cáp</a>
                                        </li>
                                        <li>
                                            <a href="/apple/cover" title="Ốp lưng & Bao da"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Ốp lưng & Bao da');">Ốp
                                                lưng &Bao da</a>
                                        </li>
                                        <li>
                                            <a href="/apple/tv-box" title="Apple TV"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Apple TV');">Apple
                                                TV</a>
                                        </li>
                                        <li>
                                            <a href="/apple/chuot" title="Chuột & Trackpad"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Chuột & Trackpad');">Chuột
                                                &Trackpad</a>
                                        </li>
                                        <li>
                                            <a href="/apple/ban-phim" title="Bàn phím"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Bàn phím');">Bàn
                                                phím</a>
                                        </li>
                                        <li>
                                            <a href="/tim-kiem/airtag" title="Airtag"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'AirTag');">AirTag</a>
                                        </li>
                                        <li>
                                            <a href="/ban-hang-doanh-nghiep" title="Hàng dự án"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover ', 'Hàng dự án');">Hàng
                                                dự án</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fs-mntd fs-mntd3">
                                    <p class="fs-mnstit">Bán chạy nhất</p>
                                    <ul class="fs-mnsprod">
                                        <li class="clearfix">
                                            <a class="fs-mnspimg" href="/dien-thoai/iphone-14-pro-max-128gb">
                                                <img data-src="https://images.fpt.shop/unsafe/fit-in/80x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/1/31/638107858631679725_iphone-14-pro-max-dd-1.jpg"
                                                    alt="iPhone 14 Pro Max 128GB" width="80" height="80"
                                                    loading="lazy" />
                                            </a>
                                            <div>
                                                <span>
                                                    <a href="/dien-thoai/iphone-14-pro-max-128gb" title="">iPhone 14 Pro
                                                        Max 128GB</a>
                                                </span>
                                                <p>26.980.000 ₫</p>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a class="fs-mnspimg" href="/dien-thoai/iphone-13-128gb">
                                                <img data-src="https://images.fpt.shop/unsafe/fit-in/80x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/1/31/638107846050335072_iphone-13-dd-1.jpg"
                                                    alt="iPhone 13 128GB" width="80" height="80" loading="lazy" />
                                            </a>
                                            <div>
                                                <span>
                                                    <a href="/dien-thoai/iphone-13-128gb" title="">iPhone 13 128GB</a>
                                                </span>
                                                <p>16.790.000 ₫</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fs-mntd fs-mntd4">
                                    <a target="_blank" href="https://fptshop.com.vn/dien-thoai/iphone-14-pro-max"
                                        title="iPhone 14 Pro Max H4">
                                        <img data-src="https://images.fpt.shop/unsafe/fit-in/248x248/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/7/10/638245952855118300_H4_248x248.png"
                                            alt="iPhone 14 Pro Max H4" width="248" height="248" loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="fs-mnulsb">
                        <a href="/may-tinh-de-ban"
                            onclick="ga('send', 'event', 'Header ', 'Click Navigation Bar', 'PC - Linh kiện');">
                            <div class="base-ic">
                                <i class="demo-icon ic-pc-tower"></i>
                            </div>
                            PC - LINH KIỆN

                        </a>
                        <ul class="fs-hdmsub fs-hdmsubsmall">
                            <li>
                                <a href="/may-tinh-de-ban"
                                    onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'PC');">PC</a>
                            </li>
                            <li>
                                <a href="/linh-kien"
                                    onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Linh kiện');">Linh
                                    kiện</a>
                            </li>
                            <li>
                                <a href="/man-hinh"
                                    onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Màn hình');">Màn
                                    hình</a>
                            </li>
                            <li>
                                <a href="/may-tinh-de-ban/xay-dung-cau-hinh-may-tinh"
                                    onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Xây dựng PC');">Xây
                                    dựng PC</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/phu-kien" title=""
                            onclick="ga('send', 'event', 'Header ', 'Click Navigation Bar', 'PHỤ KIỆN');">
                            <div class="base-ic">
                                <i class="demo-icon ic-headphone"></i>
                            </div>
                            PHỤ KIỆN <span class="ficon"></span>
                        </a>
                        <div class="fs-mnsub">
                            <div class="fs-mnbox">
                                <div class="fs-mntd fs-mntd1">
                                    <p class="fs-mnstit">C &#225;c sản phẩm Phụ Kiện</p>
                                    <ul class="fs-mnsul fs-mnsul3 clearfix">
                                        <li>
                                            <a href="/phu-kien/router" title="Router"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Router');">Router</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/bao-da-op-lung" title="Bao da ốp lưng"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Bao da ốp lưng');">Bao
                                                da ốp lưng</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/sac-du-phong" title="Sạc dự ph&#242;ng"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Sạc dự ph&#242;ng');">Sạc
                                                dự ph &#242;ng</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/the-nho" title="Thẻ nhớ"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Thẻ nhớ');">Thẻ
                                                nhớ</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/phu-kien-apple" title="Phụ kiện Apple"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Phụ kiện Apple');">Phụ
                                                kiện Apple</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/mieng-dan-man-hinh"
                                                title="Miếng d&#225;n m&#224;n h&#236;nh"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Miếng d&#225;n m&#224;n h&#236;nh');">Miếng
                                                d &#225;n m &#224;n h &#236;nh</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/loa" title="Loa"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Loa');">Loa</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/usb-o-cung" title="USB - Ổ cứng"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'USB - Ổ cứng');">USB
                                                - Ổ cứng</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/sac-cap" title="Sạc c&#225;p"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Sạc c&#225;p');">Sạc
                                                c &#225;p</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/tai-nghe" title="Tai nghe"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Tai nghe');">Tai
                                                nghe</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/chuot" title="Chuột"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Chuột');">Chuột</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/ghe-gaming" title="B&#224;n ghế gaming"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'B&#224;n ghế gaming');">B
                                                &#224;n ghế gaming</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/balo-tui-xach" title="Balo - T&#250;i x&#225;ch"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Balo - T&#250;i x&#225;ch');">Balo
                                                - T &#250;i x &#225;ch</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/tv-box" title="TV BOX"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'TV BOX');">TV
                                                BOX</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/phu-kien-khac" title="Phụ kiện kh&#225;c"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Phụ kiện kh&#225;c');">Phụ
                                                kiện kh &#225;c</a>
                                        </li>
                                        <li>
                                            <a href="/phu-kien/phu-kien-khau-trang-loc-khi"
                                                title="Phụ kiện khẩu trang lọc kh&#237;"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Phụ kiện khẩu trang lọc kh&#237;');">Phụ
                                                kiện khẩu trang lọc kh &#237;</a>
                                        </li>
                                        <li>
                                            <a href="//fptshop.com.vn/phu-kien/ban-phim" title="Phụ kiện bàn phím"
                                                onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Bàn phím');">Bàn
                                                phím</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fs-mntd fs-mntd3">
                                    <p class="fs-mnstit">Bán chạy nhất</p>
                                    <ul class="fs-mnsprod">
                                        <li class="clearfix">
                                            <a class="fs-mnspimg"
                                                href="/phu-kien/combo-loa-bluetooth-karaoke-soundmax-m22-mic-khong-day">
                                                <img data-src="https://images.fpt.shop/unsafe/fit-in/80x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/8/23/637968458856440391_HASP-LOA-BLUETOOTH-KARAOKE-SOUNDMAX-M22-AVT.jpg"
                                                    alt="Combo Loa Bluetooth Karaoke Soundmax M22 + Mic kh&#244;ng d&#226;y"
                                                    width="80" height="80" loading="lazy" />
                                            </a>
                                            <div>
                                                <span>
                                                    <a href="/phu-kien/combo-loa-bluetooth-karaoke-soundmax-m22-mic-khong-day"
                                                        title="">Combo Loa Bluetooth Karaoke Soundmax M22 + Mic kh
                                                        &#244;ng d &#226;y</a>
                                                </span>
                                                <p>1.845.000 ₫</p>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a class="fs-mnspimg"
                                                href="/phu-kien/pin-sac-du-phong-quick-charge-li-polymer-10000mah-umetravel-trip10000">
                                                <img data-src="https://images.fpt.shop/unsafe/fit-in/80x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2020/1/14/637146111983706760_Trip10000_Black.jpg"
                                                    alt="Pin sạc dự ph&#242;ng UmeTravel 10000mAh TRIP10000 Quick Charge"
                                                    width="80" height="80" loading="lazy" />
                                            </a>
                                            <div>
                                                <span>
                                                    <a href="/phu-kien/pin-sac-du-phong-quick-charge-li-polymer-10000mah-umetravel-trip10000"
                                                        title="">Pin sạc dự ph &#242;ng UmeTravel 10000mAh TRIP10000
                                                        Quick Charge</a>
                                                </span>
                                                <p>539.000 ₫</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fs-mntd fs-mntd4"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/may-doi-tra" title=""
                            onclick="ga('send', 'event', 'Header ', 'Click Navigation Bar', 'Máy cũ giá rẻ');">
                            <div class="base-ic">
                                <i class="demo-icon ic-renew"></i>
                            </div>
                            Máy cũ giá rẻ
                        </a>
                    </li>
                    <li>
                        <a href="/dien-gia-dung"
                            onclick="ga('send', 'event', 'Header ', 'Click Navigation Bar', 'HÀNG GIA DỤNG');">
                            <div class="base-ic">
                                <i class="demo-icon ic-home-appliances"></i>
                            </div>
                            HÀNG GIA DỤNG

                        </a>
                    </li>
                    <li class="fs-mnulsb">
                        <a href="/sim-so-dep" title=""
                            onclick="ga('send', 'event', 'Header ', 'Click Navigation Bar', 'SIM & THẺ');">
                            <div class="base-ic">
                                <i class="demo-icon ic-sd-card"></i>
                            </div>
                            SIM &THẺ <span class="ficon"></span>
                        </a>
                    </li>
                    <li class="fs-mnulsb">
                        <a href="/khuyen-mai" title=""
                            onclick="ga('send', 'event', 'Header ', 'Click Navigation Bar', 'KHUYẾN MÃI');">
                            <div class="base-ic">
                                <i class="demo-icon ic-promo"></i>
                            </div>
                            KHUYẾN MÃI

                        </a>
                        <ul class="fs-hdmsub fs-hdmsubsmall">
                            <li>
                                <a href="/khuyen-mai/thong-tin-trao-thuong" title=""
                                    onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Thông tin trao thưởng');">Thông
                                    tin trao thưởng</a>
                            </li>
                            <li>
                                <a href="/khuyen-mai" title=""
                                    onclick="ga('send', 'event', 'Header ', 'Click Navigation Hover', 'Tất cả khuyến mại');">Tất
                                    cả khuyến mại</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div style="padding: 60px 140px;" class="container-fluid ">
        <?php
        include '../../../admin/view/nic/cart.php';
        ?>
    </div>
    </div>
</body>

</html>