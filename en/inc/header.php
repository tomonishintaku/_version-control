<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59FKPF7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="head"><h2 id="logotype"><a href="/en/" class="std"><img src="/images/common/site-logo_en.png" alt="Contemporary artist｜SHINTAKU Tomoni website"></a><a href="<?php $str = $_SERVER['PHP_SELF']; $str = str_replace('/en', '', $str); echo $str;?>" id="en-link" class="std"><img src="/images/common/head-lang_en.png" alt="website-for-Japanese"></a> <!--a href="/en/blog/" class="blog"><img src="/images/common/head_pic_blog_en.png" alt="Contemporary Japanese artists blog, Really Diary"></a--></h2><div id="dl-menu" class="dl-menuwrapper"><button class="dl-trigger">Open Menu</button><ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="dl-menu"><!--li class="home"><a href="/en/">HOME</a><a href="<?php $str = $_SERVER['PHP_SELF']; $str = str_replace('/en', '', $str); echo $str;?>">JAPANESE<br>Version</a></li--><li class="news"><a href="/en/news/">NEWS</a><?php require_once dirname(__FILE__).'/../../en/blog/wp-load.php'; $page_id = 932; $content = get_page($page_id); echo $content->post_content; ?></li><li itemprop="name"><a itemprop="URL" href="/en/about">CV</a></li><li itemprop="name"><a itemprop="URL" href="/en/works">WORKS</a></li><li itemprop="name"><a itemprop="URL" href="/en/exhibition/">EXHIBITION</a></li><li itemprop="name"><a itemprop="URL" href="/en/blog/amp">BLOG</a></li><li itemprop="name"><a itemprop="URL" href="/blog/amp">BLOG in Japanese</a></li><li itemprop="name"><a itemprop="URL" href="/en/contact">CONTACT</a></li><!--li><a href="http://ec.tagboat.com/en/products/list.php?author_id=100265&tngs_flg=0" target="_blank"><i class="fa fa-cube"></i><span>[SALE]@GALLERY TAGBOAT</span></a></li--><li class="sns"><ul><?php $sns = file_get_contents('https://tomonishintaku.com/en/inc/sns.php'); echo $sns; ?></ul></li>
<li class="lang-switch">
	<a href="<?php $str = $_SERVER['PHP_SELF']; $str = str_replace('/en', '', $str); echo $str;?>" class="common-nav en">Japanese</a><a href="/blog/" class="blog-nav">Japanese</a>
	<span class="common-nav">English</span><span class="blog-nav">English</span>
</li>
</ul></div><?php $path = $_SERVER['SCRIPT_NAME']; if ( $path == '/en/index.html' ) { $h_tag = '<h1 class="std">Contemporary Artist Tomoni Shintaku. I am using food, cuisine and meal motifs as my theme for painting and installation.</h1>';}else{ $h_tag = '<h2 class="std">Contemporary Artist Tomoni Shintaku. My theme is food, cuisine and meal motifs for painting and installation.</h2>';}?><?php echo $h_tag; ?></div><div id="gnav"><ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" id="global_navi" class="clearfix"><li itemprop="name"><a itemprop="URL" href="/en/news">NEWS</a></li><li itemprop="name"><a itemprop="URL" href="/en/about">CV</a></li><li itemprop="name"><a itemprop="URL" href="/en/works">WORKS</a></li><li itemprop="name"><a itemprop="URL" href="/en/exhibition/">EXHIBITION</a></li><li itemprop="name"><a itemprop="URL" href="/en/blog/">BLOG</a></li><li itemprop="name"><a itemprop="URL" href="/en/contact">CONTACT</a></li></ul><a href="/en/news"><div class="pc-line-news"><?php $page_id = 932; $content = get_page($page_id); echo $content->post_content; ?></span></div></a></div>