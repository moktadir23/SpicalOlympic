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
                REGISTRATION FORM 
                </h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">

                        <div class="row clearfix">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-8">
                            <div> <h2 id="error_msg" style="color:#ff0000; display:none; "></h2> </div>
                            <div> <h2 id="show_msg" style="color:#00cc00; display:none; "></h2> </div>
                            <br>
                        </div>
                        </div>    

                        <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                       
                                    <h2>REGISTRATION TYPE</h2>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                       
                                        
                                        <input type="radio" name="type" id="adult" value="1" onclick="myfun(1)" class="with-gap">
                                        <label for="adult" class="font-bold col-pink">Adult Athlets</label>

                                        <input type="radio" name="type" id="young" value="2" onclick="myfun(2)" class="with-gap">
                                        <label for="young" class="font-bold col-teal">Young Athlets</label>

                                        <input type="radio" name="type" id="partner" value="3" onclick="myfun(3)" class="with-gap">
                                        <label for="partner" class="font-bold col-orange">Unified Partners</label>
                                        
                                    </div>
                                </div>

                        </div>        

                           
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
                             <!-- <form enctype="multipart/form-data"> -->


                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">NAME <code>*</code></span>
                                            <input type="text" class="form-control" name="name" id="name" required="" placeholder="Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">FATHER NAME <code>*</code></span>
                                            <input type="text" class="form-control" name="father" id="father" placeholder="Father Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">MOTHER NAME <code>*</code></span>
                                            <input type="text" class="form-control" name="mother" id="mother" placeholder="Mother Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">DATE OF BIRTH <code>*</code></span>
                                           <input type="text" class="datepicker form-control" name="dob" id="dob" placeholder="Please choose Date of Bitrh ">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                       
                                        <span class="font-bold">GENDER <code>*</code></span>

                                        <input type="radio" name="gender" id="male" value="1" class="with-gap">
                                        <label for="male">Male</label>

                                        <input type="radio" name="gender" id="female" value="2" class="with-gap">
                                        <label for="female" class="m-l-20">Female</label>
                                        
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
                                        <span class="font-bold">BIRTH CERTIFICATE / SUBORNO CARD <code>*</code></span>
                                            <input type="text" class="form-control" onchange="check_duplicate()" name="b_certicicate" id="b_certicicate" placeholder="Birth Certicficate / Suborno Card" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">DISABILITY TYPE <code>*</code></span>
                                        <select class="form-control show-tick" id="d_type" name="d_type">
                                            <option value="">-- Please Select Disability Type--</option>
                                            <option value="3">Autism</option>
                                            <option value="2">Mental Health Conditions</option>
                                            <option value="1">Physical Disability</option>
                                    </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">
                                
                            <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold"> DIVISION</span>
                                          
                                    <select class="form-control" name="division" id="division">
                                            <option value="0">-- Please Select Division--</option>

                                <?php
              
                                $result= "SELECT id, name FROM divisions ORDER BY name ASC";
                                $get_result = mysqli_query($db, $result) or die(mysqli_error() . 'error 1');

                                while ($get_listitem = mysqli_fetch_array($get_result)) {
                                    echo "<option value=" . '"' . $get_listitem["id"] . '"' . ">" . $get_listitem["name"] . "</option>";
                                }
                                ?>   


                                    </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold"> DISTRICT</span>
                                            <!-- <input type="text" class="form-control" name="dst" id="dst" placeholder="District" /> -->
                                        
                                        
                                            <select class="form-control" name="dst" id="dst">
                                            <option value="0">-- Please Select District--</option>

                                <?php
              
                                $result= "SELECT id , name FROM districts ORDER BY name ASC";
                                $get_result = mysqli_query($db, $result) or die(mysqli_error() . 'error 1');

                                while ($get_listitem = mysqli_fetch_array($get_result)) {
                                    echo "<option value=" . '"' . $get_listitem["id"] . '"' . ">" . $get_listitem["name"] . "</option>";
                                }
                                ?>   


                                    </select>
                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">UPAZILA </span>
                                            <input type="text" class="form-control" onkeyup="find_upazila()" name="p_station" id="p_station" placeholder="Police Station / Upazila" />
                                        </div>
                                    </div>
                                </div>

                            <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">UNIONS </span>
                                            <input type="text" onkeyup="find_union()"  class="form-control" name="union" id="union" placeholder="union" />
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>


                            <div class="row clearfix">
                                
                            <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">HOUSE / VILLAGE </span>
                                            <input type="text" class="form-control" name="house" id="house" placeholder="House / Village" />
                                        </div>
                                    </div>
                                </div>
                                
  
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
                                        <div class="form-line" id="spt_div">
                                            <span class="font-bold">SPORTS/EVENTS<code>*</code></span>
                                            <select class="form-control show-tick" name="spt" id="spt" >
                                                <option value="0">-- Please Select Sports/Events --</option>
                                                <option value="3">Badminton </option>
                                                <option value="1">Cricken</option>
                                                <option value="2">Football</option>
                                            </select>
                                        </div>
                                        <div id="spt_mgs">
                                            <span class="font-bold col-pink">N/A SPORTS/EVENT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold"> REGISTRATION YEAR</span>
                                            <input type="text" class="form-control" name="reg_year" id="reg_year" placeholder="Registration Year" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">GUARDIAN NAME </span>
                                            <input type="text" class="form-control" name="guardian" id="guardian" placeholder="Guardian Name" />
                                        </div>
                                    </div>
                                </div>
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
                                        <span class="font-bold">CELL NUMBER</span>
                                           <input type="text" class="form-control" name="g_cell" id="g_cell" placeholder="Cell Number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            
                            
                            
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span class="font-bold">Image upload </span>
                                            <!-- <input type="file" name="fileToUpload" id="fileToUpload"> -->

                                            <input id="fileToUpload" type="file" onchange="file_path();" name="fileToUpload" />
                                            <div id="p"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        
                                        <button class="btn btn-primary waves-effect" id="save_btn" name="save_btn" onclick="sv_info()" type="submit">SUBMIT</button>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        
