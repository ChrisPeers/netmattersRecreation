function setCookie(cname, cvalue, exdays) {
    let d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
  function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
  }
  
  function checkCookie() {
    const acceptCookies = getCookie("acceptCookies");
    if (acceptCookies != 'true') {
        document.querySelector('body').style.overflow = 'hidden';
        document.querySelector('.cookie-cont').style.display = 'flex';
        document.querySelector('.cookie-cont a').onclick = function() {
            setCookie('acceptCookies', true, 30)
            document.querySelector('.cookie-cont').style.display = 'none';
            document.querySelector('body').style.overflow = 'auto';
        };
    }
  }
  
  checkCookie();