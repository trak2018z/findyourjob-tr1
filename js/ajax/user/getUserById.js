$(document).ready(function () {

    var btn = document.getElementById("get-user-by-id");

    btn.addEventListener("click", function () {
        $.ajax({
            type: "GET",
            cash: false,
            url: "http://findyourjob.dev/public/api/user/1",
            dataType : 'json',
            success: function(json) {
                console.log(json);
            },
            complete: function() {
            },
            error: function () {
            }

        });

    });

});