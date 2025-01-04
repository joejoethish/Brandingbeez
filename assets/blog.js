function url_params() {
    var url = window.location.href;
    var path = window.location.pathname;
    var params = path.split('php/');

    return { 'url': url, 'pathname': path, 'route': params[1] };
}
var path = url_params();
var ctrl_page = path.route.split('/');

if (ctrl_page[2] == 'add' && ctrl_page[3] == undefined) {
    $('.disp_add_btn').html('ADD');
}
if (ctrl_page[2] == 'add' && ctrl_page[3] != undefined) {
    $('.disp_add_btn').html('EDIT');
    $('.disp_save_btn').html('Update');
    $('#btnAddBlog').removeClass('btn btn-info');
    $('#btnAddBlog').addClass('btn btn-success');
    edit_blog();
}
function get_blog_list() {
    $('#blog_list > tbody').empty();
    try {
        $.ajax({
            type: "GET",
            url: "http://localhost/branding_beez/index.php/admin_blog/blog/get_blog_list",
            dataType: "json",
            success: function (data) {
                var html = '';
                if (data.length > 0) {
                    $.each(data, function (key, value) {
                        var view_url = 'http://localhost/branding_beez/index.php/admin_blog/blog/view_blog/' + value.id_blog;
                        var edit_url = 'http://localhost/branding_beez/index.php/admin_blog/blog/add/' + value.id_blog;

                        html = '<tr>' +
                            '<td style="text-align:center">' + parseInt(parseInt(key) + 1) + '<input type="hidden" class="id_blog" value="' + value.id_blog + '"></td>' +
                            '<td style="width:150px">' + value.blog_date + '</td>' +
                            '<td style="width:150px">' + value.blog_title + '</td>' +
                            '<td style="width:500px" class="ellipsis ">' + value.blog_content + '</td>' +
                            '<td style="width:200px;text-align:center"><a href="' + view_url + '" class="btn btn-info" > <i class="fa fa-eye" style="paddng-right:5px"></i></a><a href="' + edit_url + '" class="btn btn-success" > <i class="fa fa-edit" style="paddng-right:5px"></i></a><button style="paddng-left:5px" class="btn btn-danger del_blog_list" > <i style="paddng-left:5px" class="fa fa-trash"></button></td>' +
                            '</tr>';
                        $('#blog_list > tbody').append(html);
                       
                    });
                    if ($.fn.dataTable.isDataTable('#blog_list')) {
                        $('#blog_list').DataTable().destroy();
                    }
                    
                    $('#blog_list').DataTable({
                        "searching": true,
                    });
                    
                }
            },
            error: function (xhr, status, error) {
                toastr.error('Unable to proceed your request');

            }
        })
    }
    catch (error) {
        toastr.error(error.message);


    }
}
$(document).ready(function () {
    if(ctrl_page[2]=='list'){
        get_blog_list();
    }
});

$(document).on('click', '.del_blog_list', function () {
    var curRow = $(this).closest('tr');
    var id_blog = curRow.find('.id_blog').val();
    try {
        $.ajax({
            type: "POST",
            url: "http://localhost/branding_beez/index.php/admin_blog/blog/delete",
            data: { 'id_blog': id_blog },
            dataType: "json",
            success: function (data) {

                if (data) {
                    toastr.success('Successfully Deleted');
                    $('#blog_list > tbody').empty();
                    window.location.href="http://localhost/branding_beez/index.php/admin_blog/blog/list"
                } else {
                    toastr.error('Unable to proceed your request');
                }

            },
            error: function (xhr, status, error) {
                toastr.error('Unable to proceed your request');

            }
        })
    }
    catch (error) {
        toastr.error(error.message);


    }

});

$(document).on('click', '#btnAddBlog', function () {
    var allow_submit = true;
    if ($('.add_title').val() == '') {
        toastr.error('Please Enter Title');
        allow_submit = false;
    }

    if ($('.add_content').val() == '') {
        toastr.error('Please Enter Content');
        allow_submit = false;
    }
    if (allow_submit) {
        if(ctrl_page[3]==undefined){
           var url =  "http://localhost/branding_beez/index.php/admin_blog/blog/save_blog";
        }else if(ctrl_page[3]!=undefined){
            var url =  "http://localhost/branding_beez/index.php/admin_blog/blog/update_blog";
        }
        try {
            $.ajax({
                type: "POST",
                url: url,
                data: { 'blog_title': $('.add_title').val(), 'blog_content': $('.add_content').val() ,'id_blog': ctrl_page[3]},
                dataType: "json",
                success: function (data) {

                    if (data) {
                        toastr.success('Successfully Blog Updated');
                        window.location.href = "http://localhost/branding_beez/index.php/admin_blog/blog/list"
                    } else {
                        toastr.error('Unable to proceed your request');
                    }

                },
                error: function (xhr, status, error) {
                    toastr.error('Unable to proceed your request');

                }
            })
        }
        catch (error) {
            toastr.error(error.message);


        }
    }
});

function edit_blog(){
    var blog_id = ctrl_page[3];
    var edit_url = 'http://localhost/branding_beez/index.php/admin_blog/blog/edit_blog/' + blog_id;

    try {
        $.ajax({
            type: "POST",
            url: edit_url,
            data: { 'id_blog': blog_id },
            dataType: "json",
            success: function (data) {
               $('.add_title').val(data.edit_blog.blog_title)
               $('.add_content').val(data.edit_blog.blog_content)
            },
            error: function (xhr, status, error) {
                toastr.error('Unable to proceed your request');

            }
        })
    }
    catch (error) {
        toastr.error(error.message);


    }
}