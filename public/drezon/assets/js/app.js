var asset_url = 'http://localhost/codeigniter46/public/drezon/assets/';

//console.log(asset_url);

! function(o) {
    "use strict";
    var e, t = localStorage.getItem("language"),
        a = "eng";

       

    function n(e) {
        "eng" == e ? document.getElementById("header-lang-img").src = "assets/images/flags/us.jpg" : "sp" == e ? document.getElementById("header-lang-img").src = "assets/images/flags/spain.jpg" : "gr" == e ? document.getElementById("header-lang-img").src = "assets/images/flags/germany.jpg" : "it" == e ? document.getElementById("header-lang-img").src = "assets/images/flags/italy.jpg" : "ru" == e && (document.getElementById("header-lang-img").src = "assets/images/flags/russia.jpg"), localStorage.setItem("language", e), null == (t = localStorage.getItem("language")) && n(a), o.getJSON("http://localhost/codeigniter46/public/drezon/assets/lang/" + t + ".json", function(e) {
            o("html").attr("lang", t), o.each(e, function(e, t) {
                "head" === e && o(document).attr("title", t.title), o("[key='" + e + "']").text(t)
            })
        })
    }

    function s(e) {
        1 == o("#light-mode-switch").prop("checked") && "light-mode-switch" === e ? (o("#dark-mode-switch").prop("checked", !1), o("#rtl-mode-switch").prop("checked", !1), o("#bootstrap-style").attr("href", asset_url+"css/bootstrap.min.css"), o("#app-style").attr("href", asset_url+"css/app.min.css"), sessionStorage.setItem("is_visited", "light-mode-switch")) : 1 == o("#dark-mode-switch").prop("checked") && "dark-mode-switch" === e ? (o("#light-mode-switch").prop("checked", !1), o("#rtl-mode-switch").prop("checked", !1), o("#bootstrap-style").attr("href", asset_url+"css/bootstrap-dark.min.css"), o("#app-style").attr("href", asset_url+"css/app-dark.min.css"), sessionStorage.setItem("is_visited", "dark-mode-switch")) : 1 == o("#rtl-mode-switch").prop("checked") && "rtl-mode-switch" === e && (o("#light-mode-switch").prop("checked", !1), o("#dark-mode-switch").prop("checked", !1), o("#bootstrap-style").attr("href", asset_url+"css/bootstrap.min.css"), o("#app-style").attr("href", asset_url+"css/app-rtl.min.css"), sessionStorage.setItem("is_visited", "rtl-mode-switch"))
    }

    function c() {
        var a, n, s;
        o(".edit-icon").click(function(e) {
            var t = o(this).parent();
            o(".dashboard_new_name").hide(), o(".dashboard_name").show();
            var a = t.find(".dashboard_name").text();
            t.find(".dashboard_new_name").val(a), t.find(".dashboard_name").hide(), t.find(".dashboard_new_name").show(), o(this).hide()
        }), o(".dashboard_new_name").keyup((a = function(e) {
            var t = o(this).parent(),
                a = o(this).parent().find(".dashboard_name"),
                n = o(this).val();
            a.html(n), t.find(".dashboard_name").show(), t.find(".dashboard_new_name").hide(), o(".edit-icon").show()
        }, n = 500, s = 0, function() {
            var e = this,
                t = arguments;
            clearTimeout(s), s = setTimeout(function() {
                a.apply(e, t)
            }, n || 0)
        }))
    }

    function l() {
        document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || (console.log("pressed"), o("body").removeClass("fullscreen-enable"))
    }
    o("#side-menu").metisMenu(), o(".vertical-menu-btn").on("click", function(e) {
            e.preventDefault(), o("body").toggleClass("sidebar-enable"), 992 <= o(window).width() ? o("body").toggleClass("vertical-collpsed") : o("body").removeClass("vertical-collpsed")
        }), o("#sidebar-menu a").each(function() {
            var e = window.location.href.split(/[?#]/)[0];
            this.href == e && (o(this).addClass("active"), o(this).parent().addClass("mm-active"), o(this).parent().parent().addClass("mm-show"), o(this).parent().parent().prev().addClass("mm-active"), o(this).parent().parent().parent().addClass("mm-active"), o(this).parent().parent().parent().parent().addClass("mm-show"), o(this).parent().parent().parent().parent().parent().addClass("mm-active"))
        }), o(document).ready(function() {
            var e;
            0 < o("#sidebar-menu").length && 0 < o("#sidebar-menu .mm-active .active").length && (300 < (e = o("#sidebar-menu .mm-active .active").offset().top) && (e -= 300, o(".simplebar-content-wrapper").animate({
                scrollTop: e
            }, "slow")))
        }), o('[data-toggle="fullscreen"]').on("click", function(e) {
            e.preventDefault(), o("body").toggleClass("fullscreen-enable"), document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement ? document.cancelFullScreen ? document.cancelFullScreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen && document.webkitCancelFullScreen() : document.documentElement.requestFullscreen ? document.documentElement.requestFullscreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullscreen && document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)
        }), document.addEventListener("fullscreenchange", l), document.addEventListener("webkitfullscreenchange", l), document.addEventListener("mozfullscreenchange", l), o(".navbar-nav a").each(function() {
            var e = window.location.href.split(/[?#]/)[0];
            this.href == e && (o(this).addClass("active"), o(this).parent().addClass("active"), o(this).parent().parent().addClass("active"), o(this).parent().parent().parent().addClass("active"), o(this).parent().parent().parent().parent().addClass("active"), o(this).parent().parent().parent().parent().parent().addClass("active"))
        }), o(".right-bar-toggle").on("click", function(e) {
            o("body").toggleClass("right-bar-enabled")
        }), o(document).on("click", "body", function(e) {
            0 < o(e.target).closest(".right-bar-toggle, .right-bar").length || o("body").removeClass("right-bar-enabled")
        }), o(".dropdown-menu a.dropdown-toggle").on("click", function(e) {
            return o(this).next().hasClass("show") || o(this).parents(".dropdown-menu").first().find(".show").removeClass("show"), o(this).next(".dropdown-menu").toggleClass("show"), !1
        }),
        function() {
            o(function() {
                o('[data-toggle="tooltip"]').tooltip()
            }), o(function() {
                o('[data-toggle="popover"]').popover()
            });
            var a = o(this).attr("data-delay") ? o(this).attr("data-delay") : 100,
                n = o(this).attr("data-time") ? o(this).attr("data-time") : 1200;
            o('[data-plugin="counterup"]').each(function(e, t) {
                o(this).counterUp({
                    delay: a,
                    time: n
                })
            })
        }(), window.sessionStorage && ((e = sessionStorage.getItem("is_visited")) ? (o(".right-bar input:checkbox").prop("checked", !1), o("#" + e).prop("checked", !0), s(e)) : sessionStorage.setItem("is_visited", "light-mode-switch")), o("#light-mode-switch, #dark-mode-switch, #rtl-mode-switch").on("change", function(e) {
            s(e.target.id)
        }), o(window).on("load", function() {
            o("#status").fadeOut(), o("#preloader").delay(350).fadeOut("slow")
        }), Waves.init(), o("#checkAll").on("change", function() {
            o(".table-check .custom-control-input").prop("checked", o(this).prop("checked"))
        }), o(".table-check .custom-control-input").change(function() {
            o(".table-check .custom-control-input:checked").length == o(".table-check .custom-control-input").length ? o("#checkAll").prop("checked", !0) : o("#checkAll").prop("checked", !1)
        }), c(), null != t && t !== a && console.log("lang", t), n(t), o(".language").on("click", function(e) {
            n(o(this).attr("data-lang"))
        }), o(function() {
            feather.replace()
        })
}(jQuery);