


SUGAR.util.doWhen("typeof $ != 'undefined'", function(){


	$(function(){

		var module_title =  $(".module-title-text").text().trim().split(' ')[0];

		// var link_name = $("td[field='name'] b a").attr("href");
		// $("td[field='name'] b a").attr("href", link_name + "%26detail_action%3D" + module_title);

		$.each( $("td[field='name'] b a") , function(index, val) {
			link_name = $(val).attr("href");
			$(val).attr("href", link_name + "%26detail_action%3D" + module_title);
		});

		// var link_inq_no = $("td[field='inquiry_number_c'] a").attr("href");
		// $("td[field='inquiry_number_c'] a").attr("href", link_inq_no + "%26detail_action%3D" + module_title);

	});



});
