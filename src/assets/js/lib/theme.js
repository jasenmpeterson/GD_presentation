$(document).ready(function() {

  // ajax page loading:

  // -- button click

  $('.section-button').click(function () {
    var id = $(this).attr('data-page')
    loadPage(id)
  })

  // -- ajax call

  function loadPage(page) {
    // ajax spinner
    $('.ajax-loader').addClass('active')
    $.ajax({
      url: '/wp-json/acf/v3/pages/'+page,
      success: function (data) {
        pageDisplay(data)
        // ajax spinner
        $('.ajax-loader').removeClass('active')
      }
    })
  }

  // -- page display

  var pageData = {}

  function pageDisplay(data) {
    pageData['bottom_line'] = data.acf.the_bottom_line
    $('.page-wrap').load(pageParams.themeDirectory+'/page-templates/drilling.php', function() {
      $('.product-template .the-bottom-line').append(data.acf.the_bottom_line)
      $('body').addClass('product-page drilling-page')
    })
  }

});
