// ajax page loading:

// -- button click

$('.section-button').click(function () {
  var slug = $(this).attr('data-page')
  loadPage(slug);
})

// -- ajax call

function loadPage(slug) {
  // ajax spinner
  $('.wipe').addClass('shown')
  $('.ajax-loader').addClass('active')
  $.ajax({
    url: slug,
    context: document.body,
    success: function (data) {
      // ajax spinner
      $('.ajax-loader').removeClass('active')
      $('.wipe').addClass('active')
      pageDisplay(data);
    }
  })
}

// -- page display

function pageDisplay(data) {
  $('body').addClass('product-page')
  $('.page-wrap').html(data)
  productScrollMagic()
}

// ScrollMagic -- https://github.com/janpaepke/ScrollMagic

function productScrollMagic() {

  // -- scene controller

  var sceneController = new ScrollMagic.Controller(
    {
      container: '.parallax',
      globalSceneOptions: { duration: '200%' }

    });

  // -- the bottom line scene

  new ScrollMagic.Scene({
    triggerElement: '.the-bottom-line'
  })
    .setClassToggle('.the-bottom-line', 'active')
    .addTo(sceneController)

  // -- the product scene

  new ScrollMagic.Scene({
    triggerElement: '.minimize-time-product'
  })
    .on('enter', function(event) {
      console.log('wtf')
      if(event.scrollDirection === 'FORWARD') {
        $('.product').addClass('active')
      }
    })
    .addTo(sceneController)
    .addIndicators()

}

