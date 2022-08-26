!function(){var a={author:"njugray",className:{pane:"dg-pane",wrap:"dg-notify",text:"text",title:"title"}},b={title:"",text:"",delay:5e3,type:"info"},c=function(b,c,d,e){var f=$("<div/>").addClass(a.className.text).html(c),g=$("<div/>").addClass(a.className.title).html(b),h=$("<div/>").addClass(a.className.pane).append($("<div/>").addClass("icon icon-"+d)).append(g).append(f);h.css({"margin-left":"400px",height:"0"}),this.delay=e||5e3,this.pane=h};c.prototype.show=function(){var a=this,b=a.pane,c=function(){b.animate({height:"62px"},function(){b.animate({"margin-left":"0"})})};c();var e=function(){b.animate({"margin-left":"400px"},function(){b.animate({height:"0"},function(){b.remove()})})};a.timer=setTimeout(e,a.delay),b.mouseenter(function(){a.timer&&clearTimeout(a.timer)}),b.mouseleave(function(){clearTimeout(a.timer),a.timer=setTimeout(e,a.delay)}),d.prepend(b)};var d=$("<div/>").addClass(a.className.wrap);$("body").append(d),$.notify||($.notify=function(a,d,e,f){var g;if(1===arguments.length&&"object"==typeof arguments[0]){var h=$.extend(b,arguments[0]);g=new c(h.title,h.text,h.type,h.delay)}else g=new c(a,d,e,f);g.show()})}();
$(function() {
    $("#success").click(function() {
        var title = "giỏ hàng";
        var content = "Thêm vào Giỏ Hàng Thành Công";
        var type = "success";
        var delay = '2000';
        $.notify(title, content, type, delay);
    });
});


    $('.submit').click(function(event) {
        event.preventDefault();
        var quantity = $('.quantity_order').val();
        var id_sp = $(this).data('id');
        var id_user = $(this).data('user');
        $.ajax({
            type: "POST",
            url: "cart_lists",
            data: {
                quantity: quantity,
                id_sp: id_sp,
                id_user: id_user
            },
            success: function(data) {
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                alert(data)
                $(".header_left").html(data);
            }
        });
    });



var swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    spaceBetween: 30,
    slidesPerGroup: 5,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 10000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
