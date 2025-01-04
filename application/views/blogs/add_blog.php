<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
       .content_container{
        border:1px solid blue;
        width:70%;
        padding: 40px;
        border-radius: 20px;
        margin-top: 30px;
        background-color: lightyellow;
       }
    </style>
</head>

<body>
    <div class="container" style="width:70%;display:flex;justify-content: center;align-items:center;">
        <div class="content_container">
            <label>
                <h2><span class="disp_add_btn">ADD</span> BLOG</h2>
            </label>
            <div class="table-responsive">
                <table style="width:100%;border-spacing: 0 20px;">
                    <tbody>
                        <tr style="margin-top: 20px;">
                            <td>Blog Title </td>
                            <td> : </td>
                            <td><input class="form-control add_title" type="text" placeholder="Title" required></td>
                        </tr>
                        <tr style="margin-top: 20px;">
                            <td style="vertical-align: top;">Blog Content </td>
                            <td style="vertical-align: top;"> : </td>
                            <td><textarea class="form-control add_content" rows="9" column="50" placeholder="Content" required></textarea></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div align="center" style="padding: 30px;">
                <button class="btn btn-primary" id="btnAddBlog"><span class="disp_save_btn">Save</span></button>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/blog.js" type="text/javascript"></script>

</body>

</html>