<div id="Tst"> 123                          
 <select id="existingList">
   
</select>
</div>


<div style="width:300px;">
    <input id="myInput" type="text" placeholder="Country">
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
    document.getElementById("adult").checked = false;
    document.getElementById("young").checked = false;
    document.getElementById("partner").checked = false;
    var y = document.getElementById("spt_mgs");   
    y.style.display = "none";
    function myfun(value) {
        if( value==1 ){
            var x = document.getElementById("spt_div");   
            x.style.display = "block";
            y.style.display = "none";
        }else {
            var x = document.getElementById("spt_div");
            x.style.display = "none";
            y.style.display = "block";
        }
    }


</script>

<script type="text/javascript">

function validation(){

document.getElementById("error_msg").innerHTML = "";

if(document.getElementById("adult").checked == false && document.getElementById("young").checked == false && document.getElementById("partner").checked == false){

document.getElementById("error_msg").innerHTML = "Please Select Registration From Type !";
var x = document.getElementById("error_msg");
x.style.display = "block"; 

        // $('#Show_message').hide();
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();

}    




var name = document.getElementById("name").value;
if (name == null || name == 0) {
document.getElementById("error_msg").innerHTML = "Please Insert Name !";
var x = document.getElementById("error_msg");
x.style.display = "block"; 

        // $('#Show_message').hide();
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();
}


var father = document.getElementById("father").value;
if (father == null || father == 0) {
document.getElementById("error_msg").innerHTML = "Please Insert Father Name !";
var x = document.getElementById("error_msg");
x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();
}



var mother = document.getElementById("mother").value;
if (mother == null || mother == 0) {
document.getElementById("error_msg").innerHTML = "Please Insert Mother Name !";
var x = document.getElementById("error_msg");
x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();
}


var dob = document.getElementById("dob").value;
if (dob == null || dob == 0) {
document.getElementById("error_msg").innerHTML = "Please Insert DATE OF BIRTH !";
var x = document.getElementById("error_msg");
x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();
}


if(document.getElementById("male").checked == false && document.getElementById("female").checked == false){

document.getElementById("error_msg").innerHTML = "Please Select Gender !";
var x = document.getElementById("error_msg");
x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();

}


var b_certicicate = document.getElementById("b_certicicate").value;
if (b_certicicate == null || b_certicicate == 0) {
document.getElementById("error_msg").innerHTML = "Please Insert BIRTH CERTIFICATE / SUBORNO CARD !";
var x = document.getElementById("error_msg");
x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();
}


var d_type = document.getElementById("d_type").value;

if (d_type == null || d_type == 0) {
document.getElementById("error_msg").innerHTML = "Please Setect DISABILITY TYPE !";
var x = document.getElementById("error_msg");
x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();
}


var spt = document.getElementById("spt").value;

if ( document.getElementById("adult").checked == true ) {
    document.getElementById("error_msg").innerHTML = "Please Setect SPORTS/EVENTS !";
var x = document.getElementById("error_msg");
x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();
} 




var dst = document.getElementById("dst").value;

if (dst == null || dst == 0) {
document.getElementById("error_msg").innerHTML = "Please Insert DISTRICT !";
var x = document.getElementById("error_msg");
x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();
}


var cell = document.getElementById("cell").value;

if (cell == null || cell == 0) {
document.getElementById("error_msg").innerHTML = "Please Insert CELL NUMBER  !";
var x = document.getElementById("error_msg");
x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();
}

var guardian = document.getElementById("guardian").value;

if (guardian == null || guardian == 0) {
document.getElementById("error_msg").innerHTML = "Please Insert GUARDIAN NAME!";
var x = document.getElementById("error_msg");
x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();
}

var relation = document.getElementById("relation").value;

if (relation == null || relation == 0) {
document.getElementById("error_msg").innerHTML = "Please Select RELATION !";
var x = document.getElementById("error_msg");
x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();
}

}

