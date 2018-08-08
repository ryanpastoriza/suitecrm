


SUGAR.util.doWhen("typeof $ != 'undefined'", function(){


	$(function(){

		var module_title =  $(".module-title-text").text().trim().split(' ')[0];

		var link = $("td[field='name'] b a").attr("href");
		$("td[field='name'] b a").attr("href", link + "%26detail_action%3D" + module_title);


		


	});



});
