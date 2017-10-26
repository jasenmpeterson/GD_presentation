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
      container: '.parallax'

    });

  // minimize time

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
      if(event.scrollDirection === 'FORWARD') {
        $('.product').addClass('active')
      }
    })
    .addTo(sceneController)
    .addIndicators()

  // reliable construction

  new ScrollMagic.Scene({
    triggerElement: '.reliable-construction'
  })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.reliable-construction').addClass('active')
      }
    })
    .addTo(sceneController)
    .addIndicators()

  // power

  new ScrollMagic.Scene({
    triggerElement: '.power'
  })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.power').addClass('active');
      }
    })
    .addTo(sceneController)
    .addIndicators()

  // footprint

  new ScrollMagic.Scene({
    triggerElement: '.smallest-footprint'
  })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.smallest-footprint').addClass('active');
      }
    })
    .addTo(sceneController)
    .addIndicators()

  // smooth operating

  new ScrollMagic.Scene({
    triggerElement: '.smoothest-operating',
    offset: -300
  })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.smoothest-operating').addClass('active');
      }
    })
    .addTo(sceneController)
    .addIndicators()

  // designs

  new ScrollMagic.Scene({
    triggerElement: '.designs'
  })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.designs').addClass('active');
      }
    })
    .addTo(sceneController)
    .addIndicators()

  // module bullet list

  new ScrollMagic.Scene({
    triggerElement: '.modules-bullet-list'
  })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.modules-bullet-list').addClass('active');
      }
    })
    .addTo(sceneController)
    .addIndicators()

  // module bullet list b

  new ScrollMagic.Scene({
    triggerElement: '.bullet-list-b'
  })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.bullet-list-b').addClass('active');
      }
    })
    .addTo(sceneController)
    .addIndicators()
}

