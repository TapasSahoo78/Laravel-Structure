let jc;
function ajaxCall(thisVal, successCb = null) {
    let formdata = new FormData(thisVal);

    $.ajax({
        type: "POST",
        url: $(thisVal).attr("data-action"),
        data: formdata,
        processData: false,
        contentType: false,
        dataType: "JSON",
        success: function (data) {
            // console.log(data);
            if (data.status) {
                if (data.message != "") {
                    $.alert({
                        icon: "fa fa-check",
                        title: "Success!",
                        content: data.message,
                        type: "green",
                        typeAnimated: true,
                    });
                }
                if (data.redirect != "") {
                    setTimeout(function () {
                        window.location.href = data.redirect;
                    }, 1000);
                }
                successCb && successCb(data.content);
            } else {
                $.alert({
                    icon: "fa fa-warning",
                    title: "Warning!",
                    content: data.message,
                    type: "orange",
                    typeAnimated: true,
                });
            }
        },
    });
}
function onSubmitModalSuccess() {
    $(".modal").modal("hide");
}

$(document).on("submit", "#adminFrm", function (event) {
    event.preventDefault();
    ajaxCall(this);
});

$(document).on("change", ".switch-input", function (event) {
    var url = $(this).data("url");
    var id = $(this).data("id");
    var status = $(this).is(":checked") ? 1 : 0;
    $.ajax({
        type: "POST",
        url: url,
        dataType: "json",
        cache: false,
        data: { _token: _token, id: id, status: status },
        success: function (data) {
            if (data.status) {
                $.alert({
                    icon: "fa fa-check",
                    title: "Success!",
                    content: data.message,
                    type: "green",
                    typeAnimated: true,
                });
            }
            else{
                $.alert({
                    icon: "fa fa-warning",
                    title: "Warning!",
                    content: data.message,
                    type: "orange",
                    typeAnimated: true,
                });
            }
        },
    });
});


$(document).on("submit", "#filter_form", function (e) {
    e.preventDefault();
    var form_data = $(this).serialize();
    var form_url = $(this).attr("action");
    var $this = $(this);
    $.ajax({
        type: "GET",
        url: form_url,
        dataType: "json",
        cache: false,
        data: form_data,

        success: function (data) {
            if (data.status == 200) {
                $("#load_content").html(data.content);
            } else {
                toastr.error(data.message);
            }
        },
        error: function () {
            toastr.error("Something went wrong");
        },
    });
});

function getDrivers(target, url) {
    var form_data = $("#filter_form").serialize();
    $.ajax({
        type: "GET",
        url: url,
        dataType: "json",
        cache: false,
        data: form_data,
        success: function (data) {
            if (data.status == 200) {
                $(target).html(data.content);
            }
        },
    });
}

// function callGetDrivers() {
//     var target = $(".nav-tabs .active").data("bs-target");
//     var url = $(".nav-tabs .active").data("url");
//     getDrivers(target, url);
// }

// $(document).on("click", ".nav-link", function (e) {
//     var target = $(this).data("bs-target");
//     var url = $(this).data("url");
//     getDrivers(target, url);
// });

// $(document).on("keyup", "#search_keyword", function (e) {
//     if ($(this).val().length > 2 || $(this).val().length == 0) {
//         callGetDrivers();
//     }
// });

function getTotos(target, url) {
    var form_data = $("#filter_form").serialize();
    $.ajax({
        type: "GET",
        url: url,
        dataType: "json",
        cache: false,
        data: form_data,
        success: function (data) {
            if (data.status == 200) {
                $(target).html(data.content);
            }
        },
    });
}

function callGetTotos() {
    var target = $(".nav-tabs .active").data("bs-target");
    var url = $(".nav-tabs .active").data("url");
    getTotos(target, url);
}
$(document).on(
    "click",
    ".ajax-pagination-toto-div .pagination a",
    function (e) {
        e.preventDefault();
        var page_number = $(this).attr("href").split("page=")[1];
        $("#filter_page").val(page_number);
        callGetTotos();
    }
);
// ajax pagination
$(document).on("click", ".ajax-pagination-div .pagination a", function (e) {
    e.preventDefault();
    var page_number = $(this).attr("href").split("page=")[1];
    $("#filter_page").val(page_number);
    $("#filter_form").trigger("submit");
});