</script>






<script type="text/javascript">

function check_duplicate() {
    document.getElementById("error_msg").innerHTML = '';

var b_certicicate = document.getElementById("b_certicicate").value;

if (b_certicicate == null || b_certicicate == 0) {
document.getElementById("error_msg").innerHTML = "Please Insert BIRTH CERTIFICATE / SUBORNO CARD  !";
var x = document.getElementById("error_msg");
x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
exit();
}

    $.post('qry/chk_ath.php', {
        b_certicicate: b_certicicate
    }, function (search_info_data) {
    var new_search_array = JSON.parse(search_info_data);
//    alert('TEST...'+new_search_array);
    //var USER_ID=new_search_array['USER_ID'];
if( new_search_array == '1'){
    document.getElementById("b_certicicate").value=null;
    document.getElementById("error_msg").innerHTML = " This Athlets is Already Registered .Try with different BIRTH CERTIFICATE / SUBORNO CARD !";
    var x = document.getElementById("error_msg");
    x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
}else{
//   document.getElementById("config").disabled = false;
}

});
}
</script>












<script type="text/javascript">
function sv_info (){

document.getElementById("show_msg").innerHTML = '';
document.getElementById("error_msg").innerHTML = '';


pck_division ();
// validation();
//check_duplicate();

exit();





var frm_type=0;
if( document.getElementById("adult").checked == true ){
    var frm_type=1;
}else if ( document.getElementById("young").checked == true ){
    var frm_type=2;
} else if ( document.getElementById("partner").checked == true ){
    var frm_type=3;
}


var name = document.getElementById("name").value;
var father = document.getElementById("father").value;
var mother = document.getElementById("mother").value;
var dob = document.getElementById("dob").value;

if( document.getElementById("male").checked == true ){
    var grnder=1;
}else if( document.getElementById("female").checked == true ){
    var grnder=2;
}



var org = document.getElementById("org").value;
alert(org);
var b_certicicate = document.getElementById("b_certicicate").value;
var d_type = document.getElementById("d_type").value;
var house = document.getElementById("house").value;
var p_station = document.getElementById("p_station").value;
// var p_ofc = document.getElementById("p_ofc").value;
// var p_code = document.getElementById("p_code").value;
var dst = document.getElementById("dst").value;
var cell=document.getElementById("cell").value;
var email = document.getElementById("email").value;
var spt = document.getElementById("spt").value;
var reg_year = document.getElementById("reg_year").value;
var guardian = document.getElementById("guardian").value;
var relation = document.getElementById("relation").value;
var g_cell = document.getElementById("g_cell").value;
var division = document.getElementById("division").value;
var union = document.getElementById("union").value;
 var fileToUpload = document.getElementById("fileToUpload").value;
 var filename = fileToUpload.replace(/C:\\fakepath\\/, '');
// // // var input = document.getElementById("fileToUpload");
// // // var fReader = new FileReader();
// // // var real_path=fReader.readAsDataURL(input.files[0]);




// // alert(file + '===>>>' +filename+ '===>>>' + real_path);
// // // exit();



$.post('qry/sv_athlt.php', {
            frm_type:frm_type,
            name:name,
            father:father,
            mother:mother,
            dob:dob,
            grnder:grnder,
            org:org,
            b_certicicate:b_certicicate,
            d_type:d_type,
            house:house,
            p_station:p_station,
            union:union,
            dst:dst,
            division:division,
            cell:cell,
            email:email,
            spt:spt,
            reg_year:reg_year,
            guardian:guardian,
            relation:relation,
            g_cell:g_cell,
            filename:filename,
}, function (data) {
    alert('Save Info====>>>>'+ data);
// var message=document.getElementById("save_message").innerHTML;
// document.getElementById("save_message").innerHTML= message + ' --- '+ op_data;
    document.getElementById("save_btn").disabled = true;
    document.getElementById("show_msg").innerHTML = " Successfully Info Save !";
    var x = document.getElementById("show_msg");
    x.style.display = "block"; 
         $('#error_msg').show();
        $('html,body').scrollTop(0);
});

return true;

}


