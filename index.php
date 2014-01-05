<html>
<head><title>Lumin Academy</title>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/colorbox.css" rel="stylesheet"/>
</head>
<body>
<?php include("Common/Header-Footer-Template.php"); ?>
<div class="main-content">
    <div class="inner_left">
        <h3 class="header_position">FOCUS 200</h3>

        <div id="left_content">
            Lumin Academy is an educational support company which runs a 15 module support system exclusively for +2
            students named as 'Guidance Plus'. We have field strength of about 25 Full Time Employees and about 130
            Part time Employees. They have enrolled around 28,000 students till now for the Guidance Plus.
        </div>
        <p class="content_link"><a href="focus.php">click</a> to know more</p>

    </div>
    <div class="inner_middle">
        <!-- application link goes here -->
        <h3 class="header_position">links for application downloading</h3>

        <div class="application">
            <a href="#">IEEE application</a><br>
            <a href="#">SRM admission application</a><br>
            <a href="#">link for application 1</a><br>
            <a href="#">link for application 2</a><br>
            <a href="#">link for application 3</a><br>
            <a href="#">link for application 4</a><br>
            <a href="#">link for application 5</a><br>
            <a href="#">link for application 6</a><br>
            <a href="#">link for application 7</a><br>
            <a href="#">link for application 8</a><br>

            <p class="content_link"><a class="load_box" href="external/apps_link.html" rel="#overlay">click to view full
                    list</a></p>
        </div>
    </div>
    <div class="appple_overlay" id="overlay">
        <div class="contentWrap"></div>
    </div>

    <div class="inner_right">
        <div class="inner_right_content">
            <!-- sponsors link goes here -->
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
            <hr>
            <br>
            sponcer list
        </div>
    </div>
</div>
<?php //include("footer.php"); ?>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.colorbox.js"></script>
<script src="js/index.js"></script>
<script>
    $("a.load_box").colorbox({opacity: 0.5, width: "500px", height: "500px"});
</script>
</body>
</html>