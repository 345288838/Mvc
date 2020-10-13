$(".add").click(function () {
    var cid=$(this).attr("attr");
    $("input[type=hidden]").val(cid);
    $("<div class='mask'>").appendTo("body").css({
        width:"100%",
        height:"100%",
        opacity:0.3,
        background:"#888",
        position:"fixed",
        left:0,
        top:0,
    })
    $(".addpanner").css("display","block");
})
$(".addpanner .closed").click(function () {
    $(".addpanner").css("display","none");
    $(".mask").remove();
})
var cid;
$('.edit').click(function () {
    cid=$(this).attr("attr");
    var pid=$(this).attr("pid");
    $("input[type=hidden]").val(cid);
    $("<div class='mask'>").appendTo("body").css({
        width:"100%",
        height:"100%",
        opacity:0.3,
        background:"#888",
        position:"fixed",
        left:0,
        top:0,
    })
    $(".editpanner").css("display","block");

    $.ajax({
        url:'/2006/mvc/index.php/admin/category/show',
        data:{cid},
        dataType:"json",
        success:function (e) {
            $(".editpanner input[name=cname]").val(e["cname"]);
            if (e["isshow"]==1){
                $("#isshow option:eq(0)").prop("selected",true);
            }else {
                $("#isshow option:eq(1)").prop("selected",true);
            }
            $(".editpanner input[name=tpl_name]").val(e["tpl_name"]);
            $(".editpanner textarea").val(e["info"]);
        }

    })
    $.ajax({
        url:"/2006/mvc/index.php/admin/category/getOption",
        dataType: "json",
        success:function (e) {
            tree(e,1,cid,pid);
            $(".sele").html(str);
            str="<option value='0'>一级</option>";
        }
    })
})

//修改内容
$("#edit").click(function () {
     var data=($(".editform").serialize()+"&cid="+cid);
     $.ajax({
         url:"/2006/mvc/index.php/admin/category/editcon",
         data:data,
         success:function (e) {
             if($.trim(e)=="ok"){
                 location.reload();
             }
         }
     })
})

var str="<option value='0'>一级</option>";

function str_repeat(str,num) {
    var result="";
    for (var i=0;i<num;i++){
        result+=str;
    }
    return result;
}

function tree(data,$i,cid,pid){
    for (var i=0;i<data.length;i++){
        if(data[i].child){
            if(data[i].cid!=cid){
                if(data[i].cid==pid){
                    str+="<option value='"+data[i].cid+"' selected>"+str_repeat("&nbsp;&nbsp;",$i)+data[i].cname+"</option>";
                }else {
                    str+="<option value='"+data[i].cid+"'>"+str_repeat("&nbsp;&nbsp;",$i)+data[i].cname+"</option>";
                }

            }

            tree(data[i].child,$i+1,cid,pid);
        }else {
            if(data[i].cid!=cid){
                if(data[i].cid==pid){
                    str+="<option value='"+data[i].cid+"' selected>"+str_repeat("&nbsp;&nbsp;",$i)+data[i].cname+"</option>";
                }else {
                    str+="<option value='"+data[i].cid+"'>"+str_repeat("&nbsp;&nbsp;",$i)+data[i].cname+"</option>";
                }
            }
        }

    }
}

$(".editpanner .closed").click(function () {
    $(".editpanner").css("display","none");
    $(".mask").remove();
})