function file_path (){


// var file2 =document.getElementById("fileToUpload").value;
alert('Test file===>>>');
// var name = document.getElementById("name").value;
// var father = document.getElementById("father").value;
// var mother = document.getElementById("mother").value;
// var dob = document.getElementById("dob").value;
// var fileToUpload = document.getElementById("fileToUpload").value;

    // var data = new FormData();
    // data.append('name',name);
    // data.append('father',father);
    // data.append('mother',mother);
    // data.append('dob',dob);
    // data.append('fileToUpload',fileToUpload);

    // $.ajax({
    //     method: "POST",
    //     url: "qry/sv_athlt.php",
    //     contentType: 'multipart/form-data',
    //     async: true,
    //     data:data,
    //     processData: false,
    //     success: function (data) {
    //         console.log(data)
    //     }
    // });

}
</script>




<script type="text/javascript">






function find_upazila(){
    
    var p_station = document.getElementById("p_station").value;

           if (p_station.length > 0) {
           // alert("TEST : "+ p_station);
               $.post('qry/find_upazila.php', {p_station: p_station}, function (data) {
                   if (data.exists) {
                   } else {
                       var array = JSON.stringify(data);
                       var newArray = JSON.parse(array);
                  //     alert(newArray);
                    //    $("#p_station").autocomplete({
                    //        source: newArray
                    //    });
                       autocomplete(document.getElementById("p_station"), newArray);
                   }
               }, 'JSON');
           }
}



function find_union(){
    
    var dst = document.getElementById("dst").value;
  //  alert('===>>'+ dst);
    var union = document.getElementById("union").value;
           if (union.length > 0) {
           // alert("TEST : "+ p_station);
               $.post('qry/find_union.php', {dst:dst,union: union}, function (data) {
                   if (data.exists) {
                   } else {
                       var array = JSON.stringify(data);
                       var newArray = JSON.parse(array);
                  //     alert(newArray);
                    //    $("#p_station").autocomplete({
                    //        source: newArray
                    //    });
                       autocomplete(document.getElementById("union"), newArray);
                   }
               }, 'JSON');
           }
}



