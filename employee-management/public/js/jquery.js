$(document).ready(function () {
    $('.checkbox-info').click(function () {
        let value = $(this).attr("data-id");
        $("." + value).toggle();
    });

    $('.data-employee').mouseenter(function () {
        $(this).css("background-color", "blue");
        $(this).css("color", "white");
    }).mouseleave(function () {
        $(this).css("background-color", "white");
        $(this).css("color", "black");
    });

    $('#search-employee').on('keyup', function () {
        let keyword = $(this).val();
        let location = window.location.origin;
        $.ajax({
            url: location + 'admin/search',
            method: 'GET',
            type: 'json',
            data: {
                keyword: keyword
            },
            success: function (result) {
                console.log(result);
                let html = '';

                $each(result, function (index, item) {
                    html += '<tr class="data-employee">';
                    html += '<td>';
                    html += index + 1;
                    html += '</td>';
                    html += '<td class="data-code">';
                    html += item.employeeNumber;
                    html += '</td>';
                    html += '<td class="data-group">';
                    html += item.group;
                    html += '</td>';
                    html += '<td class="data-name">';
                    html += item.name;
                    html += '</td>';
                    html += '<td class="data-dob">';
                    html += item.dob;
                    html += '</td>';
                    html += '<td class="data-gender">';
                    html += item.gender;
                    html += '</td>';
                    html += '<td class="data-phone">';
                    html += item.phone;
                    html += '</td>';
                    html += '<td>'
                    html += '<a href="">\n' +
                        '<i class="fa fa-edit"></i>\n' +
                        '</a>';
                    html += '</td>';
                    html += '</tr>';
                });
                $('#list-employee').html(html)
            },
            error: function (error) {
                console.log(error);
            }
        })
    })
});
