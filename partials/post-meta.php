<p class="byline vcard">
  <?php printf( __( 'Posted', 'bonestheme' ) . 
    ' <time itemprop="datePublished" content="2014-07-10" class="updated" datetime="%1$s" pubdate>%2$s</time> ' 
    get_the_time('Y-m-j'), 
    get_the_time(get_option('date_format')),
  ?>
</p>