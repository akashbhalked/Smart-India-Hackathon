$(document).ready(function(){
    $("#email-err").hide();
    $("#firstname-err").hide();
    $("#secondname-err").hide();

    $("#eid-err").hide();
    //$("#password-err").hide();
    $("#rep-password-err").hide();    
    $("#phone-err").hide();
    $("#pos-err").hide();

    var email_error = false;
    var firstname_error = false;
    var eid_error = false;
    var password_error = false;
    var rep_pass_error = false;
    var phone_error = false;
    var pos_error = false;


    function check_email(){
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        if(pattern.test($("#email").val())){
            $("#email-err").hide();    
            $("#email").removeClass('validate invalid');
            $("#email").addClass('validate valid');
        }else{
            $("#email-err").html("Invalid email format");
            $("#email-err").show();
            email_error=true;
            $("#email").removeClass('validate valid');
            $("#email").addClass('validate invalid');
        }

    }

    function check_firstname(){
        var fname = $("#firstname").val().length;
        if(fname==0){
            $("#firstname-err").html("Please enter your first name");
            $("#firstname-err").show();
            firstname_error=true;
            $("#firstname").removeClass('validate valid');
            $("#firstname").addClass('validate invalid');

        }else{
            $("#firstname-err").hide();
            $("#firstname").removeClass('validate invalid');
            $("#firstname").addClass('validate valid');
        }
    }

    $("#password").keyup(function() {
        var pswd = $(this).val();

        if ( pswd.length < 8 ) {
            $('#length').removeClass('valid').addClass('invalid');
        } else {
            $("#password").addClass('validate invalid');
            $('#length').removeClass('invalid').addClass('valid');
        }
        if ( pswd.match(/[A-z]/) ) {
            $('#letter').removeClass('invalid').addClass('valid');
        } else {
            $("#password").addClass('validate invalid');

            $('#letter').removeClass('valid').addClass('invalid');
        }

        if ( pswd.match(/[A-Z]/) ) {
            $('#capital').removeClass('invalid').addClass('valid');
        } else {
            $("#password").addClass('validate invalid');
            $('#capital').removeClass('valid').addClass('invalid');
        }

        if ( pswd.match(/\d/) ) {
            $('#number').removeClass('invalid').addClass('valid');
        } else {
            $("#password").addClass('validate invalid');
            $('#number').removeClass('valid').addClass('invalid');
        }
    }).focus(function() {
        $('#pswd_info').show();
    }).blur(function() {

        //        $('#pswd_info').hide();
        var pswd = $(this).val();
        var flag = true;    
        if ( pswd.length < 8 ) {
            $('#length').removeClass('valid').addClass('invalid');
            flag=false;
        } else {
            $("#password").addClass('validate invalid');
            $('#length').removeClass('invalid').addClass('valid');
        }
        if ( pswd.match(/[A-z]/) ) {
            $('#letter').removeClass('invalid').addClass('valid');

        } else {
            $("#password").addClass('validate invalid');

            $('#letter').removeClass('valid').addClass('invalid');
            flag=false;

        }

        if ( pswd.match(/[A-Z]/) ) {
            $('#capital').removeClass('invalid').addClass('valid');
        } else {
            $("#password").addClass('validate invalid');
            $('#capital').removeClass('valid').addClass('invalid');
            flag=false;

        }

        if ( pswd.match(/\d/) ) {
            $('#number').removeClass('invalid').addClass('valid');
        } else {
            $("#password").addClass('validate invalid');
            $('#number').removeClass('valid').addClass('invalid');
            flag=false;

        }
        if(flag!=true){
            $("#password").removeClass('validate valid');
            $("#password").addClass('validate invalid');


        }else{
            $("#password").removeClass('validate invalid');
            $("#password").addClass('validate valid');

        }


    });

    function check_rep_pass(){
        var password=$("#password").val();
        var rep_pass=$("#rep-password").val();

        if(password != rep_pass ){
            $("#rep-password-err").html("Passwords don't match!");
            $("#rep-password-err").show();
            rep_pass_error=true;
            $("#rep-password").removeClass('validate valid');
            $("#rep-password").addClass('validate invalid');

        }else{
            $("#rep-password").removeClass('validate invalid');            
            $("#rep-password").addClass('validate valid');
            $("#rep-password-err").hide();
        }
    }



    function check_phone(){
        var ph = $("#mob").val().length;
        if(ph!=10){
            $("#phone-err").html("Phone no. should be 10 digits");
            $("#phone-err").show();
            phone_error=true;
            $("#mob").removeClass('validate valid');
            $("#mob").addClass('validate invalid');

        }else{
            $("#phone-err").hide();
            $("#mob").removeClass('validate invalid');
            $("#mob").addClass('validate valid');
        }
    }

    function check_pos(){

    }


    $("#email").blur(function(){
        check_email();

    });

    $("#firstname").blur(function(){
        check_firstname();

    });



    $("#eid").blur(function(){
        check_eid();

    });



    $("#rep-password").blur(function(){
        check_rep_pass();

    });

    $("#mob").blur(function(){
        check_phone();        
    });

    $("#pos").blur(function(){
        check_pos();        
    });























    //    setInterval(function(){
    //        document.getElementById("dshow").innerHTML = Date();
    //    }, 2000);




});

