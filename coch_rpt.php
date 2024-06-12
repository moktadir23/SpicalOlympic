<!DOCTYPE html>
<html>

<?php
    include("config.php");
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
                    COACH REPORT
                    
                </h2>
            </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            COACH TABLE
                            </h2>
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                            <th>NAME</th>
                                            <th>FATHER NAME </th>
                                            <th>MOTHER NAME </th>
                                            <th>DATE OF BIRTH</th>
                                            <th>GENDER </th>
                                            <th>ORGANIZATION</th>
                                            <th>NID NUMBER</th>
                                            <th>SPORTS/EVENTS</th>
                                            <th>HOUSE / VILLAGE</th>
                                            <th>POLICE STATION / UPAZILA</th>
                                            <th>POST OFFICE</th>
                                            <th>POST CODE</th>
                                            <th>DISTRICT</th>
                                            <th>CELL NUMBER </th>
                                            <th>EMAIL ID</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                            <th>NAME</th>
                                            <th>FATHER NAME </th>
                                            <th>MOTHER NAME </th>
                                            <th>DATE OF BIRTH</th>
                                            <th>GENDER </th>
                                            <th>ORGANIZATION</th>
                                            <th>NID NUMBER</th>
                                            <th>SPORTS/EVENTS</th>
                                            <th>HOUSE / VILLAGE</th>
                                            <th>POLICE STATION / UPAZILA</th>
                                            <th>POST OFFICE</th>
                                            <th>POST CODE</th>
                                            <th>DISTRICT</th>
                                            <th>CELL NUMBER </th>
                                            <th>EMAIL ID</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $result= "SELECT * FROM coach_tbl ";
                                    $get_result = mysqli_query($db, $result) or die(mysqli_error() . 'error 1');

                                    while($get_listitem = mysqli_fetch_array($get_result))
                                    {
                                        ?>
                                        <tr>
                                        <td><?php echo $get_listitem["name"]; ?></td>
                                        <td><?php echo $get_listitem["father"]; ?></td>
                                        <td><?php echo $get_listitem["mother"]; ?></td>
                                        <td><?php echo $get_listitem["dob"]; ?></td>
                                        <td><?php echo $get_listitem["gender"]; ?></td>
                                        <td><?php echo $get_listitem["org"]; ?></td>
                                        <td><?php echo $get_listitem["nid"]; ?></td>
                                        <td><?php echo $get_listitem["spt"]; ?></td>
                                        <td><?php echo $get_listitem["house"]; ?></td>
                                        <td><?php echo $get_listitem["p_station"]; ?></td>
                                        <td><?php echo $get_listitem["p_ofc"]; ?></td>
                                        <td><?php echo $get_listitem["p_code"]; ?></td>
                                        <td><?php echo $get_listitem["dst"]; ?></td>
                                        <td><?php echo $get_listitem["cell"]; ?></td>
                                        <td><?php echo $get_listitem["email"]; ?></td>
                                        
                                        </tr>

                                        <?php } ?>   

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
    <?php
        echo file_get_contents("footer_v2.php");  
    ?>
</body>

</html>