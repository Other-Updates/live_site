﻿jQuery(document).ready(function(){
	jQuery(".radiantthemes-accordion.element-one").each(function(){
		jQuery(this).find(".radiantthemes-accordion-item-body").slideUp("500");
		jQuery(this).find(".radiantthemes-accordion-item:first-child").children(".radiantthemes-accordion-item-body").slideDown("500");
		jQuery(this).find(".radiantthemes-accordion-item:first-child").addClass("radiantthemes-active");
		jQuery(this).find(".radiantthemes-accordion-item-title").click(function(){
			jQuery(".radiantthemes-accordion.element-one").find(".radiantthemes-accordion-item-body").slideUp("500");
			jQuery(".radiantthemes-accordion.element-one").find(".radiantthemes-accordion-item").removeClass("radiantthemes-active");
			jQuery(this).parent().children(".radiantthemes-accordion-item-body").slideDown("500");
			jQuery(this).parent().addClass("radiantthemes-active");
		});
	});
});