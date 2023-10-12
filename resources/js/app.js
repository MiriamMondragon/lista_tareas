import './bootstrap';

document.getElementById("input_add").addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        var text = document.getElementById("input_add").value; 
        if (text.length && text.replace(/\s/g, '').length) {
            var li = "<div class='p-1'></div><li class='list-group-item'><label class='container-checkbox'><input type='checkbox'><label class='strikethrough'>"
                    + text
                    + "</label><span class='checkmark'></span></label>";
            document.getElementById("list").insertAdjacentHTML('beforeend', li);
            document.getElementById("input_add").value = "";
        }
    }
});