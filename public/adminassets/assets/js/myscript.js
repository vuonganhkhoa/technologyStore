
$(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

});

$("div.alert").delay(5000).slideUp();

function xac_nhan_xoa(message){

	if(window.confirm(message)){
		return true;
	}
	return false;
}