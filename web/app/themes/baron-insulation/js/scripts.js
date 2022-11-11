(function ($) {

const visibleSlides = 6;

$('.programfilter-body').append('<div id="pagination-container"></div>')


// this triggers filter btn on checkbox filter change
$('.homefilter input[type="checkbox"]').change(function () {
    $('.homefilter fieldset button').trigger('click');
    // console.log('changed')
})

$(document).ready(function () {
    $(document).on('submit', '[data-js-form=filter]', function (e) {
        e.preventDefault();
        var data = $(this).serialize();
        // show loading div hide the result body
        $('.loading-div').show();
        $('.programfilter-body').hide()

        $.ajax({
            url: wpAjax.ajaxUrl,
            data: data,
            type: 'post',
            success: function (result, data) {
                // hide loading div show the result body
                $('[data-js-filter=target]').html(result);
                $('.loading-div').hide()
                $('.programfilter-body').show();
                

            },
            error: function (result) {
                console.warn(result);
            },
        })
    });

});


    $("#showAll").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });

    function filterScroll() {
        if ($(".homefilter").length > 0) {
          if (window.location.href.indexOf("page/") > -1) {
            $("html, body").animate(
              {
                scrollTop: $(".homefilter").offset().top - 60,
              },
              200
            );
          }
        }
      }
      filterScroll()
})(jQuery);