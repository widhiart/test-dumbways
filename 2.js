var input = document.getElementById('username');
var form = doc
input.oninvalid = function(event) {
    event.target.setCustomValidity('Username valid')
}