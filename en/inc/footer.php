<?php $bnr = file_get_contents('https://tomonishintaku.com/en/inc/bnr.php'); echo $bnr; ?><section id="foot_only"> <p id="pagetop"><a href="#head"><i class="fa fa-chevron-circle-up"></i></a></p><div class="clearfix" id="foot"><ul><?php $sns = file_get_contents('https://tomonishintaku.com/en/inc/sns.php'); echo $sns; ?></ul> <p class="public_caution">Unauthorized copying and replication of the contents of this site, text and images are strictly prohibited. All Rights Reserved.</p><address> Copyright &copy; 2012-<?php echo date("Y"); ?> Tomoni Shintaku. All Rights Reserved. </address> </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script> <script src="/js/ResponsiveMultiLevelMenu/js/modernizr.custom.js"> </script> <script src="/js/smoothScroll.js"> </script> <script src="/js/hrm/headroom.min.js"> </script> <script src='/js/hrm/jQuery.headroom.min.js'> </script> <script src="/js/rollover.js" async> </script> <script src="/js/lazysizes.min.js"></script> <script src="/js/ResponsiveMultiLevelMenu/js/jquery.dlmenu.js"> </script> <script type="text/javascript">$(function(){$("#head").headroom({"tolerance": 5, "offset": 205, "classes":{"initial": "animated", "pinned": "slideDown", "unpinned": "slideUp", "top": "headroom--top", "notTop": "headroom--not-top"}});}); $(function(){$( '#dl-menu' ).dlmenu();}); $(function(){$("#acMenu dt").on("click", function(){$(this).next().slideToggle();});}); $(function(){$('#contents li a').each(function(){var $href=$(this).attr('href'); if(location.href.match($href)){$(this).addClass('active');}else{$(this).removeClass('active');}});}); $(function(){$("img")}); </script>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Painting",
  "name": "Tomoni Shintaku",
  "url": "https://tomonishintaku.com/en",
  "sameAs": [
    "https://twitter.com/tomoni_en",
	"https://www.facebook.com/tomoni.shintaku",
    "https://www.instagram.com/tomonishintaku",
    "https://www.linkedin.com/in/tomonishintaku"
  ]
}
</script>