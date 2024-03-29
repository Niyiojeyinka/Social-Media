<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?php echo base_url($web_favicon_slug); ?>" />
	<meta name="author" content="gettew">
	<meta name="description" content="<?php echo $description; ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />


	<meta property="og:description" content="<?php echo $description; ?>" />

	<meta property="og:url"content="<?php echo current_url(); ?>" />

	<meta property="og:title" content="<?php echo $title; ?>" />


	<meta property="og:image" content="<?php
	if(isset($social_image))
	{



}else{
	echo base_url($web_favicon_slug);


}



	?>
	" />

	<?= isset($noindex)? $noindex:""?>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/w3-theme-pink.css'); ?>">
		<link rel="stylesheet"  href="<?php echo base_url('assets/css/w3mobile.css'); ?>">
		<link rel="stylesheet"  href="<?php echo base_url('assets/css/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet"  href="<?php echo base_url('assets/css/w3.css'); ?>">

		</script>

		

    <style type="text/css">
   .w3-text-light-pink {
   	color:rgb(250,212,226);
   }
    a {

    		text-decoration:none;
    	}
@media screen and (max-width:600px)
{
	.hide_on_mobile {

		display:none;
	}
	#data-frame{
	//height: 100vh;

}

#top {

	background-image: url("<?=base_url('assets/images/mobile_bg.png') ?>");
}
}
@media screen and (min-width:600px)
{
.hide_on_desktop {

display:none;
}
body {
	background-color: #ebebeb;
	padding: 5% 20%;

}
#top {

	background-image: url("<?=base_url('assets/images/desktop_bg.png') ?>");
}

}
    </style>

</head>
<body>
