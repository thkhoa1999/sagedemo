<div class="space-100"></div>
<footer id="footer" class="module footer mt-auto">
  <div class="container footer-top">
    <div class="row">
      @php
      wp_nav_menu(array(
      'theme_location' => 'footer',
      'items_wrap' => '%3$s',
      'container' => false,
      'depth' => 2,
      // 'walker' => new App\Libs\Services\Nav\C8ThemeFooterMenu()
      ));
      @endphp
    </div>
    <div class="footer-item-col col-lg-3 col-6">
      {!! App::getFooterAddress() !!}

    </div>
  </div>
  </div>
  <div class="container text-center">
    <div class="footer-copyright last-mb-none p-3">
      {!! App::getCopyRight() !!}
    </div>
  </div>
</footer>

<!-- endblock -->
<noscript>
  <div id="mod-noscript" class="mod-noscript">
    <div class="d-table w-100 h-100">
      <div class="d-table-cell align-middle text-center">
        <div class="container">
          <h3>To use web better, please enable Javascript.</h3>
        </div>
      </div>
    </div>
  </div>
</noscript>


