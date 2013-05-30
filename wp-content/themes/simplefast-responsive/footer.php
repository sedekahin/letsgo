<div style="clear: both"></div>
</div>
<footer id="footer">
<?php $pages = wp_list_pages('depth=1&title_li=&echo=0');
$pages2 = preg_split('/(<li[^>]*>)/' ,$pages);foreach($pages2 as $var){
echo str_replace('</li>', '', $var);}?><br/>
Copyright &#169; 2012  <a href="<?php echo home_url() ; ?>"><?php bloginfo('name'); ?></a>, All trademarks are the property of the respective trademark owners. <br/>
</footer>
</div>
<script type="text/javascript">
  var vglnk = { api_url: '//api.viglink.com/api',
                key: 'c5d8f82b94ccf34b3c04d4ff2e0d11cb' };

  (function(d, t) {
    var s = d.createElement(t); s.type = 'text/javascript'; s.async = true;
    s.src = ('https:' == document.location.protocol ? vglnk.api_url :
             '//cdn.viglink.com/api') + '/vglnk.js';
    var r = d.getElementsByTagName(t)[0]; r.parentNode.insertBefore(s, r);
  }(document, 'script'));
</script>

<!-- Place this code above the closing body tag of the page. Note: An Overlay cannot be placed on top of an auto play or over a video player which is smaller than 320x280  -->
<script type="text/javascript">
var adParams = {serverdomain: "ads.adk2.com", a: "11698001",overlayEls: "ytIEmbed,ytIFrame"   };
</script>
<script type="text/javascript" src="http://cdn.adk2.com/adstract/scripts/overlay/overlay.js"></script>

<!-- Place this code above the closing body tag of the page -->
<script type='text/javascript'>
var adParams = {a: '11698001', rt:'generic', serverdomain: 'ads.adk2.com', position: 'bottom:left', scrollanimation: '0', closebutton: 'none', size: '160x600'   };
</script>
<script type='text/javascript' src='http://cdn.adk2.com/adstract/scripts/slider/slider.js'></script>


</body>
</html>