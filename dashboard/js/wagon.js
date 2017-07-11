$(document).ready(function(){
    //    $("#c1").hide();
    //    $("#c2").hide();
    var j;
    for(j=1;j<=30;j++){
        $("#c"+j).hide();
    }
    $("input[name^='b']").val("12");
    $("input[name^='f']").val("14");
    $("input[name^='g']").val(0);
    //    $("input[name^='h']").val(0);
    //    $("input[name^='i']").val(0);
    $("input[name^='i']").prop('disabled', true);
    $("input[name^='h']").prop('disabled', true);
    
    $("#forgo").click(function(){

        //                e.clone().insertAfter(e);
        //                 $(".copy").clone().appendTo(".copy");
        var i;
        var nwag = $("#nwag").val();

        for(i=1; i <= nwag; i++){
            var k=i+1;
            $('#inc'+i).html(k);
            $("#c"+i).show(); 
            //            $(".wtype").attr({
            //                "name" : "wag"+k;
            //            });
            //            $(".box").attr({
            //                "name" : "box_type"+k;
            //            });


        }

        //
        //    $("input[name^='a']").val("1123");
        //    $("select[name^='wtype']").val("ER");

        //            
        //        });
        //        if($("select[name^='box']").val() === "BOXN" ){
        //            $("input[name^='a']").val("1123") ;
        //        }
        ////
        ////
        //        }   
        //        var m;
        //        
        //            if($("select[name='box0']").val() === "BOXN" ){31
        //            var ok="box0";
        //            $('[name="'+ok+'"]').val("1123") ;
        //                alert("hi");
        ////            
        ////        
        //        }
        var i1;
        for(i1=0;i1 <= nwag ;i1++){
            var bx = "box"+i1;
            var dx = "d"+i1;
            $("select[name='"+bx+"']").on('change',function(){
                var nam = $(this).attr("name");
                var res = nam.substring(3);

                var ch = "b"+res;
                var ch1 = "f"+res;
                if( $(this).val()==="BOX"){
                    $("input[name='" + ch + "']").val("12") ;
                    $("input[name='" + ch1 + "']").val("122") ;
                }
                if( $(this).val()==="BOXN"){
                    $("input[name='" + ch + "']").val("22") ;
                    $("input[name='" + ch1 + "']").val("123") ;
                }
                else if( $(this).val()==="BOXN-HA"){
                    $("input[name='" + ch + "']").val("23") ;
                    $("input[name='" + ch1 + "']").val("124") ;
                }
                else if( $(this).val()==="BOXN-HS"){
                    $("input[name='" + ch + "']").val("23") ;
                    $("input[name='" + ch1 + "']").val("125") ;
                }
                else if( $(this).val()==="BOXN-HL"){
                    $("input[name='" + ch + "']").val("23") ;
                    $("input[name='" + ch1 + "']").val("126") ;
                }
                else if( $(this).val()==="BOXN-CR"){
                    $("input[name='" + ch + "']").val("23") ;
                    $("input[name='" + ch1 + "']").val("127") ;
                }
                else if( $(this).val()==="BOXN-LW"){
                    $("input[name='" + ch + "']").val("23") ;
                    $("input[name='" + ch1 + "']").val("128") ;
                }
                else if( $(this).val()==="BOXN-EL"){
                    $("input[name='" + ch + "']").val("23") ;
                    $("input[name='" + ch1 + "']").val("129") ;
                }
                else if( $(this).val()==="DCN"){
                    $("input[name='" + ch + "']").val("23") ;
                    $("input[name='" + ch1 + "']").val("130") ;
                }
                else if( $(this).val()==="DCNA"){
                    $("input[name='" + ch + "']").val("23") ;
                    $("input[name='" + ch1 + "']").val("131") ;
                }

            });
            $("input[name='"+dx+"']").on('change',function(){
                var nam = $(this).attr("name");
                var res = nam.substring(1);
                var gr_wt = $(this).val();                
                var ch = "e"+res;
                var ch1 = "f"+res;
                //                var ch1 = "box"+res;
                var ch2 = "b"+res;
                var ch3 = "g"+res;
                var ch4 = "j"+res;
                var ch5 = "h"+res;
                var ch6 = "i"+res;
                var pcc = $("input[name='" + ch1 + "']").val();
                var tare = $("input[name='" + ch2 + "']").val();
                var ac_wt = gr_wt - tare;
                $("input[name='" + ch + "']").val(ac_wt) ;

                var total = ac_wt - pcc ; 
                if(total >= 2){
                    $("input[name='" + ch3 + "']").val(total) ;
                    $("input[name='" + ch5 + "']").prop('disabled', true);
                    $("input[name='" + ch6 + "']").prop('disabled', false);

                }
                else if(total<2 && total>0){
                    $("input[name='" + ch5 + "']").prop('disabled', false);
                    $("input[name='" + ch6 + "']").prop('disabled', true); 
                }
                var ch_wt = parseInt(total) + parseInt(pcc);
                $("input[name='" + ch4 + "']").val(ch_wt) ;

            });


        }


    });    
    //     $("select[name^='box']").on('change',function(){
    //         var x= 0;   
    //         var ch= "a"+x;
    //            if( $(this).val()==="BOXN"){
    //               $("input[name='" + ch + "']").val("1123") ;
    //               
    //            }
    //            
    //            
    //        });















});