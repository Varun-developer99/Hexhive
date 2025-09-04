$('#basic-test').DataTable({
    dom: 'Brt',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ],
    pageLength: -1,
    lengthMenu: [[-1], ['All']]
});