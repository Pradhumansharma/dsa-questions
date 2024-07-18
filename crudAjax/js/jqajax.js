
$(document).ready(function () {

    //Ajax request for fetching Data

    function showdata() {

        $.ajax({
            url: "http://localhost/Pradhuman_sharma/crudAjax/retrieve.php",
            method: "GET",
            dataType: 'json',
            success: function (data) {
                if (data) {
                    x = data;
                } else {
                    x = '';
                }
                output = '';
                for (i = 0; i < x.length; i++) {
                    output +=
                        "<tr><td>" +
                        x[i].id +
                        "</td><td>" +
                        x[i].name +
                        "</td><td>" +
                        x[i].email +
                        "</td><td>" +
                        x[i].password +
                        "</td><td> <button class='btn btn-warning btn-sm btn-edit'>Edit</button> <button class='btn btn-danger btn-sm btn-edit'>Delete</button></td></tr>";
                }
                $("#tbody").html(output);
            },
        });

    }

    showdata()

    //Ajax request for Insert Data


    $('#btnadd').click(function (e) {
        e.preventDefault();
        let name = $('#nameid').val();
        let email = $('#emailid').val();
        let password = $('#passwordid').val();

        mydata = { name: name, email: email, password: password }
        $.ajax({
            url: "http://localhost/Pradhuman_sharma/crudAjax/insert.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {
                msg = "<div class='alert alert-dark mt-3'>" + data + "</div>";
                $("#msg").html(msg);
                $("#myform")[0].reset();
            },
        });
    });
});


