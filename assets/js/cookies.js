function el(o){return document.querySelector(o)}function els(o){return document.querySelectorAll(o)}function on(o,e,c){els(o).forEach(o=>o.addEventListener(e,c))}function cookie(o){let e=document.cookie.split("; ").find(e=>e&&e.startsWith(o+"="));return!!e&&e.split("=")[1]}function _reset(){document.cookie="cookie-aceito=false",document.location.reload()}function _switchMode(o){el(".cookie-popup").classList.toggle(o)}on(".cookie-popup button","click",()=>{el(".cookie-popup").classList.add("cookie-popup--accepted"),document.cookie="cookie-aceito=true"}),"true"!==cookie("cookie-aceito")&&el(".cookie-popup").classList.add("cookie-popup--not-accepted");