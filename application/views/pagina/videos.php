<!DOCTYPE html>
<html lang="en-US" class="css3transitions">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8" />
    <title>Videos - Lead Quest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <?php $this->load->view("pagina/commons/assets");  ?>
</head>

<body class="home page header_1_body fixed_slider with_slider_page wpb-js-composer vc_responsive">

    <!-- Start Top Navigation -->
    <div class="top_nav">
        <?php $this->load->view("pagina/commons/top-nav");  ?>
    </div>
    <!-- End of Top Navigation -->

    <!-- Page Background used for background images -->
    <div id="page-bg"></div>

    <!-- Header BEGIN -->
    <div class="header_wrapper header_1 no-transparent ">
        <header id="header" class="">
            <?php $this->load->view("pagina/commons/header");  ?>
        </header>
      
        <div class="header_shadow"><span class=""></span></div>

        <!-- Responsive Menu -->
        <div class="menu-small">
             <?php $this->load->view("pagina/commons/responsive-menu");  ?>
        </div>
        <!-- End Responsive Menu -->

    </div>
    <!-- Header END -->

    <!-- MAIN CONTENT -->
    <div class="top_wrapper no-transparent">
        <!-- breadcumbs -->
        <div class="header_page basic background_image colored_bg" style="background-image:url();background-repeat: no-repeat;background:#f6f6f6; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; color:#2f383d; ">
            <div class="container">
                 <style>
                    .breadcrumbs_c {color:#7c7c7c; font-size:13px; }
                    h1.title {color:#7c7c7c !important; font-size: 40px}
                 </style>
                 <h1 class="title">Videos</h1>
                 <div class="breadcrumbss">
                    <ul class="page_parents pull-right">
                        <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;Estas aquí</li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="<?php echo site_url(); ?>">Inicio</a></li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="<?php echo site_url("videos"); ?>">Videos</a></li>
                    </ul>
                 </div>
            </div>
        </div>
        <!-- /breadcumbs -->

        <section id="content" style="" class="composer_content">

 <section id="content" class="content_portfolio layout-fullsize items-layout-boxed" style="background:;">
<div class="container">
    <div class="row">
        <div class="span12">

<div id="youtube-channel"></div>
    <script>
    var ytc;
    jQuery(function() {
        var count = 2;
        ytc = jQuery("#youtube-channel").youtubeChannel({
            username: "UCLypnjBjnPHv4LsjeUYXNCA",
            channel: "LeadQuestChannel",
            startIndex: 1,
            maxResults: 10,
            orderBy: "published",
            callback: function(api) {
                // check if plugin failed to load any videos
                if (!api.failed) {
                    // log the number of videos loaded so far
                    // console.log("loaded " + api.videoCount + " videos");
                    // execute two more loads asynchronously
                    if (count--) {
                        // add some delay, just because :)
                        setTimeout(function() {
                            api.loadMore(10);
                        }, 1000);
                    }
                }
            }
        });
        // console.log(ytc.api);
    });
    </script>
        </div>
    </div>
</div>    
        </section>

        </section>

        <a href="#" class="scrollup">Scroll</a> 

    </div>
    <!-- MAIN CONTENT -->

    <!-- Footer -->
    <div class="footer_wrapper">
        <footer id="footer" class="type_">
             <?php $this->load->view("pagina/commons/footer");  ?>
        </footer>
    </div>
    <!-- #footer -->

</body>
</html>