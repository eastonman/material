function searchJQ () {
    $$('#main-search-btn').on('click', function (e) {
        $$.showOverlay(5001);
        $$('#main-search-container').show();
        $$('#main-search-container').addClass('swashIn');
        $$('#main-search-text').addClass('expand');
    });

    $$('#main-search-close').on('click', function (e) {
        $$.hideOverlay();
        $$('#main-search-container').hide();
        $$('#main-search-container').removeClass('swashIn');
        $$('#main-search-text').removeClass('expand');
    });

}