<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title><?php echo $titulo; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Plataforma Administrativa">
	<meta name="author" content="Noedir">

	<!-- The styles -->
	<link href="<?php echo base_url(); ?>css/bootstrap-united.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
        <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url(); ?>css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url(); ?>css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url(); ?>css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url(); ?>css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url(); ?>css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url(); ?>css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url(); ?>css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url(); ?>css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url(); ?>css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url(); ?>css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url(); ?>css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url(); ?>css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url(); ?>css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


	<!-- application script for Charisma demo -->
        <!-- The fav icon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.ico">
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js"></script>
        <!-- jQuery UI -->
        <script src="<?php echo base_url(); ?>js/jquery-ui-1.8.21.custom.min.js"></script>
        <!-- transition / effect library -->
        <script src="<?php echo base_url(); ?>js/bootstrap-transition.js"></script>
        <!-- alert enhancer library -->
        <script src="<?php echo base_url(); ?>js/bootstrap-alert.js"></script>
        <!-- modal / dialog library -->
        <script src="<?php echo base_url(); ?>js/bootstrap-modal.js"></script>
        <!-- custom dropdown library -->
        <script src="<?php echo base_url(); ?>js/bootstrap-dropdown.js"></script>
        <!-- scrolspy library -->
        <script src="<?php echo base_url(); ?>js/bootstrap-scrollspy.js"></script>
        <!-- library for creating tabs -->
        <script src="<?php echo base_url(); ?>js/bootstrap-tab.js"></script>
        <!-- library for advanced tooltip -->
        <script src="<?php echo base_url(); ?>js/bootstrap-tooltip.js"></script>
        <!-- popover effect library -->
        <script src="<?php echo base_url(); ?>js/bootstrap-popover.js"></script>
        <!-- button enhancer library -->
        <script src="<?php echo base_url(); ?>js/bootstrap-button.js"></script>
        <!-- accordion library (optional, not used in demo) -->
        <script src="<?php echo base_url(); ?>js/bootstrap-collapse.js"></script>
        <!-- carousel slideshow library (optional, not used in demo) -->
        <script src="<?php echo base_url(); ?>js/bootstrap-carousel.js"></script>
        <!-- autocomplete library -->
        <script src="<?php echo base_url(); ?>js/bootstrap-typeahead.js"></script>
        <!-- tour library -->
        <script src="<?php echo base_url(); ?>js/bootstrap-tour.js"></script>
        <!-- library for cookie management -->
        <script src="<?php echo base_url(); ?>js/jquery.cookie.js"></script>
        <!-- calander plugin -->
        <script src='<?php echo base_url(); ?>js/fullcalendar.min.js'></script>
        <!-- data table plugin -->
        <script src='<?php echo base_url(); ?>js/jquery.dataTables.min.js'></script>

        <!-- chart libraries start -->
        <script src="<?php echo base_url(); ?>js/excanvas.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.flot.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.flot.resize.min.js"></script>
        <!-- chart libraries end -->

        <!-- select or dropdown enhancer -->
        <script src="<?php echo base_url(); ?>js/jquery.chosen.min.js"></script>
        <!-- checkbox, radio, and file input styler -->
        <script src="<?php echo base_url(); ?>js/jquery.uniform.min.js"></script>
        <!-- plugin for gallery image view -->
        <script src="<?php echo base_url(); ?>js/jquery.colorbox.min.js"></script>
        <!-- rich text editor library -->
        <script src="<?php echo base_url(); ?>js/jquery.cleditor.min.js"></script>
        <!-- notification plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.noty.js"></script>
        <!-- file manager library -->
        <script src="<?php echo base_url(); ?>js/jquery.elfinder.min.js"></script>
        <!-- star rating plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.raty.min.js"></script>
        <!-- for iOS style toggle switch -->
        <script src="<?php echo base_url(); ?>js/jquery.iphone.toggle.js"></script>
        <!-- autogrowing textarea plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.autogrow-textarea.js"></script>
        <!-- multiple file upload plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.uploadify-3.1.min.js"></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src="<?php echo base_url(); ?>js/jquery.history.js"></script>
        <script src="<?php echo base_url(); ?>js/charisma.js"></script>

</head>

<body>