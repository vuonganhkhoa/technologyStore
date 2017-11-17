
$(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        $("#changePassword").change(function(){       //sự kiện thay đổi
                    if($(this).is(":checked"))  //nếu checkbox có checked (== cho phép changePassword)
                    {
                      $(".password").removeAttr('disabled');  // các class .password remove thuộc tính html disabled
                    }
                    else {
                      $(".password").attr('disabled');  //ko check thì add thuộc tính disabled
                    }
                  });

});

$("div.alert").delay(5000).slideUp();

function xac_nhan_xoa(message){

	if(window.confirm(message)){
		return true;
	}
	return false;
}