/*


function pck_division (){

 var pwd = '1256';

//  let div = document.getElementById("Tst");
//  div.remove(1);


 // existingList
var myParent = document.getElementById("Tst");

//Create array of options to be added
var array = ["Volvo","Saab","Mercades","Audi"];

//Create and append select list
// var selectList = document.createElement("select");
// selectList.id = "mySelect";
// myParent.appendChild(selectList);




selectList= document.getElementById("existingList");

//Create and append the options
for (var i = 0; i < array.length; i++) {
    var option = document.createElement("option");
    option.value = array[i];
    option.text = array[i];
    selectList.appendChild(option);
}



























// const sel = document.getElementById("Tst1");
// const opt = document.createElement("option");
// opt.value = "3";
// opt.text = "Option: Value 3";

// sel.add(opt);



// for (index = 0; index < 4; ++index) {
//   test_el = document.createElement('p');
//   test_el.innerHTML = array[index].property;
//   div.add(test_el);
// };


// const sel = document.getElementById("existingList");
// const opt = document.createElement("option");
// opt.value = "3";
// opt.text = "Option: Value 3";

// sel.add(opt, null);
// div.add(Tst);




// var existingList=document.getElementById('Tst');
// var element_li = document.createElement("LI");
// const element_a = document.createElement("a"); 
// var x = document.createElement("SPAN");
// var t = document.createTextNode("This is a span element.");
// x.appendChild(t);
// element_a.appendChild(x);
// element_li.appendChild(element_a);
// existingList.appendChild(element_li);



// var btn = document.createElement("existingList");
// btn.setAttribute("type", "button");
// var x = document.createElement("SPAN");
// var t = document.createTextNode("This is a span element.");
// x.appendChild(t);
// btn.appendChild(x);
// existingList.appendChild(btn);

//  document.getElementById("existingList").selectedIndex = "2"; 
//   var existingList=document.getElementById('Tst');
//   var x = document.createElement("SPAN");
//   var t = document.createTextNode("This is a span element.");
//   x.appendChild(t);
//   existingList.appendChild(x);

// opt.text = "Option: Value 3";

// sel.appendChild(opt); 
//  sel.add(xy);

//  sel.add(opt, sel.options[1]);


// alert('Division==>>'+ opt.text );



// var x=document.getElementById('division').value;
// alert('Division==>>'+x);


// document.getElementById("onu_model").value = 'T1';
// document.getElementById("onu_model").innerHTML = '123';


                // select =document.getElementById("division");
                // var opt = document.createElement('division');
                // opt.value = "0";
                // opt.innerHTML = "--- Select Division ---";
                // select.appendChild(opt); 

                    // select = document.getElementById("spt");
                    // var opt = document.createElement('option');
                    // opt.value = "0";
                    // opt.innerHTML = "--- Select TEST ---";
                    // select.appendChild(opt);

// const para = document.createElement("option");
// para.innerHTML = "Select TEST";
// alert(para);
// document.getElementById("onu_model").appendChild(para);




// $.post('qry/divi.php', {pwd: pwd}, function (OLT_data) {
//     if (OLT_data.exists) {
// //        alert("NOT EXISTS !!");
//         //tell user that the username already exists
//     } else {

//         var OLT_array = JSON.stringify(OLT_data);
//         var new_OLT_Array = JSON.parse(OLT_array);
//         var select_OLT = 0;
//         document.getElementById("division").innerHTML = null;
//         document.getElementById("division").value = null;
//         for (var i in new_OLT_Array) {
//                 //  alert("splite...." + new_OLT_Array[i]);
//             // if (select_OLT == 0) {
//             //     select = document.getElementById("division");
//             //     var opt = document.createElement('option');
//             //     opt.value = "0";
//             //     opt.innerHTML = "--- Select Division ---";
//             //     select.appendChild(opt);

//             //     var select_OLT = 1;
//             // }
//                 select = document.getElementById("division");
//                 var opt = document.createElement('option');
//                 opt.value = new_OLT_Array[i];
//                 opt.innerHTML = new_OLT_Array[i];
//                 select.appendChild(opt);
//         }
//     }
// }, 'JSON');

 return true;

}


*/
</script>






<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
// var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
//autocomplete(document.getElementById("myInput"), countries);

// autocomplete(document.getElementById("p_station"), countries);
</script>
















<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php
        echo file_get_contents("footer_v1.php");  
    ?>
    
</body>

</html>