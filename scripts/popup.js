"use strict";!function(s){s.getScript("https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js",function(){var s=Cookies.set("visits")||0;s++,Cookies.set("visits",s,{expires:1,path:"/"}),console.debug(Cookies.set("visits")),Cookies.set("visits")>1?(console.log("More than a visit"),Cookies.remove("visits",{path:""})):(console.log("1 Visit"),UIkit.modal("#bolsa-de-estudo").show())}),s.ajaxSetup({cache:!0})}(jQuery);