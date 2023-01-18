<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
	<title></title>
</head>
<body>
	<?php 
		$img =[
			"https://s1.1zoom.me/big3/147/Waterfalls_Summer_Rivers_Rays_of_light_563524_2800x1874.jpg",
			"https://img.fonwall.ru/o/2p/canada-moraine-lake-ozero-gory.jpg?route=mid&amp;h=750",
			"https://images7.alphacoders.com/409/409546.jpg",
			"https://wp-s.ru/wallpapers/1/44/522441227956809/otvesnye-skaly-tyanutsya-v-nebo.jpg",
		];
	?>
	<div class="wrap">
		<div class="multi-slider">
			<?php foreach ($img as $data => $value){ ?>
			<div class="slide">
				<img src="<?php echo $value ; ?>">
			</div>
			
			<?php }?>
		</div>
	</div>
	<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
            $('.multi-slider').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
            });
        });
    </script>
    <style type="text/css">
    	img{
    		height: 250px;
    		width: 350px;
    	}
    </style>
</body>
</html>