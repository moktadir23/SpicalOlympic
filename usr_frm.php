<!DOCTYPE html>
<html>


<?php
    echo file_get_contents("header.php");  
?>
<body class="theme-light-blue">

<?php
    echo file_get_contents("topbar.php");  

    echo file_get_contents("nav.php");  
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    REGISTRATION FORM 
                </h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>USER INFORMATION</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="qry/sv_usr.php" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="pwd" id="pwd" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="phone" class="form-control" name="phone" required>
                                        <label class="form-label">Phone</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <select class="form-control show-tick" name="usr_type" id="usr_type" >
                                            <option value="">-- Please Select User Type--</option>
                                            <option value="10">Admin</option>
                                            <option value="20">Super User</option>
                                            <option value="30">User</option>
                                            <option value="40">Guest</option>
                                    </select>
                                    </div>
                                </div>
                          


                                <div class="form-group">
                                    <input type="radio" name="status" id="active" class="with-gap">
                                    <label for="active">Active</label>

                                    <input type="radio" name="status" id="inactive" class="with-gap">
                                    <label for="inactive" class="m-l-20">Inactive</label>

                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

        </div>
    </section>

    <?php
        echo file_get_contents("footer.php");  
    ?>
</body>

</html>