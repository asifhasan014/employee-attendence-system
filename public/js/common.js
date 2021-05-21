$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //Post request
    $('#employeeResForm').submit(function (e) {
        e.preventDefault();
        console.log('submitted');
        var data = $(this).serialize();
        var url = "{{route('createEmployee')}}"
        console.log(data);

        $.ajax({
            url: url,
            method: 'POST',
            data: data,
            success: function (response) {
                console.log("success field");
                console.log(response);
                $('#exampleModal').modal('hide');
                // You will get response from your PHP page (what you echo or print)
            },
            error: function (error) {
                console.log("error field");
                console.log(error);
            }
        });
    })

    //Get request
    $.ajax({
        type: "GET",
        url: "/attendenceDetailsData",
        success: function (data) {
            var html = '';
            data.forEach(element => {
                html += '<tr>';
                html += '<th scope="row">'+ element.id +'</th>';
                html += '<td>'+element.name+'</td>';
                html += '<td>'+element.email+'</td>';
                html += '<td>'+'present'+'</td>';
                html += '</tr>';
            });
            $('#attendenceDetailsDataTable tbody').html(html);
        }
    });
})