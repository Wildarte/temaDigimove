var btn_open = document.querySelector(".btn_open_menu");
var btn_close = document.querySelector(".btn_close_menu");

btn_open.addEventListener("click", function(){
    document.querySelector(".nav_menu").classList.toggle("class_open_menu_mobile");
});
btn_close.addEventListener("click", function(){
    document.querySelector(".nav_menu").classList.toggle("class_open_menu_mobile");
});


//all code for chat and notification
document.addEventListener("DOMContentLoaded", function(){
    if(checkNotification()){
        notifica();
    }else{
        var nt = getCookie('cBadgeNotifica');
        var nb = getCookie('cMsgNotifica');
        if(nt == ""){
            document.querySelector(".badge_chat").style.display = "block";
        }
        if(nb == ""){
            document.querySelector(".notification_chat").style.display = "block";
        }
    }
});
//function notifica title
function addNotTitle(){
    var title_old = document.title;
    if(title_old.includes("(1)")){
        document.title = title_old.slice(3);
    }else{
        var new_title = "(1)"+title_old;
        document.title = new_title;
    }
    
}

//function check existis cookie cnChat
function checkNotification(){
    var n = getCookie("cnChat");
    console.log(n);
    if(n == ""){
        document.cookie = "cnChat=1";
        return true;
    }else{
        return false;
    }
}
//function show notification
function notifica(){
    setTimeout(function(){
        var nt = getCookie('cBadgeNotifica');
        if(nt == ""){
            document.querySelector(".badge_chat").style.display = "block";
            addNotTitle();
        }
    }, 5000);
    setTimeout(function(){
        var nb = getCookie('cMsgNotifica');
        if(nb == ""){
            document.querySelector(".notification_chat").style.display = "block";
        }
    }, 5500);
}
//function get cookie by name cookie
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

//button close msg notification
var close_msg_notification = document.querySelector(".close_msg_chat");
close_msg_notification.addEventListener("click", function(){
    document.querySelector(".notification_chat").style.opacity = "0";
    document.querySelector(".notification_chat").style.display = "none";
    document.cookie = "cMsgNotifica=1";
});


//button open chat
var btn_open_chat = document.querySelector(".btn_icon");
btn_open_chat.addEventListener("click", function(){
    document.querySelector(".notification_chat").style.display = "none";
    document.querySelector(".badge_chat").style.display = "none";
    document.querySelector(".window_chat").classList.add("window_chat_height");
    document.cookie = "cMsgNotifica=1";
    document.cookie = "cBadgeNotifica=1";
    var title_old = document.title;
    if(title_old.includes("(1)")){
        document.title = title_old.slice(3);
    }
});

var btn_close_chat = document.querySelector(".window_chat_close");
btn_close_chat.addEventListener("click", function(){
    document.querySelector(".window_chat").classList.remove("window_chat_height");
});
// end all code for chat and notification

//funcao que envia msg e direciona para whatsapp
function sendMsgWa(tel, msg){
    window.open('https://api.whatsapp.com/send?phone='+tel+'&text='+msg , '_blank');
}