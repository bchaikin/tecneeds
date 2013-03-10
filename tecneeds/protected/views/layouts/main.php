<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />




    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700|Open+Sans:400,600' rel='stylesheet' type='text/css'>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div id="mainNav" class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">


                uLance

            </a>

        <div class="nav-collapse">
            <ul class="nav">

                        <li><a href=""><i class="icon-beaker"></i> For Students</a></li>
                        <li><a href=""><i class="icon-building"></i> For Companies</a></li>
            </ul>

            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<?php

?>
<div class="container" id="page">

    <?php echo $content; ?>

</div><!-- page -->

</body>
</html>
