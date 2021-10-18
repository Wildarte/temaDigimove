//controll gallery photos
var slideGalleryIndex = 1;
passSlide(slideGalleryIndex);

function plusSlidesGallery(n){
    passSlide(slideGalleryIndex += n);
}

function currentSlideGallery(n){
    passSlide(slideGalleryIndex = n);
}

function passSlide(n){

    var slide_photo = document.getElementsByClassName("slide_gallery_photos");
    var slide_thumb = document.getElementsByClassName("gallery_demo_thumb");
    

    if (n > slide_photo.length){
        slideGalleryIndex = 1;
    }
    if (n < 1){
        slideGalleryIndex = slide_photo.length
    }
    for(var i = 0; i < slide_photo.length; i++){
        slide_photo[i].style.display = "none";
        slide_thumb[i].style.opacity = 0.5
    }
    
    slide_photo[slideGalleryIndex - 1].style.display = "block";
    slide_thumb[slideGalleryIndex - 1].style.opacity = 1;

}


//button close modal gallery photos

document.querySelector(".btn_close_modal_photos").addEventListener("click", function(){
    //document.querySelector(".modal_photos_gallery").classList.remove("open_modal_gallery");

    document.querySelector(".modal_photos_gallery").classList.remove("open_modal_gallery");
    document.querySelector(".gallery_photos_palco").classList.remove("modal_photos_gallery");

    document.querySelector(".prev_gallery").classList.remove("prev_gallery_modal");
    document.querySelector(".next_gallery").classList.remove("next_gallery_modal");

    document.querySelector(".modal_full_screen").style.display = "block";
    document.querySelector(".btn_close_modal_photos").style.display = "none";

    /*
    var gphoto = document.getElementsByClassName("slide_gallery_photos");
    var imgt = document.getElementsByClassName("img-t"); //pega as todas as imagens da galeria
    for(var i = 0; i < imgt.length; i++){
        console.log(imgt[i].naturalHeight);
        console.log(imgt[i].naturalWidth);

        gphoto[i].classList.remove("gallery-heightauto");
        if(imgt[i].naturalHeight > imgt[i].naturalWidth){
            console.log("foi");
            imgt[i].classList.remove("img-height100-widthauto");
        }else{
            imgt[i].classList.remove("img-width100-heightauto");
        }
    }
    */
})

document.querySelector(".modal_full_screen").addEventListener("click", function(){
    //document.querySelector(".modal_photos_gallery").classList.add("open_modal_gallery");
    document.querySelector(".gallery_photos_palco").classList.add("modal_photos_gallery");
    document.querySelector(".modal_photos_gallery").classList.add("open_modal_gallery");
    document.querySelector(".prev_gallery").classList.add("prev_gallery_modal");
    document.querySelector(".next_gallery").classList.add("next_gallery_modal");

    document.querySelector(".modal_full_screen").style.display = "none";
    document.querySelector(".btn_close_modal_photos").style.display = "unset";


});

var gphoto = document.getElementsByClassName("slide_gallery_photos");
var imgt = document.getElementsByClassName("img-t"); //pega as todas as imagens da galeria
for(var i = 0; i < imgt.length; i++){

    if(imgt[i].naturalHeight > imgt[i].naturalWidth){
        console.log("largura da tela: "+ document.documentElement.clientWidth);
        imgt[i].classList.add("img-height100-widthauto");
    }else{
        imgt[i].classList.add("img-width100-heightauto");
        gphoto[i].classList.add("gallery-heightauto");

    }

}

// buttons control media imovel

function controlToggles(n){
    var btnsMdeia = document.getElementsByClassName("controlMedia");

    switch(n){
        case 2:
            document.querySelector(".container_gallery_photos").style.display = "none";
            document.querySelector(".container_video_imovel").style.display = "flex";
            document.querySelector(".container_imovel_3d").style.display = "none";
            btnsMdeia[1].classList.add("btn_media_selected");
            btnsMdeia[2].classList.remove("btn_media_selected");
            btnsMdeia[0].classList.remove("btn_media_selected");
        break;
        case 3:
            document.querySelector(".container_gallery_photos").style.display = "none";
            document.querySelector(".container_video_imovel").style.display = "none";
            document.querySelector(".container_imovel_3d").style.display = "flex";
            btnsMdeia[2].classList.add("btn_media_selected");
            btnsMdeia[0].classList.remove("btn_media_selected");
            btnsMdeia[1].classList.remove("btn_media_selected");
        break;
        default:
            document.querySelector(".container_gallery_photos").style.display = "block";
            document.querySelector(".container_video_imovel").style.display = "none";
            document.querySelector(".container_imovel_3d").style.display = "none";
            btnsMdeia[0].classList.add("btn_media_selected");
            btnsMdeia[1].classList.remove("btn_media_selected");
            btnsMdeia[2].classList.remove("btn_media_selected");
    }

}