<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/ecomus/admin-ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:58:29 GMT -->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>MHT Tea - Ultimate Admin Dashboard</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/animation.css">
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/styles.css">



    <!-- Font -->
    <link rel="stylesheet" href="assets/Admin/font/fonts.css">

    <!-- Icon -->
    <link rel="stylesheet" href="assets/Admin/icon/style.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/Admin/images/logomain_preview_rev.png">
    <link rel="apple-touch-icon-precomposed" href="assets/Admin/images/logomain_preview_rev.png">

</head>

<body>

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                <!-- section-menu-left -->
                <?php include 'app/Views/Admin/layouts/sidebar.php' ?>
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    <?php include 'app/Views/Admin/layouts/header.php' ?>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                                    <h3>Sửa tài khoản</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="<?= BASE_URL ?>?role=admin&act=home">
                                                <div class="text-tiny">Bảng điều khiển</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="<?= BASE_URL ?>?role=admin&act=all-user">
                                                <div class="text-tiny">Tài khoản</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Sửa tài khoản</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wg-box">
                                    <?php
                                    if (isset($_SESSION['message'])) {
                                        echo "<p>" . $_SESSION['message'] . "</p>";
                                        unset($_SESSION['message']);
                                    }
                                    if (isset($_SESSION['error'])) {
                                        echo "<p>" . $_SESSION['error'] . "</p>";
                                        unset($_SESSION['error']);
                                    }
                                    ?>

                                    <form action="<?= BASE_URL ?>?role=admin&act=update-post-user&id=<?= $_GET['id'] ?>"
                                        method="post" enctype="multipart/form-data">
                                        <div class="mb-5">
                                        <div class="body-title mb-10">Tên tài khoản <span class="tf-color-1">*</span></div>
                                        <input type="text" name="name" id="name" placeholder="Nhập tên" class="form-control" value="<?= $user->name ?>">
                                        </div>
                                        <div class="mb-5">
                                        <div class="body-title mb-10">Email <span class="tf-color-1">*</span></div>
                                            <input type="email" name="email" id="email" placeholder="Nhập email" class="form-control" value="<?= $user->email ?>">
                                        </div>
                                        <div class="mb-5">
                                        <div class="body-title mb-10">Mật khẩu <span class="tf-color-1">*</span></div>
                                            <input type="password" name="password" id="password" placeholder="Nhập mật khẩu" class="form-control">
                                        </div>
                                        <div class="mb-5">
                                        <div class="body-title mb-10">Địa chỉ <span class="tf-color-1">*</span></div>
                                            <input type="text" name="address" id="address" placeholder="Nhập địa chỉ" class="form-control" value="<?= $user->address ?>">
                                        </div>
                                        <div class="mb-5">
                                        <div class="body-title mb-10">Số điện thoại <span class="tf-color-1">*</span></div>
                                            <input type="text" name="phone" id="phone" placeholder="Nhập sđt" class="form-control" value="<?= $user->phone ?>">
                                        </div>
                                        <div class="mb-5">
                                            <img src="<?= $user->image ?>" alt="" width="50">
                                            <div class="body-title mb-10">Ảnh đại diện <span class="tf-color-1">*</span></div>
                                            <input
                                                type="file"
                                                name="image"
                                                id="image"
                                                placeholder="Tải lên hình ảnh"
                                                class="form-control"
                                                accept="image/*"
                                                style="
                                                border: 1px solid #ff7433;
                                                background-color: white;  
                                                border-radius: 5px; 
                                                font-size: 15px; 
                                                cursor: pointer;
                                                transition: background-color 0.3s;
                                                margin-bottom: 15px;
                                            "
                                                onmouseover="this.style.backgroundColor='#ff7433'"
                                                onmouseout="this.style.backgroundColor='white'">
                                        </div>
                                        <div class="mb-5">
                                            <label for="role">Role</label>
                                            <select name="role" id="role" class="mb-10">
                                                <option value="" hidden>Quyền</option>
                                                <option value="1"
                                                    <?php
                                                    if ($user->role == "1") {
                                                        echo "selected";
                                                    }
                                                    ?>>Admin
                                                </option>
                                                <option value="2"
                                                    <?php
                                                    if ($user->role == "2") {
                                                        echo "selected";
                                                    }
                                                    ?>>User
                                                </option>
                                            </select>
                                        </div>
                                        <hr>

                                        <div class="cols gap10">
                                            <button class="tf-button w380" type="submit">Lưu lại</button>
                                            <a href="<?= BASE_URL ?>?role=admin&act=all-user" class="tf-button style-3 w380" type="submit">Hủy bỏ</a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <?php include 'app/Views/Admin/layouts/footer.php' ?>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="assets/Admin/js/jquery.min.js"></script>
    <script src="assets/Admin/js/bootstrap.min.js"></script>
    <script src="assets/Admin/js/bootstrap-select.min.js"></script>
    <script src="assets/Admin/js/zoom.js"></script>
    <script src="assets/Admin/js/morris.min.js"></script>
    <script src="assets/Admin/js/raphael.min.js"></script>
    <script src="assets/Admin/js/morris.js"></script>
    <script src="assets/Admin/js/jvectormap.min.js"></script>
    <script src="assets/Admin/js/jvectormap-us-lcc.js"></script>
    <script src="assets/Admin/js/jvectormap-data.js"></script>
    <script src="assets/Admin/js/jvectormap.js"></script>
    <script src="assets/Admin/js/apexcharts/apexcharts.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-1.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-2.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-3.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-4.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-5.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-6.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-7.js"></script>
    <script src="assets/Admin/js/switcher.js"></script>
    <script defer src="assets/Admin/js/theme-settings.js"></script>
    <script src="assets/Admin/js/main.js"></script>

</body>


<!-- Mirrored from themesflat.co/html/ecomus/admin-ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:58:54 GMT -->

</html>