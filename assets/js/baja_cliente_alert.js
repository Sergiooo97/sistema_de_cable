$(document).ready(function() {
    $('.register_delete_btn').click(function(e) {
        e.preventDefault();
        var deleteid = $(this).closest("tr").find('.delete_id_value').val();
        Swal.fire({
            title: '¿Está seguro que desea dar de baja a este cliente?',
            text: "Estás a tiempo de cancelar!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si!'
        }).then((result) => {
            if (result.value) {
                window.location.href = "<?= url_views() ?>clientes/baja?id=" + deleteid
                if (form.submit()) {
                    Swal.fire(
                        'Ahora te mandaré a la lista :).',
                        'success'
                    )
                }

            }
        })
    });
});