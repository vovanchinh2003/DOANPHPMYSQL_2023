<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <div id="wrapper">
        <div class="headline">
            <h3>Sản phẩm bán chạy</h3>
        </div>
        <ul class="products">
            <?php
            // include "../../connect/config_oop.php";
            if (isset($_POST['search'])) {
                $searchTerm = $_POST['searchTerm'];
                // Thực hiện truy vấn tìm kiếm
                $sqls = "SELECT * FROM sanpham WHERE MaSanPham < 11 AND TenSanPham LIKE '%$searchTerm%'";
            } else {
                $sqls = "SELECT * FROM sanpham WHERE MaSanPham < 11";
            }

            $results = mysqli_query($conn, $sqls);
            if (mysqli_num_rows($results) > 0) {
                while ($row = mysqli_fetch_assoc($results)) {
                    $anhsp = $row["AnhSanPham"];
                    $productId = $row["MaSanPham"];
                    $productName = $row["TenSanPham"];
                    $productPrice = $row["GiaBan"];
                    $productQuantity = 1;
                    ?>
                    <li>
                        <div onclick="displayInvoice(<?php echo $productId; ?>)" class="table">

                            <div class="product-item">
                                <div class="product-top">

                                    <a href="" class="product-thumb">
                                        <img style="width: 100%;"
                                            src="data:image/jpeg;base64,<?php echo base64_encode($anhsp); ?>">
                                    </a>
                                    <input type="hidden" name="quantity" value="<?php echo $productQuantity ?>"
                                        class="form-control" />
                                    <input type="hidden" name="hidden_image" value="<?php echo base64_encode($anhsp); ?>">
                                    <input type="hidden" name="hidden_name" value="<?php echo $productName; ?>" />
                                    <input type="hidden" name="hidden_price" value="<?php echo $productPrice; ?>" />
                                    <input type="hidden" name="hidden_id" value="<?php echo $productId; ?>" />
                                    <!-- mua ngay-->
                                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="buy-now"
                                        value="Add to Cart" id="add-to-cart-form"
                                        onclick="return addProductToCart(<?php echo $productId; ?>);" />
                                </div>
                                <div onclick="displayInvoice(<?php echo $productId; ?>)" class="table">

                                    <div class="product-info">
                                        <div class="product-name">
                                            <?php echo $productName; ?>
                                        </div>
                                        <div class="product-price">
                                            <?php echo $productPrice; ?>VNĐ
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </li>

                    <?php
                }
            }
            ?>
        </ul>
    </div>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');

        * {
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'Open Sans', 'sans-serif';
            font-size: 14px;
            color: #111;
            line-height: 1.15;
        }

        #wrapper {
            max-width: 1170px;
            margin: 0 auto;
        }

        .headline {
            text-align: center;
            margin: 40px 0px;
        }

        #wrapper h3 {
            font-size: 18px;
            color: #bebebe;
            padding: 10px 20px;
            text-transform: uppercase;
            border: 1px solid #bebebe;
            display: inline-block;
            color: #555;
            font-weight: 600;
        }

        ul.products {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        ul.products li {
            flex-basis: 25%;
            padding: 15px 15px;
            box-sizing: border-box;
            margin-bottom: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        ul.products li img {
            max-width: 100%;
            height: auto;
        }

        ul.products li .product-top {
            position: relative;
            overflow: hidden;
        }

        ul.products li .product-top .product-thumb {
            display: block;
        }

        ul.products li .product-top .product-thumb img {
            display: block;
            transition: opacity 0.3s ease;
        }

        ul.products li:hover .product-top .product-thumb img {
            filter: opacity(80%);
        }

        ul.products li .product-top .buy-now {
            text-transform: uppercase;
            text-decoration: none;
            text-align: center;
            display: block;
            background-color: #446084;
            color: #fff;
            padding: 15px 10px;
            position: absolute;
            width: 100%;
            bottom: -100px;
            transition: 0.25s ease-in-out;
            opacity: 0.85;
            border-radius: 5px;
        }

        ul.products li:hover .buy-now {
            bottom: 0px;
        }

        ul.products li .product-info {
            padding: 15px 0px;
        }

        ul.products li .product-info {
            display: block;
            text-decoration: none;
        }

        ul.products li .product-info a.product-cart {
            font-size: 11px;
            text-transform: uppercase;
            color: #9e9e9e;
            padding: 3px 0px;
        }

        ul.products li .product-info a.product-name {
            color: #334862;
            padding: 3px 0px;
        }

        ul.products li .product-info .product-price {
            color: #111;
            padding: 2px 0px;
            font-weight: 600;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="http://localhost/DOANPHPMYSQL_2023/assets/js/cart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script language="Javascript">
        function displayInvoice(productId) {
            // Chuyển hướng người dùng đến trang hiển thị hoá đơn với tableId
            window.location.href = 'http://localhost/DOANPHPMYSQL_2023/view/inc/chitietsanpham.php?productId=' + productId;
        }
    </script>
</body>

</html>