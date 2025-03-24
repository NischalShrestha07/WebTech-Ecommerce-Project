<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .div_center {
            text-align: center;
            padding-top: 40px;

        }

        .h2_font {
            font-size: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')

        <div class="main-panel">
            <div class="content-wrapper">

                <div class="div_center">
                    <h2 class="h2_font">Add Category</h2>

                    <form action="" method="POST">
                        @csrf

                        <input style="color: black; " type="text" name="name" placeholder="Category Name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>