// var menuList=document.querySelectorAll(".item1");
// var menuA=document.querySelectorAll(".a1");
// var menuTop=document.querySelectorAll(".before");
// var subNav=document.querySelectorAll(".subnav");
// // console.log(subList);
// // console.log(menuA)
// for(let i=0;i<menuList.length;i++){
//     menuList[i].onmouseover=function(){
//         for(var j=0;j<menuList.length;j++){
//             menuA[j].style.color="#666";
//             menuA[j].style.textDecoration="none";
//             menuTop[j].style.transform="scale(0,0)";
//             subNav[j].style.opacity=0;
//             subNav[j].style.visibility="hidden";
//         }
//         subNav[i].style. visibility=" visible";
//         subNav[i].style.opacity=1;
//         subNav[i].style.top="80px";
//         menuA[i].style.color="#ff6900";
//         menuTop[i].style.width="150%";
//         menuTop[i].style.transform="scale(1,1)";
//
//     }
//     menuList[i].onmouseout=function(){
//         menuA[i].style.color="#666";
//         menuTop[i].style.transform="scale(0,0)";
//         subNav[i].style.opacity=0;
//         subNav[i].style.top="100px";
//         subNav[i].style. visibility="hidden";
//     }
// }

// var subList=document.querySelectorAll(".subnav-list a");
// var right=document.querySelectorAll(".subnav-right");
// for(let i=0;i<subList.length;i++){
//     subList[i].onmouseover=function(){
//         for(var j=0;j<subList.length;j++){
//             subList[j].style.background="#fff";
//             subList[j].style.color="#666";
//             right[j].style.transform="scale(0,0)";
//         }
//         subList[i].style.background="#f6f6f6";
//         subList[i].style.color="#ff6900";
//         right[i].style.transform="scale(1,1)";
//         subList[i].style.textDecoration="none";
//     }
//     subList[i].onmouseout=function(){
//         subList[i].style.background="#fff";
//         subList[i].style.color="#666";
//         right[i].style.transform="scale(0,0)";
//     }
// }

var conList=document.querySelectorAll(".main-nav li");
var conListA=document.querySelectorAll(".main-nav li a");  
var border=document.querySelectorAll(".border");
// console.log(conList);
for(var i=0;i<conList.length;i++){
    border[i].style.width=conList[i].offsetWidth+"px";
}
for(let i=0;i<conList.length;i++){
    conList[i].onmouseover=function(){
        // for(var j=0;j<contList.length;j++){
        //     // border[j].style.width=conList[i].offsetWidth+"px";
        //     border[j].style.background="#ff6900";
        //     border[j].style.transform="scale(0,0)";
        //     border[0].style.transform="scale(1,1)";
        //     conListA[j].style.color="#666";
        //     conListA[j].style.textDecoration="none";
        // }
        // border[i].style.width=conList[i].offsetWidth+"px";
        border[i].style.background="#ff6900";
        border[i].style.transform="scale(1,1)";
        conListA[i].style.color="#ff6900";
        conListA[i].style.textDecoration="none";
    }
    conList[i].onmouseout=function(){
        border[i].style.transform="scale(0,0)";
        border[0].style.transform="scale(1,1)";
        // this.style.borderBottom="2px solid #fff";
        conListA[i].style.color="#666";
        conListA[0].style.color="#ff6900";
    }
}

var contList=document.querySelectorAll(".list-wrap li");
var contH=document.querySelectorAll(".cont-box h2");
for(let i=0;i<contList.length;i++){
    contList[i].onmouseover=function(){
        contH[i].style.color="#ff6900";
    }
    contList[i].onmouseout=function(){
        contH[i].style.color="#333";
    }
}
var contA=document.querySelectorAll(".list-wrap li a");
var contP=document.querySelectorAll(".list-wrap li p");
var back=document.querySelectorAll(".back");
// console.log(contP);
var contImg=document.querySelectorAll(".list-wrap li a img");
for(var i=0;i<back.length;i++){
    back[i].style.width=contA[i].offsetWidth+"px";
    back[i].style.height=contA[i].offsetHeight+"px";
}
for(let i=0;i<contA.length;i++){
    back[i].onmouseover=function(){
        contP[i].style.opacity=1;
        contP[i].style.top=contA[i].offsetHeight/2-(contP[i].offsetHeight/2)+"px";
        back[i].style.background="#000";
        back[i].style.opacity=".7";
        contImg[i].style.transform="scale(1.2,1.2)";
        // contP[i].style.visibility="visible";
    }
    back[i].onmouseout=function(){
        contP[i].style.opacity=0;
        contP[i].style.top=0;
        back[i].style.background="";
        back[i].style.opacity=0;
        contImg[i].style.transform="scale(1,1)";
    }
    contP[i].onmouseover=function(){
        contP[i].style.opacity=1;
        contP[i].style.top=contA[i].offsetHeight/2-(contP[i].offsetHeight/2)+"px";
        back[i].style.background="#000";
        back[i].style.opacity=".7";
        contImg[i].style.transform="scale(1.2,1.2)";
    }
}

var title=document.querySelectorAll(".title");
var h2=document.querySelectorAll(".title a h2");
var titImg=document.querySelectorAll(".iconimg");
for(let i=0;i<title.length;i++){
    title[i].onmouseover=function(){
        h2[i].style.color="#ff6900";
        titImg[i].style.top="-8px";
        title[i].style.boxShadow="0px 1px 46px 0px #dad9d9";
    }
    title[i].onmouseout=function(){
        h2[i].style.color="#757575";
        titImg[i].style.top="0px";
        title[i].style.boxShadow="none";
    }
}

var newsbox=document.querySelectorAll(".newslist-item");
var newsh4=document.querySelectorAll(".newslist-item h4");
for(let i=0;i<newsbox.length;i++){
    newsbox[i].onmouseover=function(){
        newsh4[i].style.color="#ff6900";
        this.style.boxShadow="0px 1px 46px 0px #dad9d9";
    }
    newsbox[i].onmouseout=function(){
        newsh4[i].style.color="#333";
        this.style.boxShadow="none";

    }
}