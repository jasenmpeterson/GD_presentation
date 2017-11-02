// ajax page loading:
// TODO - only trigger scroll magic if triggerElement is in DOM.

// progress bar

var progressBarClicked = false;

function progressBar(section) {

  $('.parallax-nav span').removeClass('active')
  $('span[data-name="'+section+'"]').addClass('active')

}

$(window).scroll(function() {

  // fade parallax nav out on scroll

  $('.parallax-nav').css('opacity', '1')

  clearTimeout( $.data( this, "scrollCheck" ) );

  $.data( this, "scrollCheck", setTimeout(function() {
    $('.parallax-nav').css('opacity', '0.2')
  }, 250) )

  var scrollTop = $(this).scrollTop()

  $('.section').each(function () {

    var topDistance = $(this).offset().top

    if ( ( topDistance - 450 ) < scrollTop ) {
      progressBar($(this).attr('data-name') )
    }

  })

})

// -- button click

$('.section-button').click(function () {
  var slug = $(this).attr('data-page')
  loadPage(slug);
})

// -- ajax call

function loadPage(slug) {

  $('.parallax-nav').css('opacity', '0')

  // ajax spinner
  $('.wipe').addClass('shown')

  $('.ajax-loader').addClass('active')

  $.ajax({
    url: slug,
    context: document.body,
    success: function (data) {

      $('.ajax-loader').removeClass('active')

      $('.wipe').addClass('active')

      pageDisplay(data);

      $('.menu-item a').click(function (e) {

        e.preventDefault();

        if(!$(this).parent().hasClass('is-active')) {
          var slug = $(this).text().toLowerCase()
          var slug = '/'+slug
          loadPage(slug)
        }



      });

      $('.parallax-nav span').removeClass('active');

      scrollMagic();

    }
  })
}

// -- page display

function pageDisplay(data) {

  $('body').addClass('product-page')

  $('.page-wrap').html(data)

  $('.wipe').removeClass('active shown')

  TweenLite.to(window, 2, {scrollTo: 0})

}

// Scroll Magic

function scrollMagic() {

  var controller = new ScrollMagic.Controller({
    globalSceneOptions: {
      container: '.product-template',
      duration: '100%',
      reverse: false
    }
  });

  var minimum = new ScrollMagic.Scene({
    triggerElement: '.minimize-time'
  })
    .on('start', function(event) {
      $(event.target.triggerElement()).addClass('active')
    }).addTo(controller)

  var reliable = new ScrollMagic.Scene({
    triggerElement: '.reliable-construction'
  })
    .on('start', function(event) {
      $(event.target.triggerElement()).addClass('active')
    }).addTo(controller)

  var power = new ScrollMagic.Scene({
    triggerElement: '.power'
  })
    .on('start', function(event) {
      $(event.target.triggerElement()).addClass('active')
    }).addTo(controller)

  var footprint = new ScrollMagic.Scene({
    triggerElement: '.smallest-footprint'
  })
    .on('start', function(event) {
      $(event.target.triggerElement()).addClass('active')
    }).addTo(controller)

  var operating = new ScrollMagic.Scene({
    triggerElement: '.smooth-operating'
  })
    .on('start', function(event) {
      $(event.target.triggerElement()).addClass('active')
    }).addTo(controller)

  if($('.designs').length) {
    var designs = new ScrollMagic.Scene({
      triggerElement: '.designs'
    })
      .on('start', function(event) {
        $(event.target.triggerElement()).addClass('active')
      }).addTo(controller)
  }

  if($('.reliability').length) {
    var reliability = new ScrollMagic.Scene({
      triggerElement: '.reliability'
    })
      .on('start', function(event) {
        $(event.target.triggerElement()).addClass('active')
      }).addTo(controller)
  }

  if($('.ease-of-maintenance').length) {
    var maintenance = new ScrollMagic.Scene({
      triggerElement: '.ease-of-maintenance'
    })
      .on('start', function(event) {
        $(event.target.triggerElement()).addClass('active')
      }).addTo(controller)
  }

  // scroll to

  controller.scrollTo(function (newpos) {
    TweenMax.to(window, 0.5, {scrollTo: {y: newpos, offsetY: 200}});
  })

  $('.parallax-nav span').click(function() {
    var id = $(this).attr("data-name");
    controller.scrollTo('#'+id);
    progressBar(id)
  })

}

// mobile menu

$('.mobile-off-canvas-menu a').click(function(e){
  e.preventDefault();
  $('.mobile-off-canvas-menu').foundation('close')
})
