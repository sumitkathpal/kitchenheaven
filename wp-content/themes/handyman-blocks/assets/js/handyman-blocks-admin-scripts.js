(function ($) {
  "use strict";
  $("#handyman-blocks-dismiss-notice").on("click", ".notice-dismiss", function () {
    $.ajax({
      url: handyman_blocks_admin_localize.ajax_url,
      method: "POST",
      data: {
        action: "handyman_blocks_dismissble_notice",
        nonce: handyman_blocks_admin_localize.nonce,
      },
      success: function (response) {
        if (response.success) {
          console.log("Notice dismissed successfully.");
          $("#handyman-blocks-dismiss-notice").fadeOut(); // Hide the notice
        } else {
          console.log("Failed to dismiss notice:", response.data.message);
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error:", textStatus, errorThrown);
      },
    });
  });
  $("#handyman-blocks-dashboard-tabs-nav li:first-child").addClass("active");
  $(".tab-content").hide();
  $(".tab-content:first").show();
  $("#handyman-blocks-dashboard-tabs-nav li").click(function () {
    $("#handyman-blocks-dashboard-tabs-nav li").removeClass("active");
    $(this).addClass("active");
    $(".tab-content").hide();
    var activeTab = $(this).find("a").attr("href");
    $(activeTab).fadeIn();
    return false;
  });
})(jQuery);
