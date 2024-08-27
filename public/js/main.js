$(document).ready(function() {
    $('#url-form').submit(function(event) {
        event.preventDefault(); // Evita el envío normal del formulario

        var url = $('#url').val();

        $.ajax({
            url: '/extract-entities',
            type: 'POST',
            data: { url: url },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if (data.error) {
                    alert(data.error);
                } else {
                    var resultsTable = $('#entity-table-body');
                    resultsTable.empty(); // Limpia la tabla antes de agregar nuevos resultados

                    $.each(data.entities, function(index, entity) {
                        resultsTable.append('<tr><td>' + entity.name + '</td><td>' + entity.type + '</td><td>' + entity.salience + '</td></tr>');
                    });
                }
            },
            error: function(xhr, status, error) {
                console.log('Error:', error);
            }
        });
    });
});