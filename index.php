<!DOCTYPE html>
<html>
<head>
<title>Trung Tâm Kiểm Định 2</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="/~<?php if (isset($_SERVER['REMOTE_USER'])) echo $_SERVER['REMOTE_USER']; else echo 'saberlily'; ?>/cisr/" />
<link type="text/css" rel="stylesheet" href="asserts/themes/new/css/reset.css" />
<link type="text/css" rel="stylesheet" href="asserts/themes/windows8ui/jquery-ui.css" />
<link type="text/css" rel="stylesheet" href="asserts/themes/new/css/tabzilla.css" />
<link type="text/css" rel="stylesheet" href="asserts/themes/new/css/clock.css" />
<link type="text/css" rel="stylesheet" href="asserts/themes/new/css/feedback.css" />
<link type="text/css" rel="stylesheet" href="asserts/themes/new/css/style.css" />
<script type="text/javascript" src="asserts/themes/new/js/jquery.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/jquery-ui.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/jquery.validate.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/nsn.js"></script>
</head>
<body id="kiemdinh" class="loading">
<a href="http://www.mozilla.org/" id="tabzilla" style="float:none;position:absolute;">mozilla</a>
<div id="globalContainer">
	<header>
		<div id="globalHeader">
			<?php require('includes/layout/header.php'); ?>
		</div>
	</header>
	<section>
		<div id="globalBody">
			<div id="menuWrapper" class="loading">
				<?php require('includes/layout/menu.php'); ?>
			</div>
            <div id="generalWrapper">
                <div id="breadcrumb">
                    <span>Trang Chủ</span>
                    <span class="sep">&gt;</span>
                    <a>Thông Tin Nội Bộ</a>
                </div>
                <ul id="sub-prime">
                    <li class="sitemap item">
                        <a class="pngfix">Site Map</a>
                    </li>
                    <li class="rss item">
                        <a class="pngfix">RSS Feeds</a>
                    </li>
					<li class="clock item">
						<div>
							<span id="Date"></span>,
							<span id="hours">-</span>
							<span class="point">:</span>
							<span id="min">-</span>
							<span class="point">:</span>
							<span id="sec">-</span>
						</div>
					</li>
                </ul>
            </div>
            <div id="newsflash-ticker-placeholder">
                <div class="ticker-container">
                    <div id="news-ticker">
                        <span class="ticker-title">Tin mới nhất</span>
                        <a class="item-1 ticker-item show">Triều Tiên đã châm ngòi cuộc Chiến tranh Thế giới thứ 3</a>
                    </div>
                </div>
            </div>
			<div id="contentWrapper" class="loading">
				<div id="leftWrapper" class="loading">
					<?php require('includes/layout/left_side.php'); ?>
				</div>
				<div id="content" class="hasRightWrapper">
                    <?php /*<div id="northContent">
						<?php require('includes/layout/north_content.php'); ?>
                    </div>*/?>
					<div id="rightWrapper" class="loading">
						<?php require('includes/layout/right_side.php'); ?>
					</div>
					<div id="mainContent" class="loading">
						<?php require('includes/layout/main_content.php'); ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</section>
	<footer>
		<div id="globalFooter">
			<?php require('includes/layout/footer.php'); ?>
		</div>
	</footer>
</div>
<div id="feedback_flyout">
	<a class="handle" href="http://link-for-non-js-users.html">Liên Hệ</a>
	<h3 class="title">Liên Hệ</h3>
	<div class="flyout_form">
		<label class="rowlabel">
			<span class="label">Họ Tên:</span>
			<input type="text" name="feedback_name" class="input" />
		</label>
		<label class="rowlabel">
			<span class="label">Chủ Đề:</span>
			<input type="text" name="feedback_subject" class="input" />
		</label>
		<label class="rowlabel">
			<span class="label">Nội Dung</span>
			<textarea name="feedback_content" class="input"></textarea>
		</label>
		<div class="buttons">
			<input type="button" value="Gửi" />
		</div>
	</div>
</div>
<script type="text/javascript" src="asserts/themes/new/js/jquery.validate.additional.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/jquery.tabSlideOut.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/tabzilla.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/custom2.js"></script>
</body>
</html>