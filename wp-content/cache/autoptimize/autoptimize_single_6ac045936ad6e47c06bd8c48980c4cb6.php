jQuery(document).on("scroll",function(){var pageTop=jQuery(document).scrollTop()
var pageBottom=pageTop+jQuery(window).height()
var tags=jQuery(".fadein")
for(var i=0;i<tags.length;i++){var tag=tags[i]
if(jQuery(tag).offset().top<pageBottom){jQuery(tag).addClass("visible")}else{jQuery(tag).removeClass("visible")}}})
jQuery(document).on("scroll",function(){var pageTop=jQuery(document).scrollTop()
var pageBottom=pageTop+jQuery(window).height()
var tags=jQuery(".banner-centered.box-in .content-container")
for(var i=0;i<tags.length;i++){var tag=tags[i]
if(jQuery(tag).offset().top<pageBottom){jQuery(tag).addClass("visible")}else{jQuery(tag).removeClass("visible")}}})