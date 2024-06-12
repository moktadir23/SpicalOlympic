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
                FAMILY FORM 
                </h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>FAMILY INFORMATION</h2>
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
                            <!-- <form id="form_validation" method="POST"> -->


                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">NAME </span>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">SPOUSE NAME</span>
                                            <input type="text" class="form-control" name="sp_name" id="sp_name" placeholder="Spouse Name" />
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">NID CARD NUMBER</span>
                                            <input type="text" class="form-control" name="nid" id="nid" placeholder="NID Card Number" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                    <div class="form-line">
                                    <span class="font-bold">AGE</span>
                                           <input type="text" class="form-control" name="age" id="age" placeholder="Age">
                                    </div>
                                  </div>
                                </div>
  
                            </div>



                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                       
                                        <span class="font-bold">GENDER </span>

                                        <input type="radio" name="gender" id="male" class="with-gap">
                                        <label for="male">Male</label>

                                        <input type="radio" name="gender" id="female" class="with-gap">
                                        <label for="female" class="m-l-20">Female</label>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">PROFESSION</span>
                                        <input type="text" class="form-control" name="prfsn" id="prfsn" placeholder="Profession" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">INSTITUTION / ORGANIZATION </span>
                                            <input type="text" class="form-control" name="org" id="org" placeholder="Instiution / Organization" />
                                        </div>
                                    </div>
                                </div>
                               
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">SON/DAUGHTER'S NAME </span>
                                            <input type="text" class="form-control" name="sn_dtr" id="sn_dtr" placeholder="Son/Daughter's Name" />
                                        </div>
                                    </div>
                                </div>
                                

                            </div>


                            <div class="row clearfix">
                            <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">CELL NUMBER </span>
                                            <input type="text" class="form-control" name="cell" id="cell" placeholder="Cell Number" />
                                        </div>
                                    </div>
                                </div>
                            <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">EMAIL ID</span>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email ID" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">HOUSE / VILLAGE </span>
                                            <input type="text" class="form-control" name="huse" id="huse" placeholder="House / Village" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">POLICE STATION / UPAZILA </span>
                                            <input type="text" class="form-control" name="p_station" id="p_station" placeholder="Police Station / Upazila" />
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>


                            <div class="row clearfix">
                            <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">POST OFFICE</span>
                                            <input type="text" class="form-control" name="p_ofc" id="p_ofc" placeholder="Post Office" />
                                        </div>
                                    </div>
                                </div>
                            <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">POST CODE</span>
                                           <input type="text" class="form-control" name="p_code" id="p_code" placeholder="Post Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold"> DISTRICT</span>
                                            <input type="text" class="form-control" name="dst" id="dst" placeholder="District" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">ATHLETES / YOUNG ATHLETES NAME </span>
                                            <input type="text" class="form-control" name="athlt_name" id="athlt_name" placeholder="Arhletes/ Young Name" />
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row clearfix">
                            <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">RELATION</span>
                                        <select class="form-control show-tick" name="relation" id="relation">
                                            <option value="">-- Please Select Relation--</option>
                                            <option value="10">Father</option>
                                            <option value="20">Mother</option>
                                            <option value="30">Brother</option>
                                            <option value="40">Sister</option>
                                    </select>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold"> ATHLETES BIRTH CERTIFICATE </span>
                                            <input type="text" class="form-control" name="athlt_crtficate" id="athlt_crtficate" placeholder="Athletes Birth Cirticicate" />
                                        </div>
                                    </div>
                                </div>   
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">Image upload </span>
                                            <input type="file" name="fileToUpload" id="fileToUpload">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                    <button class="btn btn-primary waves-effect" onclick="sv_info ()" type="submit">SUBMIT</button>
                                    </div>
                                </div>
                                
                            </div>
                    
                               
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

        </div>
    </section>

    <script type="text/javascript">
function sv_info (){

// document.getElementById("info_span").innerHTML = '';


var name = document.getElementById("name").value;
var sp_name = document.getElementById("sp_name").value;
var nid = document.getElementById("nid").value;
var age = document.getElementById("age").value;


if( document.getElementById("male").checked == true ){
    var grnder=1;
}else if( document.getElementById("female").checked == true ){
    var grnder=2;
}
var org = document.getElementById("org").value;
var prfsn = document.getElementById("prfsn").value;
var sn_dtr = document.getElementById("sn_dtr").value;

var cell=document.getElementById("cell").value;
var email = document.getElementById("email").value;

var house = document.getElementById("huse").value;
var p_station = document.getElementById("p_station").value;
var p_ofc = document.getElementById("p_ofc").value;
var p_code = document.getElementById("p_code").value;
var dst = document.getElementById("dst").value;
var relation = document.getElementById("relation").value;
var athlt_crtficate = document.getElementById("athlt_crtficate").value;
var athlt_name=document.getElementById("athlt_name").value;

var fileToUpload = document.getElementById("fileToUpload").value;
var filename = fileToUpload.replace(/C:\\fakepath\\/, '');


// var input = document.getElementById("fileToUpload");
// var fReader = new FileReader();
// var real_path=fReader.readAsDataURL(input.files[0]);

alert(fileToUpload + '===>>>' +filename+ '===>>>');
// exit();



$.post('qry/sv_fmly.php', {
            name:name,
            sp_name:sp_name,
            nid:nid,
            age:age,
            grnder:grnder,
            org:org,
            prfsn:prfsn,
            sn_dtr:sn_dtr,
            cell:cell,
            email:email,
            house:house,
            p_station:p_station,
            p_ofc:p_ofc,
            p_code:p_code,
            dst:dst,
            relation:relation,
            athlt_crtficate:athlt_crtficate,
            athlt_name:athlt_name,
            fileToUpload:fileToUpload,
}, function (op_data) {
    alert('Save Info====>>>>'+ op_data);
// var message=document.getElementById("save_message").innerHTML;
// document.getElementById("save_message").innerHTML= message + ' --- '+ op_data;
// $('#Show_message').show();
// $('#error_message').hide();
// $('html,body').scrollTop(0);
});

return true;

}

</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php
        echo file_get_contents("footer_v1.php");  
    ?>
</body>

</html>