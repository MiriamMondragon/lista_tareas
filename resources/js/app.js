import './bootstrap';

document.getElementById("input_add").addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        var text = document.getElementById("input_add").value; 
        if (text.length && text.replace(/\s/g, '').length) {
            document.getElementById('form').action = "/tarea";
            document.getElementById('form').submit();
        }
    }
});

$(document).ready(function(){
    document.getElementById("eliminarMarcados").addEventListener("click", deleteMarked);
    document.getElementById("eliminarTodos").addEventListener("click", deleteAll);

    function deleteAll(){
        var tareas = document.querySelectorAll("input[type=checkbox]");
        for (var i = 0; i < tareas.length; i++){
            tareas[i].checked = true;
        }
        deleteMarked();
    }

    function deleteMarked(){
        let checkboxes = document.querySelectorAll('input[name="check[]"]:checked');
        if(checkboxes.length !== 0){
            let values = [];
            checkboxes.forEach((checkbox) => {
                values.push(checkbox.value);
            });
            document.getElementById('form').action = '/tarea/' + values;

            const del = document.createElement("input");
            del.name = '_method' 
            del.type='hidden';
            del.value='DELETE';

            document.getElementById('form').appendChild(del);
            document.getElementById('form').submit();
        }
        
    }
});
