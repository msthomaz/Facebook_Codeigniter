<html>
<head>
    <!--start css-->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css"/>
    <?php if(isset($css)): foreach($css as $css): ?>
        <link href="<?php echo base_url('assets/css/'); echo $css ?>" rel="stylesheet">
    <?php endforeach; endif; ?>
    <!--end css-->

    <title>
        <?= $title ?>
    </title>

</head>

<body class="container">

<!--    Start Fb-->
<div id='fb-root'></div>
<script src='http://connect.facebook.net/en_US/all.js'></script>
<script>
    FB.init({
        appId:'{ app id }',
        status:true, // check login status
        cookie:true, // enable cookies to allow the server to access the session
        xfbml:true, // parse XFBML
        oauth:true
    });
</script>
<!--    End Fb-->
<div id="content">
    <div class="row" id="header">
        <div class="span12">
            <img src="http://placehold.it/1170x150&text=Header" alt="Header">
        </div>
    </div>

    <div id="main_container" class="row">
        <?= $contents ?>
    </div>

    <div id="footer" class="row">
        <div class="span12">
            <img src="http://placehold.it/1170x50&text=Footer" alt="footer">
        </div>
    </div>
</div>

    <!--start js-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    <?php if(isset($scripts)): foreach($scripts as $script): ?>
        <script src="<?php echo base_url('assets/js/'); echo $script ?>"></script>
    <?php endforeach; endif; ?>
    <!--end js--> 

    <!--start modais-->
    <?php if(isset($modais)): foreach($modais as $modal):
            include 'assets/modal/'.$modal;
        endforeach; endif; ?>
    <!--end modais-->

</body>
</html>
