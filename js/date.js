var today = new Date();
var year = today.getFullYear();

var el = document.getElementById('footer');
el.innerHTML = '<p> &copy;' + year +  '  Dj-techs all right reserved!' + '</p>' + ' <h4>Contact me for more information</h4> ' + ' <a href="contact.html">Contact-me</a>' + '<p class="email"> Djalmas@dj-techs.com</p>';