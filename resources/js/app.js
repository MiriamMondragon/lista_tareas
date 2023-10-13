import './bootstrap';

document.getElementById("input_add").addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        var text = document.getElementById("input_add").value; 
        if (text.length && text.replace(/\s/g, '').length) {
            document.getElementById('form').submit();
        }
    }
});