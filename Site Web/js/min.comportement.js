function init(){function t(){$("#SousListe1 ul").animate({width:"200px"})}function i(){$("#SousListe1 ul").animate({width:"0px"})}function n(){$("#SousListeGéométrie").animate({width:"500px"}),$("#SousListeGéométrie ul").animate({width:"500px"})}function e(){$("#SousListeAlgèbre").animate({width:"500px"}),$("#SousListeAlgèbre ul").animate({width:"500px"})}function o(){$("#SousListeAlgèbre").animate({width:"0px"}),$("#SousListeAlgèbre ul").animate({width:"0px"})}function u(){$("#SousListeGéométrie").animate({width:"0px"}),$("#SousListeGéométrie ul").animate({width:"0px"})}$("#menu").click(function(){t()}),$("#Algèbre").click(function(){u(),setTimeout(e,340)}),$("#Géométrie").click(function(){o(),setTimeout(n,340)});var a=$("#menu"),s=$("#SousListe1");$(document.body).click(function(t){$(t.target).is(a)||$.contains(a[0],t.target)||$(t.target).is(s)||$.contains(s[0],t.target)||(o(),u(),setTimeout(i,340))}),$(document).ready(function(){$("body").append('<div id="returnOnTop" title="Retour en haut">&nbsp;</div>'),$("#returnOnTop").click(function(){$("html,body").animate({scrollTop:0},"slow")})}),$(window).scroll(function(){0==$(window).scrollTop()?$("#returnOnTop").fadeOut():$("#returnOnTop").fadeIn()})}$(document).ready(init);