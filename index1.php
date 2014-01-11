<html>
<head>
    <link type="text/css" rel="stylesheet" href="skitter/css/skitter.styles.css">
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/Header-Footer.css" rel="stylesheet"/>
    <style>
        #banner {
            margin: 10px auto 0;
            width: 1050px;
        }
        td{
            padding: 10px;
        }
    </style>
</head>
<body>
<?php include('Common/Header-Footer-Template.php'); ?>
<div id="banner">
    <div class="box_skitter box_skitter_large">
        <ul>
            <li>
                <a href="#cut">
                    <img src="images/banner/1.jpg" class="cut"/>
                </a>
            </li>
            <li>
                <a href="#cut">
                    <img src="images/banner/2.jpg" class="cut"/>
                </a>
            </li>
            <li>
                <a href="#cut">
                    <img src="images/banner/3.jpg" class="cut"/>
                </a>
            </li>
            <li>
                <a href="#cut">
                    <img src="images/banner/4.jpg" class="cut"/>
                </a>
            </li>
        </ul>
    </div>
</div>
<!--content div for the body -->
<div class="main-content">
    <div class="box-style inner_left">
        <h3 class="header_position">FOCUS 200</h3>

        <div id="left_content">
            Lumin Academy is an educational support company which runs a 15 module support system exclusively for +2
            students named as 'Guidance Plus'. We have field strength of about 25 Full Time Employees and about 130
            Part time Employees. They have enrolled around 28,000 students till now for the Guidance Plus.
        </div>
        <p class="content_link"><a href="focus.php">click</a> to know more</p>
    </div>
    <div class="box-style inner_middle">
        <h3 class="header_position">Check these application download links</h3>

        <div class="application">
            <a href="#">VIT University</a><br>
            <a href="#">Sathyabama University</a><br>
            <a href="#">Hindustan University</a><br>
            <a href="#">KIIT University</a><br>
            <a href="#">B.S.Abdur Rahman University</a><br>
            <a href="#">SRM University</a><br>
            <a href="#">Manipal University</a><br>

            <p class="content_link"><a class="load_box" href="external/apps_link.html" rel="#overlay">click to view full
                    list</a></p>
        </div>
    </div>
    <div class="box-style inner_right">
        <div class="inner_right_content">
            <p class="header_position">Latest News</p>
            <marquee direction="UP" onmouseover="this.setAttribute('scrollamount', 0, 0);"
                     onmouseout="this.setAttribute('scrollamount', 6, 0);">
                <div class="marquee">
                    <ul>
                        <li><a href="#">some content in the news</a></li>
                        <br>
                        <li><a href="#">link for the news two</a></li>
                        <br>
                        <li><a href="#">link for the news three</a></li>
                        <br>
                        <li><a href="#">link for the news four</a></li>
                        <br>
                        <li><a href="#">link for the news two</a></li>
                        <br>
                        <li><a href="#">link for the news three</a></li>
                        <br>
                        <li><a href="#">link for the news four</a></li>
                        <br>
                        <li><a href="#">link for the news two</a></li>
                        <br>
                        <li><a href="#">link for the news three</a></li>
                        <br>
                        <li><a href="#">link for the news four</a></li>
                        <br>
                    </ul>
                </div>
            </marquee>
        </div>
        <!-- sponsors link goes here -->
    </div>
    <div class="sponsors">
        <table>
            <tr>
                <td>
                    <img src="css/images/logo/clou.jpg" style="height: 80px; width: 200px"/>
                </td>
                <td>
                    <img src="css/images/logo/google.jpeg" style="height: 80px; width: 200px"/>
                </td>
                <td>
                    <img src="css/images/logo/microsoft.jpg" style="height: 80px; width: 200px"/>
                </td>
                <td>
                    <img src="css/images/logo/apple.jpg" style="height: 80px; width: 200px"/>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="css/images/logo/clou.jpg" style="height: 80px; width: 200px"/>
                </td>
                <td>
                    <img src="css/images/logo/google.jpeg" style="height: 80px; width: 200px"/>
                </td>
                <td>
                    <img src="css/images/logo/microsoft.jpg" style="height: 80px; width: 200px"/>
                </td>
                <td>
                    <img src="css/images/logo/apple.jpg" style="height: 80px; width: 200px"/>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="css/images/logo/clou.jpg" style="height: 80px; width: 200px"/>
                </td>
                <td>
                    <img src="css/images/logo/google.jpeg" style="height: 80px; width: 200px"/>
                </td>
                <td>
                    <img src="css/images/logo/microsoft.jpg" style="height: 80px; width: 200px"/>
                </td>
                <td>
                    <img src="css/images/logo/apple.jpg" style="height: 80px; width: 200px"/>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php include("Common/footer.php"); ?>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="skitter/js/jquery.easing.1.3.js"></script>
<script src="skitter/js/jquery.animate-colors-min.js"></script>
<script src="skitter/js/jquery.skitter.min.js"></script>
<script>
    $(document).ready(function () {
        $(".box_skitter_large").skitter({
            theme: 'minimalist',
            dots: true,
            preview: true,
            numbers_align: 'center'
        });
    });
</script>
</body>
</html>