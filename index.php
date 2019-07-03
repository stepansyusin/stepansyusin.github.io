<?php include_once('./data.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Test Excercize</title>
	<link rel="stylesheet" href="assets/css/styles.min.css">
	<script src="assets/js/scripts.min.js"></script>
</head>
<body>
	
	<section class="default_section about">

		<div class="default_section_top">
			<div class="default_section_top_wrap max_width">

				<?php if(isset($data) && isset($data['section_title']) && strlen($data['section_title']) > 0) {
					echo '<div class="default_section_top_title">'. $data['section_title'] .'</div>';
				} ?>
				
				<?php if(isset($data) && isset($data['menu']) && count($data['menu']) > 0) {
					echo '<nav class="about_nav">
							<ul class="about_nav_ul">';
						foreach($data['menu'] as $menu_item_key => $menu_item) {
							echo '<li class="about_nav_ul_li"><a  class="about_nav_ul_li_a">'. $menu_item['title'] .'</a></li>';
						}
					echo '		<hr class="about_nav_ul_hr">
							</ul>
						</nav>';
				} ?>
			</div>
		</div>

		<div class="max_width">
			<div class="default_section_container">

				<div class="default_section_container_left">
					<div class="about_image"></div>
					<?php if(isset($data) && isset($data['about_warning']) && strlen($data['about_warning']) > 0) {
						echo '<div class="about_warning">'. $data['about_warning'] .'</div>';
					} ?>
				</div>

				<div class="default_section_container_right">
					<?php if(isset($data) && isset($data['about_title']) && strlen($data['about_title']) > 0) {
						echo '<div class="about_title">'. $data['about_title'] .'</div>';
					} ?>
					<?php if(isset($data) && isset($data['about_description']) && strlen($data['about_description']) > 0) {
						echo '<div class="about_description">'. $data['about_description'] .'</div>';
					} ?>

					<?php if(isset($data) && isset($data['about_adv']) && count($data['about_adv']) > 0) {
						echo '<div class="about_adv">';

						foreach($data['about_adv'] as $adv) {
							echo '<div class="about_adv_item">
									<div class="about_adv_item__image" style="background-image: url('. $adv['image'] .')"></div>
									<div class="about_adv_item__text">'. $adv['title'].'</div>
								</div>';
						}
						
						echo '</div>';
					} ?>
				</div>

			</div>
		</div>


	</section>

</body>
</html>