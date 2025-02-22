(function ($) {
  "use strict";
  $("#mighty-plumbers-dismiss-notice").on("click", ".notice-dismiss", function () {
    $.ajax({
      url: mighty_plumbers_admin_localize.ajax_url,
      method: "POST",
      data: {
        action: "mighty_plumbers_dismissble_notice",
        nonce: mighty_plumbers_admin_localize.nonce,
      },
      success: function (response) {
        if (response.success) {
          console.log("Notice dismissed successfully.");
          $("#mighty-plumbers-dismiss-notice").fadeOut(); // Hide the notice
        } else {
          console.log("Failed to dismiss notice:", response.data.message);
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error:", textStatus, errorThrown);
      },
    });
  });
  $("#mighty-plumbers-dashboard-tabs-nav li:first-child").addClass("active");
  $(".tab-content").hide();
  $(".tab-content:first").show();
  $("#mighty-plumbers-dashboard-tabs-nav li").click(function () {
    $("#mighty-plumbers-dashboard-tabs-nav li").removeClass("active");
    $(this).addClass("active");
    $(".tab-content").hide();
    var activeTab = $(this).find("a").attr("href");
    $(activeTab).fadeIn();
    return false;
  });
})(jQuery);
