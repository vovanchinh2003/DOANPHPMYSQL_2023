<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../css/navar.css">
    <style>
        .container {
            justify-content: center;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, auto));
            gap: 1.5rem;
        }

        #table {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        #table img {
            width: 100%;
            height: 218px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        #table h4 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }

        #table .text-info {
            color: blue;
            margin-bottom: 5px;
        }

        #table .text-danger {
            color: red;
            margin-bottom: 10px;
        }

        #table input[type="submit"] {
            background-color: green;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        #table input[type="submit"]:hover {
            background-color: darkgreen;
        }
    </style>
</head>

<body>
    <div id="root">
        <section class="owll-carousel section-p1 ">
            <div class="carousell owl-carousel">
                <?php
                include "../../../connect/config_oop.php";
                $sql = "SELECT * FROM sanpham WHERE MaSanPham > 5 and MaSanPham < 9";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $anhsp = $row["AnhSanPham"]; ?>
                        <div class="card-1">
                            <img style="width: 100%;height: 218px;"
                                src="data:image/jpeg;base64,<?php echo base64_encode($anhsp); ?>">
                        </div>
                    <?php }
                } ?>
            </div>
        </section>
    </div>

    <div class="container">
        <?php
        include "../../../connect/config_oop.php";

        // Xử lý tìm kiếm nếu có dữ liệu được gửi từ biểu mẫu
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
                <div id="table">
                    <form method="post">
                        <div class="tablee">
                            <div onclick="displayInvoice(<?php echo $productId; ?>)" class="table">
                                <img style="width: 100%; height: 218px;"
                                    src="data:image/jpeg;base64,<?php echo base64_encode($anhsp); ?>">
                                <h4 class="text-info">
                                    <?php echo $productName; ?>
                                </h4>
                                <h4 class="text-danger">
                                    <?php echo $productPrice; ?>VNĐ
                                </h4>
                                <input type="hidden" name="quantity" value="<?php echo $productQuantity ?>"
                                    class="form-control" />
                                <input type="hidden" name="hidden_image" value="<?php echo base64_encode($anhsp); ?>">
                                <input type="hidden" name="hidden_name" value="<?php echo $productName; ?>" />
                                <input type="hidden" name="hidden_price" value="<?php echo $productPrice; ?>" />
                                <input type="hidden" name="hidden_id" value="<?php echo $productId; ?>" />
                            </div>
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success"
                                value="Add to Cart" id="add-to-cart-form"
                                onclick="return addProductToCart(<?php echo $productId; ?>);" />
                        </div>
                    </form>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <style>
        .container {
            justify-content: center;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, auto));
            gap: 1.5rem;
        }

        #table {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        #table img {
            width: 100%;
            height: 218px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        #table h4 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }

        #table .text-info {
            color: blue;
            margin-bottom: 5px;
        }

        #table .text-danger {
            color: red;
            margin-bottom: 10px;
        }

        #table textarea {
            width: 100%;
            height: 80px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        #table input[type="submit"] {
            background-color: green;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        #table input[type="submit"]:hover {
            background-color: darkgreen;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.tutorialjinni.com/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script language="Javascript">
        function displayInvoice(productId) {
            // Chuyển hướng người dùng đến trang hiển thị hoá đơn với tableId
            window.location.href = 'chitietsanpham.php?productId=' + productId;
        }
    </script>
    <script>
        $(document).ready(function () {
            $(".carousell").owlCarousel({
                items: 1,
                margin: 20,
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                // nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    700: {
                        items: 2
                    },
                    900: {
                        items: 2
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        });
    </script>
    <script src="../../../js/cart.js"></script>
</body>

</html>