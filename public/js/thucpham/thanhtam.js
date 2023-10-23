
// ADD TO CART
function addtocart(id, sl) {
    $.ajax({
        type: 'post',
        url: "gio-hang.html",
        cache: false,
        data: {id: id, act: 'add', sl: sl},
        dataType: 'json',
        success: function (data) {
            console.log(data);
            //return false;
            $(".count-cart").html(data.count_cart);
            $(".order_total").html(data.order_total);
            $.ajax({
                type: "POST",
                url: "ajax/ajax_cart.php",
                cache: false,
                data: {id: id, act: 'add', sl: sl},
                success: function (result) {
                    $(".box-cart").html(result);
                    $(".box-cart").addClass("active");
                }
            });
        }
    });
}

function ModifyCart(pid, act) {
    $.ajax({
        type: "POST",
        url: "ajax/ajax_cart.php",
        cache: false,
        data: {id: pid, act: act},
        success: function (result) {
            $(".box-cart").html(result);
        }
    });
}
function ModifyCart_payment(pid, act) {
    $.ajax({
        type: "POST",
        url: "ajax/ajax_cart.php",
        cache: false,
        data: {id: pid, act: act},
        success: function (result) {
            $(".box-thanhtoan-cart").html(result);
        }
    });
}

function remove_class() {
    $(".box-cart").removeClass("active");
    $(".box-cart").animate({"right": "-400px"}, 800);
}

$().ready(function (e) {
    //addtocart detail
    $(".themgiohang").unbind("click");
    $(".themgiohang").click(function () {
        var id = $(this).attr("data-id");
        var sl = $("#soluong").val();
        //alert(id);
        addtocart(id, sl);

        $(".box-cart").addClass("active");
        $(".box-cart").animate({"right": "0px"}, 800);

    })

    //addtocart
    $(".product-addcart a").unbind("click");
    $(".product-addcart a").click(function () {
        var id = $(this).attr("data-id");
        addtocart(id, 1);

        $(".box-cart").addClass("active");
        $(".box-cart").animate({"right": "0px"}, 800);

    });
});

$(window).on('load resize', function (event) {
    if ($(window).width() > 991)
    {
        $('.banner-l,.banner-r').css('min-height', Math.max($('.banner-l').outerHeight(), $('.banner-r').outerHeight()));
    }
});
$(document).ready(function (e) {
    // Back top
    $('#back-top,.go-top').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
    })

    // Menu mobile
    $('.i-menu').click(function () {
        $('#menus').slideToggle();
    })

    $('.box-tab-tit div').click(function (event) {
        if (!$(this).hasClass('active'))
        {
            $(this).parent('.box-tab-tit').children('div').not($(this)).removeClass('active');
            $(this).addClass('active');
            var i = parseInt($(this).index()) + 1;
            $(this).parent('.box-tab-tit').next().find('.box-tab-con').hide();
            $(this).parent('.box-tab-tit').next().find('.box-tab-con:nth-child(' + i + ')').show();
        }
    });
    $('.httt-tit').click(function (event) {
        $('.httt-info').slideToggle();
    });
});

$(window).on('scroll', function () {
    $pageY = $(window).scrollTop();
    if ($pageY > 300)
    {
        $('#back-top').fadeIn();
    } else
    {
        $('#back-top').fadeOut();
    }
    if ($pageY > $('#banner').height())
    {
        $(".i-banggia").addClass('top');
    } else
    {
        $(".i-banggia").removeClass('top');
    }
});