window.addEventListener('DOMContentLoaded', function() {
    $(document).on("click", ".btnSubmitForm", function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        let $this = $(this);
        $this.attr("disabled", "disabled");
        createAjax($this.data("url"), new FormData(document.getElementById("contact-form")), function() {
            $("#contact-form")[0].reset();
            $this.removeAttr("disabled");
        }, function() {
            $this.removeAttr("disabled");
        });
    });
    setTimeout(function() {
        $("body").tooltip({
            selector: '[data-toggle="tooltip"]',
            trigger: "hover",
            container: "body",
            placement: "top",
            boundary: "window"
        });
    }, 1000);
});



function createAjax(e, t, n = function() {}, o = function() {}) {
    $.ajax({
        type: "POST",
        url: e,
        data: t,
        cache: !1,
        contentType: !1,
        processData: !1,
        dataType: "JSON"
    }).done(function(e) {
        e.success ? (iziToast.success({
            title: e.title,
            message: e.message,
            position: "topCenter",
            displayMode: "once"
        }), n(e), null !== e.redirect && "" !== e.redirect && void 0 !== e.redirect && setTimeout(function() {
            window.location.href = e.redirect
        }, 2e3)) : (iziToast.error({
            title: e.title,
            message: e.message,
            position: "topCenter",
            displayMode: "once"
        }), o(e), null !== e.redirect && "" !== e.redirect && void 0 !== e.redirect && setTimeout(function() {
            window.location.href = e.redirect
        }, 2e3))
    })
}

function createModal(e = null, t = null, n = null, o = 600, i = !0, l = "20px", r = 0, a = "#24b4a5", c = "#fff", u = 1040, s = function() {}, d = function() {}, p = function() {}, f = function() {}, g = function() {}, m = function() {}, h = function() {}, w = !0, b = !1, y = !0, v = !0, S = !1, k = 0) {
    "" === e && null === e || $(e).iziModal({
        title: t,
        subtitle: n,
        headerColor: a,
        background: c,
        width: o,
        zindex: u,
        fullscreen: w,
        openFullscreen: b,
        closeOnEscape: y,
        closeButton: v,
        overlayClose: S,
        autoOpen: k,
        padding: l,
        bodyOverflow: i,
        radius: r,
        onFullScreen: m,
        onResize: h,
        onOpening: s,
        onOpened: d,
        onClosing: p,
        onClosed: f,
        afterRender: g
    })
}

function openModal(e = null, t = function() {}) {
    $(e).iziModal("open", t)
}

function closeModal(e = null, t = function() {}) {
    $(e).iziModal("close", t)
}

function setCookie(e, t, n) {
    let o;
    if (n) {
        let e = new Date;
        e.setTime(e.getTime() + 24 * n * 60 * 60 * 1e3), o = "; expires=" + e.toGMTString()
    } else o = "";
    document.cookie = encodeURIComponent(e) + "=" + encodeURIComponent(t) + o + "; path=/"
}

function getCookie(e) {
    let t = encodeURIComponent(e) + "=",
        n = document.cookie.split(";");
    for (let e = 0; e < n.length; e++) {
        let o = n[e];
        for (;
            " " === o.charAt(0);) o = o.substring(1, o.length);
        if (0 === o.indexOf(t)) return decodeURIComponent(o.substring(t.length, o.length))
    }
    return null
}

function deleteCookie(e) {
    setCookie(e, "", -1)
}

let timestamp = function() {
        let e = 0,
            t = new Date,
            n = [35, 60, 180, 7200, 9e4, 345600, 864e3][e++] || 0;
        return new Date(t - 1e3 * n).getTime() / 1e3
    },
    getCurrentSkin = function() {
        let e = document.getElementById("header"),
            t = location.href.split("skin=")[1];
        t || (t = "Snapgram"), -1 !== t.indexOf("#") && (t = t.split("#")[0]);
        for (let n = document.querySelectorAll("#skin option"), o = n.length, i = 0; i < o; i++) {
            t == n[i].value ? (n[i].setAttribute("selected", "selected"), e.innerHTML = t, e.className = t) : n[i].removeAttribute("selected")
        }
        return {
            name: t,
            params: {
                Snapgram: {
                    avatars: !0,
                    list: !1,
                    autoFullScreen: !1,
                    cubeEffect: !0,
                    paginationArrows: !1
                },
            }[t]
        }
    };