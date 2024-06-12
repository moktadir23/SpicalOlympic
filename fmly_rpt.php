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
                    FAMILY REPORT
                    
                </h2>
            </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            FAMILY TABLE
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
                                            <th>SPOUSE NAME </th>
                                            <th>NID NUMBER</th>
                                            <th>AGE</th>
                                            <th>GENDER </th>
                                            <th>PROFESSION</th>
                                            <th>ORGANIZATION</th>
                                            <th>SON/DAUGHTER'S NAME </th>
                                            <th>CELL NUMBER </th>
                                            <th>EMAIL ID</th>
                                            <th>HOUSE / VILLAGE</th>
                                            <th>POLICE STATION / UPAZILA</th>
                                            <th>POST OFFICE</th>
                                            <th>POST CODE</th>
                                            <th>DISTRICT</th>
                                            <th>ATHLETES / YOUNG ATHLETES NAME </th>
                                            <th>RELATION</th>
                                            <th>ATHLETES BIRTH CERTIFICATE </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NAME</th>
                                            <th>SPOUSE NAME </th>
                                            <th>NID NUMBER</th>
                                            <th>AGE</th>
                                            <th>GENDER </th>
                                            <th>PROFESSION</th>
                                            <th>ORGANIZATION</th>
                                            <th>SON/DAUGHTER'S NAME </th>
                                            <th>CELL NUMBER </th>
                                            <th>EMAIL ID</th>
                                            <th>HOUSE / VILLAGE</th>
                                            <th>POLICE STATION / UPAZILA</th>
                                            <th>POST OFFICE</th>
                                            <th>POST CODE</th>
                                            <th>DISTRICT</th>
                                            <th>ATHLETES / YOUNG ATHLETES NAME </th>
                                            <th>RELATION</th>
                                            <th>ATHLETES BIRTH CERTIFICATE </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $result= "SELECT * FROM fmly_tbl ";
                                    $get_result = mysqli_query($db, $result) or die(mysqli_error() . 'error 1');

                                    while($get_listitem = mysqli_fetch_array($get_result))
                                    {
                                        ?>
                                        <tr>
                                        <td><?php echo $get_listitem["name"]; ?></td>
                                        <td><?php echo $get_listitem["sp_name"]; ?></td>
                                        <td><?php echo $get_listitem["nid"]; ?></td>
                                        <td><?php echo $get_listitem["age"]; ?></td>
                                        <td><?php echo $get_listitem["gender"]; ?></td>
                                        <td><?php echo $get_listitem["prfsn"]; ?></td>
                                        <td><?php echo $get_listitem["org"]; ?></td>
                                        <td><?php echo $get_listitem["sn_dtr"]; ?></td>
                                        <td><?php echo $get_listitem["cell"]; ?></td>
                                        <td><?php echo $get_listitem["email"]; ?></td>
                                        <td><?php echo $get_listitem["house"]; ?></td>
                                        <td><?php echo $get_listitem["p_station"]; ?></td>
                                        <td><?php echo $get_listitem["p_ofc"]; ?></td>
                                        <td><?php echo $get_listitem["p_code"]; ?></td>
                                        <td><?php echo $get_listitem["dst"]; ?></td>
                                        <td><?php echo $get_listitem["athlt_name"]; ?></td>
                                        <td><?php echo $get_listitem["relation"]; ?></td>
                                        <td><?php echo $get_listitem["athlt_crtficate"]; ?></td>
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