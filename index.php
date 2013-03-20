<!DOCTYPE html>
<html>
<head>
<title>Trung Tâm Kiểm Định 2</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="/~saberlily/cisr/" />
<link type="text/css" rel="stylesheet" href="asserts/themes/new/css/reset.css" />
<link type="text/css" rel="stylesheet" href="asserts/themes/windows8ui/jquery-ui.css" />
<link type="text/css" rel="stylesheet" href="asserts/themes/new/css/clock.css" />
<link type="text/css" rel="stylesheet" href="asserts/themes/new/css/style.css" />
<script type="text/javascript" src="asserts/themes/new/js/jquery.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/jquery-ui.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/jquery.validate.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/jquery.validate.additional.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/nsn.js"></script>
</head>
<body id="kiemdinh" class="loading">
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
<script type="text/javascript" src="asserts/themes/new/js/custom2.js"></script>
</body>
</html>