// ajax page loading:
// TODO - only trigger scroll magic if triggerElement is in DOM.

// progress bar

function progressBar(section) {
  if($('.parallax-nav span').hasClass('active')) {
    $('.parallax-nav span').removeClass('active')
  }
  $('span[data-name="'+section+'"]').addClass('active');
}

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
      $('.parallax-nav').addClass('active')
      $('.menu-item a').click(function (e) {
        e.preventDefault();
        if(!$(this).parent().hasClass('is-active')) {
          var slug = $(this).text().toLowerCase()
          var slug = '/'+slug
          loadPage(slug)
          $('.parallax-nav').removeClass('active')
        }
      });
      $('.parallax-nav span').removeClass('active')
    }
  })
}

// -- page display

function pageDisplay(data) {

  $('body').addClass('product-page')
  $('.page-wrap').html(data)
  productScrollMagic()
  $('.wipe').removeClass('active shown')

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
    triggerElement: '.the-bottom-line',
  })
    .setClassToggle('.the-bottom-line', 'active')
    .addTo(sceneController)

  // -- the product scene

    new ScrollMagic.Scene({
      triggerElement: '.minimize-time-product'
    })
    .on('start', function(event) {
      var section = $(event.target.triggerElement()).attr('data-name');
      progressBar(section)
    })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.product').addClass('active')
      }
     })
    .addTo(sceneController)


  // reliable construction
  new ScrollMagic.Scene({
    triggerElement: '.reliable-construction',
  })
    .on('start', function(event) {
      var section = $(event.target.triggerElement()).attr('data-name');
      progressBar(section)
    })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.reliable-construction').addClass('active')
      }
    })
    .addTo(sceneController)

  // power

  new ScrollMagic.Scene({
    triggerElement: '.power'
  })
    .on('start', function(event) {
      var section = $(event.target.triggerElement()).attr('data-name');
      progressBar(section)
    })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.power').addClass('active');
      }
    })
    .addTo(sceneController)

  // footprint

  new ScrollMagic.Scene({
    triggerElement: '.smallest-footprint'
  })
    .on('start', function(event) {
      var section = $(event.target.triggerElement()).attr('data-name');
      progressBar(section)
    })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.smallest-footprint').addClass('active');
      }
    })
    .addTo(sceneController)

  // smooth operating

  new ScrollMagic.Scene({
    triggerElement: '.smoothest-operating'
  })
    .on('start', function(event) {
      var section = $(event.target.triggerElement()).attr('data-name');
      progressBar(section)
    })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.smoothest-operating').addClass('active');
      }
    })
    .addTo(sceneController)

  // designs

  if($('.designs').length) {
    new ScrollMagic.Scene({
      triggerElement: '.designs'
    })
      .on('start', function(event) {
        var section = $(event.target.triggerElement()).attr('data-name');
        progressBar(section)
      })
      .on('enter', function(event) {
        if(event.scrollDirection === 'FORWARD') {
          $('.designs').addClass('active');
        }
      })
      .addTo(sceneController)
  }

  // module bullet list

  new ScrollMagic.Scene({
    triggerElement: '.modules-bullet-list'
  })
    .on('start', function(event) {
      var section = $(event.target.triggerElement()).attr('data-name');
      progressBar(section)
    })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.modules-bullet-list').addClass('active')
      }
    })
    .addTo(sceneController)

  // module bullet list b

  new ScrollMagic.Scene({
    triggerElement: '.bullet-list-b'
  })
    .on('start', function(event) {
      var section = $(event.target.triggerElement()).attr('data-name');
      progressBar(section)
    })
    .on('enter', function(event) {
      if(event.scrollDirection === 'FORWARD') {
        $('.bullet-list-b').addClass('active');
        $('.fracking-header').addClass('active');
      }
    })
    .addTo(sceneController)

  if($('.ease-of-maintenance').length) {
    new ScrollMagic.Scene({
      triggerElement: '.ease-of-maintenance'
    })    .on('start', function(event) {
      var section = $(event.target.triggerElement()).attr('data-name');
      progressBar(section)
    })
      .on('enter', function(event) {
        if(event.scrollDirection === 'FORWARD') {
          $('.ease-of-maintenance').addClass('active')
        }
      })
      .addTo(sceneController)
  }

  if($('.header-b').length) {
    new ScrollMagic.Scene({
      triggerElement: '.header-b'
    })
      .on('start', function(event) {
        var section = $(event.target.triggerElement()).attr('data-name');
        progressBar(section);
      })
      .on('enter', function(event) {
        if(event.scrollDirection === 'FORWARD') {
          $('.header-b').addClass('active')
        }
      })
      .addTo(sceneController)
  }
  // scroll to

  // sceneController.scrollTo(function (newpos) {
  //   TweenMax.to('.parallax', 0.5, {scrollTo: {y: newpos, offsetY: 200}});
  // })
  //
  // $('.parallax-nav span').click(function() {
  //   var id = $(this).attr("data-name");
  //   sceneController.scrollTo('#'+id);
  // })
}

// mobile menu

$('.mobile-off-canvas-menu a').click(function(e){
  e.preventDefault();
  $('.mobile-off-canvas-menu').foundation('close')
})
