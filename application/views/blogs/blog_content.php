<!DOCTYPE html>
<html>

<head>
    <title><?php $view_blog['blog_title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="<?php echo base_url(); ?>assets/blog.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<style>
    nav ul li {
        margin-right: 15px;
    }

    nav ul li a {
        color: #000;
        text-decoration: none;
        font-size: 16px;
    }

    nav ul {
        list-style: none;
        display: flex;
        margin: 0;
        padding: 0;
    }
    .blog_content{
        padding: 0px 30px 0px 30px;
        text-indent: 50px;
    }
    .navigation{
        background-color: skyblue;
        padding: 20px;
        text-align: right;
    }
    .home_btn{
        background-color: white;
        border-radius: 5px;
        border: 20px;
        padding: 5px;
        border:1px solid black
    }
</style>

<body>
    <div class="container">
        <div>
            <nav class="navigation">
                <ul>
                    <li><a href="#"class="home_btn"> Home</a></li>
                    <li><a href="#"> About us</a></li>
                    <li><a href="#"> Contact us</a></li>
                    <li><a href="#"> Sign-in</a></li>
                    <li><a href="#"> Careers</a></li>
                </ul>
            </nav>
        </div>
        <h2 style="text-transform: uppercase;color:gray"><?= ucfirst($view_blog['blog_title']) . ':' ?></h2>
        <div class="blog_content">
            <?= $view_blog['blog_content'] ?>
        </div>
        <div align="center">
            <a href="http://localhost/branding_beez/index.php/admin_blog/blog/list" class="btn btn-danger">Go Back </a>
        </div>
    </div>
</body>

</html>