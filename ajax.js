$(document).ready(function(){
    $(".mxform").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_class_sign_in.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#masag").css({'visibility':'visible'});
                $(".msa").html(dat);
            }
        });    
    });
})




$(document).ready(function () {
    $(".myform").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url:'backend_reg.php',
            type:'post',
            data: new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success:function (dataa) {
                    $("#masag").css({'visibility':'visible'});
                    $(".max").html(dataa);
            }
        });
    });
})




$(document).ready(function () {
    $(".depform").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url:'course_check.php',
            type:'post',
            data: new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success:function (coursedata) {
                    $("#vis-con").css({'visibility':'visible'});
                    $(".seco-div-container").html(coursedata);
            }
        });
    });
})



$(document).ready(function () {
    $(".scc-form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url:'student_course_check.php',
            type:'post',
            data: new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success:function (cdn) {
                    $("#masag-con").css({'visibility':'visible'});
                    $(".sec-msa").html(cdn);
                
            }
        });
    });
})


$(document).ready(function () {
    $(".scc-hid-form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url:'student_course_check.php',
            type:'post',
            data: new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success:function (cdn) {
                    $("#masag-con").css({'visibility':'hidden'});
                    $(".sec-msa").html(cdn);
                
            }
        });
    });
})



$(document).ready(function () {
    $(".scourseform").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url:'per_course_check.php',
            type:'post',
            data: new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success:function (coursedatan) {
                    $("#vis-con").css({'visibility':'visible'});
                    $(".seco-div-container").html(coursedatan);
            }
        });
    });
})