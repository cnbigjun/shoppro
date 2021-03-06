if ("undefined" == typeof jQuery) throw new Error("Bootstrap's JavaScript requires jQuery"); +
    function(t) {
        "use strict";
        var e = t.fn.jquery.split(" ")[0].split(".");
        if (e[0] < 2 && e[1] < 9 || 1 == e[0] && 9 == e[1] && e[2] < 1 || e[0] > 2) throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 3")
    } (jQuery),
    +
        function(t) {
            "use strict";
            function e() {
                var t = document.createElement("bootstrap"),
                    e = {
                        WebkitTransition: "webkitTransitionEnd",
                        MozTransition: "transitionend",
                        OTransition: "oTransitionEnd otransitionend",
                        transition: "transitionend"
                    };
                for (var i in e) if (void 0 !== t.style[i]) return {
                    end: e[i]
                };
                return ! 1
            }
            t.fn.emulateTransitionEnd = function(e) {
                var i = !1,
                    o = this;
                t(this).one("bsTransitionEnd",
                    function() {
                        i = !0
                    });
                var n = function() {
                    i || t(o).trigger(t.support.transition.end)
                };
                return setTimeout(n, e),
                    this
            },
                t(function() {
                    t.support.transition = e(),
                    t.support.transition && (t.event.special.bsTransitionEnd = {
                        bindType: t.support.transition.end,
                        delegateType: t.support.transition.end,
                        handle: function(e) {
                            return t(e.target).is(this) ? e.handleObj.handler.apply(this, arguments) : void 0
                        }
                    })
                })
        } (jQuery),
    +
        function(t) {
            "use strict";
            function e(e) {
                return this.each(function() {
                    var i = t(this),
                        n = i.data("bs.alert");
                    n || i.data("bs.alert", n = new o(this)),
                    "string" == typeof e && n[e].call(i)
                })
            }
            var i = '[data-dismiss="alert"]',
                o = function(e) {
                    t(e).on("click", i, this.close)
                };
            o.VERSION = "3.3.6",
                o.TRANSITION_DURATION = 150,
                o.prototype.close = function(e) {
                    function i() {
                        a.detach().trigger("closed.bs.alert").remove()
                    }
                    var n = t(this),
                        s = n.attr("data-target");
                    s || (s = n.attr("href"), s = s && s.replace(/.*(?=#[^\s]*$)/, ""));
                    var a = t(s);
                    e && e.preventDefault(),
                    a.length || (a = n.closest(".alert")),
                        a.trigger(e = t.Event("close.bs.alert")),
                    e.isDefaultPrevented() || (a.removeClass("in"), t.support.transition && a.hasClass("fade") ? a.one("bsTransitionEnd", i).emulateTransitionEnd(o.TRANSITION_DURATION) : i())
                };
            var n = t.fn.alert;
            t.fn.alert = e,
                t.fn.alert.Constructor = o,
                t.fn.alert.noConflict = function() {
                    return t.fn.alert = n,
                        this
                },
                t(document).on("click.bs.alert.data-api", i, o.prototype.close)
        } (jQuery),
    +
        function(t) {
            "use strict";
            function e(e) {
                return this.each(function() {
                    var o = t(this),
                        n = o.data("bs.button"),
                        s = "object" == typeof e && e;
                    n || o.data("bs.button", n = new i(this, s)),
                        "toggle" == e ? n.toggle() : e && n.setState(e)
                })
            }
            var i = function(e, o) {
                this.$element = t(e),
                    this.options = t.extend({},
                        i.DEFAULTS, o),
                    this.isLoading = !1
            };
            i.VERSION = "3.3.6",
                i.DEFAULTS = {
                    loadingText: "loading..."
                },
                i.prototype.setState = function(e) {
                    var i = "disabled",
                        o = this.$element,
                        n = o.is("input") ? "val": "html",
                        s = o.data();
                    e += "Text",
                    null == s.resetText && o.data("resetText", o[n]()),
                        setTimeout(t.proxy(function() {
                                o[n](null == s[e] ? this.options[e] : s[e]),
                                    "loadingText" == e ? (this.isLoading = !0, o.addClass(i).attr(i, i)) : this.isLoading && (this.isLoading = !1, o.removeClass(i).removeAttr(i))
                            },
                            this), 0)
                },
                i.prototype.toggle = function() {
                    var t = !0,
                        e = this.$element.closest('[data-toggle="buttons"]');
                    if (e.length) {
                        var i = this.$element.find("input");
                        "radio" == i.prop("type") ? (i.prop("checked") && (t = !1), e.find(".active").removeClass("active"), this.$element.addClass("active")) : "checkbox" == i.prop("type") && (i.prop("checked") !== this.$element.hasClass("active") && (t = !1), this.$element.toggleClass("active")),
                            i.prop("checked", this.$element.hasClass("active")),
                        t && i.trigger("change")
                    } else this.$element.attr("aria-pressed", !this.$element.hasClass("active")),
                        this.$element.toggleClass("active")
                };
            var o = t.fn.button;
            t.fn.button = e,
                t.fn.button.Constructor = i,
                t.fn.button.noConflict = function() {
                    return t.fn.button = o,
                        this
                },
                t(document).on("click.bs.button.data-api", '[data-toggle^="button"]',
                    function(i) {
                        var o = t(i.target);
                        o.hasClass("btn") || (o = o.closest(".btn")),
                            e.call(o, "toggle"),
                        t(i.target).is('input[type="radio"]') || t(i.target).is('input[type="checkbox"]') || i.preventDefault()
                    }).on("focus.bs.button.data-api blur.bs.button.data-api", '[data-toggle^="button"]',
                    function(e) {
                        t(e.target).closest(".btn").toggleClass("focus", /^focus(in)?$/.test(e.type))
                    })
        } (jQuery),
    +
        function(t) {
            "use strict";
            function e(e) {
                return this.each(function() {
                    var o = t(this),
                        n = o.data("bs.carousel"),
                        s = t.extend({},
                            i.DEFAULTS, o.data(), "object" == typeof e && e),
                        a = "string" == typeof e ? e: s.slide;
                    n || o.data("bs.carousel", n = new i(this, s)),
                        "number" == typeof e ? n.to(e) : a ? n[a]() : s.interval && n.pause().cycle()
                })
            }
            var i = function(e, i) {
                this.$element = t(e),
                    this.$indicators = this.$element.find(".carousel-indicators"),
                    this.options = i,
                    this.paused = null,
                    this.sliding = null,
                    this.interval = null,
                    this.$active = null,
                    this.$items = null,
                this.options.keyboard && this.$element.on("keydown.bs.carousel", t.proxy(this.keydown, this)),
                "hover" == this.options.pause && !("ontouchstart" in document.documentElement) && this.$element.on("mouseenter.bs.carousel", t.proxy(this.pause, this)).on("mouseleave.bs.carousel", t.proxy(this.cycle, this))
            };
            i.VERSION = "3.3.6",
                i.TRANSITION_DURATION = 600,
                i.DEFAULTS = {
                    interval: 5e3,
                    pause: "hover",
                    wrap: !0,
                    keyboard: !0
                },
                i.prototype.keydown = function(t) {
                    if (!/input|textarea/i.test(t.target.tagName)) {
                        switch (t.which) {
                            case 37:
                                this.prev();
                                break;
                            case 39:
                                this.next();
                                break;
                            default:
                                return
                        }
                        t.preventDefault()
                    }
                },
                i.prototype.cycle = function(e) {
                    return e || (this.paused = !1),
                    this.interval && clearInterval(this.interval),
                    this.options.interval && !this.paused && (this.interval = setInterval(t.proxy(this.next, this), this.options.interval)),
                        this
                },
                i.prototype.getItemIndex = function(t) {
                    return this.$items = t.parent().children(".item"),
                        this.$items.index(t || this.$active)
                },
                i.prototype.getItemForDirection = function(t, e) {
                    var i = this.getItemIndex(e),
                        o = "prev" == t && 0 === i || "next" == t && i == this.$items.length - 1;
                    if (o && !this.options.wrap) return e;
                    var n = "prev" == t ? -1 : 1,
                        s = (i + n) % this.$items.length;
                    return this.$items.eq(s)
                },
                i.prototype.to = function(t) {
                    var e = this,
                        i = this.getItemIndex(this.$active = this.$element.find(".item.active"));
                    return t > this.$items.length - 1 || 0 > t ? void 0 : this.sliding ? this.$element.one("slid.bs.carousel",
                        function() {
                            e.to(t)
                        }) : i == t ? this.pause().cycle() : this.slide(t > i ? "next": "prev", this.$items.eq(t))
                },
                i.prototype.pause = function(e) {
                    return e || (this.paused = !0),
                    this.$element.find(".next, .prev").length && t.support.transition && (this.$element.trigger(t.support.transition.end), this.cycle(!0)),
                        this.interval = clearInterval(this.interval),
                        this
                },
                i.prototype.next = function() {
                    return this.sliding ? void 0 : this.slide("next")
                },
                i.prototype.prev = function() {
                    return this.sliding ? void 0 : this.slide("prev")
                },
                i.prototype.slide = function(e, o) {
                    var n = this.$element.find(".item.active"),
                        s = o || this.getItemForDirection(e, n),
                        a = this.interval,
                        r = "next" == e ? "left": "right",
                        l = this;
                    if (s.hasClass("active")) return this.sliding = !1;
                    var h = s[0],
                        d = t.Event("slide.bs.carousel", {
                            relatedTarget: h,
                            direction: r
                        });
                    if (this.$element.trigger(d), !d.isDefaultPrevented()) {
                        if (this.sliding = !0, a && this.pause(), this.$indicators.length) {
                            this.$indicators.find(".active").removeClass("active");
                            var p = t(this.$indicators.children()[this.getItemIndex(s)]);
                            p && p.addClass("active")
                        }
                        var c = t.Event("slid.bs.carousel", {
                            relatedTarget: h,
                            direction: r
                        });
                        return t.support.transition && this.$element.hasClass("slide") ? (s.addClass(e), s[0].offsetWidth, n.addClass(r), s.addClass(r), n.one("bsTransitionEnd",
                            function() {
                                s.removeClass([e, r].join(" ")).addClass("active"),
                                    n.removeClass(["active", r].join(" ")),
                                    l.sliding = !1,
                                    setTimeout(function() {
                                            l.$element.trigger(c)
                                        },
                                        0)
                            }).emulateTransitionEnd(i.TRANSITION_DURATION)) : (n.removeClass("active"), s.addClass("active"), this.sliding = !1, this.$element.trigger(c)),
                        a && this.cycle(),
                            this
                    }
                };
            var o = t.fn.carousel;
            t.fn.carousel = e,
                t.fn.carousel.Constructor = i,
                t.fn.carousel.noConflict = function() {
                    return t.fn.carousel = o,
                        this
                };
            var n = function(i) {
                var o, n = t(this),
                    s = t(n.attr("data-target") || (o = n.attr("href")) && o.replace(/.*(?=#[^\s]+$)/, ""));
                if (s.hasClass("carousel")) {
                    var a = t.extend({},
                        s.data(), n.data()),
                        r = n.attr("data-slide-to");
                    r && (a.interval = !1),
                        e.call(s, a),
                    r && s.data("bs.carousel").to(r),
                        i.preventDefault()
                }
            };
            t(document).on("click.bs.carousel.data-api", "[data-slide]", n).on("click.bs.carousel.data-api", "[data-slide-to]", n),
                t(window).on("load",
                    function() {
                        t('[data-ride="carousel"]').each(function() {
                            var i = t(this);
                            e.call(i, i.data())
                        })
                    })
        } (jQuery),
    +
        function(t) {
            "use strict";
            function e(e) {
                var i, o = e.attr("data-target") || (i = e.attr("href")) && i.replace(/.*(?=#[^\s]+$)/, "");
                return t(o)
            }
            function i(e) {
                return this.each(function() {
                    var i = t(this),
                        n = i.data("bs.collapse"),
                        s = t.extend({},
                            o.DEFAULTS, i.data(), "object" == typeof e && e); ! n && s.toggle && /show|hide/.test(e) && (s.toggle = !1),
                    n || i.data("bs.collapse", n = new o(this, s)),
                    "string" == typeof e && n[e]()
                })
            }
            var o = function(e, i) {
                this.$element = t(e),
                    this.options = t.extend({},
                        o.DEFAULTS, i),
                    this.$trigger = t('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'),
                    this.transitioning = null,
                    this.options.parent ? this.$parent = this.getParent() : this.addAriaAndCollapsedClass(this.$element, this.$trigger),
                this.options.toggle && this.toggle()
            };
            o.VERSION = "3.3.6",
                o.TRANSITION_DURATION = 350,
                o.DEFAULTS = {
                    toggle: !0
                },
                o.prototype.dimension = function() {
                    var t = this.$element.hasClass("width");
                    return t ? "width": "height"
                },
                o.prototype.show = function() {
                    if (!this.transitioning && !this.$element.hasClass("in")) {
                        var e, n = this.$parent && this.$parent.children(".panel").children(".in, .collapsing");
                        if (! (n && n.length && (e = n.data("bs.collapse"), e && e.transitioning))) {
                            var s = t.Event("show.bs.collapse");
                            if (this.$element.trigger(s), !s.isDefaultPrevented()) {
                                n && n.length && (i.call(n, "hide"), e || n.data("bs.collapse", null));
                                var a = this.dimension();
                                this.$element.removeClass("collapse").addClass("collapsing")[a](0).attr("aria-expanded", !0),
                                    this.$trigger.removeClass("collapsed").attr("aria-expanded", !0),
                                    this.transitioning = 1;
                                var r = function() {
                                    this.$element.removeClass("collapsing").addClass("collapse in")[a](""),
                                        this.transitioning = 0,
                                        this.$element.trigger("shown.bs.collapse")
                                };
                                if (!t.support.transition) return r.call(this);
                                var l = t.camelCase(["scroll", a].join("-"));
                                this.$element.one("bsTransitionEnd", t.proxy(r, this)).emulateTransitionEnd(o.TRANSITION_DURATION)[a](this.$element[0][l])
                            }
                        }
                    }
                },
                o.prototype.hide = function() {
                    if (!this.transitioning && this.$element.hasClass("in")) {
                        var e = t.Event("hide.bs.collapse");
                        if (this.$element.trigger(e), !e.isDefaultPrevented()) {
                            var i = this.dimension();
                            this.$element[i](this.$element[i]())[0].offsetHeight,
                                this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1),
                                this.$trigger.addClass("collapsed").attr("aria-expanded", !1),
                                this.transitioning = 1;
                            var n = function() {
                                this.transitioning = 0,
                                    this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")
                            };
                            return t.support.transition ? void this.$element[i](0).one("bsTransitionEnd", t.proxy(n, this)).emulateTransitionEnd(o.TRANSITION_DURATION) : n.call(this)
                        }
                    }
                },
                o.prototype.toggle = function() {
                    this[this.$element.hasClass("in") ? "hide": "show"]()
                },
                o.prototype.getParent = function() {
                    return t(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each(t.proxy(function(i, o) {
                            var n = t(o);
                            this.addAriaAndCollapsedClass(e(n), n)
                        },
                        this)).end()
                },
                o.prototype.addAriaAndCollapsedClass = function(t, e) {
                    var i = t.hasClass("in");
                    t.attr("aria-expanded", i),
                        e.toggleClass("collapsed", !i).attr("aria-expanded", i)
                };
            var n = t.fn.collapse;
            t.fn.collapse = i,
                t.fn.collapse.Constructor = o,
                t.fn.collapse.noConflict = function() {
                    return t.fn.collapse = n,
                        this
                },
                t(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]',
                    function(o) {
                        var n = t(this);
                        n.attr("data-target") || o.preventDefault();
                        var s = e(n),
                            a = s.data("bs.collapse"),
                            r = a ? "toggle": n.data();
                        i.call(s, r)
                    })
        } (jQuery),
    +
        function(t) {
            "use strict";
            function e(e) {
                var i = e.attr("data-target");
                i || (i = e.attr("href"), i = i && /#[A-Za-z]/.test(i) && i.replace(/.*(?=#[^\s]*$)/, ""));
                var o = i && t(i);
                return o && o.length ? o: e.parent()
            }
            function i(i) {
                i && 3 === i.which || (t(n).remove(), t(s).each(function() {
                    var o = t(this),
                        n = e(o),
                        s = {
                            relatedTarget: this
                        };
                    n.hasClass("open") && (i && "click" == i.type && /input|textarea/i.test(i.target.tagName) && t.contains(n[0], i.target) || (n.trigger(i = t.Event("hide.bs.dropdown", s)), i.isDefaultPrevented() || (o.attr("aria-expanded", "false"), n.removeClass("open").trigger(t.Event("hidden.bs.dropdown", s)))))
                }))
            }
            function o(e) {
                return this.each(function() {
                    var i = t(this),
                        o = i.data("bs.dropdown");
                    o || i.data("bs.dropdown", o = new a(this)),
                    "string" == typeof e && o[e].call(i)
                })
            }
            var n = ".dropdown-backdrop",
                s = '[data-toggle="dropdown"]',
                a = function(e) {
                    t(e).on("click.bs.dropdown", this.toggle)
                };
            a.VERSION = "3.3.6",
                a.prototype.toggle = function(o) {
                    var n = t(this);
                    if (!n.is(".disabled, :disabled")) {
                        var s = e(n),
                            a = s.hasClass("open");
                        if (i(), !a) {
                            "ontouchstart" in document.documentElement && !s.closest(".navbar-nav").length && t(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(t(this)).on("click", i);
                            var r = {
                                relatedTarget: this
                            };
                            if (s.trigger(o = t.Event("show.bs.dropdown", r)), o.isDefaultPrevented()) return;
                            n.trigger("focus").attr("aria-expanded", "true"),
                                s.toggleClass("open").trigger(t.Event("shown.bs.dropdown", r))
                        }
                        return ! 1
                    }
                },
                a.prototype.keydown = function(i) {
                    if (/(38|40|27|32)/.test(i.which) && !/input|textarea/i.test(i.target.tagName)) {
                        var o = t(this);
                        if (i.preventDefault(), i.stopPropagation(), !o.is(".disabled, :disabled")) {
                            var n = e(o),
                                a = n.hasClass("open");
                            if (!a && 27 != i.which || a && 27 == i.which) return 27 == i.which && n.find(s).trigger("focus"),
                                o.trigger("click");
                            var r = " li:not(.disabled):visible a",
                                l = n.find(".dropdown-menu" + r);
                            if (l.length) {
                                var h = l.index(i.target);
                                38 == i.which && h > 0 && h--,
                                40 == i.which && h < l.length - 1 && h++,
                                ~h || (h = 0),
                                    l.eq(h).trigger("focus")
                            }
                        }
                    }
                };
            var r = t.fn.dropdown;
            t.fn.dropdown = o,
                t.fn.dropdown.Constructor = a,
                t.fn.dropdown.noConflict = function() {
                    return t.fn.dropdown = r,
                        this
                },
                t(document).on("click.bs.dropdown.data-api", i).on("click.bs.dropdown.data-api", ".dropdown form",
                    function(t) {
                        t.stopPropagation()
                    }).on("click.bs.dropdown.data-api", s, a.prototype.toggle).on("keydown.bs.dropdown.data-api", s, a.prototype.keydown).on("keydown.bs.dropdown.data-api", ".dropdown-menu", a.prototype.keydown)
        } (jQuery),
    +
        function(t) {
            "use strict";
            function e(e, o) {
                return this.each(function() {
                    var n = t(this),
                        s = n.data("bs.modal"),
                        a = t.extend({},
                            i.DEFAULTS, n.data(), "object" == typeof e && e);
                    s || n.data("bs.modal", s = new i(this, a)),
                        "string" == typeof e ? s[e](o) : a.show && s.show(o)
                })
            }
            var i = function(e, i) {
                this.options = i,
                    this.$body = t(document.body),
                    this.$element = t(e),
                    this.$dialog = this.$element.find(".modal-dialog"),
                    this.$backdrop = null,
                    this.isShown = null,
                    this.originalBodyPad = null,
                    this.scrollbarWidth = 0,
                    this.ignoreBackdropClick = !1,
                this.options.remote && this.$element.find(".modal-content").load(this.options.remote, t.proxy(function() {
                        this.$element.trigger("loaded.bs.modal")
                    },
                    this))
            };
            i.VERSION = "3.3.6",
                i.TRANSITION_DURATION = 300,
                i.BACKDROP_TRANSITION_DURATION = 150,
                i.DEFAULTS = {
                    backdrop: !0,
                    keyboard: !0,
                    show: !0
                },
                i.prototype.toggle = function(t) {
                    return this.isShown ? this.hide() : this.show(t)
                },
                i.prototype.show = function(e) {
                    var o = this,
                        n = t.Event("show.bs.modal", {
                            relatedTarget: e
                        });
                    this.$element.trigger(n),
                    this.isShown || n.isDefaultPrevented() || (this.isShown = !0, this.checkScrollbar(), this.setScrollbar(), this.$body.addClass("modal-open"), this.escape(), this.resize(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', t.proxy(this.hide, this)), this.$dialog.on("mousedown.dismiss.bs.modal",
                        function() {
                            o.$element.one("mouseup.dismiss.bs.modal",
                                function(e) {
                                    t(e.target).is(o.$element) && (o.ignoreBackdropClick = !0)
                                })
                        }), this.backdrop(function() {
                        var n = t.support.transition && o.$element.hasClass("fade");
                        o.$element.parent().length || o.$element.appendTo(o.$body),
                            o.$element.show().scrollTop(0),
                            o.adjustDialog(),
                        n && o.$element[0].offsetWidth,
                            o.$element.addClass("in"),
                            o.enforceFocus();
                        var s = t.Event("shown.bs.modal", {
                            relatedTarget: e
                        });
                        n ? o.$dialog.one("bsTransitionEnd",
                            function() {
                                o.$element.trigger("focus").trigger(s)
                            }).emulateTransitionEnd(i.TRANSITION_DURATION) : o.$element.trigger("focus").trigger(s)
                    }))
                },
                i.prototype.hide = function(e) {
                    e && e.preventDefault(),
                        e = t.Event("hide.bs.modal"),
                        this.$element.trigger(e),
                    this.isShown && !e.isDefaultPrevented() && (this.isShown = !1, this.escape(), this.resize(), t(document).off("focusin.bs.modal"), this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"), this.$dialog.off("mousedown.dismiss.bs.modal"), t.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", t.proxy(this.hideModal, this)).emulateTransitionEnd(i.TRANSITION_DURATION) : this.hideModal())
                },
                i.prototype.enforceFocus = function() {
                    t(document).off("focusin.bs.modal").on("focusin.bs.modal", t.proxy(function(t) {
                            this.$element[0] === t.target || this.$element.has(t.target).length || this.$element.trigger("focus")
                        },
                        this))
                },
                i.prototype.escape = function() {
                    this.isShown && this.options.keyboard ? this.$element.on("keydown.dismiss.bs.modal", t.proxy(function(t) {
                            27 == t.which && this.hide()
                        },
                        this)) : this.isShown || this.$element.off("keydown.dismiss.bs.modal")
                },
                i.prototype.resize = function() {
                    this.isShown ? t(window).on("resize.bs.modal", t.proxy(this.handleUpdate, this)) : t(window).off("resize.bs.modal")
                },
                i.prototype.hideModal = function() {
                    var t = this;
                    this.$element.hide(),
                        this.backdrop(function() {
                            t.$body.removeClass("modal-open"),
                                t.resetAdjustments(),
                                t.resetScrollbar(),
                                t.$element.trigger("hidden.bs.modal")
                        })
                },
                i.prototype.removeBackdrop = function() {
                    this.$backdrop && this.$backdrop.remove(),
                        this.$backdrop = null
                },
                i.prototype.backdrop = function(e) {
                    var o = this,
                        n = this.$element.hasClass("fade") ? "fade": "";
                    if (this.isShown && this.options.backdrop) {
                        var s = t.support.transition && n;
                        if (this.$backdrop = t(document.createElement("div")).addClass("modal-backdrop " + n).appendTo(this.$body), this.$element.on("click.dismiss.bs.modal", t.proxy(function(t) {
                                    return this.ignoreBackdropClick ? void(this.ignoreBackdropClick = !1) : void(t.target === t.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus() : this.hide()))
                                },
                                this)), s && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !e) return;
                        s ? this.$backdrop.one("bsTransitionEnd", e).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION) : e()
                    } else if (!this.isShown && this.$backdrop) {
                        this.$backdrop.removeClass("in");
                        var a = function() {
                            o.removeBackdrop(),
                            e && e()
                        };
                        t.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", a).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION) : a()
                    } else e && e()
                },
                i.prototype.handleUpdate = function() {
                    this.adjustDialog()
                },
                i.prototype.adjustDialog = function() {
                    var t = this.$element[0].scrollHeight > document.documentElement.clientHeight;
                    this.$element.css({
                        paddingLeft: !this.bodyIsOverflowing && t ? this.scrollbarWidth: "",
                        paddingRight: this.bodyIsOverflowing && !t ? this.scrollbarWidth: ""
                    })
                },
                i.prototype.resetAdjustments = function() {
                    this.$element.css({
                        paddingLeft: "",
                        paddingRight: ""
                    })
                },
                i.prototype.checkScrollbar = function() {
                    var t = window.innerWidth;
                    if (!t) {
                        var e = document.documentElement.getBoundingClientRect();
                        t = e.right - Math.abs(e.left)
                    }
                    this.bodyIsOverflowing = document.body.clientWidth < t,
                        this.scrollbarWidth = this.measureScrollbar()
                },
                i.prototype.setScrollbar = function() {
                    var t = parseInt(this.$body.css("padding-right") || 0, 10);
                    this.originalBodyPad = document.body.style.paddingRight || "",
                    this.bodyIsOverflowing && this.$body.css("padding-right", t + this.scrollbarWidth)
                },
                i.prototype.resetScrollbar = function() {
                    this.$body.css("padding-right", this.originalBodyPad)
                },
                i.prototype.measureScrollbar = function() {
                    var t = document.createElement("div");
                    t.className = "modal-scrollbar-measure",
                        this.$body.append(t);
                    var e = t.offsetWidth - t.clientWidth;
                    return this.$body[0].removeChild(t),
                        e
                };
            var o = t.fn.modal;
            t.fn.modal = e,
                t.fn.modal.Constructor = i,
                t.fn.modal.noConflict = function() {
                    return t.fn.modal = o,
                        this
                },
                t(document).on("click.bs.modal.data-api", '[data-toggle="modal"]',
                    function(i) {
                        var o = t(this),
                            n = o.attr("href"),
                            s = t(o.attr("data-target") || n && n.replace(/.*(?=#[^\s]+$)/, "")),
                            a = s.data("bs.modal") ? "toggle": t.extend({
                                    remote: !/#/.test(n) && n
                                },
                                s.data(), o.data());
                        o.is("a") && i.preventDefault(),
                            s.one("show.bs.modal",
                                function(t) {
                                    t.isDefaultPrevented() || s.one("hidden.bs.modal",
                                        function() {
                                            o.is(":visible") && o.trigger("focus")
                                        })
                                }),
                            e.call(s, a, this)
                    })
        } (jQuery),
    +
        function(t) {
            "use strict";
            function e(e) {
                return this.each(function() {
                    var o = t(this),
                        n = o.data("bs.tooltip"),
                        s = "object" == typeof e && e; (n || !/destroy|hide/.test(e)) && (n || o.data("bs.tooltip", n = new i(this, s)), "string" == typeof e && n[e]())
                })
            }
            var i = function(t, e) {
                this.type = null,
                    this.options = null,
                    this.enabled = null,
                    this.timeout = null,
                    this.hoverState = null,
                    this.$element = null,
                    this.inState = null,
                    this.init("tooltip", t, e)
            };
            i.VERSION = "3.3.6",
                i.TRANSITION_DURATION = 150,
                i.DEFAULTS = {
                    animation: !0,
                    placement: "top",
                    selector: !1,
                    template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
                    trigger: "hover focus",
                    title: "",
                    delay: 0,
                    html: !1,
                    container: !1,
                    viewport: {
                        selector: "body",
                        padding: 0
                    }
                },
                i.prototype.init = function(e, i, o) {
                    if (this.enabled = !0, this.type = e, this.$element = t(i), this.options = this.getOptions(o), this.$viewport = this.options.viewport && t(t.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : this.options.viewport.selector || this.options.viewport), this.inState = {
                            click: !1,
                            hover: !1,
                            focus: !1
                        },
                        this.$element[0] instanceof document.constructor && !this.options.selector) throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!");
                    for (var n = this.options.trigger.split(" "), s = n.length; s--;) {
                        var a = n[s];
                        if ("click" == a) this.$element.on("click." + this.type, this.options.selector, t.proxy(this.toggle, this));
                        else if ("manual" != a) {
                            var r = "hover" == a ? "mouseenter": "focusin",
                                l = "hover" == a ? "mouseleave": "focusout";
                            this.$element.on(r + "." + this.type, this.options.selector, t.proxy(this.enter, this)),
                                this.$element.on(l + "." + this.type, this.options.selector, t.proxy(this.leave, this))
                        }
                    }
                    this.options.selector ? this._options = t.extend({},
                        this.options, {
                            trigger: "manual",
                            selector: ""
                        }) : this.fixTitle()
                },
                i.prototype.getDefaults = function() {
                    return i.DEFAULTS
                },
                i.prototype.getOptions = function(e) {
                    return e = t.extend({},
                        this.getDefaults(), this.$element.data(), e),
                    e.delay && "number" == typeof e.delay && (e.delay = {
                        show: e.delay,
                        hide: e.delay
                    }),
                        e
                },
                i.prototype.getDelegateOptions = function() {
                    var e = {},
                        i = this.getDefaults();
                    return this._options && t.each(this._options,
                        function(t, o) {
                            i[t] != o && (e[t] = o)
                        }),
                        e
                },
                i.prototype.enter = function(e) {
                    var i = e instanceof this.constructor ? e: t(e.currentTarget).data("bs." + this.type);
                    return i || (i = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, i)),
                    e instanceof t.Event && (i.inState["focusin" == e.type ? "focus": "hover"] = !0),
                        i.tip().hasClass("in") || "in" == i.hoverState ? void(i.hoverState = "in") : (clearTimeout(i.timeout), i.hoverState = "in", i.options.delay && i.options.delay.show ? void(i.timeout = setTimeout(function() {
                                "in" == i.hoverState && i.show()
                            },
                            i.options.delay.show)) : i.show())
                },
                i.prototype.isInStateTrue = function() {
                    for (var t in this.inState) if (this.inState[t]) return ! 0;
                    return ! 1
                },
                i.prototype.leave = function(e) {
                    var i = e instanceof this.constructor ? e: t(e.currentTarget).data("bs." + this.type);
                    return i || (i = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, i)),
                    e instanceof t.Event && (i.inState["focusout" == e.type ? "focus": "hover"] = !1),
                        i.isInStateTrue() ? void 0 : (clearTimeout(i.timeout), i.hoverState = "out", i.options.delay && i.options.delay.hide ? void(i.timeout = setTimeout(function() {
                                "out" == i.hoverState && i.hide()
                            },
                            i.options.delay.hide)) : i.hide())
                },
                i.prototype.show = function() {
                    var e = t.Event("show.bs." + this.type);
                    if (this.hasContent() && this.enabled) {
                        this.$element.trigger(e);
                        var o = t.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
                        if (e.isDefaultPrevented() || !o) return;
                        var n = this,
                            s = this.tip(),
                            a = this.getUID(this.type);
                        this.setContent(),
                            s.attr("id", a),
                            this.$element.attr("aria-describedby", a),
                        this.options.animation && s.addClass("fade");
                        var r = "function" == typeof this.options.placement ? this.options.placement.call(this, s[0], this.$element[0]) : this.options.placement,
                            l = /\s?auto?\s?/i,
                            h = l.test(r);
                        h && (r = r.replace(l, "") || "top"),
                            s.detach().css({
                                top: 0,
                                left: 0,
                                display: "block"
                            }).addClass(r).data("bs." + this.type, this),
                            this.options.container ? s.appendTo(this.options.container) : s.insertAfter(this.$element),
                            this.$element.trigger("inserted.bs." + this.type);
                        var d = this.getPosition(),
                            p = s[0].offsetWidth,
                            c = s[0].offsetHeight;
                        if (h) {
                            var f = r,
                                u = this.getPosition(this.$viewport);
                            r = "bottom" == r && d.bottom + c > u.bottom ? "top": "top" == r && d.top - c < u.top ? "bottom": "right" == r && d.right + p > u.width ? "left": "left" == r && d.left - p < u.left ? "right": r,
                                s.removeClass(f).addClass(r)
                        }
                        var g = this.getCalculatedOffset(r, d, p, c);
                        this.applyPlacement(g, r);
                        var v = function() {
                            var t = n.hoverState;
                            n.$element.trigger("shown.bs." + n.type),
                                n.hoverState = null,
                            "out" == t && n.leave(n)
                        };
                        t.support.transition && this.$tip.hasClass("fade") ? s.one("bsTransitionEnd", v).emulateTransitionEnd(i.TRANSITION_DURATION) : v()
                    }
                },
                i.prototype.applyPlacement = function(e, i) {
                    var o = this.tip(),
                        n = o[0].offsetWidth,
                        s = o[0].offsetHeight,
                        a = parseInt(o.css("margin-top"), 10),
                        r = parseInt(o.css("margin-left"), 10);
                    isNaN(a) && (a = 0),
                    isNaN(r) && (r = 0),
                        e.top += a,
                        e.left += r,
                        t.offset.setOffset(o[0], t.extend({
                                using: function(t) {
                                    o.css({
                                        top: Math.round(t.top),
                                        left: Math.round(t.left)
                                    })
                                }
                            },
                            e), 0),
                        o.addClass("in");
                    var l = o[0].offsetWidth,
                        h = o[0].offsetHeight;
                    "top" == i && h != s && (e.top = e.top + s - h);
                    var d = this.getViewportAdjustedDelta(i, e, l, h);
                    d.left ? e.left += d.left: e.top += d.top;
                    var p = /top|bottom/.test(i),
                        c = p ? 2 * d.left - n + l: 2 * d.top - s + h,
                        f = p ? "offsetWidth": "offsetHeight";
                    o.offset(e),
                        this.replaceArrow(c, o[0][f], p)
                },
                i.prototype.replaceArrow = function(t, e, i) {
                    this.arrow().css(i ? "left": "top", 50 * (1 - t / e) + "%").css(i ? "top": "left", "")
                },
                i.prototype.setContent = function() {
                    var t = this.tip(),
                        e = this.getTitle();
                    t.find(".tooltip-inner")[this.options.html ? "html": "text"](e),
                        t.removeClass("fade in top bottom left right")
                },
                i.prototype.hide = function(e) {
                    function o() {
                        "in" != n.hoverState && s.detach(),
                            n.$element.removeAttr("aria-describedby").trigger("hidden.bs." + n.type),
                        e && e()
                    }
                    var n = this,
                        s = t(this.$tip),
                        a = t.Event("hide.bs." + this.type);
                    return this.$element.trigger(a),
                        a.isDefaultPrevented() ? void 0 : (s.removeClass("in"), t.support.transition && s.hasClass("fade") ? s.one("bsTransitionEnd", o).emulateTransitionEnd(i.TRANSITION_DURATION) : o(), this.hoverState = null, this)
                },
                i.prototype.fixTitle = function() {
                    var t = this.$element; (t.attr("title") || "string" != typeof t.attr("data-original-title")) && t.attr("data-original-title", t.attr("title") || "").attr("title", "")
                },
                i.prototype.hasContent = function() {
                    return this.getTitle()
                },
                i.prototype.getPosition = function(e) {
                    e = e || this.$element;
                    var i = e[0],
                        o = "BODY" == i.tagName,
                        n = i.getBoundingClientRect();
                    null == n.width && (n = t.extend({},
                        n, {
                            width: n.right - n.left,
                            height: n.bottom - n.top
                        }));
                    var s = o ? {
                            top: 0,
                            left: 0
                        }: e.offset(),
                        a = {
                            scroll: o ? document.documentElement.scrollTop || document.body.scrollTop: e.scrollTop()
                        },
                        r = o ? {
                            width: t(window).width(),
                            height: t(window).height()
                        }: null;
                    return t.extend({},
                        n, a, r, s)
                },
                i.prototype.getCalculatedOffset = function(t, e, i, o) {
                    return "bottom" == t ? {
                        top: e.top + e.height,
                        left: e.left + e.width / 2 - i / 2
                    }: "top" == t ? {
                        top: e.top - o,
                        left: e.left + e.width / 2 - i / 2
                    }: "left" == t ? {
                        top: e.top + e.height / 2 - o / 2,
                        left: e.left - i
                    }: {
                        top: e.top + e.height / 2 - o / 2,
                        left: e.left + e.width
                    }
                },
                i.prototype.getViewportAdjustedDelta = function(t, e, i, o) {
                    var n = {
                        top: 0,
                        left: 0
                    };
                    if (!this.$viewport) return n;
                    var s = this.options.viewport && this.options.viewport.padding || 0,
                        a = this.getPosition(this.$viewport);
                    if (/right|left/.test(t)) {
                        var r = e.top - s - a.scroll,
                            l = e.top + s - a.scroll + o;
                        r < a.top ? n.top = a.top - r: l > a.top + a.height && (n.top = a.top + a.height - l)
                    } else {
                        var h = e.left - s,
                            d = e.left + s + i;
                        h < a.left ? n.left = a.left - h: d > a.right && (n.left = a.left + a.width - d)
                    }
                    return n
                },
                i.prototype.getTitle = function() {
                    var t, e = this.$element,
                        i = this.options;
                    return t = e.attr("data-original-title") || ("function" == typeof i.title ? i.title.call(e[0]) : i.title)
                },
                i.prototype.getUID = function(t) {
                    do t += ~~ (1e6 * Math.random());
                    while (document.getElementById(t));
                    return t
                },
                i.prototype.tip = function() {
                    if (!this.$tip && (this.$tip = t(this.options.template), 1 != this.$tip.length)) throw new Error(this.type + " `template` option must consist of exactly 1 top-level element!");
                    return this.$tip
                },
                i.prototype.arrow = function() {
                    return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
                },
                i.prototype.enable = function() {
                    this.enabled = !0
                },
                i.prototype.disable = function() {
                    this.enabled = !1
                },
                i.prototype.toggleEnabled = function() {
                    this.enabled = !this.enabled
                },
                i.prototype.toggle = function(e) {
                    var i = this;
                    e && (i = t(e.currentTarget).data("bs." + this.type), i || (i = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, i))),
                        e ? (i.inState.click = !i.inState.click, i.isInStateTrue() ? i.enter(i) : i.leave(i)) : i.tip().hasClass("in") ? i.leave(i) : i.enter(i)
                },
                i.prototype.destroy = function() {
                    var t = this;
                    clearTimeout(this.timeout),
                        this.hide(function() {
                            t.$element.off("." + t.type).removeData("bs." + t.type),
                            t.$tip && t.$tip.detach(),
                                t.$tip = null,
                                t.$arrow = null,
                                t.$viewport = null
                        })
                };
            var o = t.fn.tooltip;
            t.fn.tooltip = e,
                t.fn.tooltip.Constructor = i,
                t.fn.tooltip.noConflict = function() {
                    return t.fn.tooltip = o,
                        this
                }
        } (jQuery),
    +
        function(t) {
            "use strict";
            function e(e) {
                return this.each(function() {
                    var o = t(this),
                        n = o.data("bs.popover"),
                        s = "object" == typeof e && e; (n || !/destroy|hide/.test(e)) && (n || o.data("bs.popover", n = new i(this, s)), "string" == typeof e && n[e]())
                })
            }
            var i = function(t, e) {
                this.init("popover", t, e)
            };
            if (!t.fn.tooltip) throw new Error("Popover requires tooltip.js");
            i.VERSION = "3.3.6",
                i.DEFAULTS = t.extend({},
                    t.fn.tooltip.Constructor.DEFAULTS, {
                        placement: "right",
                        trigger: "click",
                        content: "",
                        template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
                    }),
                i.prototype = t.extend({},
                    t.fn.tooltip.Constructor.prototype),
                i.prototype.constructor = i,
                i.prototype.getDefaults = function() {
                    return i.DEFAULTS
                },
                i.prototype.setContent = function() {
                    var t = this.tip(),
                        e = this.getTitle(),
                        i = this.getContent();
                    t.find(".popover-title")[this.options.html ? "html": "text"](e),
                        t.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof i ? "html": "append": "text"](i),
                        t.removeClass("fade top bottom left right in"),
                    t.find(".popover-title").html() || t.find(".popover-title").hide()
                },
                i.prototype.hasContent = function() {
                    return this.getTitle() || this.getContent()
                },
                i.prototype.getContent = function() {
                    var t = this.$element,
                        e = this.options;
                    return t.attr("data-content") || ("function" == typeof e.content ? e.content.call(t[0]) : e.content)
                },
                i.prototype.arrow = function() {
                    return this.$arrow = this.$arrow || this.tip().find(".arrow")
                };
            var o = t.fn.popover;
            t.fn.popover = e,
                t.fn.popover.Constructor = i,
                t.fn.popover.noConflict = function() {
                    return t.fn.popover = o,
                        this
                }
        } (jQuery),
    +
        function(t) {
            "use strict";
            function e(i, o) {
                this.$body = t(document.body),
                    this.$scrollElement = t(t(i).is(document.body) ? window: i),
                    this.options = t.extend({},
                        e.DEFAULTS, o),
                    this.selector = (this.options.target || "") + " .nav li > a",
                    this.offsets = [],
                    this.targets = [],
                    this.activeTarget = null,
                    this.scrollHeight = 0,
                    this.$scrollElement.on("scroll.bs.scrollspy", t.proxy(this.process, this)),
                    this.refresh(),
                    this.process()
            }
            function i(i) {
                return this.each(function() {
                    var o = t(this),
                        n = o.data("bs.scrollspy"),
                        s = "object" == typeof i && i;
                    n || o.data("bs.scrollspy", n = new e(this, s)),
                    "string" == typeof i && n[i]()
                })
            }
            e.VERSION = "3.3.6",
                e.DEFAULTS = {
                    offset: 10
                },
                e.prototype.getScrollHeight = function() {
                    return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
                },
                e.prototype.refresh = function() {
                    var e = this,
                        i = "offset",
                        o = 0;
                    this.offsets = [],
                        this.targets = [],
                        this.scrollHeight = this.getScrollHeight(),
                    t.isWindow(this.$scrollElement[0]) || (i = "position", o = this.$scrollElement.scrollTop()),
                        this.$body.find(this.selector).map(function() {
                            var e = t(this),
                                n = e.data("target") || e.attr("href"),
                                s = /^#./.test(n) && t(n);
                            return s && s.length && s.is(":visible") && [[s[i]().top + o, n]] || null
                        }).sort(function(t, e) {
                            return t[0] - e[0]
                        }).each(function() {
                            e.offsets.push(this[0]),
                                e.targets.push(this[1])
                        })
                },
                e.prototype.process = function() {
                    var t, e = this.$scrollElement.scrollTop() + this.options.offset,
                        i = this.getScrollHeight(),
                        o = this.options.offset + i - this.$scrollElement.height(),
                        n = this.offsets,
                        s = this.targets,
                        a = this.activeTarget;
                    if (this.scrollHeight != i && this.refresh(), e >= o) return a != (t = s[s.length - 1]) && this.activate(t);
                    if (a && e < n[0]) return this.activeTarget = null,
                        this.clear();
                    for (t = n.length; t--;) a != s[t] && e >= n[t] && (void 0 === n[t + 1] || e < n[t + 1]) && this.activate(s[t])
                },
                e.prototype.activate = function(e) {
                    this.activeTarget = e,
                        this.clear();
                    var i = this.selector + '[data-target="' + e + '"],' + this.selector + '[href="' + e + '"]',
                        o = t(i).parents("li").addClass("active");
                    o.parent(".dropdown-menu").length && (o = o.closest("li.dropdown").addClass("active")),
                        o.trigger("activate.bs.scrollspy")
                },
                e.prototype.clear = function() {
                    t(this.selector).parentsUntil(this.options.target, ".active").removeClass("active")
                };
            var o = t.fn.scrollspy;
            t.fn.scrollspy = i,
                t.fn.scrollspy.Constructor = e,
                t.fn.scrollspy.noConflict = function() {
                    return t.fn.scrollspy = o,
                        this
                },
                t(window).on("load.bs.scrollspy.data-api",
                    function() {
                        t('[data-spy="scroll"]').each(function() {
                            var e = t(this);
                            i.call(e, e.data())
                        })
                    })
        } (jQuery),
    +
        function(t) {
            "use strict";
            function e(e) {
                return this.each(function() {
                    var o = t(this),
                        n = o.data("bs.tab");
                    n || o.data("bs.tab", n = new i(this)),
                    "string" == typeof e && n[e]()
                })
            }
            var i = function(e) {
                this.element = t(e)
            };
            i.VERSION = "3.3.6",
                i.TRANSITION_DURATION = 150,
                i.prototype.show = function() {
                    var e = this.element,
                        i = e.closest("ul:not(.dropdown-menu)"),
                        o = e.data("target");
                    if (o || (o = e.attr("href"), o = o && o.replace(/.*(?=#[^\s]*$)/, "")), !e.parent("li").hasClass("active")) {
                        var n = i.find(".active:last a"),
                            s = t.Event("hide.bs.tab", {
                                relatedTarget: e[0]
                            }),
                            a = t.Event("show.bs.tab", {
                                relatedTarget: n[0]
                            });
                        if (n.trigger(s), e.trigger(a), !a.isDefaultPrevented() && !s.isDefaultPrevented()) {
                            var r = t(o);
                            this.activate(e.closest("li"), i),
                                this.activate(r, r.parent(),
                                    function() {
                                        n.trigger({
                                            type: "hidden.bs.tab",
                                            relatedTarget: e[0]
                                        }),
                                            e.trigger({
                                                type: "shown.bs.tab",
                                                relatedTarget: n[0]
                                            })
                                    })
                        }
                    }
                },
                i.prototype.activate = function(e, o, n) {
                    function s() {
                        a.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !1),
                            e.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded", !0),
                            r ? (e[0].offsetWidth, e.addClass("in")) : e.removeClass("fade"),
                        e.parent(".dropdown-menu").length && e.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !0),
                        n && n()
                    }
                    var a = o.find("> .active"),
                        r = n && t.support.transition && (a.length && a.hasClass("fade") || !!o.find("> .fade").length);
                    a.length && r ? a.one("bsTransitionEnd", s).emulateTransitionEnd(i.TRANSITION_DURATION) : s(),
                        a.removeClass("in")
                };
            var o = t.fn.tab;
            t.fn.tab = e,
                t.fn.tab.Constructor = i,
                t.fn.tab.noConflict = function() {
                    return t.fn.tab = o,
                        this
                };
            var n = function(i) {
                i.preventDefault(),
                    e.call(t(this), "show")
            };
            t(document).on("click.bs.tab.data-api", '[data-toggle="tab"]', n).on("click.bs.tab.data-api", '[data-toggle="pill"]', n)
        } (jQuery),
    +
        function(t) {
            "use strict";
            function e(e) {
                return this.each(function() {
                    var o = t(this),
                        n = o.data("bs.affix"),
                        s = "object" == typeof e && e;
                    n || o.data("bs.affix", n = new i(this, s)),
                    "string" == typeof e && n[e]()
                })
            }
            var i = function(e, o) {
                this.options = t.extend({},
                    i.DEFAULTS, o),
                    this.$target = t(this.options.target).on("scroll.bs.affix.data-api", t.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", t.proxy(this.checkPositionWithEventLoop, this)),
                    this.$element = t(e),
                    this.affixed = null,
                    this.unpin = null,
                    this.pinnedOffset = null,
                    this.checkPosition()
            };
            i.VERSION = "3.3.6",
                i.RESET = "affix affix-top affix-bottom",
                i.DEFAULTS = {
                    offset: 0,
                    target: window
                },
                i.prototype.getState = function(t, e, i, o) {
                    var n = this.$target.scrollTop(),
                        s = this.$element.offset(),
                        a = this.$target.height();
                    if (null != i && "top" == this.affixed) return i > n && "top";
                    if ("bottom" == this.affixed) return null != i ? !(n + this.unpin <= s.top) && "bottom": !(t - o >= n + a) && "bottom";
                    var r = null == this.affixed,
                        l = r ? n: s.top,
                        h = r ? a: e;
                    return null != i && i >= n ? "top": null != o && l + h >= t - o && "bottom"
                },
                i.prototype.getPinnedOffset = function() {
                    if (this.pinnedOffset) return this.pinnedOffset;
                    this.$element.removeClass(i.RESET).addClass("affix");
                    var t = this.$target.scrollTop(),
                        e = this.$element.offset();
                    return this.pinnedOffset = e.top - t
                },
                i.prototype.checkPositionWithEventLoop = function() {
                    setTimeout(t.proxy(this.checkPosition, this), 1)
                },
                i.prototype.checkPosition = function() {
                    if (this.$element.is(":visible")) {
                        var e = this.$element.height(),
                            o = this.options.offset,
                            n = o.top,
                            s = o.bottom,
                            a = Math.max(t(document).height(), t(document.body).height());
                        "object" != typeof o && (s = n = o),
                        "function" == typeof n && (n = o.top(this.$element)),
                        "function" == typeof s && (s = o.bottom(this.$element));
                        var r = this.getState(a, e, n, s);
                        if (this.affixed != r) {
                            null != this.unpin && this.$element.css("top", "");
                            var l = "affix" + (r ? "-" + r: ""),
                                h = t.Event(l + ".bs.affix");
                            if (this.$element.trigger(h), h.isDefaultPrevented()) return;
                            this.affixed = r,
                                this.unpin = "bottom" == r ? this.getPinnedOffset() : null,
                                this.$element.removeClass(i.RESET).addClass(l).trigger(l.replace("affix", "affixed") + ".bs.affix")
                        }
                        "bottom" == r && this.$element.offset({
                            top: a - e - s
                        })
                    }
                };
            var o = t.fn.affix;
            t.fn.affix = e,
                t.fn.affix.Constructor = i,
                t.fn.affix.noConflict = function() {
                    return t.fn.affix = o,
                        this
                },
                t(window).on("load",
                    function() {
                        t('[data-spy="affix"]').each(function() {
                            var i = t(this),
                                o = i.data();
                            o.offset = o.offset || {},
                            null != o.offsetBottom && (o.offset.bottom = o.offsetBottom),
                            null != o.offsetTop && (o.offset.top = o.offsetTop),
                                e.call(i, o)
                        })
                    })
        } (jQuery); !
    function(e) {
        "function" == typeof define && define.amd ? define(["jquery"], e) : e("undefined" != typeof jQuery ? jQuery: window.Zepto)
    } (function(e) {
        function t(t) {
            var r = t.data;
            t.isDefaultPrevented() || (t.preventDefault(), e(t.target).ajaxSubmit(r))
        }
        function r(t) {
            var r = t.target,
                a = e(r);
            if (!a.is("[type=submit],[type=image]")) {
                var n = a.closest("[type=submit]");
                if (0 === n.length) return;
                r = n[0]
            }
            var i = this;
            if (i.clk = r, "image" == r.type) if (void 0 !== t.offsetX) i.clk_x = t.offsetX,
                i.clk_y = t.offsetY;
            else if ("function" == typeof e.fn.offset) {
                var o = a.offset();
                i.clk_x = t.pageX - o.left,
                    i.clk_y = t.pageY - o.top
            } else i.clk_x = t.pageX - r.offsetLeft,
                i.clk_y = t.pageY - r.offsetTop;
            setTimeout(function() {
                    i.clk = i.clk_x = i.clk_y = null
                },
                100)
        }
        function a() {
            if (e.fn.ajaxSubmit.debug) {
                var t = "[jquery.form] " + Array.prototype.join.call(arguments, "");
                window.console && window.console.log ? window.console.log(t) : window.opera && window.opera.postError && window.opera.postError(t)
            }
        }
        var n = {};
        n.fileapi = void 0 !== e("<input type='file'/>").get(0).files,
            n.formdata = void 0 !== window.FormData;
        var i = !!e.fn.prop;
        e.fn.attr2 = function() {
            if (!i) return this.attr.apply(this, arguments);
            var e = this.prop.apply(this, arguments);
            return e && e.jquery || "string" == typeof e ? e: this.attr.apply(this, arguments)
        },
            e.fn.ajaxSubmit = function(t) {
                function r(r) {
                    var a, n, i = e.param(r, t.traditional).split("&"),
                        o = i.length,
                        s = [];
                    for (a = 0; a < o; a++) i[a] = i[a].replace(/\+/g, " "),
                        n = i[a].split("="),
                        s.push([decodeURIComponent(n[0]), decodeURIComponent(n[1])]);
                    return s
                }
                function o(a) {
                    for (var n = new FormData,
                             i = 0; i < a.length; i++) n.append(a[i].name, a[i].value);
                    if (t.extraData) {
                        var o = r(t.extraData);
                        for (i = 0; i < o.length; i++) o[i] && n.append(o[i][0], o[i][1])
                    }
                    t.data = null;
                    var s = e.extend(!0, {},
                        e.ajaxSettings, t, {
                            contentType: !1,
                            processData: !1,
                            cache: !1,
                            type: u || "POST"
                        });
                    t.uploadProgress && (s.xhr = function() {
                        var r = e.ajaxSettings.xhr();
                        return r.upload && r.upload.addEventListener("progress",
                            function(e) {
                                var r = 0,
                                    a = e.loaded || e.position,
                                    n = e.total;
                                e.lengthComputable && (r = Math.ceil(a / n * 100)),
                                    t.uploadProgress(e, a, n, r)
                            },
                            !1),
                            r
                    }),
                        s.data = null;
                    var c = s.beforeSend;
                    return s.beforeSend = function(e, r) {
                        t.formData ? r.data = t.formData: r.data = n,
                        c && c.call(this, e, r)
                    },
                        e.ajax(s)
                }
                function s(r) {
                    function n(e) {
                        var t = null;
                        try {
                            e.contentWindow && (t = e.contentWindow.document)
                        } catch(e) {
                            a("cannot get iframe.contentWindow document: " + e)
                        }
                        if (t) return t;
                        try {
                            t = e.contentDocument ? e.contentDocument: e.document
                        } catch(r) {
                            a("cannot get iframe.contentDocument: " + r),
                                t = e.document
                        }
                        return t
                    }
                    function o() {
                        function t() {
                            try {
                                var e = n(g).readyState;
                                a("state = " + e),
                                e && "uninitialized" == e.toLowerCase() && setTimeout(t, 50)
                            } catch(e) {
                                a("Server abort: ", e, " (", e.name, ")"),
                                    s(k),
                                j && clearTimeout(j),
                                    j = void 0
                            }
                        }
                        var r = f.attr2("target"),
                            i = f.attr2("action"),
                            o = "multipart/form-data",
                            c = f.attr("enctype") || f.attr("encoding") || o;
                        w.setAttribute("target", p),
                        u && !/post/i.test(u) || w.setAttribute("method", "POST"),
                        i != d.url && w.setAttribute("action", d.url),
                        d.skipEncodingOverride || u && !/post/i.test(u) || f.attr({
                            encoding: "multipart/form-data",
                            enctype: "multipart/form-data"
                        }),
                        d.timeout && (j = setTimeout(function() {
                                T = !0,
                                    s(D)
                            },
                            d.timeout));
                        var l = [];
                        try {
                            if (d.extraData) for (var m in d.extraData) d.extraData.hasOwnProperty(m) && (e.isPlainObject(d.extraData[m]) && d.extraData[m].hasOwnProperty("name") && d.extraData[m].hasOwnProperty("value") ? l.push(e('<input type="hidden" name="' + d.extraData[m].name + '">').val(d.extraData[m].value).appendTo(w)[0]) : l.push(e('<input type="hidden" name="' + m + '">').val(d.extraData[m]).appendTo(w)[0]));
                            d.iframeTarget || v.appendTo("body"),
                                g.attachEvent ? g.attachEvent("onload", s) : g.addEventListener("load", s, !1),
                                setTimeout(t, 15);
                            try {
                                w.submit()
                            } catch(e) {
                                var h = document.createElement("form").submit;
                                h.apply(w)
                            }
                        } finally {
                            w.setAttribute("action", i),
                                w.setAttribute("enctype", c),
                                r ? w.setAttribute("target", r) : f.removeAttr("target"),
                                e(l).remove()
                        }
                    }
                    function s(t) {
                        if (!x.aborted && !F) {
                            if (M = n(g), M || (a("cannot access response document"), t = k), t === D && x) return x.abort("timeout"),
                                void S.reject(x, "timeout");
                            if (t == k && x) return x.abort("server abort"),
                                void S.reject(x, "error", "server abort");
                            if (M && M.location.href != d.iframeSrc || T) {
                                g.detachEvent ? g.detachEvent("onload", s) : g.removeEventListener("load", s, !1);
                                var r, i = "success";
                                try {
                                    if (T) throw "timeout";
                                    var o = "xml" == d.dataType || M.XMLDocument || e.isXMLDoc(M);
                                    if (a("isXml=" + o), !o && window.opera && (null === M.body || !M.body.innerHTML) && --O) return a("requeing onLoad callback, DOM not available"),
                                        void setTimeout(s, 250);
                                    var u = M.body ? M.body: M.documentElement;
                                    x.responseText = u ? u.innerHTML: null,
                                        x.responseXML = M.XMLDocument ? M.XMLDocument: M,
                                    o && (d.dataType = "xml"),
                                        x.getResponseHeader = function(e) {
                                            var t = {
                                                "content-type": d.dataType
                                            };
                                            return t[e.toLowerCase()]
                                        },
                                    u && (x.status = Number(u.getAttribute("status")) || x.status, x.statusText = u.getAttribute("statusText") || x.statusText);
                                    var c = (d.dataType || "").toLowerCase(),
                                        l = /(json|script|text)/.test(c);
                                    if (l || d.textarea) {
                                        var f = M.getElementsByTagName("textarea")[0];
                                        if (f) x.responseText = f.value,
                                            x.status = Number(f.getAttribute("status")) || x.status,
                                            x.statusText = f.getAttribute("statusText") || x.statusText;
                                        else if (l) {
                                            var p = M.getElementsByTagName("pre")[0],
                                                h = M.getElementsByTagName("body")[0];
                                            p ? x.responseText = p.textContent ? p.textContent: p.innerText: h && (x.responseText = h.textContent ? h.textContent: h.innerText)
                                        }
                                    } else "xml" == c && !x.responseXML && x.responseText && (x.responseXML = X(x.responseText));
                                    try {
                                        E = _(x, c, d)
                                    } catch(e) {
                                        i = "parsererror",
                                            x.error = r = e || i
                                    }
                                } catch(e) {
                                    a("error caught: ", e),
                                        i = "error",
                                        x.error = r = e || i
                                }
                                x.aborted && (a("upload aborted"), i = null),
                                x.status && (i = x.status >= 200 && x.status < 300 || 304 === x.status ? "success": "error"),
                                    "success" === i ? (d.success && d.success.call(d.context, E, "success", x), S.resolve(x.responseText, "success", x), m && e.event.trigger("ajaxSuccess", [x, d])) : i && (void 0 === r && (r = x.statusText), d.error && d.error.call(d.context, x, i, r), S.reject(x, "error", r), m && e.event.trigger("ajaxError", [x, d, r])),
                                m && e.event.trigger("ajaxComplete", [x, d]),
                                m && !--e.active && e.event.trigger("ajaxStop"),
                                d.complete && d.complete.call(d.context, x, i),
                                    F = !0,
                                d.timeout && clearTimeout(j),
                                    setTimeout(function() {
                                            d.iframeTarget ? v.attr("src", d.iframeSrc) : v.remove(),
                                                x.responseXML = null
                                        },
                                        100)
                            }
                        }
                    }
                    var c, l, d, m, p, v, g, x, y, b, T, j, w = f[0],
                        S = e.Deferred();
                    if (S.abort = function(e) {
                            x.abort(e)
                        },
                            r) for (l = 0; l < h.length; l++) c = e(h[l]),
                        i ? c.prop("disabled", !1) : c.removeAttr("disabled");
                    if (d = e.extend(!0, {},
                            e.ajaxSettings, t), d.context = d.context || d, p = "jqFormIO" + (new Date).getTime(), d.iframeTarget ? (v = e(d.iframeTarget), b = v.attr2("name"), b ? p = b: v.attr2("name", p)) : (v = e('<iframe name="' + p + '" src="' + d.iframeSrc + '" />'), v.css({
                            position: "absolute",
                            top: "-1000px",
                            left: "-1000px"
                        })), g = v[0], x = {
                            aborted: 0,
                            responseText: null,
                            responseXML: null,
                            status: 0,
                            statusText: "n/a",
                            getAllResponseHeaders: function() {},
                            getResponseHeader: function() {},
                            setRequestHeader: function() {},
                            abort: function(t) {
                                var r = "timeout" === t ? "timeout": "aborted";
                                a("aborting upload... " + r),
                                    this.aborted = 1;
                                try {
                                    g.contentWindow.document.execCommand && g.contentWindow.document.execCommand("Stop")
                                } catch(e) {}
                                v.attr("src", d.iframeSrc),
                                    x.error = r,
                                d.error && d.error.call(d.context, x, r, t),
                                m && e.event.trigger("ajaxError", [x, d, r]),
                                d.complete && d.complete.call(d.context, x, r)
                            }
                        },
                            m = d.global, m && 0 === e.active++&&e.event.trigger("ajaxStart"), m && e.event.trigger("ajaxSend", [x, d]), d.beforeSend && d.beforeSend.call(d.context, x, d) === !1) return d.global && e.active--,
                        S.reject(),
                        S;
                    if (x.aborted) return S.reject(),
                        S;
                    y = w.clk,
                    y && (b = y.name, b && !y.disabled && (d.extraData = d.extraData || {},
                        d.extraData[b] = y.value, "image" == y.type && (d.extraData[b + ".x"] = w.clk_x, d.extraData[b + ".y"] = w.clk_y)));
                    var D = 1,
                        k = 2,
                        A = e("meta[name=csrf-token]").attr("content"),
                        L = e("meta[name=csrf-param]").attr("content");
                    L && A && (d.extraData = d.extraData || {},
                        d.extraData[L] = A),
                        d.forceSync ? o() : setTimeout(o, 10);
                    var E, M, F, O = 50,
                        X = e.parseXML ||
                            function(e, t) {
                                return window.ActiveXObject ? (t = new ActiveXObject("Microsoft.XMLDOM"), t.async = "false", t.loadXML(e)) : t = (new DOMParser).parseFromString(e, "text/xml"),
                                    t && t.documentElement && "parsererror" != t.documentElement.nodeName ? t: null
                            },
                        C = e.parseJSON ||
                            function(e) {
                                return window.eval("(" + e + ")")
                            },
                        _ = function(t, r, a) {
                            var n = t.getResponseHeader("content-type") || "",
                                i = "xml" === r || !r && n.indexOf("xml") >= 0,
                                o = i ? t.responseXML: t.responseText;
                            return i && "parsererror" === o.documentElement.nodeName && e.error && e.error("parsererror"),
                            a && a.dataFilter && (o = a.dataFilter(o, r)),
                            "string" == typeof o && ("json" === r || !r && n.indexOf("json") >= 0 ? o = C(o) : ("script" === r || !r && n.indexOf("javascript") >= 0) && e.globalEval(o)),
                                o
                        };
                    return S
                }
                if (!this.length) return a("ajaxSubmit: skipping submit process - no element selected"),
                    this;
                var u, c, l, f = this;
                "function" == typeof t ? t = {
                    success: t
                }: void 0 === t && (t = {}),
                    u = t.type || this.attr2("method"),
                    c = t.url || this.attr2("action"),
                    l = "string" == typeof c ? e.trim(c) : "",
                    l = l || window.location.href || "",
                l && (l = (l.match(/^([^#]+)/) || [])[1]),
                    t = e.extend(!0, {
                            url: l,
                            success: e.ajaxSettings.success,
                            type: u || e.ajaxSettings.type,
                            iframeSrc: /^https/i.test(window.location.href || "") ? "javascript:false": "about:blank"
                        },
                        t);
                var d = {};
                if (this.trigger("form-pre-serialize", [this, t, d]), d.veto) return a("ajaxSubmit: submit vetoed via form-pre-serialize trigger"),
                    this;
                if (t.beforeSerialize && t.beforeSerialize(this, t) === !1) return a("ajaxSubmit: submit aborted via beforeSerialize callback"),
                    this;
                var m = t.traditional;
                void 0 === m && (m = e.ajaxSettings.traditional);
                var p, h = [],
                    v = this.formToArray(t.semantic, h);
                if (t.data && (t.extraData = t.data, p = e.param(t.data, m)), t.beforeSubmit && t.beforeSubmit(v, this, t) === !1) return a("ajaxSubmit: submit aborted via beforeSubmit callback"),
                    this;
                if (this.trigger("form-submit-validate", [v, this, t, d]), d.veto) return a("ajaxSubmit: submit vetoed via form-submit-validate trigger"),
                    this;
                var g = e.param(v, m);
                p && (g = g ? g + "&" + p: p),
                    "GET" == t.type.toUpperCase() ? (t.url += (t.url.indexOf("?") >= 0 ? "&": "?") + g, t.data = null) : t.data = g;
                var x = [];
                if (t.resetForm && x.push(function() {
                        f.resetForm()
                    }), t.clearForm && x.push(function() {
                        f.clearForm(t.includeHidden)
                    }), !t.dataType && t.target) {
                    var y = t.success ||
                        function() {};
                    x.push(function(r) {
                        var a = t.replaceTarget ? "replaceWith": "html";
                        e(t.target)[a](r).each(y, arguments)
                    })
                } else t.success && x.push(t.success);
                if (t.success = function(e, r, a) {
                        for (var n = t.context || this,
                                 i = 0,
                                 o = x.length; i < o; i++) x[i].apply(n, [e, r, a || f, f])
                    },
                        t.error) {
                    var b = t.error;
                    t.error = function(e, r, a) {
                        var n = t.context || this;
                        b.apply(n, [e, r, a, f])
                    }
                }
                if (t.complete) {
                    var T = t.complete;
                    t.complete = function(e, r) {
                        var a = t.context || this;
                        T.apply(a, [e, r, f])
                    }
                }
                var j = e("input[type=file]:enabled", this).filter(function() {
                        return "" !== e(this).val()
                    }),
                    w = j.length > 0,
                    S = "multipart/form-data",
                    D = f.attr("enctype") == S || f.attr("encoding") == S,
                    k = n.fileapi && n.formdata;
                a("fileAPI :" + k);
                var A, L = (w || D) && !k;
                t.iframe !== !1 && (t.iframe || L) ? t.closeKeepAlive ? e.get(t.closeKeepAlive,
                    function() {
                        A = s(v)
                    }) : A = s(v) : A = (w || D) && k ? o(v) : e.ajax(t),
                    f.removeData("jqxhr").data("jqxhr", A);
                for (var E = 0; E < h.length; E++) h[E] = null;
                return this.trigger("form-submit-notify", [this, t]),
                    this
            },
            e.fn.ajaxForm = function(n) {
                if (n = n || {},
                        n.delegation = n.delegation && e.isFunction(e.fn.on), !n.delegation && 0 === this.length) {
                    var i = {
                        s: this.selector,
                        c: this.context
                    };
                    return ! e.isReady && i.s ? (a("DOM not ready, queuing ajaxForm"), e(function() {
                        e(i.s, i.c).ajaxForm(n)
                    }), this) : (a("terminating; zero elements found by selector" + (e.isReady ? "": " (DOM not ready)")), this)
                }
                return n.delegation ? (e(document).off("submit.form-plugin", this.selector, t).off("click.form-plugin", this.selector, r).on("submit.form-plugin", this.selector, n, t).on("click.form-plugin", this.selector, n, r), this) : this.ajaxFormUnbind().bind("submit.form-plugin", n, t).bind("click.form-plugin", n, r)
            },
            e.fn.ajaxFormUnbind = function() {
                return this.unbind("submit.form-plugin click.form-plugin")
            },
            e.fn.formToArray = function(t, r) {
                var a = [];
                if (0 === this.length) return a;
                var i, o = this[0],
                    s = this.attr("id"),
                    u = t ? o.getElementsByTagName("*") : o.elements;
                if (u && !/MSIE [678]/.test(navigator.userAgent) && (u = e(u).get()), s && (i = e(':input[form="' + s + '"]').get(), i.length && (u = (u || []).concat(i))), !u || !u.length) return a;
                var c, l, f, d, m, p, h;
                for (c = 0, p = u.length; c < p; c++) if (m = u[c], f = m.name, f && !m.disabled) if (t && o.clk && "image" == m.type) o.clk == m && (a.push({
                    name: f,
                    value: e(m).val(),
                    type: m.type
                }), a.push({
                        name: f + ".x",
                        value: o.clk_x
                    },
                    {
                        name: f + ".y",
                        value: o.clk_y
                    }));
                else if (d = e.fieldValue(m, !0), d && d.constructor == Array) for (r && r.push(m), l = 0, h = d.length; l < h; l++) a.push({
                    name: f,
                    value: d[l]
                });
                else if (n.fileapi && "file" == m.type) {
                    r && r.push(m);
                    var v = m.files;
                    if (v.length) for (l = 0; l < v.length; l++) a.push({
                        name: f,
                        value: v[l],
                        type: m.type
                    });
                    else a.push({
                        name: f,
                        value: "",
                        type: m.type
                    })
                } else null !== d && "undefined" != typeof d && (r && r.push(m), a.push({
                    name: f,
                    value: d,
                    type: m.type,
                    required: m.required
                }));
                if (!t && o.clk) {
                    var g = e(o.clk),
                        x = g[0];
                    f = x.name,
                    f && !x.disabled && "image" == x.type && (a.push({
                        name: f,
                        value: g.val()
                    }), a.push({
                            name: f + ".x",
                            value: o.clk_x
                        },
                        {
                            name: f + ".y",
                            value: o.clk_y
                        }))
                }
                return a
            },
            e.fn.formSerialize = function(t) {
                return e.param(this.formToArray(t))
            },
            e.fn.fieldSerialize = function(t) {
                var r = [];
                return this.each(function() {
                    var a = this.name;
                    if (a) {
                        var n = e.fieldValue(this, t);
                        if (n && n.constructor == Array) for (var i = 0,
                                                                  o = n.length; i < o; i++) r.push({
                            name: a,
                            value: n[i]
                        });
                        else null !== n && "undefined" != typeof n && r.push({
                            name: this.name,
                            value: n
                        })
                    }
                }),
                    e.param(r)
            },
            e.fn.fieldValue = function(t) {
                for (var r = [], a = 0, n = this.length; a < n; a++) {
                    var i = this[a],
                        o = e.fieldValue(i, t);
                    null === o || "undefined" == typeof o || o.constructor == Array && !o.length || (o.constructor == Array ? e.merge(r, o) : r.push(o))
                }
                return r
            },
            e.fieldValue = function(t, r) {
                var a = t.name,
                    n = t.type,
                    i = t.tagName.toLowerCase();
                if (void 0 === r && (r = !0), r && (!a || t.disabled || "reset" == n || "button" == n || ("checkbox" == n || "radio" == n) && !t.checked || ("submit" == n || "image" == n) && t.form && t.form.clk != t || "select" == i && t.selectedIndex == -1)) return null;
                if ("select" == i) {
                    var o = t.selectedIndex;
                    if (o < 0) return null;
                    for (var s = [], u = t.options, c = "select-one" == n, l = c ? o + 1 : u.length, f = c ? o: 0; f < l; f++) {
                        var d = u[f];
                        if (d.selected) {
                            var m = d.value;
                            if (m || (m = d.attributes && d.attributes.value && !d.attributes.value.specified ? d.text: d.value), c) return m;
                            s.push(m)
                        }
                    }
                    return s
                }
                return e(t).val()
            },
            e.fn.clearForm = function(t) {
                return this.each(function() {
                    e("input,select,textarea", this).clearFields(t)
                })
            },
            e.fn.clearFields = e.fn.clearInputs = function(t) {
                var r = /^(?:color|date|datetime|email|month|number|password|range|search|tel|text|time|url|week)$/i;
                return this.each(function() {
                    var a = this.type,
                        n = this.tagName.toLowerCase();
                    r.test(a) || "textarea" == n ? this.value = "": "checkbox" == a || "radio" == a ? this.checked = !1 : "select" == n ? this.selectedIndex = -1 : "file" == a ? /MSIE/.test(navigator.userAgent) ? e(this).replaceWith(e(this).clone(!0)) : e(this).val("") : t && (t === !0 && /hidden/.test(a) || "string" == typeof t && e(this).is(t)) && (this.value = "")
                })
            },
            e.fn.resetForm = function() {
                return this.each(function() { ("function" == typeof this.reset || "object" == typeof this.reset && !this.reset.nodeType) && this.reset()
                })
            },
            e.fn.enable = function(e) {
                return void 0 === e && (e = !0),
                    this.each(function() {
                        this.disabled = !e
                    })
            },
            e.fn.selected = function(t) {
                return void 0 === t && (t = !0),
                    this.each(function() {
                        var r = this.type;
                        if ("checkbox" == r || "radio" == r) this.checked = t;
                        else if ("option" == this.tagName.toLowerCase()) {
                            var a = e(this).parent("select");
                            t && a[0] && "select-one" == a[0].type && a.find("option").selected(!1),
                                this.selected = t
                        }
                    })
            },
            e.fn.ajaxSubmit.debug = !1
    }); !
    function(e, t, i, o) {
        var n = e(t);
        e.fn.lazyload = function(r) {
            function f() {
                var t = 0;
                l.each(function() {
                    var i = e(this);
                    if (!h.skip_invisible || i.is(":visible")) if (e.abovethetop(this, h) || e.leftofbegin(this, h));
                    else if (e.belowthefold(this, h) || e.rightoffold(this, h)) {
                        if (++t > h.failure_limit) return ! 1
                    } else i.trigger("appear"),
                        t = 0
                })
            }
            var a, l = this,
                h = {
                    threshold: 0,
                    failure_limit: 0,
                    event: "scroll",
                    effect: "show",
                    container: t,
                    data_attribute: "original",
                    skip_invisible: !1,
                    appear: null,
                    load: null,
                    placeholder: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                };
            return r && (o !== r.failurelimit && (r.failure_limit = r.failurelimit, delete r.failurelimit), o !== r.effectspeed && (r.effect_speed = r.effectspeed, delete r.effectspeed), e.extend(h, r)),
                a = h.container === o || h.container === t ? n: e(h.container),
            0 === h.event.indexOf("scroll") && a.bind(h.event,
                function() {
                    return f()
                }),
                this.each(function() {
                    var t = this,
                        i = e(t);
                    t.loaded = !1,
                    (i.attr("src") === o || i.attr("src") === !1) && i.is("img") && i.attr("src", h.placeholder),
                        i.one("appear",
                            function() {
                                if (!this.loaded) {
                                    if (h.appear) {
                                        var o = l.length;
                                        h.appear.call(t, o, h)
                                    }
                                    e("<img />").bind("load",
                                        function() {
                                            var o = i.attr("data-" + h.data_attribute);
                                            i.hide(),
                                                i.is("img") ? i.attr("src", o) : i.css("background-image", "url('" + o + "')"),
                                                i[h.effect](h.effect_speed),
                                                t.loaded = !0;
                                            var n = e.grep(l,
                                                function(e) {
                                                    return ! e.loaded
                                                });
                                            if (l = e(n), h.load) {
                                                var r = l.length;
                                                h.load.call(t, r, h)
                                            }
                                        }).attr("src", i.attr("data-" + h.data_attribute))
                                }
                            }),
                    0 !== h.event.indexOf("scroll") && i.bind(h.event,
                        function() {
                            t.loaded || i.trigger("appear")
                        })
                }),
                n.bind("resize",
                    function() {
                        f()
                    }),
            /(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion) && n.bind("pageshow",
                function(t) {
                    t.originalEvent && t.originalEvent.persisted && l.each(function() {
                        e(this).trigger("appear")
                    })
                }),
                e(i).ready(function() {
                    f()
                }),
                this
        },
            e.belowthefold = function(i, r) {
                var f;
                return f = r.container === o || r.container === t ? (t.innerHeight ? t.innerHeight: n.height()) + n.scrollTop() : e(r.container).offset().top + e(r.container).height(),
                f <= e(i).offset().top - r.threshold
            },
            e.rightoffold = function(i, r) {
                var f;
                return f = r.container === o || r.container === t ? n.width() + n.scrollLeft() : e(r.container).offset().left + e(r.container).width(),
                f <= e(i).offset().left - r.threshold
            },
            e.abovethetop = function(i, r) {
                var f;
                return f = r.container === o || r.container === t ? n.scrollTop() : e(r.container).offset().top,
                f >= e(i).offset().top + r.threshold + e(i).height()
            },
            e.leftofbegin = function(i, r) {
                var f;
                return f = r.container === o || r.container === t ? n.scrollLeft() : e(r.container).offset().left,
                f >= e(i).offset().left + r.threshold + e(i).width()
            },
            e.inviewport = function(t, i) {
                return ! (e.rightoffold(t, i) || e.leftofbegin(t, i) || e.belowthefold(t, i) || e.abovethetop(t, i))
            },
            e.extend(e.expr[":"], {
                "below-the-fold": function(t) {
                    return e.belowthefold(t, {
                        threshold: 0
                    })
                },
                "above-the-top": function(t) {
                    return ! e.belowthefold(t, {
                        threshold: 0
                    })
                },
                "right-of-screen": function(t) {
                    return e.rightoffold(t, {
                        threshold: 0
                    })
                },
                "left-of-screen": function(t) {
                    return ! e.rightoffold(t, {
                        threshold: 0
                    })
                },
                "in-viewport": function(t) {
                    return e.inviewport(t, {
                        threshold: 0
                    })
                },
                "above-the-fold": function(t) {
                    return ! e.belowthefold(t, {
                        threshold: 0
                    })
                },
                "right-of-fold": function(t) {
                    return e.rightoffold(t, {
                        threshold: 0
                    })
                },
                "left-of-fold": function(t) {
                    return ! e.rightoffold(t, {
                        threshold: 0
                    })
                }
            })
    } (jQuery, window, document); !
    function(t) {
        function e(e, r, a) {
            var o = this;
            return this.on("click.pjax", e,
                function(e) {
                    var i = t.extend({},
                        m(r, a));
                    i.container || (i.container = t(this).attr("data-pjax") || o),
                        n(e, i)
                })
        }
        function n(e, n, r) {
            r = m(n, r);
            var o = e.currentTarget;
            if ("A" !== o.tagName.toUpperCase()) throw "$.fn.pjax or $.pjax.click requires an anchor element";
            if (! (e.which > 1 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey || location.protocol !== o.protocol || location.hostname !== o.hostname || o.href.indexOf("#") > -1 && h(o) == h(location) || e.isDefaultPrevented())) {
                var i = {
                        url: o.href,
                        container: t(o).attr("data-pjax"),
                        target: o
                    },
                    c = t.extend({},
                        i, r),
                    s = t.Event("pjax:click");
                t(o).trigger(s, [c]),
                s.isDefaultPrevented() || (a(c), e.preventDefault(), t(o).trigger("pjax:clicked", [c]))
            }
        }
        function r(e, n, r) {
            r = m(n, r);
            var o = e.currentTarget,
                i = t(o);
            if ("FORM" !== o.tagName.toUpperCase()) throw "$.pjax.submit requires a form element";
            var c = {
                type: (i.attr("method") || "GET").toUpperCase(),
                url: i.attr("action"),
                container: i.attr("data-pjax"),
                target: o
            };
            if ("GET" !== c.type && void 0 !== window.FormData) c.data = new FormData(o),
                c.processData = !1,
                c.contentType = !1;
            else {
                if (t(o).find(":file").length) return;
                c.data = t(o).serializeArray()
            }
            a(t.extend({},
                c, r)),
                e.preventDefault()
        }
        function a(e) {
            function n(e, n, a) {
                a || (a = {}),
                    a.relatedTarget = r;
                var o = t.Event(e, a);
                return c.trigger(o, n),
                    !o.isDefaultPrevented()
            }
            e = t.extend(!0, {},
                t.ajaxSettings, a.defaults, e),
            t.isFunction(e.url) && (e.url = e.url());
            var r = e.target,
                o = d(e.url).hash,
                c = e.context = v(e.container);
            e.data || (e.data = {}),
                t.isArray(e.data) ? e.data.push({
                    name: "_pjax",
                    value: c.selector
                }) : e.data._pjax = c.selector;
            var s;
            e.beforeSend = function(t, r) {
                if ("GET" !== r.type && (r.timeout = 0), t.setRequestHeader("X-PJAX", "true"), t.setRequestHeader("X-PJAX-Container", c.selector), !n("pjax:beforeSend", [t, r])) return ! 1;
                r.timeout > 0 && (s = setTimeout(function() {
                        n("pjax:timeout", [t, e]) && t.abort("timeout")
                    },
                    r.timeout), r.timeout = 0);
                var a = d(r.url);
                o && (a.hash = o),
                    e.requestUrl = f(a)
            },
                e.complete = function(t, r) {
                    s && clearTimeout(s),
                        n("pjax:complete", [t, r, e]),
                        n("pjax:end", [t, e])
                },
                e.error = function(t, r, a) {
                    var o = j("", t, e),
                        c = n("pjax:error", [t, r, a, e]);
                    "GET" == e.type && "abort" !== r && c && i(o.url)
                },
                e.success = function(r, s, u) {
                    var p = a.state,
                        f = "function" == typeof t.pjax.defaults.version ? t.pjax.defaults.version() : t.pjax.defaults.version,
                        h = u.getResponseHeader("X-PJAX-Version"),
                        m = j(r, u, e),
                        v = d(m.url);
                    if (o && (v.hash = o, m.url = v.href), f && h && f !== h) return void i(m.url);
                    if (!m.contents) return void i(m.url);
                    a.state = {
                        id: e.id || l(),
                        url: m.url,
                        title: m.title,
                        container: c.selector,
                        fragment: e.fragment,
                        timeout: e.timeout
                    },
                    (e.push || e.replace) && window.history.replaceState(a.state, m.title, m.url);
                    var x = t.contains(e.container, document.activeElement);
                    if (x) try {
                        document.activeElement.blur()
                    } catch(t) {}
                    m.title && (document.title = m.title),
                        n("pjax:beforeReplace", [m.contents, e], {
                            state: a.state,
                            previousState: p
                        }),
                        c.html(m.contents);
                    var g = c.find("input[autofocus], textarea[autofocus]").last()[0];
                    g && document.activeElement !== g && g.focus(),
                        y(m.scripts);
                    var w = e.scrollTo;
                    if (o) {
                        var b = decodeURIComponent(o.slice(1)),
                            T = document.getElementById(b) || document.getElementsByName(b)[0];
                        T && (w = t(T).offset().top)
                    }
                    "number" == typeof w && t(window).scrollTop(w),
                        n("pjax:success", [r, s, u, e])
                },
            a.state || (a.state = {
                id: l(),
                url: window.location.href,
                title: document.title,
                container: c.selector,
                fragment: e.fragment,
                timeout: e.timeout
            },
                window.history.replaceState(a.state, document.title)),
                u(a.xhr),
                a.options = e;
            var h = a.xhr = t.ajax(e);
            return h.readyState > 0 && (e.push && !e.replace && (w(a.state.id, p(c)), window.history.pushState(null, "", e.requestUrl)), n("pjax:start", [h, e]), n("pjax:send", [h, e])),
                a.xhr
        }
        function o(e, n) {
            var r = {
                url: window.location.href,
                push: !1,
                replace: !0,
                scrollTo: !1
            };
            return a(t.extend(r, m(e, n)))
        }
        function i(t) {
            window.history.replaceState(null, "", a.state.url),
                window.location.replace(t)
        }
        function c(e) {
            C || u(a.xhr);
            var n, r = a.state,
                o = e.state;
            if (o && o.container) {
                if (C && A == o.url) return;
                if (r) {
                    if (r.id === o.id) return;
                    n = r.id < o.id ? "forward": "back"
                }
                var c = R[o.id] || [],
                    s = t(c[0] || o.container),
                    l = c[1];
                if (s.length) {
                    r && b(n, r.id, p(s));
                    var f = t.Event("pjax:popstate", {
                        state: o,
                        direction: n
                    });
                    s.trigger(f);
                    var d = {
                        id: o.id,
                        url: o.url,
                        container: s,
                        push: !1,
                        fragment: o.fragment,
                        timeout: o.timeout,
                        scrollTo: !1
                    };
                    if (l) {
                        s.trigger("pjax:start", [null, d]),
                            a.state = o,
                        o.title && (document.title = o.title);
                        var h = t.Event("pjax:beforeReplace", {
                            state: o,
                            previousState: r
                        });
                        s.trigger(h, [l, d]),
                            s.html(l),
                            s.trigger("pjax:end", [null, d])
                    } else a(d);
                    s[0].offsetHeight
                } else i(location.href)
            }
            C = !1
        }
        function s(e) {
            var n = t.isFunction(e.url) ? e.url() : e.url,
                r = e.type ? e.type.toUpperCase() : "GET",
                a = t("<form>", {
                    method: "GET" === r ? "GET": "POST",
                    action: n,
                    style: "display:none"
                });
            "GET" !== r && "POST" !== r && a.append(t("<input>", {
                type: "hidden",
                name: "_method",
                value: r.toLowerCase()
            }));
            var o = e.data;
            if ("string" == typeof o) t.each(o.split("&"),
                function(e, n) {
                    var r = n.split("=");
                    a.append(t("<input>", {
                        type: "hidden",
                        name: r[0],
                        value: r[1]
                    }))
                });
            else if (t.isArray(o)) t.each(o,
                function(e, n) {
                    a.append(t("<input>", {
                        type: "hidden",
                        name: n.name,
                        value: n.value
                    }))
                });
            else if ("object" == typeof o) {
                var i;
                for (i in o) a.append(t("<input>", {
                    type: "hidden",
                    name: i,
                    value: o[i]
                }))
            }
            t(document.body).append(a),
                a.submit()
        }
        function u(e) {
            e && e.readyState < 4 && (e.onreadystatechange = t.noop, e.abort())
        }
        function l() {
            return (new Date).getTime()
        }
        function p(t) {
            var e = t.clone();
            return e.find("script").each(function() {
                this.src || jQuery._data(this, "globalEval", !1)
            }),
                [t.selector, e.contents()]
        }
        function f(t) {
            return t.search = t.search.replace(/([?&])(_pjax|_)=[^&]*/g, ""),
                t.href.replace(/\?($|#)/, "$1")
        }
        function d(t) {
            var e = document.createElement("a");
            return e.href = t,
                e
        }
        function h(t) {
            return t.href.replace(/#.*/, "")
        }
        function m(e, n) {
            return e && n ? n.container = e: n = t.isPlainObject(e) ? e: {
                container: e
            },
            n.container && (n.container = v(n.container)),
                n
        }
        function v(e) {
            if (e = t(e), e.length) {
                if ("" !== e.selector && e.context === document) return e;
                if (e.attr("id")) return t("#" + e.attr("id"));
                throw "cant get selector for pjax container!"
            }
            throw "no pjax container for " + e.selector
        }
        function x(t, e) {
            return t.filter(e).add(t.find(e))
        }
        function g(e) {
            return t.parseHTML(e, document, !0)
        }
        function j(e, n, r) {
            var a = {},
                o = /<html/i.test(e),
                i = n.getResponseHeader("X-PJAX-URL");
            if (a.url = i ? f(d(i)) : r.requestUrl, o) var c = t(g(e.match(/<head[^>]*>([\s\S.]*)<\/head>/i)[0])),
                s = t(g(e.match(/<body[^>]*>([\s\S.]*)<\/body>/i)[0]));
            else var c = s = t(g(e));
            if (0 === s.length) return a;
            if (a.title = x(c, "title").last().text(), r.fragment) {
                if ("body" === r.fragment) var u = s;
                else var u = x(s, r.fragment).first();
                u.length && (a.contents = "body" === r.fragment ? u: u.contents(), a.title || (a.title = u.attr("title") || u.data("title")))
            } else o || (a.contents = s);
            return a.contents && (a.contents = a.contents.not(function() {
                return t(this).is("title")
            }), a.contents.find("title").remove(), a.scripts = x(a.contents, "script[src]").remove(), a.contents = a.contents.not(a.scripts)),
            a.title && (a.title = t.trim(a.title)),
                a
        }
        function y(e) {
            if (e) {
                var n = t("script[src]");
                e.each(function() {
                    var e = this.src,
                        r = n.filter(function() {
                            return this.src === e
                        });
                    if (!r.length) {
                        var a = document.createElement("script"),
                            o = t(this).attr("type");
                        o && (a.type = o),
                            a.src = t(this).attr("src"),
                            document.head.appendChild(a)
                    }
                })
            }
        }
        function w(t, e) {
            R[t] = e,
                X.push(t),
                T(U, 0),
                T(X, a.defaults.maxCacheLength)
        }
        function b(t, e, n) {
            var r, o;
            R[e] = n,
                "forward" === t ? (r = X, o = U) : (r = U, o = X),
                r.push(e),
            (e = o.pop()) && delete R[e],
                T(r, a.defaults.maxCacheLength)
        }
        function T(t, e) {
            for (; t.length > e;) delete R[t.shift()]
        }
        function E() {
            return t("meta").filter(function() {
                var e = t(this).attr("http-equiv");
                return e && "X-PJAX-VERSION" === e.toUpperCase()
            }).attr("content")
        }
        function S() {
            t.fn.pjax = e,
                t.pjax = a,
                t.pjax.enable = t.noop,
                t.pjax.disable = P,
                t.pjax.click = n,
                t.pjax.submit = r,
                t.pjax.reload = o,
                t.pjax.defaults = {
                    timeout: 650,
                    push: !0,
                    replace: !1,
                    type: "GET",
                    dataType: "html",
                    scrollTo: 0,
                    maxCacheLength: 20,
                    version: E
                },
                t(window).on("popstate.pjax", c)
        }
        function P() {
            t.fn.pjax = function() {
                return this
            },
                t.pjax = s,
                t.pjax.enable = S,
                t.pjax.disable = t.noop,
                t.pjax.click = t.noop,
                t.pjax.submit = t.noop,
                t.pjax.reload = function() {
                    window.location.reload()
                },
                t(window).off("popstate.pjax", c)
        }
        var C = !0,
            A = window.location.href,
            D = window.history.state;
        D && D.container && (a.state = D),
        "state" in window.history && (C = !1);
        var R = {},
            U = [],
            X = [];
        t.inArray("state", t.event.props) < 0 && t.event.props.push("state"),
            t.support.pjax = window.history && window.history.pushState && window.history.replaceState && !navigator.userAgent.match(/((iPod|iPhone|iPad).+\bOS\s+[1-4]\D|WebApps\/.+CFNetwork)/),
            t.support.pjax ? S() : P()
    } (jQuery); !
    function(e, t) {
        var i, n, a = {
                getPath: function() {
                    var e = document.scripts,
                        t = e[e.length - 1],
                        i = t.src;
                    if (!t.getAttribute("merge")) return i.substring(0, i.lastIndexOf("/") + 1)
                } (),
                enter: function(e) {
                    13 === e.keyCode && e.preventDefault()
                },
                config: {},
                end: {},
                btn: ["&#x786E;&#x5B9A;", "&#x53D6;&#x6D88;"],
                type: ["dialog", "page", "iframe", "loading", "tips"]
            },
            o = {
                v: "2.4",
                ie6: !!e.ActiveXObject && !e.XMLHttpRequest,
                index: 0,
                path: a.getPath,
                config: function(e, t) {
                    var n = 0;
                    return e = e || {},
                        o.cache = a.config = i.extend(a.config, e),
                        o.path = a.config.path || o.path,
                    "string" == typeof e.extend && (e.extend = [e.extend]),
                        o.use("skin/layer.css", e.extend && e.extend.length > 0 ?
                            function i() {
                                var a = e.extend;
                                o.use(a[a[n] ? n: n - 1], n < a.length ?
                                    function() {
                                        return++n,
                                            i
                                    } () : t)
                            } () : t),
                        this
                },
                use: function(e, t, n) {
                    var a = i("head")[0],
                        e = e.replace(/\s/g, ""),
                        r = /\.css$/.test(e),
                        l = document.createElement(r ? "link": "script"),
                        s = "layui_layer_" + e.replace(/\.|\//g, "");
                    return o.path ? (r && (l.rel = "stylesheet"), l[r ? "href": "src"] = /^http:\/\//.test(e) ? e: o.path + e, l.id = s, i("#" + s)[0] || a.appendChild(l),
                        function e() { (r ? 1989 === parseInt(i("#" + s).css("width")) : o[n || s]) ?
                            function() {
                                t && t();
                                try {
                                    r || a.removeChild(l)
                                } catch(e) {}
                            } () : setTimeout(e, 100)
                        } (), this) : void 0
                },
                ready: function(e, t) {
                    var n = "function" == typeof e;
                    return n && (t = e),
                        o.config(i.extend(a.config,
                            function() {
                                return n ? {}: {
                                    path: e
                                }
                            } ()), t),
                        this
                },
                alert: function(e, t, n) {
                    var a = "function" == typeof t;
                    return a && (n = t),
                        o.open(i.extend({
                                content: e,
                                yes: n
                            },
                            a ? {}: t))
                },
                confirm: function(e, t, n, r) {
                    var l = "function" == typeof t;
                    return l && (r = n, n = t),
                        o.open(i.extend({
                                content: e,
                                btn: a.btn,
                                yes: n,
                                btn2: r
                            },
                            l ? {}: t))
                },
                msg: function(e, n, r) {
                    var s = "function" == typeof n,
                        c = a.config.skin,
                        f = (c ? c + " " + c + "-msg": "") || "layui-layer-msg",
                        u = l.anim.length - 1;
                    return s && (r = n),
                        o.open(i.extend({
                                content: e,
                                time: 3e3,
                                shade: !1,
                                skin: f,
                                title: !1,
                                closeBtn: !1,
                                btn: !1,
                                end: r
                            },
                            s && !a.config.skin ? {
                                skin: f + " layui-layer-hui",
                                shift: u
                            }: function() {
                                return n = n || {},
                                ( - 1 === n.icon || n.icon === t && !a.config.skin) && (n.skin = f + " " + (n.skin || "layui-layer-hui")),
                                    n
                            } ()))
                },
                load: function(e, t) {
                    return o.open(i.extend({
                            type: 3,
                            icon: e || 0,
                            shade: .01
                        },
                        t))
                },
                tips: function(e, t, n) {
                    return o.open(i.extend({
                            type: 4,
                            content: [e, t],
                            closeBtn: !1,
                            time: 3e3,
                            shade: !1,
                            fix: !1,
                            maxWidth: 210
                        },
                        n))
                }
            },
            r = function(e) {
                var t = this;
                t.index = ++o.index,
                    t.config = i.extend({},
                        t.config, a.config, e),
                    t.creat()
            };
        r.pt = r.prototype;
        var l = ["layui-layer", ".layui-layer-title", ".layui-layer-main", ".layui-layer-dialog", "layui-layer-iframe", "layui-layer-content", "layui-layer-btn", "layui-layer-close"];
        l.anim = ["layer-anim", "layer-anim-01", "layer-anim-02", "layer-anim-03", "layer-anim-04", "layer-anim-05", "layer-anim-06"],
            r.pt.config = {
                type: 0,
                shade: .3,
                fix: !0,
                move: l[1],
                title: "&#x4FE1;&#x606F;",
                offset: "auto",
                area: "auto",
                closeBtn: 1,
                time: 0,
                zIndex: 19891014,
                maxWidth: 360,
                shift: 0,
                icon: -1,
                scrollbar: !0,
                tips: 2
            },
            r.pt.vessel = function(e, t) {
                var i = this,
                    n = i.index,
                    o = i.config,
                    r = o.zIndex + n,
                    s = "object" == typeof o.title,
                    c = o.maxmin && (1 === o.type || 2 === o.type),
                    f = o.title ? '<div class="layui-layer-title" style="' + (s ? o.title[1] : "") + '">' + (s ? o.title[0] : o.title) + "</div>": "";
                return o.zIndex = r,
                    t([o.shade ? '<div class="layui-layer-shade" id="layui-layer-shade' + n + '" times="' + n + '" style="' + ("z-index:" + (r - 1) + "; background-color:" + (o.shade[1] || "#000") + "; opacity:" + (o.shade[0] || o.shade) + "; filter:alpha(opacity=" + (100 * o.shade[0] || 100 * o.shade) + ");") + '"></div>': "", '<div class="' + l[0] + (" layui-layer-" + a.type[o.type]) + (0 != o.type && 2 != o.type || o.shade ? "": " layui-layer-border") + " " + (o.skin || "") + '" id="' + l[0] + n + '" type="' + a.type[o.type] + '" times="' + n + '" showtime="' + o.time + '" conType="' + (e ? "object": "string") + '" style="z-index: ' + r + "; width:" + o.area[0] + ";height:" + o.area[1] + (o.fix ? "": ";position:absolute;") + '">' + (e && 2 != o.type ? "": f) + '<div id="' + (o.id || "") + '" class="layui-layer-content' + (0 == o.type && -1 !== o.icon ? " layui-layer-padding": "") + (3 == o.type ? " layui-layer-loading" + o.icon: "") + '">' + (0 == o.type && -1 !== o.icon ? '<i class="layui-layer-ico layui-layer-ico' + o.icon + '"></i>': "") + (1 == o.type && e ? "": o.content || "") + '</div><span class="layui-layer-setwin">' +
                    function() {
                        var e = c ? '<a class="layui-layer-min" href="javascript:;"><cite></cite></a><a class="layui-layer-ico layui-layer-max" href="javascript:;"></a>': "";
                        return o.closeBtn && (e += '<a class="layui-layer-ico ' + l[7] + " " + l[7] + (o.title ? o.closeBtn: 4 == o.type ? "1": "2") + '" href="javascript:;"></a>'),
                            e
                    } () + "</span>" + (o.btn ?
                        function() {
                            var e = "";
                            "string" == typeof o.btn && (o.btn = [o.btn]);
                            for (var t = 0,
                                     i = o.btn.length; i > t; t++) e += '<a class="' + l[6] + t + '">' + o.btn[t] + "</a>";
                            return '<div class="' + l[6] + '">' + e + "</div>"
                        } () : "") + "</div>"], f),
                    i
            },
            r.pt.creat = function() {
                var e = this,
                    t = e.config,
                    r = e.index,
                    s = t.content,
                    c = "object" == typeof s;
                if (!i("#" + t.id)[0]) {
                    switch ("string" == typeof t.area && (t.area = "auto" === t.area ? ["", ""] : [t.area, ""]), t.type) {
                        case 0:
                            t.btn = "btn" in t ? t.btn: a.btn[0],
                                o.closeAll("dialog");
                            break;
                        case 2:
                            var s = t.content = c ? t.content: [t.content || "http://layer.layui.com", "auto"];
                            t.content = '<iframe scrolling="' + (t.content[1] || "auto") + '" allowtransparency="true" id="' + l[4] + r + '" name="' + l[4] + r + '" onload="this.className=\'\';" class="layui-layer-load" frameborder="0" src="' + t.content[0] + '"></iframe>';
                            break;
                        case 3:
                            t.title = !1,
                                t.closeBtn = !1,
                            -1 === t.icon && 0 === t.icon,
                                o.closeAll("loading");
                            break;
                        case 4:
                            c || (t.content = [t.content, "body"]),
                                t.follow = t.content[1],
                                t.content = t.content[0] + '<i class="layui-layer-TipsG"></i>',
                                t.title = !1,
                                t.tips = "object" == typeof t.tips ? t.tips: [t.tips, !0],
                            t.tipsMore || o.closeAll("tips")
                    }
                    e.vessel(c,
                        function(n, a) {
                            i("body").append(n[0]),
                                c ?
                                    function() {
                                        2 == t.type || 4 == t.type ?
                                            function() {
                                                i("body").append(n[1])
                                            } () : function() {
                                                s.parents("." + l[0])[0] || (s.show().addClass("layui-layer-wrap").wrap(n[1]), i("#" + l[0] + r).find("." + l[5]).before(a))
                                            } ()
                                    } () : i("body").append(n[1]),
                                e.layero = i("#" + l[0] + r),
                            t.scrollbar || l.html.css("overflow", "hidden").attr("layer-full", r)
                        }).auto(r),
                    2 == t.type && o.ie6 && e.layero.find("iframe").attr("src", s[0]),
                        i(document).off("keydown", a.enter).on("keydown", a.enter),
                        e.layero.on("keydown",
                            function(e) {
                                i(document).off("keydown", a.enter)
                            }),
                        4 == t.type ? e.tips() : e.offset(),
                    t.fix && n.on("resize",
                        function() {
                            e.offset(),
                            (/^\d+%$/.test(t.area[0]) || /^\d+%$/.test(t.area[1])) && e.auto(r),
                            4 == t.type && e.tips()
                        }),
                    t.time <= 0 || setTimeout(function() {
                            o.close(e.index)
                        },
                        t.time),
                        e.move().callback(),
                    l.anim[t.shift] && e.layero.addClass(l.anim[t.shift])
                }
            },
            r.pt.auto = function(e) {
                function t(e) {
                    e = r.find(e),
                        e.height(s[1] - c - f - 2 * (0 | parseFloat(e.css("padding"))))
                }
                var a = this,
                    o = a.config,
                    r = i("#" + l[0] + e);
                "" === o.area[0] && o.maxWidth > 0 && (/MSIE 7/.test(navigator.userAgent) && o.btn && r.width(r.innerWidth()), r.outerWidth() > o.maxWidth && r.width(o.maxWidth));
                var s = [r.innerWidth(), r.innerHeight()],
                    c = r.find(l[1]).outerHeight() || 0,
                    f = r.find("." + l[6]).outerHeight() || 0;
                switch (o.type) {
                    case 2:
                        t("iframe");
                        break;
                    default:
                        "" === o.area[1] ? o.fix && s[1] >= n.height() && (s[1] = n.height(), t("." + l[5])) : t("." + l[5])
                }
                return a
            },
            r.pt.offset = function() {
                var e = this,
                    t = e.config,
                    i = e.layero,
                    a = [i.outerWidth(), i.outerHeight()],
                    o = "object" == typeof t.offset;
                e.offsetTop = (n.height() - a[1]) / 2,
                    e.offsetLeft = (n.width() - a[0]) / 2,
                    o ? (e.offsetTop = t.offset[0], e.offsetLeft = t.offset[1] || e.offsetLeft) : "auto" !== t.offset && (e.offsetTop = t.offset, "rb" === t.offset && (e.offsetTop = n.height() - a[1], e.offsetLeft = n.width() - a[0])),
                t.fix || (e.offsetTop = /%$/.test(e.offsetTop) ? n.height() * parseFloat(e.offsetTop) / 100 : parseFloat(e.offsetTop), e.offsetLeft = /%$/.test(e.offsetLeft) ? n.width() * parseFloat(e.offsetLeft) / 100 : parseFloat(e.offsetLeft), e.offsetTop += n.scrollTop(), e.offsetLeft += n.scrollLeft()),
                    i.css({
                        top: e.offsetTop,
                        left: e.offsetLeft
                    })
            },
            r.pt.tips = function() {
                var e = this,
                    t = e.config,
                    a = e.layero,
                    o = [a.outerWidth(), a.outerHeight()],
                    r = i(t.follow);
                r[0] || (r = i("body"));
                var s = {
                        width: r.outerWidth(),
                        height: r.outerHeight(),
                        top: r.offset().top,
                        left: r.offset().left
                    },
                    c = a.find(".layui-layer-TipsG"),
                    f = t.tips[0];
                t.tips[1] || c.remove(),
                    s.autoLeft = function() {
                        s.left + o[0] - n.width() > 0 ? (s.tipLeft = s.left + s.width - o[0], c.css({
                            right: 12,
                            left: "auto"
                        })) : s.tipLeft = s.left
                    },
                    s.where = [function() {
                        s.autoLeft(),
                            s.tipTop = s.top - o[1] - 10,
                            c.removeClass("layui-layer-TipsB").addClass("layui-layer-TipsT").css("border-right-color", t.tips[1])
                    },
                        function() {
                            s.tipLeft = s.left + s.width + 10,
                                s.tipTop = s.top,
                                c.removeClass("layui-layer-TipsL").addClass("layui-layer-TipsR").css("border-bottom-color", t.tips[1])
                        },
                        function() {
                            s.autoLeft(),
                                s.tipTop = s.top + s.height + 10,
                                c.removeClass("layui-layer-TipsT").addClass("layui-layer-TipsB").css("border-right-color", t.tips[1])
                        },
                        function() {
                            s.tipLeft = s.left - o[0] - 10,
                                s.tipTop = s.top,
                                c.removeClass("layui-layer-TipsR").addClass("layui-layer-TipsL").css("border-bottom-color", t.tips[1])
                        }],
                    s.where[f - 1](),
                    1 === f ? s.top - (n.scrollTop() + o[1] + 16) < 0 && s.where[2]() : 2 === f ? n.width() - (s.left + s.width + o[0] + 16) > 0 || s.where[3]() : 3 === f ? s.top - n.scrollTop() + s.height + o[1] + 16 - n.height() > 0 && s.where[0]() : 4 === f && o[0] + 16 - s.left > 0 && s.where[1](),
                    a.find("." + l[5]).css({
                        "background-color": t.tips[1],
                        "padding-right": t.closeBtn ? "30px": ""
                    }),
                    a.css({
                        left: s.tipLeft - (t.fix ? n.scrollLeft() : 0),
                        top: s.tipTop - (t.fix ? n.scrollTop() : 0)
                    })
            },
            r.pt.move = function() {
                var e = this,
                    t = e.config,
                    a = {
                        setY: 0,
                        moveLayer: function() {
                            var e = a.layero,
                                t = parseInt(e.css("margin-left")),
                                i = parseInt(a.move.css("left"));
                            0 === t || (i -= t),
                            "fixed" !== e.css("position") && (i -= e.parent().offset().left, a.setY = 0),
                                e.css({
                                    left: i,
                                    top: parseInt(a.move.css("top")) - a.setY
                                })
                        }
                    },
                    o = e.layero.find(t.move);
                return t.move && o.attr("move", "ok"),
                    o.css({
                        cursor: t.move ? "move": "auto"
                    }),
                    i(t.move).on("mousedown",
                        function(e) {
                            if (e.preventDefault(), "ok" === i(this).attr("move")) {
                                a.ismove = !0,
                                    a.layero = i(this).parents("." + l[0]);
                                var o = a.layero.offset().left,
                                    r = a.layero.offset().top,
                                    s = a.layero.outerWidth() - 6,
                                    c = a.layero.outerHeight() - 6;
                                i("#layui-layer-moves")[0] || i("body").append('<div id="layui-layer-moves" class="layui-layer-moves" style="left:' + o + "px; top:" + r + "px; width:" + s + "px; height:" + c + 'px; z-index:2147483584"></div>'),
                                    a.move = i("#layui-layer-moves"),
                                t.moveType && a.move.css({
                                    visibility: "hidden"
                                }),
                                    a.moveX = e.pageX - a.move.position().left,
                                    a.moveY = e.pageY - a.move.position().top,
                                "fixed" !== a.layero.css("position") || (a.setY = n.scrollTop())
                            }
                        }),
                    i(document).mousemove(function(e) {
                        if (a.ismove) {
                            var i = e.pageX - a.moveX,
                                o = e.pageY - a.moveY;
                            if (e.preventDefault(), !t.moveOut) {
                                a.setY = n.scrollTop();
                                var r = n.width() - a.move.outerWidth(),
                                    l = a.setY;
                                0 > i && (i = 0),
                                i > r && (i = r),
                                l > o && (o = l),
                                o > n.height() - a.move.outerHeight() + a.setY && (o = n.height() - a.move.outerHeight() + a.setY)
                            }
                            a.move.css({
                                left: i,
                                top: o
                            }),
                            t.moveType && a.moveLayer(),
                                i = o = r = l = null
                        }
                    }).mouseup(function() {
                        try {
                            a.ismove && (a.moveLayer(), a.move.remove(), t.moveEnd && t.moveEnd()),
                                a.ismove = !1
                        } catch(e) {
                            a.ismove = !1
                        }
                    }),
                    e
            },
            r.pt.callback = function() {
                function e() {
                    var e = r.cancel && r.cancel(t.index, n);
                    e === !1 || o.close(t.index)
                }
                var t = this,
                    n = t.layero,
                    r = t.config;
                t.openLayer(),
                r.success && (2 == r.type ? n.find("iframe").on("load",
                    function() {
                        r.success(n, t.index)
                    }) : r.success(n, t.index)),
                o.ie6 && t.IE6(n),
                    n.find("." + l[6]).children("a").on("click",
                        function() {
                            var e = i(this).index();
                            if (0 === e) r.yes ? r.yes(t.index, n) : r.btn1 ? r.btn1(t.index, n) : o.close(t.index);
                            else {
                                var a = r["btn" + (e + 1)] && r["btn" + (e + 1)](t.index, n);
                                a === !1 || o.close(t.index)
                            }
                        }),
                    n.find("." + l[7]).on("click", e),
                r.shadeClose && i("#layui-layer-shade" + t.index).on("click",
                    function() {
                        o.close(t.index)
                    }),
                    n.find(".layui-layer-min").on("click",
                        function() {
                            var e = r.min && r.min(n);
                            e === !1 || o.min(t.index, r)
                        }),
                    n.find(".layui-layer-max").on("click",
                        function() {
                            i(this).hasClass("layui-layer-maxmin") ? (o.restore(t.index), r.restore && r.restore(n)) : (o.full(t.index, r), setTimeout(function() {
                                    r.full && r.full(n)
                                },
                                100))
                        }),
                r.end && (a.end[t.index] = r.end)
            },
            a.reselect = function() {
                i.each(i("select"),
                    function(e, t) {
                        var n = i(this);
                        n.parents("." + l[0])[0] || 1 == n.attr("layer") && i("." + l[0]).length < 1 && n.removeAttr("layer").show(),
                            n = null
                    })
            },
            r.pt.IE6 = function(e) {
                function t() {
                    e.css({
                        top: o + (a.config.fix ? n.scrollTop() : 0)
                    })
                }
                var a = this,
                    o = e.offset().top;
                t(),
                    n.scroll(t),
                    i("select").each(function(e, t) {
                        var n = i(this);
                        n.parents("." + l[0])[0] || "none" === n.css("display") || n.attr({
                            layer: "1"
                        }).hide(),
                            n = null
                    })
            },
            r.pt.openLayer = function() {
                var e = this;
                o.zIndex = e.config.zIndex,
                    o.setTop = function(e) {
                        var t = function() {
                            o.zIndex++,
                                e.css("z-index", o.zIndex + 1)
                        };
                        return o.zIndex = parseInt(e[0].style.zIndex),
                            e.on("mousedown", t),
                            o.zIndex
                    }
            },
            a.record = function(e) {
                var t = [e.width(), e.height(), e.position().top, e.position().left + parseFloat(e.css("margin-left"))];
                e.find(".layui-layer-max").addClass("layui-layer-maxmin"),
                    e.attr({
                        area: t
                    })
            },
            a.rescollbar = function(e) {
                l.html.attr("layer-full") == e && (l.html[0].style.removeProperty ? l.html[0].style.removeProperty("overflow") : l.html[0].style.removeAttribute("overflow"), l.html.removeAttr("layer-full"))
            },
            e.layer = o,
            o.getChildFrame = function(e, t) {
                return t = t || i("." + l[4]).attr("times"),
                    i("#" + l[0] + t).find("iframe").contents().find(e)
            },
            o.getFrameIndex = function(e) {
                return i("#" + e).parents("." + l[4]).attr("times")
            },
            o.iframeAuto = function(e) {
                if (e) {
                    var t = o.getChildFrame("html", e).outerHeight(),
                        n = i("#" + l[0] + e),
                        a = n.find(l[1]).outerHeight() || 0,
                        r = n.find("." + l[6]).outerHeight() || 0;
                    n.css({
                        height: t + a + r
                    }),
                        n.find("iframe").css({
                            height: t
                        })
                }
            },
            o.iframeSrc = function(e, t) {
                i("#" + l[0] + e).find("iframe").attr("src", t)
            },
            o.style = function(e, t) {
                var n = i("#" + l[0] + e),
                    o = n.attr("type"),
                    r = n.find(l[1]).outerHeight() || 0,
                    s = n.find("." + l[6]).outerHeight() || 0; (o === a.type[1] || o === a.type[2]) && (n.css(t), o === a.type[2] && n.find("iframe").css({
                    height: parseFloat(t.height) - r - s
                }))
            },
            o.min = function(e, t) {
                var n = i("#" + l[0] + e),
                    r = n.find(l[1]).outerHeight() || 0;
                a.record(n),
                    o.style(e, {
                        width: 180,
                        height: r,
                        overflow: "hidden"
                    }),
                    n.find(".layui-layer-min").hide(),
                "page" === n.attr("type") && n.find(l[4]).hide(),
                    a.rescollbar(e)
            },
            o.restore = function(e) {
                var t = i("#" + l[0] + e),
                    n = t.attr("area").split(",");
                t.attr("type"),
                    o.style(e, {
                        width: parseFloat(n[0]),
                        height: parseFloat(n[1]),
                        top: parseFloat(n[2]),
                        left: parseFloat(n[3]),
                        overflow: "visible"
                    }),
                    t.find(".layui-layer-max").removeClass("layui-layer-maxmin"),
                    t.find(".layui-layer-min").show(),
                "page" === t.attr("type") && t.find(l[4]).show(),
                    a.rescollbar(e)
            },
            o.full = function(e) {
                var t, r = i("#" + l[0] + e);
                a.record(r),
                l.html.attr("layer-full") || l.html.css("overflow", "hidden").attr("layer-full", e),
                    clearTimeout(t),
                    t = setTimeout(function() {
                            var t = "fixed" === r.css("position");
                            o.style(e, {
                                top: t ? 0 : n.scrollTop(),
                                left: t ? 0 : n.scrollLeft(),
                                width: n.width(),
                                height: n.height()
                            }),
                                r.find(".layui-layer-min").hide()
                        },
                        100)
            },
            o.title = function(e, t) {
                var n = i("#" + l[0] + (t || o.index)).find(l[1]);
                n.html(e)
            },
            o.close = function(e) {
                var t = i("#" + l[0] + e),
                    n = t.attr("type");
                if (t[0]) {
                    if (n === a.type[1] && "object" === t.attr("conType")) {
                        t.children(":not(." + l[5] + ")").remove();
                        for (var r = 0; 2 > r; r++) t.find(".layui-layer-wrap").unwrap().hide()
                    } else {
                        if (n === a.type[2]) try {
                            var s = i("#" + l[4] + e)[0];
                            s.contentWindow.document.write(""),
                                s.contentWindow.close(),
                                t.find("." + l[5])[0].removeChild(s)
                        } catch(e) {}
                        t[0].innerHTML = "",
                            t.remove()
                    }
                    i("#layui-layer-moves, #layui-layer-shade" + e).remove(),
                    o.ie6 && a.reselect(),
                        a.rescollbar(e),
                        i(document).off("keydown", a.enter),
                    "function" == typeof a.end[e] && a.end[e](),
                        delete a.end[e]
                }
            },
            o.closeAll = function(e) {
                i.each(i("." + l[0]),
                    function() {
                        var t = i(this),
                            n = e ? t.attr("type") === e: 1;
                        n && o.close(t.attr("times")),
                            n = null
                    })
            };
        var s = o.cache || {},
            c = function(e) {
                return s.skin ? " " + s.skin + " " + s.skin + "-" + e: ""
            };
        o.prompt = function(e, t) {
            e = e || {},
            "function" == typeof e && (t = e);
            var n, a = 2 == e.formType ? '<textarea class="layui-layer-input">' + (e.value || "") + "</textarea>": function() {
                return '<input type="' + (1 == e.formType ? "password": "text") + '" class="layui-layer-input" value="' + (e.value || "") + '">'
            } ();
            return o.open(i.extend({
                    btn: ["&#x786E;&#x5B9A;", "&#x53D6;&#x6D88;"],
                    content: a,
                    skin: "layui-layer-prompt" + c("prompt"),
                    success: function(e) {
                        n = e.find(".layui-layer-input"),
                            n.focus()
                    },
                    yes: function(i) {
                        var a = n.val();
                        "" === a ? n.focus() : a.length > (e.maxlength || 500) ? o.tips("&#x6700;&#x591A;&#x8F93;&#x5165;" + (e.maxlength || 500) + "&#x4E2A;&#x5B57;&#x6570;", n, {
                            tips: 1
                        }) : t && t(a, i, n)
                    }
                },
                e))
        },
            o.tab = function(e) {
                e = e || {};
                var t = e.tab || {};
                return o.open(i.extend({
                        type: 1,
                        skin: "layui-layer-tab" + c("tab"),
                        title: function() {
                            var e = t.length,
                                i = 1,
                                n = "";
                            if (e > 0) for (n = '<span class="layui-layer-tabnow">' + t[0].title + "</span>"; e > i; i++) n += "<span>" + t[i].title + "</span>";
                            return n
                        } (),
                        content: '<ul class="layui-layer-tabmain">' +
                        function() {
                            var e = t.length,
                                i = 1,
                                n = "";
                            if (e > 0) for (n = '<li class="layui-layer-tabli xubox_tab_layer">' + (t[0].content || "no content") + "</li>"; e > i; i++) n += '<li class="layui-layer-tabli">' + (t[i].content || "no  content") + "</li>";
                            return n
                        } () + "</ul>",
                        success: function(t) {
                            var n = t.find(".layui-layer-title").children(),
                                a = t.find(".layui-layer-tabmain").children();
                            n.on("mousedown",
                                function(t) {
                                    t.stopPropagation ? t.stopPropagation() : t.cancelBubble = !0;
                                    var n = i(this),
                                        o = n.index();
                                    n.addClass("layui-layer-tabnow").siblings().removeClass("layui-layer-tabnow"),
                                        a.eq(o).show().siblings().hide(),
                                    "function" == typeof e.change && e.change(o)
                                })
                        }
                    },
                    e))
            },
            o.photos = function(t, n, a) {
                function r(e, t, i) {
                    var n = new Image;
                    return n.src = e,
                        n.complete ? t(n) : (n.onload = function() {
                            n.onload = null,
                                t(n)
                        },
                            void(n.onerror = function(e) {
                                n.onerror = null,
                                    i(e)
                            }))
                }
                var l = {};
                if (t = t || {},
                        t.photos) {
                    var s = t.photos.constructor === Object,
                        f = s ? t.photos: {},
                        u = f.data || [],
                        d = f.start || 0;
                    if (l.imgIndex = (0 | d) + 1, t.img = t.img || "img", s) {
                        if (0 === u.length) return o.msg("&#x6CA1;&#x6709;&#x56FE;&#x7247;")
                    } else {
                        var y = i(t.photos),
                            p = function() {
                                u = [],
                                    y.find(t.img).each(function(e) {
                                        var t = i(this);
                                        t.attr("layer-index", e),
                                            u.push({
                                                alt: t.attr("alt"),
                                                pid: t.attr("layer-pid"),
                                                src: t.attr("layer-src") || t.attr("src"),
                                                thumb: t.attr("src")
                                            })
                                    })
                            };
                        if (p(), 0 === u.length) return;
                        if (n || y.on("click", t.img,
                                function() {
                                    var e = i(this),
                                        n = e.attr("layer-index");
                                    o.photos(i.extend(t, {
                                        photos: {
                                            start: n,
                                            data: u,
                                            tab: t.tab
                                        },
                                        full: t.full
                                    }), !0),
                                        p()
                                }), !n) return
                    }
                    l.imgprev = function(e) {
                        l.imgIndex--,
                        l.imgIndex < 1 && (l.imgIndex = u.length),
                            l.tabimg(e)
                    },
                        l.imgnext = function(e, t) {
                            l.imgIndex++,
                            l.imgIndex > u.length && (l.imgIndex = 1, t) || l.tabimg(e)
                        },
                        l.keyup = function(e) {
                            if (!l.end) {
                                var t = e.keyCode;
                                e.preventDefault(),
                                    37 === t ? l.imgprev(!0) : 39 === t ? l.imgnext(!0) : 27 === t && o.close(l.index)
                            }
                        },
                        l.tabimg = function(e) {
                            u.length <= 1 || (f.start = l.imgIndex - 1, o.close(l.index), o.photos(t, !0, e))
                        },
                        l.event = function() {
                            l.bigimg.hover(function() {
                                    l.imgsee.show()
                                },
                                function() {
                                    l.imgsee.hide()
                                }),
                                l.bigimg.find(".layui-layer-imgprev").on("click",
                                    function(e) {
                                        e.preventDefault(),
                                            l.imgprev()
                                    }),
                                l.bigimg.find(".layui-layer-imgnext").on("click",
                                    function(e) {
                                        e.preventDefault(),
                                            l.imgnext()
                                    }),
                                i(document).on("keyup", l.keyup)
                        },
                        l.loadi = o.load(1, {
                            shade: !("shade" in t) && .9,
                            scrollbar: !1
                        }),
                        r(u[d].src,
                            function(n) {
                                o.close(l.loadi),
                                    l.index = o.open(i.extend({
                                            type: 1,
                                            area: function() {
                                                var a = [n.width, n.height],
                                                    o = [i(e).width() - 50, i(e).height() - 50];
                                                return ! t.full && a[0] > o[0] && (a[0] = o[0], a[1] = a[0] * n.height / n.width),
                                                    [a[0] + "px", a[1] + "px"]
                                            } (),
                                            title: !1,
                                            shade: .9,
                                            shadeClose: !0,
                                            closeBtn: !1,
                                            move: ".layui-layer-phimg img",
                                            moveType: 1,
                                            scrollbar: !1,
                                            moveOut: !0,
                                            shift: 5 * Math.random() | 0,
                                            skin: "layui-layer-photos" + c("photos"),
                                            content: '<div class="layui-layer-phimg"><img src="' + u[d].src + '" alt="' + (u[d].alt || "") + '" layer-pid="' + u[d].pid + '"><div class="layui-layer-imgsee">' + (u.length > 1 ? '<span class="layui-layer-imguide"><a href="javascript:;" class="layui-layer-iconext layui-layer-imgprev"></a><a href="javascript:;" class="layui-layer-iconext layui-layer-imgnext"></a></span>': "") + '<div class="layui-layer-imgbar" style="display:' + (a ? "block": "") + '"><span class="layui-layer-imgtit"><a href="javascript:;">' + (u[d].alt || "") + "</a><em>" + l.imgIndex + "/" + u.length + "</em></span></div></div></div>",
                                            success: function(e, i) {
                                                l.bigimg = e.find(".layui-layer-phimg"),
                                                    l.imgsee = e.find(".layui-layer-imguide,.layui-layer-imgbar"),
                                                    l.event(e),
                                                t.tab && t.tab(u[d], e)
                                            },
                                            end: function() {
                                                l.end = !0,
                                                    i(document).off("keyup", l.keyup)
                                            }
                                        },
                                        t))
                            },
                            function() {
                                o.close(l.loadi),
                                    o.msg("&#x5F53;&#x524D;&#x56FE;&#x7247;&#x5730;&#x5740;&#x5F02;&#x5E38;<br>&#x662F;&#x5426;&#x7EE7;&#x7EED;&#x67E5;&#x770B;&#x4E0B;&#x4E00;&#x5F20;&#xFF1F;", {
                                        time: 3e4,
                                        btn: ["&#x4E0B;&#x4E00;&#x5F20;", "&#x4E0D;&#x770B;&#x4E86;"],
                                        yes: function() {
                                            u.length > 1 && l.imgnext(!0, !0)
                                        }
                                    })
                            })
                }
            },
            a.run = function() {
                i = jQuery,
                    n = i(e),
                    l.html = i("html"),
                    o.open = function(e) {
                        var t = new r(e);
                        return t.index
                    }
            },
            "function" == typeof define ? define(function() {
                return a.run(),
                    o
            }) : function() {
                a.run(),
                    o.use("skin/layer.css")
            } ()
    } (window); !
    function(n, e) {
        "function" == typeof define && define.amd ? define(e) : "object" == typeof exports ? module.exports = e() : n.NProgress = e()
    } (this,
        function() {
            function n(n, e, t) {
                return n < e ? e: n > t ? t: n
            }
            function e(n) {
                return 100 * ( - 1 + n)
            }
            function t(n, t, r) {
                var i;
                return i = "translate3d" === c.positionUsing ? {
                    transform: "translate3d(" + e(n) + "%,0,0)"
                }: "translate" === c.positionUsing ? {
                    transform: "translate(" + e(n) + "%,0)"
                }: {
                    "margin-left": e(n) + "%"
                },
                    i.transition = "all " + t + "ms " + r,
                    i
            }
            function r(n, e) {
                var t = "string" == typeof n ? n: s(n);
                return t.indexOf(" " + e + " ") >= 0
            }
            function i(n, e) {
                var t = s(n),
                    i = t + e;
                r(t, e) || (n.className = i.substring(1))
            }
            function o(n, e) {
                var t, i = s(n);
                r(n, e) && (t = i.replace(" " + e + " ", " "), n.className = t.substring(1, t.length - 1))
            }
            function s(n) {
                return (" " + (n.className || "") + " ").replace(/\s+/gi, " ")
            }
            function a(n) {
                n && n.parentNode && n.parentNode.removeChild(n)
            }
            var u = {};
            u.version = "0.2.0";
            var c = u.settings = {
                minimum: .08,
                easing: "ease",
                positionUsing: "",
                speed: 200,
                trickle: !0,
                trickleRate: .02,
                trickleSpeed: 800,
                showSpinner: !0,
                barSelector: '[role="bar"]',
                spinnerSelector: '[role="spinner"]',
                parent: "body",
                template: '<div class="bar" role="bar"><div class="peg"></div></div><div class="spinner" role="spinner"><div class="spinner-icon"></div></div>'
            };
            u.configure = function(n) {
                var e, t;
                for (e in n) t = n[e],
                void 0 !== t && n.hasOwnProperty(e) && (c[e] = t);
                return this
            },
                u.status = null,
                u.set = function(e) {
                    var r = u.isStarted();
                    e = n(e, c.minimum, 1),
                        u.status = 1 === e ? null: e;
                    var i = u.render(!r),
                        o = i.querySelector(c.barSelector),
                        s = c.speed,
                        a = c.easing;
                    return i.offsetWidth,
                        l(function(n) {
                            "" === c.positionUsing && (c.positionUsing = u.getPositioningCSS()),
                                f(o, t(e, s, a)),
                                1 === e ? (f(i, {
                                    transition: "none",
                                    opacity: 1
                                }), i.offsetWidth, setTimeout(function() {
                                        f(i, {
                                            transition: "all " + s + "ms linear",
                                            opacity: 0
                                        }),
                                            setTimeout(function() {
                                                    u.remove(),
                                                        n()
                                                },
                                                s)
                                    },
                                    s)) : setTimeout(n, s)
                        }),
                        this
                },
                u.isStarted = function() {
                    return "number" == typeof u.status
                },
                u.start = function() {
                    u.status || u.set(0);
                    var n = function() {
                        setTimeout(function() {
                                u.status && (u.trickle(), n())
                            },
                            c.trickleSpeed)
                    };
                    return c.trickle && n(),
                        this
                },
                u.done = function(n) {
                    return n || u.status ? u.inc(.3 + .5 * Math.random()).set(1) : this
                },
                u.inc = function(e) {
                    var t = u.status;
                    return t ? ("number" != typeof e && (e = (1 - t) * n(Math.random() * t, .1, .95)), t = n(t + e, 0, .994), u.set(t)) : u.start()
                },
                u.trickle = function() {
                    return u.inc(Math.random() * c.trickleRate)
                },
                function() {
                    var n = 0,
                        e = 0;
                    u.promise = function(t) {
                        return t && "resolved" !== t.state() ? (0 === e && u.start(), n++, e++, t.always(function() {
                            e--,
                                0 === e ? (n = 0, u.done()) : u.set((n - e) / n)
                        }), this) : this
                    }
                } (),
                u.render = function(n) {
                    if (u.isRendered()) return document.getElementById("nprogress");
                    i(document.documentElement, "nprogress-busy");
                    var t = document.createElement("div");
                    t.id = "nprogress",
                        t.innerHTML = c.template;
                    var r, o = t.querySelector(c.barSelector),
                        s = n ? "-100": e(u.status || 0),
                        l = document.querySelector(c.parent);
                    return f(o, {
                        transition: "all 0 linear",
                        transform: "translate3d(" + s + "%,0,0)"
                    }),
                    c.showSpinner || (r = t.querySelector(c.spinnerSelector), r && a(r)),
                    l != document.body && i(l, "nprogress-custom-parent"),
                        l.appendChild(t),
                        t
                },
                u.remove = function() {
                    o(document.documentElement, "nprogress-busy"),
                        o(document.querySelector(c.parent), "nprogress-custom-parent");
                    var n = document.getElementById("nprogress");
                    n && a(n)
                },
                u.isRendered = function() {
                    return !! document.getElementById("nprogress")
                },
                u.getPositioningCSS = function() {
                    var n = document.body.style,
                        e = "WebkitTransform" in n ? "Webkit": "MozTransform" in n ? "Moz": "msTransform" in n ? "ms": "OTransform" in n ? "O": "";
                    return e + "Perspective" in n ? "translate3d": e + "Transform" in n ? "translate": "margin"
                };
            var l = function() {
                    function n() {
                        var t = e.shift();
                        t && t(n)
                    }
                    var e = [];
                    return function(t) {
                        e.push(t),
                        1 == e.length && n()
                    }
                } (),
                f = function() {
                    function n(n) {
                        return n.replace(/^-ms-/, "ms-").replace(/-([\da-z])/gi,
                            function(n, e) {
                                return e.toUpperCase()
                            })
                    }
                    function e(n) {
                        var e = document.body.style;
                        if (n in e) return n;
                        for (var t, r = i.length,
                                 o = n.charAt(0).toUpperCase() + n.slice(1); r--;) if (t = i[r] + o, t in e) return t;
                        return n
                    }
                    function t(t) {
                        return t = n(t),
                        o[t] || (o[t] = e(t))
                    }
                    function r(n, e, r) {
                        e = t(e),
                            n.style[e] = r
                    }
                    var i = ["Webkit", "O", "Moz", "ms"],
                        o = {};
                    return function(n, e) {
                        var t, i, o = arguments;
                        if (2 == o.length) for (t in e) i = e[t],
                        void 0 !== i && e.hasOwnProperty(t) && r(n, t, i);
                        else r(n, o[1], o[2])
                    }
                } ();
            return u
        }); !
    function() {
        "use strict";
        function e(e) {
            e.fn.swiper = function(a) {
                var i;
                return e(this).each(function() {
                    var e = new t(this, a);
                    i || (i = e)
                }),
                    i
            }
        }
        var a, t = function(e, r) {
            function s(e) {
                return Math.floor(e)
            }
            function n() {
                b.autoplayTimeoutId = setTimeout(function() {
                        b.params.loop ? (b.fixLoop(), b._slideNext(), b.emit("onAutoplay", b)) : b.isEnd ? r.autoplayStopOnLast ? b.stopAutoplay() : (b._slideTo(0), b.emit("onAutoplay", b)) : (b._slideNext(), b.emit("onAutoplay", b))
                    },
                    b.params.autoplay)
            }
            function o(e, t) {
                var i = a(e.target);
                if (!i.is(t)) if ("string" == typeof t) i = i.parents(t);
                else if (t.nodeType) {
                    var r;
                    return i.parents().each(function(e, a) {
                        a === t && (r = t)
                    }),
                        r ? t: void 0
                }
                if (0 !== i.length) return i[0]
            }
            function l(e, a) {
                a = a || {};
                var t = window.MutationObserver || window.WebkitMutationObserver,
                    i = new t(function(e) {
                        e.forEach(function(e) {
                            b.onResize(!0),
                                b.emit("onObserverUpdate", b, e)
                        })
                    });
                i.observe(e, {
                    attributes: "undefined" == typeof a.attributes || a.attributes,
                    childList: "undefined" == typeof a.childList || a.childList,
                    characterData: "undefined" == typeof a.characterData || a.characterData
                }),
                    b.observers.push(i)
            }
            function p(e) {
                e.originalEvent && (e = e.originalEvent);
                var a = e.keyCode || e.charCode;
                if (!b.params.allowSwipeToNext && (b.isHorizontal() && 39 === a || !b.isHorizontal() && 40 === a)) return ! 1;
                if (!b.params.allowSwipeToPrev && (b.isHorizontal() && 37 === a || !b.isHorizontal() && 38 === a)) return ! 1;
                if (! (e.shiftKey || e.altKey || e.ctrlKey || e.metaKey || document.activeElement && document.activeElement.nodeName && ("input" === document.activeElement.nodeName.toLowerCase() || "textarea" === document.activeElement.nodeName.toLowerCase()))) {
                    if (37 === a || 39 === a || 38 === a || 40 === a) {
                        var t = !1;
                        if (b.container.parents(".swiper-slide").length > 0 && 0 === b.container.parents(".swiper-slide-active").length) return;
                        var i = {
                                left: window.pageXOffset,
                                top: window.pageYOffset
                            },
                            r = window.innerWidth,
                            s = window.innerHeight,
                            n = b.container.offset();
                        b.rtl && (n.left = n.left - b.container[0].scrollLeft);
                        for (var o = [[n.left, n.top], [n.left + b.width, n.top], [n.left, n.top + b.height], [n.left + b.width, n.top + b.height]], l = 0; l < o.length; l++) {
                            var p = o[l];
                            p[0] >= i.left && p[0] <= i.left + r && p[1] >= i.top && p[1] <= i.top + s && (t = !0)
                        }
                        if (!t) return
                    }
                    b.isHorizontal() ? ((37 === a || 39 === a) && (e.preventDefault ? e.preventDefault() : e.returnValue = !1), (39 === a && !b.rtl || 37 === a && b.rtl) && b.slideNext(), (37 === a && !b.rtl || 39 === a && b.rtl) && b.slidePrev()) : ((38 === a || 40 === a) && (e.preventDefault ? e.preventDefault() : e.returnValue = !1), 40 === a && b.slideNext(), 38 === a && b.slidePrev())
                }
            }
            function d(e) {
                e.originalEvent && (e = e.originalEvent);
                var a = b.mousewheel.event,
                    t = 0,
                    i = b.rtl ? -1 : 1;
                if ("mousewheel" === a) if (b.params.mousewheelForceToAxis) if (b.isHorizontal()) {
                    if (! (Math.abs(e.wheelDeltaX) > Math.abs(e.wheelDeltaY))) return;
                    t = e.wheelDeltaX * i
                } else {
                    if (! (Math.abs(e.wheelDeltaY) > Math.abs(e.wheelDeltaX))) return;
                    t = e.wheelDeltaY
                } else t = Math.abs(e.wheelDeltaX) > Math.abs(e.wheelDeltaY) ? -e.wheelDeltaX * i: -e.wheelDeltaY;
                else if ("DOMMouseScroll" === a) t = -e.detail;
                else if ("wheel" === a) if (b.params.mousewheelForceToAxis) if (b.isHorizontal()) {
                    if (! (Math.abs(e.deltaX) > Math.abs(e.deltaY))) return;
                    t = -e.deltaX * i
                } else {
                    if (! (Math.abs(e.deltaY) > Math.abs(e.deltaX))) return;
                    t = -e.deltaY
                } else t = Math.abs(e.deltaX) > Math.abs(e.deltaY) ? -e.deltaX * i: -e.deltaY;
                if (0 !== t) {
                    if (b.params.mousewheelInvert && (t = -t), b.params.freeMode) {
                        var r = b.getWrapperTranslate() + t * b.params.mousewheelSensitivity,
                            s = b.isBeginning,
                            n = b.isEnd;
                        if (r >= b.minTranslate() && (r = b.minTranslate()), r <= b.maxTranslate() && (r = b.maxTranslate()), b.setWrapperTransition(0), b.setWrapperTranslate(r), b.updateProgress(), b.updateActiveIndex(), (!s && b.isBeginning || !n && b.isEnd) && b.updateClasses(), b.params.freeModeSticky ? (clearTimeout(b.mousewheel.timeout), b.mousewheel.timeout = setTimeout(function() {
                                    b.slideReset()
                                },
                                300)) : b.params.lazyLoading && b.lazy && b.lazy.load(), 0 === r || r === b.maxTranslate()) return
                    } else {
                        if ((new window.Date).getTime() - b.mousewheel.lastScrollTime > 60) if (0 > t) if (b.isEnd && !b.params.loop || b.animating) {
                            if (b.params.mousewheelReleaseOnEdges) return ! 0
                        } else b.slideNext();
                        else if (b.isBeginning && !b.params.loop || b.animating) {
                            if (b.params.mousewheelReleaseOnEdges) return ! 0
                        } else b.slidePrev();
                        b.mousewheel.lastScrollTime = (new window.Date).getTime()
                    }
                    return b.params.autoplay && b.stopAutoplay(),
                        e.preventDefault ? e.preventDefault() : e.returnValue = !1,
                        !1
                }
            }
            function u(e, t) {
                e = a(e);
                var i, r, s, n = b.rtl ? -1 : 1;
                i = e.attr("data-swiper-parallax") || "0",
                    r = e.attr("data-swiper-parallax-x"),
                    s = e.attr("data-swiper-parallax-y"),
                    r || s ? (r = r || "0", s = s || "0") : b.isHorizontal() ? (r = i, s = "0") : (s = i, r = "0"),
                    r = r.indexOf("%") >= 0 ? parseInt(r, 10) * t * n + "%": r * t * n + "px",
                    s = s.indexOf("%") >= 0 ? parseInt(s, 10) * t + "%": s * t + "px",
                    e.transform("translate3d(" + r + ", " + s + ",0px)")
            }
            function c(e) {
                return 0 !== e.indexOf("on") && (e = e[0] !== e[0].toUpperCase() ? "on" + e[0].toUpperCase() + e.substring(1) : "on" + e),
                    e
            }
            if (! (this instanceof t)) return new t(e, r);
            var m = {
                    direction: "horizontal",
                    touchEventsTarget: "container",
                    initialSlide: 0,
                    speed: 300,
                    autoplay: !1,
                    autoplayDisableOnInteraction: !0,
                    autoplayStopOnLast: !1,
                    iOSEdgeSwipeDetection: !1,
                    iOSEdgeSwipeThreshold: 20,
                    freeMode: !1,
                    freeModeMomentum: !0,
                    freeModeMomentumRatio: 1,
                    freeModeMomentumBounce: !0,
                    freeModeMomentumBounceRatio: 1,
                    freeModeSticky: !1,
                    freeModeMinimumVelocity: .02,
                    autoHeight: !1,
                    setWrapperSize: !1,
                    virtualTranslate: !1,
                    effect: "slide",
                    coverflow: {
                        rotate: 50,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                        slideShadows: !0
                    },
                    flip: {
                        slideShadows: !0,
                        limitRotation: !0
                    },
                    cube: {
                        slideShadows: !0,
                        shadow: !0,
                        shadowOffset: 20,
                        shadowScale: .94
                    },
                    fade: {
                        crossFade: !1
                    },
                    parallax: !1,
                    scrollbar: null,
                    scrollbarHide: !0,
                    scrollbarDraggable: !1,
                    scrollbarSnapOnRelease: !1,
                    keyboardControl: !1,
                    mousewheelControl: !1,
                    mousewheelReleaseOnEdges: !1,
                    mousewheelInvert: !1,
                    mousewheelForceToAxis: !1,
                    mousewheelSensitivity: 1,
                    hashnav: !1,
                    breakpoints: void 0,
                    spaceBetween: 0,
                    slidesPerView: 1,
                    slidesPerColumn: 1,
                    slidesPerColumnFill: "column",
                    slidesPerGroup: 1,
                    centeredSlides: !1,
                    slidesOffsetBefore: 0,
                    slidesOffsetAfter: 0,
                    roundLengths: !1,
                    touchRatio: 1,
                    touchAngle: 45,
                    simulateTouch: !0,
                    shortSwipes: !0,
                    longSwipes: !0,
                    longSwipesRatio: .5,
                    longSwipesMs: 300,
                    followFinger: !0,
                    onlyExternal: !1,
                    threshold: 0,
                    touchMoveStopPropagation: !0,
                    uniqueNavElements: !0,
                    pagination: null,
                    paginationElement: "span",
                    paginationClickable: !1,
                    paginationHide: !1,
                    paginationBulletRender: null,
                    paginationProgressRender: null,
                    paginationFractionRender: null,
                    paginationCustomRender: null,
                    paginationType: "bullets",
                    resistance: !0,
                    resistanceRatio: .85,
                    nextButton: null,
                    prevButton: null,
                    watchSlidesProgress: !1,
                    watchSlidesVisibility: !1,
                    grabCursor: !1,
                    preventClicks: !0,
                    preventClicksPropagation: !0,
                    slideToClickedSlide: !1,
                    lazyLoading: !1,
                    lazyLoadingInPrevNext: !1,
                    lazyLoadingInPrevNextAmount: 1,
                    lazyLoadingOnTransitionStart: !1,
                    preloadImages: !0,
                    updateOnImagesReady: !0,
                    loop: !1,
                    loopAdditionalSlides: 0,
                    loopedSlides: null,
                    control: void 0,
                    controlInverse: !1,
                    controlBy: "slide",
                    allowSwipeToPrev: !0,
                    allowSwipeToNext: !0,
                    swipeHandler: null,
                    noSwiping: !0,
                    noSwipingClass: "swiper-no-swiping",
                    slideClass: "swiper-slide",
                    slideActiveClass: "swiper-slide-active",
                    slideVisibleClass: "swiper-slide-visible",
                    slideDuplicateClass: "swiper-slide-duplicate",
                    slideNextClass: "swiper-slide-next",
                    slidePrevClass: "swiper-slide-prev",
                    wrapperClass: "swiper-wrapper",
                    bulletClass: "swiper-pagination-bullet",
                    bulletActiveClass: "swiper-pagination-bullet-active",
                    buttonDisabledClass: "swiper-button-disabled",
                    paginationCurrentClass: "swiper-pagination-current",
                    paginationTotalClass: "swiper-pagination-total",
                    paginationHiddenClass: "swiper-pagination-hidden",
                    paginationProgressbarClass: "swiper-pagination-progressbar",
                    observer: !1,
                    observeParents: !1,
                    a11y: !1,
                    prevSlideMessage: "Previous slide",
                    nextSlideMessage: "Next slide",
                    firstSlideMessage: "This is the first slide",
                    lastSlideMessage: "This is the last slide",
                    paginationBulletMessage: "Go to slide {{index}}",
                    runCallbacksOnInit: !0
                },
                h = r && r.virtualTranslate;
            r = r || {};
            var f = {};
            for (var g in r) if ("object" != typeof r[g] || null === r[g] || r[g].nodeType || r[g] === window || r[g] === document || "undefined" != typeof i && r[g] instanceof i || "undefined" != typeof jQuery && r[g] instanceof jQuery) f[g] = r[g];
            else {
                f[g] = {};
                for (var v in r[g]) f[g][v] = r[g][v]
            }
            for (var w in m) if ("undefined" == typeof r[w]) r[w] = m[w];
            else if ("object" == typeof r[w]) for (var y in m[w])"undefined" == typeof r[w][y] && (r[w][y] = m[w][y]);
            var b = this;
            if (b.params = r, b.originalParams = f, b.classNames = [], "undefined" != typeof a && "undefined" != typeof i && (a = i), ("undefined" != typeof a || (a = "undefined" == typeof i ? window.Dom7 || window.Zepto || window.jQuery: i)) && (b.$ = a, b.currentBreakpoint = void 0, b.getActiveBreakpoint = function() {
                    if (!b.params.breakpoints) return ! 1;
                    var e, a = !1,
                        t = [];
                    for (e in b.params.breakpoints) b.params.breakpoints.hasOwnProperty(e) && t.push(e);
                    t.sort(function(e, a) {
                        return parseInt(e, 10) > parseInt(a, 10)
                    });
                    for (var i = 0; i < t.length; i++) e = t[i],
                    e >= window.innerWidth && !a && (a = e);
                    return a || "max"
                },
                    b.setBreakpoint = function() {
                        var e = b.getActiveBreakpoint();
                        if (e && b.currentBreakpoint !== e) {
                            var a = e in b.params.breakpoints ? b.params.breakpoints[e] : b.originalParams,
                                t = b.params.loop && a.slidesPerView !== b.params.slidesPerView;
                            for (var i in a) b.params[i] = a[i];
                            b.currentBreakpoint = e,
                            t && b.destroyLoop && b.reLoop(!0)
                        }
                    },
                b.params.breakpoints && b.setBreakpoint(), b.container = a(e), 0 !== b.container.length)) {
                if (b.container.length > 1) {
                    var x = [];
                    return b.container.each(function() {
                        x.push(new t(this, r))
                    }),
                        x
                }
                b.container[0].swiper = b,
                    b.container.data("swiper", b),
                    b.classNames.push("swiper-container-" + b.params.direction),
                b.params.freeMode && b.classNames.push("swiper-container-free-mode"),
                b.support.flexbox || (b.classNames.push("swiper-container-no-flexbox"), b.params.slidesPerColumn = 1),
                b.params.autoHeight && b.classNames.push("swiper-container-autoheight"),
                (b.params.parallax || b.params.watchSlidesVisibility) && (b.params.watchSlidesProgress = !0),
                ["cube", "coverflow", "flip"].indexOf(b.params.effect) >= 0 && (b.support.transforms3d ? (b.params.watchSlidesProgress = !0, b.classNames.push("swiper-container-3d")) : b.params.effect = "slide"),
                "slide" !== b.params.effect && b.classNames.push("swiper-container-" + b.params.effect),
                "cube" === b.params.effect && (b.params.resistanceRatio = 0, b.params.slidesPerView = 1, b.params.slidesPerColumn = 1, b.params.slidesPerGroup = 1, b.params.centeredSlides = !1, b.params.spaceBetween = 0, b.params.virtualTranslate = !0, b.params.setWrapperSize = !1),
                ("fade" === b.params.effect || "flip" === b.params.effect) && (b.params.slidesPerView = 1, b.params.slidesPerColumn = 1, b.params.slidesPerGroup = 1, b.params.watchSlidesProgress = !0, b.params.spaceBetween = 0, b.params.setWrapperSize = !1, "undefined" == typeof h && (b.params.virtualTranslate = !0)),
                b.params.grabCursor && b.support.touch && (b.params.grabCursor = !1),
                    b.wrapper = b.container.children("." + b.params.wrapperClass),
                b.params.pagination && (b.paginationContainer = a(b.params.pagination), b.params.uniqueNavElements && "string" == typeof b.params.pagination && b.paginationContainer.length > 1 && 1 === b.container.find(b.params.pagination).length && (b.paginationContainer = b.container.find(b.params.pagination)), "bullets" === b.params.paginationType && b.params.paginationClickable ? b.paginationContainer.addClass("swiper-pagination-clickable") : b.params.paginationClickable = !1, b.paginationContainer.addClass("swiper-pagination-" + b.params.paginationType)),
                (b.params.nextButton || b.params.prevButton) && (b.params.nextButton && (b.nextButton = a(b.params.nextButton), b.params.uniqueNavElements && "string" == typeof b.params.nextButton && b.nextButton.length > 1 && 1 === b.container.find(b.params.nextButton).length && (b.nextButton = b.container.find(b.params.nextButton))), b.params.prevButton && (b.prevButton = a(b.params.prevButton), b.params.uniqueNavElements && "string" == typeof b.params.prevButton && b.prevButton.length > 1 && 1 === b.container.find(b.params.prevButton).length && (b.prevButton = b.container.find(b.params.prevButton)))),
                    b.isHorizontal = function() {
                        return "horizontal" === b.params.direction
                    },
                    b.rtl = b.isHorizontal() && ("rtl" === b.container[0].dir.toLowerCase() || "rtl" === b.container.css("direction")),
                b.rtl && b.classNames.push("swiper-container-rtl"),
                b.rtl && (b.wrongRTL = "-webkit-box" === b.wrapper.css("display")),
                b.params.slidesPerColumn > 1 && b.classNames.push("swiper-container-multirow"),
                b.device.android && b.classNames.push("swiper-container-android"),
                    b.container.addClass(b.classNames.join(" ")),
                    b.translate = 0,
                    b.progress = 0,
                    b.velocity = 0,
                    b.lockSwipeToNext = function() {
                        b.params.allowSwipeToNext = !1
                    },
                    b.lockSwipeToPrev = function() {
                        b.params.allowSwipeToPrev = !1
                    },
                    b.lockSwipes = function() {
                        b.params.allowSwipeToNext = b.params.allowSwipeToPrev = !1
                    },
                    b.unlockSwipeToNext = function() {
                        b.params.allowSwipeToNext = !0
                    },
                    b.unlockSwipeToPrev = function() {
                        b.params.allowSwipeToPrev = !0
                    },
                    b.unlockSwipes = function() {
                        b.params.allowSwipeToNext = b.params.allowSwipeToPrev = !0
                    },
                b.params.grabCursor && (b.container[0].style.cursor = "move", b.container[0].style.cursor = "-webkit-grab", b.container[0].style.cursor = "-moz-grab", b.container[0].style.cursor = "grab"),
                    b.imagesToLoad = [],
                    b.imagesLoaded = 0,
                    b.loadImage = function(e, a, t, i, r) {
                        function s() {
                            r && r()
                        }
                        var n;
                        e.complete && i ? s() : a ? (n = new window.Image, n.onload = s, n.onerror = s, t && (n.srcset = t), a && (n.src = a)) : s()
                    },
                    b.preloadImages = function() {
                        function e() {
                            "undefined" != typeof b && null !== b && (void 0 !== b.imagesLoaded && b.imagesLoaded++, b.imagesLoaded === b.imagesToLoad.length && (b.params.updateOnImagesReady && b.update(), b.emit("onImagesReady", b)))
                        }
                        b.imagesToLoad = b.container.find("img");
                        for (var a = 0; a < b.imagesToLoad.length; a++) b.loadImage(b.imagesToLoad[a], b.imagesToLoad[a].currentSrc || b.imagesToLoad[a].getAttribute("src"), b.imagesToLoad[a].srcset || b.imagesToLoad[a].getAttribute("srcset"), !0, e)
                    },
                    b.autoplayTimeoutId = void 0,
                    b.autoplaying = !1,
                    b.autoplayPaused = !1,
                    b.startAutoplay = function() {
                        return "undefined" == typeof b.autoplayTimeoutId && ( !! b.params.autoplay && (!b.autoplaying && (b.autoplaying = !0, b.emit("onAutoplayStart", b), void n())))
                    },
                    b.stopAutoplay = function(e) {
                        b.autoplayTimeoutId && (b.autoplayTimeoutId && clearTimeout(b.autoplayTimeoutId), b.autoplaying = !1, b.autoplayTimeoutId = void 0, b.emit("onAutoplayStop", b))
                    },
                    b.pauseAutoplay = function(e) {
                        b.autoplayPaused || (b.autoplayTimeoutId && clearTimeout(b.autoplayTimeoutId), b.autoplayPaused = !0, 0 === e ? (b.autoplayPaused = !1, n()) : b.wrapper.transitionEnd(function() {
                            b && (b.autoplayPaused = !1, b.autoplaying ? n() : b.stopAutoplay())
                        }))
                    },
                    b.minTranslate = function() {
                        return - b.snapGrid[0]
                    },
                    b.maxTranslate = function() {
                        return - b.snapGrid[b.snapGrid.length - 1]
                    },
                    b.updateAutoHeight = function() {
                        var e = b.slides.eq(b.activeIndex)[0];
                        if ("undefined" != typeof e) {
                            var a = e.offsetHeight;
                            a && b.wrapper.css("height", a + "px")
                        }
                    },
                    b.updateContainerSize = function() {
                        var e, a;
                        e = "undefined" != typeof b.params.width ? b.params.width: b.container[0].clientWidth,
                            a = "undefined" != typeof b.params.height ? b.params.height: b.container[0].clientHeight,
                        0 === e && b.isHorizontal() || 0 === a && !b.isHorizontal() || (e = e - parseInt(b.container.css("padding-left"), 10) - parseInt(b.container.css("padding-right"), 10), a = a - parseInt(b.container.css("padding-top"), 10) - parseInt(b.container.css("padding-bottom"), 10), b.width = e, b.height = a, b.size = b.isHorizontal() ? b.width: b.height)
                    },
                    b.updateSlidesSize = function() {
                        b.slides = b.wrapper.children("." + b.params.slideClass),
                            b.snapGrid = [],
                            b.slidesGrid = [],
                            b.slidesSizesGrid = [];
                        var e, a = b.params.spaceBetween,
                            t = -b.params.slidesOffsetBefore,
                            i = 0,
                            r = 0;
                        if ("undefined" != typeof b.size) {
                            "string" == typeof a && a.indexOf("%") >= 0 && (a = parseFloat(a.replace("%", "")) / 100 * b.size),
                                b.virtualSize = -a,
                                b.rtl ? b.slides.css({
                                    marginLeft: "",
                                    marginTop: ""
                                }) : b.slides.css({
                                    marginRight: "",
                                    marginBottom: ""
                                });
                            var n;
                            b.params.slidesPerColumn > 1 && (n = Math.floor(b.slides.length / b.params.slidesPerColumn) === b.slides.length / b.params.slidesPerColumn ? b.slides.length: Math.ceil(b.slides.length / b.params.slidesPerColumn) * b.params.slidesPerColumn, "auto" !== b.params.slidesPerView && "row" === b.params.slidesPerColumnFill && (n = Math.max(n, b.params.slidesPerView * b.params.slidesPerColumn)));
                            var o, l = b.params.slidesPerColumn,
                                p = n / l,
                                d = p - (b.params.slidesPerColumn * p - b.slides.length);
                            for (e = 0; e < b.slides.length; e++) {
                                o = 0;
                                var u = b.slides.eq(e);
                                if (b.params.slidesPerColumn > 1) {
                                    var c, m, h;
                                    "column" === b.params.slidesPerColumnFill ? (m = Math.floor(e / l), h = e - m * l, (m > d || m === d && h === l - 1) && ++h >= l && (h = 0, m++), c = m + h * n / l, u.css({
                                        "-webkit-box-ordinal-group": c,
                                        "-moz-box-ordinal-group": c,
                                        "-ms-flex-order": c,
                                        "-webkit-order": c,
                                        order: c
                                    })) : (h = Math.floor(e / p), m = e - h * p),
                                        u.css({
                                            "margin-top": 0 !== h && b.params.spaceBetween && b.params.spaceBetween + "px"
                                        }).attr("data-swiper-column", m).attr("data-swiper-row", h)
                                }
                                "none" !== u.css("display") && ("auto" === b.params.slidesPerView ? (o = b.isHorizontal() ? u.outerWidth(!0) : u.outerHeight(!0), b.params.roundLengths && (o = s(o))) : (o = (b.size - (b.params.slidesPerView - 1) * a) / b.params.slidesPerView, b.params.roundLengths && (o = s(o)), b.isHorizontal() ? b.slides[e].style.width = o + "px": b.slides[e].style.height = o + "px"), b.slides[e].swiperSlideSize = o, b.slidesSizesGrid.push(o), b.params.centeredSlides ? (t = t + o / 2 + i / 2 + a, 0 === e && (t = t - b.size / 2 - a), Math.abs(t) < .001 && (t = 0), r % b.params.slidesPerGroup === 0 && b.snapGrid.push(t), b.slidesGrid.push(t)) : (r % b.params.slidesPerGroup === 0 && b.snapGrid.push(t), b.slidesGrid.push(t), t = t + o + a), b.virtualSize += o + a, i = o, r++)
                            }
                            b.virtualSize = Math.max(b.virtualSize, b.size) + b.params.slidesOffsetAfter;
                            var f;
                            if (b.rtl && b.wrongRTL && ("slide" === b.params.effect || "coverflow" === b.params.effect) && b.wrapper.css({
                                    width: b.virtualSize + b.params.spaceBetween + "px"
                                }), (!b.support.flexbox || b.params.setWrapperSize) && (b.isHorizontal() ? b.wrapper.css({
                                    width: b.virtualSize + b.params.spaceBetween + "px"
                                }) : b.wrapper.css({
                                    height: b.virtualSize + b.params.spaceBetween + "px"
                                })), b.params.slidesPerColumn > 1 && (b.virtualSize = (o + b.params.spaceBetween) * n, b.virtualSize = Math.ceil(b.virtualSize / b.params.slidesPerColumn) - b.params.spaceBetween, b.wrapper.css({
                                    width: b.virtualSize + b.params.spaceBetween + "px"
                                }), b.params.centeredSlides)) {
                                for (f = [], e = 0; e < b.snapGrid.length; e++) b.snapGrid[e] < b.virtualSize + b.snapGrid[0] && f.push(b.snapGrid[e]);
                                b.snapGrid = f
                            }
                            if (!b.params.centeredSlides) {
                                for (f = [], e = 0; e < b.snapGrid.length; e++) b.snapGrid[e] <= b.virtualSize - b.size && f.push(b.snapGrid[e]);
                                b.snapGrid = f,
                                Math.floor(b.virtualSize - b.size) - Math.floor(b.snapGrid[b.snapGrid.length - 1]) > 1 && b.snapGrid.push(b.virtualSize - b.size)
                            }
                            0 === b.snapGrid.length && (b.snapGrid = [0]),
                            0 !== b.params.spaceBetween && (b.isHorizontal() ? b.rtl ? b.slides.css({
                                marginLeft: a + "px"
                            }) : b.slides.css({
                                marginRight: a + "px"
                            }) : b.slides.css({
                                marginBottom: a + "px"
                            })),
                            b.params.watchSlidesProgress && b.updateSlidesOffset()
                        }
                    },
                    b.updateSlidesOffset = function() {
                        for (var e = 0; e < b.slides.length; e++) b.slides[e].swiperSlideOffset = b.isHorizontal() ? b.slides[e].offsetLeft: b.slides[e].offsetTop
                    },
                    b.updateSlidesProgress = function(e) {
                        if ("undefined" == typeof e && (e = b.translate || 0), 0 !== b.slides.length) {
                            "undefined" == typeof b.slides[0].swiperSlideOffset && b.updateSlidesOffset();
                            var a = -e;
                            b.rtl && (a = e),
                                b.slides.removeClass(b.params.slideVisibleClass);
                            for (var t = 0; t < b.slides.length; t++) {
                                var i = b.slides[t],
                                    r = (a - i.swiperSlideOffset) / (i.swiperSlideSize + b.params.spaceBetween);
                                if (b.params.watchSlidesVisibility) {
                                    var s = -(a - i.swiperSlideOffset),
                                        n = s + b.slidesSizesGrid[t],
                                        o = s >= 0 && s < b.size || n > 0 && n <= b.size || 0 >= s && n >= b.size;
                                    o && b.slides.eq(t).addClass(b.params.slideVisibleClass)
                                }
                                i.progress = b.rtl ? -r: r
                            }
                        }
                    },
                    b.updateProgress = function(e) {
                        "undefined" == typeof e && (e = b.translate || 0);
                        var a = b.maxTranslate() - b.minTranslate(),
                            t = b.isBeginning,
                            i = b.isEnd;
                        0 === a ? (b.progress = 0, b.isBeginning = b.isEnd = !0) : (b.progress = (e - b.minTranslate()) / a, b.isBeginning = b.progress <= 0, b.isEnd = b.progress >= 1),
                        b.isBeginning && !t && b.emit("onReachBeginning", b),
                        b.isEnd && !i && b.emit("onReachEnd", b),
                        b.params.watchSlidesProgress && b.updateSlidesProgress(e),
                            b.emit("onProgress", b, b.progress)
                    },
                    b.updateActiveIndex = function() {
                        var e, a, t, i = b.rtl ? b.translate: -b.translate;
                        for (a = 0; a < b.slidesGrid.length; a++)"undefined" != typeof b.slidesGrid[a + 1] ? i >= b.slidesGrid[a] && i < b.slidesGrid[a + 1] - (b.slidesGrid[a + 1] - b.slidesGrid[a]) / 2 ? e = a: i >= b.slidesGrid[a] && i < b.slidesGrid[a + 1] && (e = a + 1) : i >= b.slidesGrid[a] && (e = a); (0 > e || "undefined" == typeof e) && (e = 0),
                            t = Math.floor(e / b.params.slidesPerGroup),
                        t >= b.snapGrid.length && (t = b.snapGrid.length - 1),
                        e !== b.activeIndex && (b.snapIndex = t, b.previousIndex = b.activeIndex, b.activeIndex = e, b.updateClasses())
                    },
                    b.updateClasses = function() {
                        b.slides.removeClass(b.params.slideActiveClass + " " + b.params.slideNextClass + " " + b.params.slidePrevClass);
                        var e = b.slides.eq(b.activeIndex);
                        e.addClass(b.params.slideActiveClass);
                        var t = e.next("." + b.params.slideClass).addClass(b.params.slideNextClass);
                        b.params.loop && 0 === t.length && b.slides.eq(0).addClass(b.params.slideNextClass);
                        var i = e.prev("." + b.params.slideClass).addClass(b.params.slidePrevClass);
                        if (b.params.loop && 0 === i.length && b.slides.eq( - 1).addClass(b.params.slidePrevClass), b.paginationContainer && b.paginationContainer.length > 0) {
                            var r, s = b.params.loop ? Math.ceil((b.slides.length - 2 * b.loopedSlides) / b.params.slidesPerGroup) : b.snapGrid.length;
                            if (b.params.loop ? (r = Math.ceil((b.activeIndex - b.loopedSlides) / b.params.slidesPerGroup), r > b.slides.length - 1 - 2 * b.loopedSlides && (r -= b.slides.length - 2 * b.loopedSlides), r > s - 1 && (r -= s), 0 > r && "bullets" !== b.params.paginationType && (r = s + r)) : r = "undefined" != typeof b.snapIndex ? b.snapIndex: b.activeIndex || 0, "bullets" === b.params.paginationType && b.bullets && b.bullets.length > 0 && (b.bullets.removeClass(b.params.bulletActiveClass), b.paginationContainer.length > 1 ? b.bullets.each(function() {
                                    a(this).index() === r && a(this).addClass(b.params.bulletActiveClass)
                                }) : b.bullets.eq(r).addClass(b.params.bulletActiveClass)), "fraction" === b.params.paginationType && (b.paginationContainer.find("." + b.params.paginationCurrentClass).text(r + 1), b.paginationContainer.find("." + b.params.paginationTotalClass).text(s)), "progress" === b.params.paginationType) {
                                var n = (r + 1) / s,
                                    o = n,
                                    l = 1;
                                b.isHorizontal() || (l = n, o = 1),
                                    b.paginationContainer.find("." + b.params.paginationProgressbarClass).transform("translate3d(0,0,0) scaleX(" + o + ") scaleY(" + l + ")").transition(b.params.speed)
                            }
                            "custom" === b.params.paginationType && b.params.paginationCustomRender && (b.paginationContainer.html(b.params.paginationCustomRender(b, r + 1, s)), b.emit("onPaginationRendered", b, b.paginationContainer[0]))
                        }
                        b.params.loop || (b.params.prevButton && b.prevButton && b.prevButton.length > 0 && (b.isBeginning ? (b.prevButton.addClass(b.params.buttonDisabledClass), b.params.a11y && b.a11y && b.a11y.disable(b.prevButton)) : (b.prevButton.removeClass(b.params.buttonDisabledClass), b.params.a11y && b.a11y && b.a11y.enable(b.prevButton))), b.params.nextButton && b.nextButton && b.nextButton.length > 0 && (b.isEnd ? (b.nextButton.addClass(b.params.buttonDisabledClass), b.params.a11y && b.a11y && b.a11y.disable(b.nextButton)) : (b.nextButton.removeClass(b.params.buttonDisabledClass), b.params.a11y && b.a11y && b.a11y.enable(b.nextButton))))
                    },
                    b.updatePagination = function() {
                        if (b.params.pagination && b.paginationContainer && b.paginationContainer.length > 0) {
                            var e = "";
                            if ("bullets" === b.params.paginationType) {
                                for (var a = b.params.loop ? Math.ceil((b.slides.length - 2 * b.loopedSlides) / b.params.slidesPerGroup) : b.snapGrid.length, t = 0; a > t; t++) e += b.params.paginationBulletRender ? b.params.paginationBulletRender(t, b.params.bulletClass) : "<" + b.params.paginationElement + ' class="' + b.params.bulletClass + '"></' + b.params.paginationElement + ">";
                                b.paginationContainer.html(e),
                                    b.bullets = b.paginationContainer.find("." + b.params.bulletClass),
                                b.params.paginationClickable && b.params.a11y && b.a11y && b.a11y.initPagination()
                            }
                            "fraction" === b.params.paginationType && (e = b.params.paginationFractionRender ? b.params.paginationFractionRender(b, b.params.paginationCurrentClass, b.params.paginationTotalClass) : '<span class="' + b.params.paginationCurrentClass + '"></span> / <span class="' + b.params.paginationTotalClass + '"></span>', b.paginationContainer.html(e)),
                            "progress" === b.params.paginationType && (e = b.params.paginationProgressRender ? b.params.paginationProgressRender(b, b.params.paginationProgressbarClass) : '<span class="' + b.params.paginationProgressbarClass + '"></span>', b.paginationContainer.html(e)),
                            "custom" !== b.params.paginationType && b.emit("onPaginationRendered", b, b.paginationContainer[0])
                        }
                    },
                    b.update = function(e) {
                        function a() {
                            i = Math.min(Math.max(b.translate, b.maxTranslate()), b.minTranslate()),
                                b.setWrapperTranslate(i),
                                b.updateActiveIndex(),
                                b.updateClasses()
                        }
                        if (b.updateContainerSize(), b.updateSlidesSize(), b.updateProgress(), b.updatePagination(), b.updateClasses(), b.params.scrollbar && b.scrollbar && b.scrollbar.set(), e) {
                            var t, i;
                            b.controller && b.controller.spline && (b.controller.spline = void 0),
                                b.params.freeMode ? (a(), b.params.autoHeight && b.updateAutoHeight()) : (t = ("auto" === b.params.slidesPerView || b.params.slidesPerView > 1) && b.isEnd && !b.params.centeredSlides ? b.slideTo(b.slides.length - 1, 0, !1, !0) : b.slideTo(b.activeIndex, 0, !1, !0), t || a())
                        } else b.params.autoHeight && b.updateAutoHeight()
                    },
                    b.onResize = function(e) {
                        b.params.breakpoints && b.setBreakpoint();
                        var a = b.params.allowSwipeToPrev,
                            t = b.params.allowSwipeToNext;
                        b.params.allowSwipeToPrev = b.params.allowSwipeToNext = !0,
                            b.updateContainerSize(),
                            b.updateSlidesSize(),
                        ("auto" === b.params.slidesPerView || b.params.freeMode || e) && b.updatePagination(),
                        b.params.scrollbar && b.scrollbar && b.scrollbar.set(),
                        b.controller && b.controller.spline && (b.controller.spline = void 0);
                        var i = !1;
                        if (b.params.freeMode) {
                            var r = Math.min(Math.max(b.translate, b.maxTranslate()), b.minTranslate());
                            b.setWrapperTranslate(r),
                                b.updateActiveIndex(),
                                b.updateClasses(),
                            b.params.autoHeight && b.updateAutoHeight()
                        } else b.updateClasses(),
                            i = ("auto" === b.params.slidesPerView || b.params.slidesPerView > 1) && b.isEnd && !b.params.centeredSlides ? b.slideTo(b.slides.length - 1, 0, !1, !0) : b.slideTo(b.activeIndex, 0, !1, !0);
                        b.params.lazyLoading && !i && b.lazy && b.lazy.load(),
                            b.params.allowSwipeToPrev = a,
                            b.params.allowSwipeToNext = t
                    };
                var T = ["mousedown", "mousemove", "mouseup"];
                window.navigator.pointerEnabled ? T = ["pointerdown", "pointermove", "pointerup"] : window.navigator.msPointerEnabled && (T = ["MSPointerDown", "MSPointerMove", "MSPointerUp"]),
                    b.touchEvents = {
                        start: b.support.touch || !b.params.simulateTouch ? "touchstart": T[0],
                        move: b.support.touch || !b.params.simulateTouch ? "touchmove": T[1],
                        end: b.support.touch || !b.params.simulateTouch ? "touchend": T[2]
                    },
                (window.navigator.pointerEnabled || window.navigator.msPointerEnabled) && ("container" === b.params.touchEventsTarget ? b.container: b.wrapper).addClass("swiper-wp8-" + b.params.direction),
                    b.initEvents = function(e) {
                        var a = e ? "off": "on",
                            t = e ? "removeEventListener": "addEventListener",
                            i = "container" === b.params.touchEventsTarget ? b.container[0] : b.wrapper[0],
                            s = b.support.touch ? i: document,
                            n = !!b.params.nested;
                        b.browser.ie ? (i[t](b.touchEvents.start, b.onTouchStart, !1), s[t](b.touchEvents.move, b.onTouchMove, n), s[t](b.touchEvents.end, b.onTouchEnd, !1)) : (b.support.touch && (i[t](b.touchEvents.start, b.onTouchStart, !1), i[t](b.touchEvents.move, b.onTouchMove, n), i[t](b.touchEvents.end, b.onTouchEnd, !1)), !r.simulateTouch || b.device.ios || b.device.android || (i[t]("mousedown", b.onTouchStart, !1), document[t]("mousemove", b.onTouchMove, n), document[t]("mouseup", b.onTouchEnd, !1))),
                            window[t]("resize", b.onResize),
                        b.params.nextButton && b.nextButton && b.nextButton.length > 0 && (b.nextButton[a]("click", b.onClickNext), b.params.a11y && b.a11y && b.nextButton[a]("keydown", b.a11y.onEnterKey)),
                        b.params.prevButton && b.prevButton && b.prevButton.length > 0 && (b.prevButton[a]("click", b.onClickPrev), b.params.a11y && b.a11y && b.prevButton[a]("keydown", b.a11y.onEnterKey)),
                        b.params.pagination && b.params.paginationClickable && (b.paginationContainer[a]("click", "." + b.params.bulletClass, b.onClickIndex), b.params.a11y && b.a11y && b.paginationContainer[a]("keydown", "." + b.params.bulletClass, b.a11y.onEnterKey)),
                        (b.params.preventClicks || b.params.preventClicksPropagation) && i[t]("click", b.preventClicks, !0)
                    },
                    b.attachEvents = function() {
                        b.initEvents()
                    },
                    b.detachEvents = function() {
                        b.initEvents(!0)
                    },
                    b.allowClick = !0,
                    b.preventClicks = function(e) {
                        b.allowClick || (b.params.preventClicks && e.preventDefault(), b.params.preventClicksPropagation && b.animating && (e.stopPropagation(), e.stopImmediatePropagation()))
                    },
                    b.onClickNext = function(e) {
                        e.preventDefault(),
                        (!b.isEnd || b.params.loop) && b.slideNext()
                    },
                    b.onClickPrev = function(e) {
                        e.preventDefault(),
                        (!b.isBeginning || b.params.loop) && b.slidePrev()
                    },
                    b.onClickIndex = function(e) {
                        e.preventDefault();
                        var t = a(this).index() * b.params.slidesPerGroup;
                        b.params.loop && (t += b.loopedSlides),
                            b.slideTo(t)
                    },
                    b.updateClickedSlide = function(e) {
                        var t = o(e, "." + b.params.slideClass),
                            i = !1;
                        if (t) for (var r = 0; r < b.slides.length; r++) b.slides[r] === t && (i = !0);
                        if (!t || !i) return b.clickedSlide = void 0,
                            void(b.clickedIndex = void 0);
                        if (b.clickedSlide = t, b.clickedIndex = a(t).index(), b.params.slideToClickedSlide && void 0 !== b.clickedIndex && b.clickedIndex !== b.activeIndex) {
                            var s, n = b.clickedIndex;
                            if (b.params.loop) {
                                if (b.animating) return;
                                s = a(b.clickedSlide).attr("data-swiper-slide-index"),
                                    b.params.centeredSlides ? n < b.loopedSlides - b.params.slidesPerView / 2 || n > b.slides.length - b.loopedSlides + b.params.slidesPerView / 2 ? (b.fixLoop(), n = b.wrapper.children("." + b.params.slideClass + '[data-swiper-slide-index="' + s + '"]:not(.swiper-slide-duplicate)').eq(0).index(), setTimeout(function() {
                                            b.slideTo(n)
                                        },
                                        0)) : b.slideTo(n) : n > b.slides.length - b.params.slidesPerView ? (b.fixLoop(), n = b.wrapper.children("." + b.params.slideClass + '[data-swiper-slide-index="' + s + '"]:not(.swiper-slide-duplicate)').eq(0).index(), setTimeout(function() {
                                            b.slideTo(n)
                                        },
                                        0)) : b.slideTo(n)
                            } else b.slideTo(n)
                        }
                    };
                var S, C, z, M, E, P, k, I, L, B, D = "input, select, textarea, button",
                    H = Date.now(),
                    A = [];
                b.animating = !1,
                    b.touches = {
                        startX: 0,
                        startY: 0,
                        currentX: 0,
                        currentY: 0,
                        diff: 0
                    };
                var G, O;
                if (b.onTouchStart = function(e) {
                        if (e.originalEvent && (e = e.originalEvent), G = "touchstart" === e.type, G || !("which" in e) || 3 !== e.which) {
                            if (b.params.noSwiping && o(e, "." + b.params.noSwipingClass)) return void(b.allowClick = !0);
                            if (!b.params.swipeHandler || o(e, b.params.swipeHandler)) {
                                var t = b.touches.currentX = "touchstart" === e.type ? e.targetTouches[0].pageX: e.pageX,
                                    i = b.touches.currentY = "touchstart" === e.type ? e.targetTouches[0].pageY: e.pageY;
                                if (! (b.device.ios && b.params.iOSEdgeSwipeDetection && t <= b.params.iOSEdgeSwipeThreshold)) {
                                    if (S = !0, C = !1, z = !0, E = void 0, O = void 0, b.touches.startX = t, b.touches.startY = i, M = Date.now(), b.allowClick = !0, b.updateContainerSize(), b.swipeDirection = void 0, b.params.threshold > 0 && (I = !1), "touchstart" !== e.type) {
                                        var r = !0;
                                        a(e.target).is(D) && (r = !1),
                                        document.activeElement && a(document.activeElement).is(D) && document.activeElement.blur(),
                                        r && e.preventDefault()
                                    }
                                    b.emit("onTouchStart", b, e)
                                }
                            }
                        }
                    },
                        b.onTouchMove = function(e) {
                            if (e.originalEvent && (e = e.originalEvent), !G || "mousemove" !== e.type) {
                                if (e.preventedByNestedSwiper) return b.touches.startX = "touchmove" === e.type ? e.targetTouches[0].pageX: e.pageX,
                                    void(b.touches.startY = "touchmove" === e.type ? e.targetTouches[0].pageY: e.pageY);
                                if (b.params.onlyExternal) return b.allowClick = !1,
                                    void(S && (b.touches.startX = b.touches.currentX = "touchmove" === e.type ? e.targetTouches[0].pageX: e.pageX, b.touches.startY = b.touches.currentY = "touchmove" === e.type ? e.targetTouches[0].pageY: e.pageY, M = Date.now()));
                                if (G && document.activeElement && e.target === document.activeElement && a(e.target).is(D)) return C = !0,
                                    void(b.allowClick = !1);
                                if (z && b.emit("onTouchMove", b, e), !(e.targetTouches && e.targetTouches.length > 1)) {
                                    if (b.touches.currentX = "touchmove" === e.type ? e.targetTouches[0].pageX: e.pageX, b.touches.currentY = "touchmove" === e.type ? e.targetTouches[0].pageY: e.pageY, "undefined" == typeof E) {
                                        var t = 180 * Math.atan2(Math.abs(b.touches.currentY - b.touches.startY), Math.abs(b.touches.currentX - b.touches.startX)) / Math.PI;
                                        E = b.isHorizontal() ? t > b.params.touchAngle: 90 - t > b.params.touchAngle
                                    }
                                    if (E && b.emit("onTouchMoveOpposite", b, e), "undefined" == typeof O && b.browser.ieTouch && (b.touches.currentX !== b.touches.startX || b.touches.currentY !== b.touches.startY) && (O = !0), S) {
                                        if (E) return void(S = !1);
                                        if (O || !b.browser.ieTouch) {
                                            b.allowClick = !1,
                                                b.emit("onSliderMove", b, e),
                                                e.preventDefault(),
                                            b.params.touchMoveStopPropagation && !b.params.nested && e.stopPropagation(),
                                            C || (r.loop && b.fixLoop(), k = b.getWrapperTranslate(), b.setWrapperTransition(0), b.animating && b.wrapper.trigger("webkitTransitionEnd transitionend oTransitionEnd MSTransitionEnd msTransitionEnd"), b.params.autoplay && b.autoplaying && (b.params.autoplayDisableOnInteraction ? b.stopAutoplay() : b.pauseAutoplay()), B = !1, b.params.grabCursor && (b.container[0].style.cursor = "move", b.container[0].style.cursor = "-webkit-grabbing", b.container[0].style.cursor = "-moz-grabbin", b.container[0].style.cursor = "grabbing")),
                                                C = !0;
                                            var i = b.touches.diff = b.isHorizontal() ? b.touches.currentX - b.touches.startX: b.touches.currentY - b.touches.startY;
                                            i *= b.params.touchRatio,
                                            b.rtl && (i = -i),
                                                b.swipeDirection = i > 0 ? "prev": "next",
                                                P = i + k;
                                            var s = !0;
                                            if (i > 0 && P > b.minTranslate() ? (s = !1, b.params.resistance && (P = b.minTranslate() - 1 + Math.pow( - b.minTranslate() + k + i, b.params.resistanceRatio))) : 0 > i && P < b.maxTranslate() && (s = !1, b.params.resistance && (P = b.maxTranslate() + 1 - Math.pow(b.maxTranslate() - k - i, b.params.resistanceRatio))), s && (e.preventedByNestedSwiper = !0), !b.params.allowSwipeToNext && "next" === b.swipeDirection && k > P && (P = k), !b.params.allowSwipeToPrev && "prev" === b.swipeDirection && P > k && (P = k), b.params.followFinger) {
                                                if (b.params.threshold > 0) {
                                                    if (! (Math.abs(i) > b.params.threshold || I)) return void(P = k);
                                                    if (!I) return I = !0,
                                                        b.touches.startX = b.touches.currentX,
                                                        b.touches.startY = b.touches.currentY,
                                                        P = k,
                                                        void(b.touches.diff = b.isHorizontal() ? b.touches.currentX - b.touches.startX: b.touches.currentY - b.touches.startY)
                                                } (b.params.freeMode || b.params.watchSlidesProgress) && b.updateActiveIndex(),
                                                b.params.freeMode && (0 === A.length && A.push({
                                                    position: b.touches[b.isHorizontal() ? "startX": "startY"],
                                                    time: M
                                                }), A.push({
                                                    position: b.touches[b.isHorizontal() ? "currentX": "currentY"],
                                                    time: (new window.Date).getTime()
                                                })),
                                                    b.updateProgress(P),
                                                    b.setWrapperTranslate(P)
                                            }
                                        }
                                    }
                                }
                            }
                        },
                        b.onTouchEnd = function(e) {
                            if (e.originalEvent && (e = e.originalEvent), z && b.emit("onTouchEnd", b, e), z = !1, S) {
                                b.params.grabCursor && C && S && (b.container[0].style.cursor = "move", b.container[0].style.cursor = "-webkit-grab", b.container[0].style.cursor = "-moz-grab", b.container[0].style.cursor = "grab");
                                var t = Date.now(),
                                    i = t - M;
                                if (b.allowClick && (b.updateClickedSlide(e), b.emit("onTap", b, e), 300 > i && t - H > 300 && (L && clearTimeout(L), L = setTimeout(function() {
                                            b && (b.params.paginationHide && b.paginationContainer.length > 0 && !a(e.target).hasClass(b.params.bulletClass) && b.paginationContainer.toggleClass(b.params.paginationHiddenClass), b.emit("onClick", b, e))
                                        },
                                        300)), 300 > i && 300 > t - H && (L && clearTimeout(L), b.emit("onDoubleTap", b, e))), H = Date.now(), setTimeout(function() {
                                            b && (b.allowClick = !0)
                                        },
                                        0), !S || !C || !b.swipeDirection || 0 === b.touches.diff || P === k) return void(S = C = !1);
                                S = C = !1;
                                var r;
                                if (r = b.params.followFinger ? b.rtl ? b.translate: -b.translate: -P, b.params.freeMode) {
                                    if (r < -b.minTranslate()) return void b.slideTo(b.activeIndex);
                                    if (r > -b.maxTranslate()) return void(b.slides.length < b.snapGrid.length ? b.slideTo(b.snapGrid.length - 1) : b.slideTo(b.slides.length - 1));
                                    if (b.params.freeModeMomentum) {
                                        if (A.length > 1) {
                                            var s = A.pop(),
                                                n = A.pop(),
                                                o = s.position - n.position,
                                                l = s.time - n.time;
                                            b.velocity = o / l,
                                                b.velocity = b.velocity / 2,
                                            Math.abs(b.velocity) < b.params.freeModeMinimumVelocity && (b.velocity = 0),
                                            (l > 150 || (new window.Date).getTime() - s.time > 300) && (b.velocity = 0)
                                        } else b.velocity = 0;
                                        A.length = 0;
                                        var p = 1e3 * b.params.freeModeMomentumRatio,
                                            d = b.velocity * p,
                                            u = b.translate + d;
                                        b.rtl && (u = -u);
                                        var c, m = !1,
                                            h = 20 * Math.abs(b.velocity) * b.params.freeModeMomentumBounceRatio;
                                        if (u < b.maxTranslate()) b.params.freeModeMomentumBounce ? (u + b.maxTranslate() < -h && (u = b.maxTranslate() - h), c = b.maxTranslate(), m = !0, B = !0) : u = b.maxTranslate();
                                        else if (u > b.minTranslate()) b.params.freeModeMomentumBounce ? (u - b.minTranslate() > h && (u = b.minTranslate() + h), c = b.minTranslate(), m = !0, B = !0) : u = b.minTranslate();
                                        else if (b.params.freeModeSticky) {
                                            var f, g = 0;
                                            for (g = 0; g < b.snapGrid.length; g += 1) if (b.snapGrid[g] > -u) {
                                                f = g;
                                                break
                                            }
                                            u = Math.abs(b.snapGrid[f] - u) < Math.abs(b.snapGrid[f - 1] - u) || "next" === b.swipeDirection ? b.snapGrid[f] : b.snapGrid[f - 1],
                                            b.rtl || (u = -u)
                                        }
                                        if (0 !== b.velocity) p = b.rtl ? Math.abs(( - u - b.translate) / b.velocity) : Math.abs((u - b.translate) / b.velocity);
                                        else if (b.params.freeModeSticky) return void b.slideReset();
                                        b.params.freeModeMomentumBounce && m ? (b.updateProgress(c), b.setWrapperTransition(p), b.setWrapperTranslate(u), b.onTransitionStart(), b.animating = !0, b.wrapper.transitionEnd(function() {
                                            b && B && (b.emit("onMomentumBounce", b), b.setWrapperTransition(b.params.speed), b.setWrapperTranslate(c), b.wrapper.transitionEnd(function() {
                                                b && b.onTransitionEnd()
                                            }))
                                        })) : b.velocity ? (b.updateProgress(u), b.setWrapperTransition(p), b.setWrapperTranslate(u), b.onTransitionStart(), b.animating || (b.animating = !0, b.wrapper.transitionEnd(function() {
                                            b && b.onTransitionEnd()
                                        }))) : b.updateProgress(u),
                                            b.updateActiveIndex()
                                    }
                                    return void((!b.params.freeModeMomentum || i >= b.params.longSwipesMs) && (b.updateProgress(), b.updateActiveIndex()))
                                }
                                var v, w = 0,
                                    y = b.slidesSizesGrid[0];
                                for (v = 0; v < b.slidesGrid.length; v += b.params.slidesPerGroup)"undefined" != typeof b.slidesGrid[v + b.params.slidesPerGroup] ? r >= b.slidesGrid[v] && r < b.slidesGrid[v + b.params.slidesPerGroup] && (w = v, y = b.slidesGrid[v + b.params.slidesPerGroup] - b.slidesGrid[v]) : r >= b.slidesGrid[v] && (w = v, y = b.slidesGrid[b.slidesGrid.length - 1] - b.slidesGrid[b.slidesGrid.length - 2]);
                                var x = (r - b.slidesGrid[w]) / y;
                                if (i > b.params.longSwipesMs) {
                                    if (!b.params.longSwipes) return void b.slideTo(b.activeIndex);
                                    "next" === b.swipeDirection && (x >= b.params.longSwipesRatio ? b.slideTo(w + b.params.slidesPerGroup) : b.slideTo(w)),
                                    "prev" === b.swipeDirection && (x > 1 - b.params.longSwipesRatio ? b.slideTo(w + b.params.slidesPerGroup) : b.slideTo(w))
                                } else {
                                    if (!b.params.shortSwipes) return void b.slideTo(b.activeIndex);
                                    "next" === b.swipeDirection && b.slideTo(w + b.params.slidesPerGroup),
                                    "prev" === b.swipeDirection && b.slideTo(w)
                                }
                            }
                        },
                        b._slideTo = function(e, a) {
                            return b.slideTo(e, a, !0, !0)
                        },
                        b.slideTo = function(e, a, t, i) {
                            "undefined" == typeof t && (t = !0),
                            "undefined" == typeof e && (e = 0),
                            0 > e && (e = 0),
                                b.snapIndex = Math.floor(e / b.params.slidesPerGroup),
                            b.snapIndex >= b.snapGrid.length && (b.snapIndex = b.snapGrid.length - 1);
                            var r = -b.snapGrid[b.snapIndex];
                            b.params.autoplay && b.autoplaying && (i || !b.params.autoplayDisableOnInteraction ? b.pauseAutoplay(a) : b.stopAutoplay()),
                                b.updateProgress(r);
                            for (var s = 0; s < b.slidesGrid.length; s++) - Math.floor(100 * r) >= Math.floor(100 * b.slidesGrid[s]) && (e = s);
                            return ! (!b.params.allowSwipeToNext && r < b.translate && r < b.minTranslate()) && (!(!b.params.allowSwipeToPrev && r > b.translate && r > b.maxTranslate() && (b.activeIndex || 0) !== e) && ("undefined" == typeof a && (a = b.params.speed), b.previousIndex = b.activeIndex || 0, b.activeIndex = e, b.rtl && -r === b.translate || !b.rtl && r === b.translate ? (b.params.autoHeight && b.updateAutoHeight(), b.updateClasses(), "slide" !== b.params.effect && b.setWrapperTranslate(r), !1) : (b.updateClasses(), b.onTransitionStart(t), 0 === a ? (b.setWrapperTranslate(r), b.setWrapperTransition(0), b.onTransitionEnd(t)) : (b.setWrapperTranslate(r), b.setWrapperTransition(a), b.animating || (b.animating = !0, b.wrapper.transitionEnd(function() {
                                b && b.onTransitionEnd(t)
                            }))), !0)))
                        },
                        b.onTransitionStart = function(e) {
                            "undefined" == typeof e && (e = !0),
                            b.params.autoHeight && b.updateAutoHeight(),
                            b.lazy && b.lazy.onTransitionStart(),
                            e && (b.emit("onTransitionStart", b), b.activeIndex !== b.previousIndex && (b.emit("onSlideChangeStart", b), b.activeIndex > b.previousIndex ? b.emit("onSlideNextStart", b) : b.emit("onSlidePrevStart", b)))
                        },
                        b.onTransitionEnd = function(e) {
                            b.animating = !1,
                                b.setWrapperTransition(0),
                            "undefined" == typeof e && (e = !0),
                            b.lazy && b.lazy.onTransitionEnd(),
                            e && (b.emit("onTransitionEnd", b), b.activeIndex !== b.previousIndex && (b.emit("onSlideChangeEnd", b), b.activeIndex > b.previousIndex ? b.emit("onSlideNextEnd", b) : b.emit("onSlidePrevEnd", b))),
                            b.params.hashnav && b.hashnav && b.hashnav.setHash()
                        },
                        b.slideNext = function(e, a, t) {
                            return b.params.loop ? !b.animating && (b.fixLoop(), b.container[0].clientLeft, b.slideTo(b.activeIndex + b.params.slidesPerGroup, a, e, t)) : b.slideTo(b.activeIndex + b.params.slidesPerGroup, a, e, t)
                        },
                        b._slideNext = function(e) {
                            return b.slideNext(!0, e, !0)
                        },
                        b.slidePrev = function(e, a, t) {
                            return b.params.loop ? !b.animating && (b.fixLoop(), b.container[0].clientLeft, b.slideTo(b.activeIndex - 1, a, e, t)) : b.slideTo(b.activeIndex - 1, a, e, t)
                        },
                        b._slidePrev = function(e) {
                            return b.slidePrev(!0, e, !0)
                        },
                        b.slideReset = function(e, a, t) {
                            return b.slideTo(b.activeIndex, a, e)
                        },
                        b.setWrapperTransition = function(e, a) {
                            b.wrapper.transition(e),
                            "slide" !== b.params.effect && b.effects[b.params.effect] && b.effects[b.params.effect].setTransition(e),
                            b.params.parallax && b.parallax && b.parallax.setTransition(e),
                            b.params.scrollbar && b.scrollbar && b.scrollbar.setTransition(e),
                            b.params.control && b.controller && b.controller.setTransition(e, a),
                                b.emit("onSetTransition", b, e)
                        },
                        b.setWrapperTranslate = function(e, a, t) {
                            var i = 0,
                                r = 0,
                                n = 0;
                            b.isHorizontal() ? i = b.rtl ? -e: e: r = e,
                            b.params.roundLengths && (i = s(i), r = s(r)),
                            b.params.virtualTranslate || (b.support.transforms3d ? b.wrapper.transform("translate3d(" + i + "px, " + r + "px, " + n + "px)") : b.wrapper.transform("translate(" + i + "px, " + r + "px)")),
                                b.translate = b.isHorizontal() ? i: r;
                            var o, l = b.maxTranslate() - b.minTranslate();
                            o = 0 === l ? 0 : (e - b.minTranslate()) / l,
                            o !== b.progress && b.updateProgress(e),
                            a && b.updateActiveIndex(),
                            "slide" !== b.params.effect && b.effects[b.params.effect] && b.effects[b.params.effect].setTranslate(b.translate),
                            b.params.parallax && b.parallax && b.parallax.setTranslate(b.translate),
                            b.params.scrollbar && b.scrollbar && b.scrollbar.setTranslate(b.translate),
                            b.params.control && b.controller && b.controller.setTranslate(b.translate, t),
                                b.emit("onSetTranslate", b, b.translate)
                        },
                        b.getTranslate = function(e, a) {
                            var t, i, r, s;
                            return "undefined" == typeof a && (a = "x"),
                                b.params.virtualTranslate ? b.rtl ? -b.translate: b.translate: (r = window.getComputedStyle(e, null), window.WebKitCSSMatrix ? (i = r.transform || r.webkitTransform, i.split(",").length > 6 && (i = i.split(", ").map(function(e) {
                                    return e.replace(",", ".")
                                }).join(", ")), s = new window.WebKitCSSMatrix("none" === i ? "": i)) : (s = r.MozTransform || r.OTransform || r.MsTransform || r.msTransform || r.transform || r.getPropertyValue("transform").replace("translate(", "matrix(1, 0, 0, 1,"), t = s.toString().split(",")), "x" === a && (i = window.WebKitCSSMatrix ? s.m41: 16 === t.length ? parseFloat(t[12]) : parseFloat(t[4])), "y" === a && (i = window.WebKitCSSMatrix ? s.m42: 16 === t.length ? parseFloat(t[13]) : parseFloat(t[5])), b.rtl && i && (i = -i), i || 0)
                        },
                        b.getWrapperTranslate = function(e) {
                            return "undefined" == typeof e && (e = b.isHorizontal() ? "x": "y"),
                                b.getTranslate(b.wrapper[0], e)
                        },
                        b.observers = [], b.initObservers = function() {
                        if (b.params.observeParents) for (var e = b.container.parents(), a = 0; a < e.length; a++) l(e[a]);
                        l(b.container[0], {
                            childList: !1
                        }),
                            l(b.wrapper[0], {
                                attributes: !1
                            })
                    },
                        b.disconnectObservers = function() {
                            for (var e = 0; e < b.observers.length; e++) b.observers[e].disconnect();
                            b.observers = []
                        },
                        b.createLoop = function() {
                            b.wrapper.children("." + b.params.slideClass + "." + b.params.slideDuplicateClass).remove();
                            var e = b.wrapper.children("." + b.params.slideClass);
                            "auto" !== b.params.slidesPerView || b.params.loopedSlides || (b.params.loopedSlides = e.length),
                                b.loopedSlides = parseInt(b.params.loopedSlides || b.params.slidesPerView, 10),
                                b.loopedSlides = b.loopedSlides + b.params.loopAdditionalSlides,
                            b.loopedSlides > e.length && (b.loopedSlides = e.length);
                            var t, i = [],
                                r = [];
                            for (e.each(function(t, s) {
                                var n = a(this);
                                t < b.loopedSlides && r.push(s),
                                t < e.length && t >= e.length - b.loopedSlides && i.push(s),
                                    n.attr("data-swiper-slide-index", t)
                            }), t = 0; t < r.length; t++) b.wrapper.append(a(r[t].cloneNode(!0)).addClass(b.params.slideDuplicateClass));
                            for (t = i.length - 1; t >= 0; t--) b.wrapper.prepend(a(i[t].cloneNode(!0)).addClass(b.params.slideDuplicateClass))
                        },
                        b.destroyLoop = function() {
                            b.wrapper.children("." + b.params.slideClass + "." + b.params.slideDuplicateClass).remove(),
                                b.slides.removeAttr("data-swiper-slide-index")
                        },
                        b.reLoop = function(e) {
                            var a = b.activeIndex - b.loopedSlides;
                            b.destroyLoop(),
                                b.createLoop(),
                                b.updateSlidesSize(),
                            e && b.slideTo(a + b.loopedSlides, 0, !1)
                        },
                        b.fixLoop = function() {
                            var e;
                            b.activeIndex < b.loopedSlides ? (e = b.slides.length - 3 * b.loopedSlides + b.activeIndex, e += b.loopedSlides, b.slideTo(e, 0, !1, !0)) : ("auto" === b.params.slidesPerView && b.activeIndex >= 2 * b.loopedSlides || b.activeIndex > b.slides.length - 2 * b.params.slidesPerView) && (e = -b.slides.length + b.activeIndex + b.loopedSlides, e += b.loopedSlides, b.slideTo(e, 0, !1, !0))
                        },
                        b.appendSlide = function(e) {
                            if (b.params.loop && b.destroyLoop(), "object" == typeof e && e.length) for (var a = 0; a < e.length; a++) e[a] && b.wrapper.append(e[a]);
                            else b.wrapper.append(e);
                            b.params.loop && b.createLoop(),
                            b.params.observer && b.support.observer || b.update(!0)
                        },
                        b.prependSlide = function(e) {
                            b.params.loop && b.destroyLoop();
                            var a = b.activeIndex + 1;
                            if ("object" == typeof e && e.length) {
                                for (var t = 0; t < e.length; t++) e[t] && b.wrapper.prepend(e[t]);
                                a = b.activeIndex + e.length
                            } else b.wrapper.prepend(e);
                            b.params.loop && b.createLoop(),
                            b.params.observer && b.support.observer || b.update(!0),
                                b.slideTo(a, 0, !1)
                        },
                        b.removeSlide = function(e) {
                            b.params.loop && (b.destroyLoop(), b.slides = b.wrapper.children("." + b.params.slideClass));
                            var a, t = b.activeIndex;
                            if ("object" == typeof e && e.length) {
                                for (var i = 0; i < e.length; i++) a = e[i],
                                b.slides[a] && b.slides.eq(a).remove(),
                                t > a && t--;
                                t = Math.max(t, 0)
                            } else a = e,
                            b.slides[a] && b.slides.eq(a).remove(),
                            t > a && t--,
                                t = Math.max(t, 0);
                            b.params.loop && b.createLoop(),
                            b.params.observer && b.support.observer || b.update(!0),
                                b.params.loop ? b.slideTo(t + b.loopedSlides, 0, !1) : b.slideTo(t, 0, !1)
                        },
                        b.removeAllSlides = function() {
                            for (var e = [], a = 0; a < b.slides.length; a++) e.push(a);
                            b.removeSlide(e)
                        },
                        b.effects = {
                            fade: {
                                setTranslate: function() {
                                    for (var e = 0; e < b.slides.length; e++) {
                                        var a = b.slides.eq(e),
                                            t = a[0].swiperSlideOffset,
                                            i = -t;
                                        b.params.virtualTranslate || (i -= b.translate);
                                        var r = 0;
                                        b.isHorizontal() || (r = i, i = 0);
                                        var s = b.params.fade.crossFade ? Math.max(1 - Math.abs(a[0].progress), 0) : 1 + Math.min(Math.max(a[0].progress, -1), 0);
                                        a.css({
                                            opacity: s
                                        }).transform("translate3d(" + i + "px, " + r + "px, 0px)")
                                    }
                                },
                                setTransition: function(e) {
                                    if (b.slides.transition(e), b.params.virtualTranslate && 0 !== e) {
                                        var a = !1;
                                        b.slides.transitionEnd(function() {
                                            if (!a && b) {
                                                a = !0,
                                                    b.animating = !1;
                                                for (var e = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"], t = 0; t < e.length; t++) b.wrapper.trigger(e[t])
                                            }
                                        })
                                    }
                                }
                            },
                            flip: {
                                setTranslate: function() {
                                    for (var e = 0; e < b.slides.length; e++) {
                                        var t = b.slides.eq(e),
                                            i = t[0].progress;
                                        b.params.flip.limitRotation && (i = Math.max(Math.min(t[0].progress, 1), -1));
                                        var r = t[0].swiperSlideOffset,
                                            s = -180 * i,
                                            n = s,
                                            o = 0,
                                            l = -r,
                                            p = 0;
                                        if (b.isHorizontal() ? b.rtl && (n = -n) : (p = l, l = 0, o = -n, n = 0), t[0].style.zIndex = -Math.abs(Math.round(i)) + b.slides.length, b.params.flip.slideShadows) {
                                            var d = b.isHorizontal() ? t.find(".swiper-slide-shadow-left") : t.find(".swiper-slide-shadow-top"),
                                                u = b.isHorizontal() ? t.find(".swiper-slide-shadow-right") : t.find(".swiper-slide-shadow-bottom");
                                            0 === d.length && (d = a('<div class="swiper-slide-shadow-' + (b.isHorizontal() ? "left": "top") + '"></div>'), t.append(d)),
                                            0 === u.length && (u = a('<div class="swiper-slide-shadow-' + (b.isHorizontal() ? "right": "bottom") + '"></div>'), t.append(u)),
                                            d.length && (d[0].style.opacity = Math.max( - i, 0)),
                                            u.length && (u[0].style.opacity = Math.max(i, 0))
                                        }
                                        t.transform("translate3d(" + l + "px, " + p + "px, 0px) rotateX(" + o + "deg) rotateY(" + n + "deg)")
                                    }
                                },
                                setTransition: function(e) {
                                    if (b.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e), b.params.virtualTranslate && 0 !== e) {
                                        var t = !1;
                                        b.slides.eq(b.activeIndex).transitionEnd(function() {
                                            if (!t && b && a(this).hasClass(b.params.slideActiveClass)) {
                                                t = !0,
                                                    b.animating = !1;
                                                for (var e = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"], i = 0; i < e.length; i++) b.wrapper.trigger(e[i])
                                            }
                                        })
                                    }
                                }
                            },
                            cube: {
                                setTranslate: function() {
                                    var e, t = 0;
                                    b.params.cube.shadow && (b.isHorizontal() ? (e = b.wrapper.find(".swiper-cube-shadow"), 0 === e.length && (e = a('<div class="swiper-cube-shadow"></div>'), b.wrapper.append(e)), e.css({
                                        height: b.width + "px"
                                    })) : (e = b.container.find(".swiper-cube-shadow"), 0 === e.length && (e = a('<div class="swiper-cube-shadow"></div>'), b.container.append(e))));
                                    for (var i = 0; i < b.slides.length; i++) {
                                        var r = b.slides.eq(i),
                                            s = 90 * i,
                                            n = Math.floor(s / 360);
                                        b.rtl && (s = -s, n = Math.floor( - s / 360));
                                        var o = Math.max(Math.min(r[0].progress, 1), -1),
                                            l = 0,
                                            p = 0,
                                            d = 0;
                                        i % 4 === 0 ? (l = 4 * -n * b.size, d = 0) : (i - 1) % 4 === 0 ? (l = 0, d = 4 * -n * b.size) : (i - 2) % 4 === 0 ? (l = b.size + 4 * n * b.size, d = b.size) : (i - 3) % 4 === 0 && (l = -b.size, d = 3 * b.size + 4 * b.size * n),
                                        b.rtl && (l = -l),
                                        b.isHorizontal() || (p = l, l = 0);
                                        var u = "rotateX(" + (b.isHorizontal() ? 0 : -s) + "deg) rotateY(" + (b.isHorizontal() ? s: 0) + "deg) translate3d(" + l + "px, " + p + "px, " + d + "px)";
                                        if (1 >= o && o > -1 && (t = 90 * i + 90 * o, b.rtl && (t = 90 * -i - 90 * o)), r.transform(u), b.params.cube.slideShadows) {
                                            var c = b.isHorizontal() ? r.find(".swiper-slide-shadow-left") : r.find(".swiper-slide-shadow-top"),
                                                m = b.isHorizontal() ? r.find(".swiper-slide-shadow-right") : r.find(".swiper-slide-shadow-bottom");
                                            0 === c.length && (c = a('<div class="swiper-slide-shadow-' + (b.isHorizontal() ? "left": "top") + '"></div>'), r.append(c)),
                                            0 === m.length && (m = a('<div class="swiper-slide-shadow-' + (b.isHorizontal() ? "right": "bottom") + '"></div>'), r.append(m)),
                                            c.length && (c[0].style.opacity = Math.max( - o, 0)),
                                            m.length && (m[0].style.opacity = Math.max(o, 0))
                                        }
                                    }
                                    if (b.wrapper.css({
                                            "-webkit-transform-origin": "50% 50% -" + b.size / 2 + "px",
                                            "-moz-transform-origin": "50% 50% -" + b.size / 2 + "px",
                                            "-ms-transform-origin": "50% 50% -" + b.size / 2 + "px",
                                            "transform-origin": "50% 50% -" + b.size / 2 + "px"
                                        }), b.params.cube.shadow) if (b.isHorizontal()) e.transform("translate3d(0px, " + (b.width / 2 + b.params.cube.shadowOffset) + "px, " + -b.width / 2 + "px) rotateX(90deg) rotateZ(0deg) scale(" + b.params.cube.shadowScale + ")");
                                    else {
                                        var h = Math.abs(t) - 90 * Math.floor(Math.abs(t) / 90),
                                            f = 1.5 - (Math.sin(2 * h * Math.PI / 360) / 2 + Math.cos(2 * h * Math.PI / 360) / 2),
                                            g = b.params.cube.shadowScale,
                                            v = b.params.cube.shadowScale / f,
                                            w = b.params.cube.shadowOffset;
                                        e.transform("scale3d(" + g + ", 1, " + v + ") translate3d(0px, " + (b.height / 2 + w) + "px, " + -b.height / 2 / v + "px) rotateX(-90deg)")
                                    }
                                    var y = b.isSafari || b.isUiWebView ? -b.size / 2 : 0;
                                    b.wrapper.transform("translate3d(0px,0," + y + "px) rotateX(" + (b.isHorizontal() ? 0 : t) + "deg) rotateY(" + (b.isHorizontal() ? -t: 0) + "deg)")
                                },
                                setTransition: function(e) {
                                    b.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e),
                                    b.params.cube.shadow && !b.isHorizontal() && b.container.find(".swiper-cube-shadow").transition(e)
                                }
                            },
                            coverflow: {
                                setTranslate: function() {
                                    for (var e = b.translate,
                                             t = b.isHorizontal() ? -e + b.width / 2 : -e + b.height / 2, i = b.isHorizontal() ? b.params.coverflow.rotate: -b.params.coverflow.rotate, r = b.params.coverflow.depth, s = 0, n = b.slides.length; n > s; s++) {
                                        var o = b.slides.eq(s),
                                            l = b.slidesSizesGrid[s],
                                            p = o[0].swiperSlideOffset,
                                            d = (t - p - l / 2) / l * b.params.coverflow.modifier,
                                            u = b.isHorizontal() ? i * d: 0,
                                            c = b.isHorizontal() ? 0 : i * d,
                                            m = -r * Math.abs(d),
                                            h = b.isHorizontal() ? 0 : b.params.coverflow.stretch * d,
                                            f = b.isHorizontal() ? b.params.coverflow.stretch * d: 0;
                                        Math.abs(f) < .001 && (f = 0),
                                        Math.abs(h) < .001 && (h = 0),
                                        Math.abs(m) < .001 && (m = 0),
                                        Math.abs(u) < .001 && (u = 0),
                                        Math.abs(c) < .001 && (c = 0);
                                        var g = "translate3d(" + f + "px," + h + "px," + m + "px)  rotateX(" + c + "deg) rotateY(" + u + "deg)";
                                        if (o.transform(g), o[0].style.zIndex = -Math.abs(Math.round(d)) + 1, b.params.coverflow.slideShadows) {
                                            var v = b.isHorizontal() ? o.find(".swiper-slide-shadow-left") : o.find(".swiper-slide-shadow-top"),
                                                w = b.isHorizontal() ? o.find(".swiper-slide-shadow-right") : o.find(".swiper-slide-shadow-bottom");
                                            0 === v.length && (v = a('<div class="swiper-slide-shadow-' + (b.isHorizontal() ? "left": "top") + '"></div>'), o.append(v)),
                                            0 === w.length && (w = a('<div class="swiper-slide-shadow-' + (b.isHorizontal() ? "right": "bottom") + '"></div>'), o.append(w)),
                                            v.length && (v[0].style.opacity = d > 0 ? d: 0),
                                            w.length && (w[0].style.opacity = -d > 0 ? -d: 0)
                                        }
                                    }
                                    if (b.browser.ie) {
                                        var y = b.wrapper[0].style;
                                        y.perspectiveOrigin = t + "px 50%"
                                    }
                                },
                                setTransition: function(e) {
                                    b.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e)
                                }
                            }
                        },
                        b.lazy = {
                            initialImageLoaded: !1,
                            loadImageInSlide: function(e, t) {
                                if ("undefined" != typeof e && ("undefined" == typeof t && (t = !0), 0 !== b.slides.length)) {
                                    var i = b.slides.eq(e),
                                        r = i.find(".swiper-lazy:not(.swiper-lazy-loaded):not(.swiper-lazy-loading)"); ! i.hasClass("swiper-lazy") || i.hasClass("swiper-lazy-loaded") || i.hasClass("swiper-lazy-loading") || (r = r.add(i[0])),
                                    0 !== r.length && r.each(function() {
                                        var e = a(this);
                                        e.addClass("swiper-lazy-loading");
                                        var r = e.attr("data-background"),
                                            s = e.attr("data-src"),
                                            n = e.attr("data-srcset");
                                        b.loadImage(e[0], s || r, n, !1,
                                            function() {
                                                if (r ? (e.css("background-image", 'url("' + r + '")'), e.removeAttr("data-background")) : (n && (e.attr("srcset", n), e.removeAttr("data-srcset")), s && (e.attr("src", s), e.removeAttr("data-src"))), e.addClass("swiper-lazy-loaded").removeClass("swiper-lazy-loading"), i.find(".swiper-lazy-preloader, .preloader").remove(), b.params.loop && t) {
                                                    var a = i.attr("data-swiper-slide-index");
                                                    if (i.hasClass(b.params.slideDuplicateClass)) {
                                                        var o = b.wrapper.children('[data-swiper-slide-index="' + a + '"]:not(.' + b.params.slideDuplicateClass + ")");
                                                        b.lazy.loadImageInSlide(o.index(), !1)
                                                    } else {
                                                        var l = b.wrapper.children("." + b.params.slideDuplicateClass + '[data-swiper-slide-index="' + a + '"]');
                                                        b.lazy.loadImageInSlide(l.index(), !1)
                                                    }
                                                }
                                                b.emit("onLazyImageReady", b, i[0], e[0])
                                            }),
                                            b.emit("onLazyImageLoad", b, i[0], e[0])
                                    })
                                }
                            },
                            load: function() {
                                var e;
                                if (b.params.watchSlidesVisibility) b.wrapper.children("." + b.params.slideVisibleClass).each(function() {
                                    b.lazy.loadImageInSlide(a(this).index())
                                });
                                else if (b.params.slidesPerView > 1) for (e = b.activeIndex; e < b.activeIndex + b.params.slidesPerView; e++) b.slides[e] && b.lazy.loadImageInSlide(e);
                                else b.lazy.loadImageInSlide(b.activeIndex);
                                if (b.params.lazyLoadingInPrevNext) if (b.params.slidesPerView > 1 || b.params.lazyLoadingInPrevNextAmount && b.params.lazyLoadingInPrevNextAmount > 1) {
                                    var t = b.params.lazyLoadingInPrevNextAmount,
                                        i = b.params.slidesPerView,
                                        r = Math.min(b.activeIndex + i + Math.max(t, i), b.slides.length),
                                        s = Math.max(b.activeIndex - Math.max(i, t), 0);
                                    for (e = b.activeIndex + b.params.slidesPerView; r > e; e++) b.slides[e] && b.lazy.loadImageInSlide(e);
                                    for (e = s; e < b.activeIndex; e++) b.slides[e] && b.lazy.loadImageInSlide(e)
                                } else {
                                    var n = b.wrapper.children("." + b.params.slideNextClass);
                                    n.length > 0 && b.lazy.loadImageInSlide(n.index());
                                    var o = b.wrapper.children("." + b.params.slidePrevClass);
                                    o.length > 0 && b.lazy.loadImageInSlide(o.index())
                                }
                            },
                            onTransitionStart: function() {
                                b.params.lazyLoading && (b.params.lazyLoadingOnTransitionStart || !b.params.lazyLoadingOnTransitionStart && !b.lazy.initialImageLoaded) && b.lazy.load()
                            },
                            onTransitionEnd: function() {
                                b.params.lazyLoading && !b.params.lazyLoadingOnTransitionStart && b.lazy.load()
                            }
                        },
                        b.scrollbar = {
                            isTouched: !1,
                            setDragPosition: function(e) {
                                var a = b.scrollbar,
                                    t = b.isHorizontal() ? "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].pageX: e.pageX || e.clientX: "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].pageY: e.pageY || e.clientY,
                                    i = t - a.track.offset()[b.isHorizontal() ? "left": "top"] - a.dragSize / 2,
                                    r = -b.minTranslate() * a.moveDivider,
                                    s = -b.maxTranslate() * a.moveDivider;
                                r > i ? i = r: i > s && (i = s),
                                    i = -i / a.moveDivider,
                                    b.updateProgress(i),
                                    b.setWrapperTranslate(i, !0)
                            },
                            dragStart: function(e) {
                                var a = b.scrollbar;
                                a.isTouched = !0,
                                    e.preventDefault(),
                                    e.stopPropagation(),
                                    a.setDragPosition(e),
                                    clearTimeout(a.dragTimeout),
                                    a.track.transition(0),
                                b.params.scrollbarHide && a.track.css("opacity", 1),
                                    b.wrapper.transition(100),
                                    a.drag.transition(100),
                                    b.emit("onScrollbarDragStart", b)
                            },
                            dragMove: function(e) {
                                var a = b.scrollbar;
                                a.isTouched && (e.preventDefault ? e.preventDefault() : e.returnValue = !1, a.setDragPosition(e), b.wrapper.transition(0), a.track.transition(0), a.drag.transition(0), b.emit("onScrollbarDragMove", b))
                            },
                            dragEnd: function(e) {
                                var a = b.scrollbar;
                                a.isTouched && (a.isTouched = !1, b.params.scrollbarHide && (clearTimeout(a.dragTimeout), a.dragTimeout = setTimeout(function() {
                                        a.track.css("opacity", 0),
                                            a.track.transition(400)
                                    },
                                    1e3)), b.emit("onScrollbarDragEnd", b), b.params.scrollbarSnapOnRelease && b.slideReset())
                            },
                            enableDraggable: function() {
                                var e = b.scrollbar,
                                    t = b.support.touch ? e.track: document;
                                a(e.track).on(b.touchEvents.start, e.dragStart),
                                    a(t).on(b.touchEvents.move, e.dragMove),
                                    a(t).on(b.touchEvents.end, e.dragEnd)
                            },
                            disableDraggable: function() {
                                var e = b.scrollbar,
                                    t = b.support.touch ? e.track: document;
                                a(e.track).off(b.touchEvents.start, e.dragStart),
                                    a(t).off(b.touchEvents.move, e.dragMove),
                                    a(t).off(b.touchEvents.end, e.dragEnd)
                            },
                            set: function() {
                                if (b.params.scrollbar) {
                                    var e = b.scrollbar;
                                    e.track = a(b.params.scrollbar),
                                    b.params.uniqueNavElements && "string" == typeof b.params.scrollbar && e.track.length > 1 && 1 === b.container.find(b.params.scrollbar).length && (e.track = b.container.find(b.params.scrollbar)),
                                        e.drag = e.track.find(".swiper-scrollbar-drag"),
                                    0 === e.drag.length && (e.drag = a('<div class="swiper-scrollbar-drag"></div>'), e.track.append(e.drag)),
                                        e.drag[0].style.width = "",
                                        e.drag[0].style.height = "",
                                        e.trackSize = b.isHorizontal() ? e.track[0].offsetWidth: e.track[0].offsetHeight,
                                        e.divider = b.size / b.virtualSize,
                                        e.moveDivider = e.divider * (e.trackSize / b.size),
                                        e.dragSize = e.trackSize * e.divider,
                                        b.isHorizontal() ? e.drag[0].style.width = e.dragSize + "px": e.drag[0].style.height = e.dragSize + "px",
                                        e.divider >= 1 ? e.track[0].style.display = "none": e.track[0].style.display = "",
                                    b.params.scrollbarHide && (e.track[0].style.opacity = 0)
                                }
                            },
                            setTranslate: function() {
                                if (b.params.scrollbar) {
                                    var e, a = b.scrollbar,
                                        t = (b.translate || 0, a.dragSize);
                                    e = (a.trackSize - a.dragSize) * b.progress,
                                        b.rtl && b.isHorizontal() ? (e = -e, e > 0 ? (t = a.dragSize - e, e = 0) : -e + a.dragSize > a.trackSize && (t = a.trackSize + e)) : 0 > e ? (t = a.dragSize + e, e = 0) : e + a.dragSize > a.trackSize && (t = a.trackSize - e),
                                        b.isHorizontal() ? (b.support.transforms3d ? a.drag.transform("translate3d(" + e + "px, 0, 0)") : a.drag.transform("translateX(" + e + "px)"), a.drag[0].style.width = t + "px") : (b.support.transforms3d ? a.drag.transform("translate3d(0px, " + e + "px, 0)") : a.drag.transform("translateY(" + e + "px)"), a.drag[0].style.height = t + "px"),
                                    b.params.scrollbarHide && (clearTimeout(a.timeout), a.track[0].style.opacity = 1, a.timeout = setTimeout(function() {
                                            a.track[0].style.opacity = 0,
                                                a.track.transition(400)
                                        },
                                        1e3))
                                }
                            },
                            setTransition: function(e) {
                                b.params.scrollbar && b.scrollbar.drag.transition(e)
                            }
                        },
                        b.controller = {
                            LinearSpline: function(e, a) {
                                this.x = e,
                                    this.y = a,
                                    this.lastIndex = e.length - 1;
                                var t, i;
                                this.x.length,
                                    this.interpolate = function(e) {
                                        return e ? (i = r(this.x, e), t = i - 1, (e - this.x[t]) * (this.y[i] - this.y[t]) / (this.x[i] - this.x[t]) + this.y[t]) : 0
                                    };
                                var r = function() {
                                    var e, a, t;
                                    return function(i, r) {
                                        for (a = -1, e = i.length; e - a > 1;) i[t = e + a >> 1] <= r ? a = t: e = t;
                                        return e
                                    }
                                } ()
                            },
                            getInterpolateFunction: function(e) {
                                b.controller.spline || (b.controller.spline = b.params.loop ? new b.controller.LinearSpline(b.slidesGrid, e.slidesGrid) : new b.controller.LinearSpline(b.snapGrid, e.snapGrid))
                            },
                            setTranslate: function(e, a) {
                                function i(a) {
                                    e = a.rtl && "horizontal" === a.params.direction ? -b.translate: b.translate,
                                    "slide" === b.params.controlBy && (b.controller.getInterpolateFunction(a), s = -b.controller.spline.interpolate( - e)),
                                    s && "container" !== b.params.controlBy || (r = (a.maxTranslate() - a.minTranslate()) / (b.maxTranslate() - b.minTranslate()), s = (e - b.minTranslate()) * r + a.minTranslate()),
                                    b.params.controlInverse && (s = a.maxTranslate() - s),
                                        a.updateProgress(s),
                                        a.setWrapperTranslate(s, !1, b),
                                        a.updateActiveIndex()
                                }
                                var r, s, n = b.params.control;
                                if (b.isArray(n)) for (var o = 0; o < n.length; o++) n[o] !== a && n[o] instanceof t && i(n[o]);
                                else n instanceof t && a !== n && i(n)
                            },
                            setTransition: function(e, a) {
                                function i(a) {
                                    a.setWrapperTransition(e, b),
                                    0 !== e && (a.onTransitionStart(), a.wrapper.transitionEnd(function() {
                                        s && (a.params.loop && "slide" === b.params.controlBy && a.fixLoop(), a.onTransitionEnd())
                                    }))
                                }
                                var r, s = b.params.control;
                                if (b.isArray(s)) for (r = 0; r < s.length; r++) s[r] !== a && s[r] instanceof t && i(s[r]);
                                else s instanceof t && a !== s && i(s)
                            }
                        },
                        b.hashnav = {
                            init: function() {
                                if (b.params.hashnav) {
                                    b.hashnav.initialized = !0;
                                    var e = document.location.hash.replace("#", "");
                                    if (e) for (var a = 0,
                                                    t = 0,
                                                    i = b.slides.length; i > t; t++) {
                                        var r = b.slides.eq(t),
                                            s = r.attr("data-hash");
                                        if (s === e && !r.hasClass(b.params.slideDuplicateClass)) {
                                            var n = r.index();
                                            b.slideTo(n, a, b.params.runCallbacksOnInit, !0)
                                        }
                                    }
                                }
                            },
                            setHash: function() {
                                b.hashnav.initialized && b.params.hashnav && (document.location.hash = b.slides.eq(b.activeIndex).attr("data-hash") || "")
                            }
                        },
                        b.disableKeyboardControl = function() {
                            b.params.keyboardControl = !1,
                                a(document).off("keydown", p)
                        },
                        b.enableKeyboardControl = function() {
                            b.params.keyboardControl = !0,
                                a(document).on("keydown", p)
                        },
                        b.mousewheel = {
                            event: !1,
                            lastScrollTime: (new window.Date).getTime()
                        },
                        b.params.mousewheelControl) {
                    try {
                        new window.WheelEvent("wheel"),
                            b.mousewheel.event = "wheel"
                    } catch(e) { (window.WheelEvent || b.container[0] && "wheel" in b.container[0]) && (b.mousewheel.event = "wheel")
                    } ! b.mousewheel.event && window.WheelEvent,
                    b.mousewheel.event || void 0 === document.onmousewheel || (b.mousewheel.event = "mousewheel"),
                    b.mousewheel.event || (b.mousewheel.event = "DOMMouseScroll")
                }
                b.disableMousewheelControl = function() {
                    return !! b.mousewheel.event && (b.container.off(b.mousewheel.event, d), !0)
                },
                    b.enableMousewheelControl = function() {
                        return !! b.mousewheel.event && (b.container.on(b.mousewheel.event, d), !0)
                    },
                    b.parallax = {
                        setTranslate: function() {
                            b.container.children("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function() {
                                u(this, b.progress)
                            }),
                                b.slides.each(function() {
                                    var e = a(this);
                                    e.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function() {
                                        var a = Math.min(Math.max(e[0].progress, -1), 1);
                                        u(this, a)
                                    })
                                })
                        },
                        setTransition: function(e) {
                            "undefined" == typeof e && (e = b.params.speed),
                                b.container.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function() {
                                    var t = a(this),
                                        i = parseInt(t.attr("data-swiper-parallax-duration"), 10) || e;
                                    0 === e && (i = 0),
                                        t.transition(i)
                                })
                        }
                    },
                    b._plugins = [];
                for (var N in b.plugins) {
                    var R = b.plugins[N](b, b.params[N]);
                    R && b._plugins.push(R)
                }
                return b.callPlugins = function(e) {
                    for (var a = 0; a < b._plugins.length; a++) e in b._plugins[a] && b._plugins[a][e](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5])
                },
                    b.emitterEventListeners = {},
                    b.emit = function(e) {
                        b.params[e] && b.params[e](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
                        var a;
                        if (b.emitterEventListeners[e]) for (a = 0; a < b.emitterEventListeners[e].length; a++) b.emitterEventListeners[e][a](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
                        b.callPlugins && b.callPlugins(e, arguments[1], arguments[2], arguments[3], arguments[4], arguments[5])
                    },
                    b.on = function(e, a) {
                        return e = c(e),
                        b.emitterEventListeners[e] || (b.emitterEventListeners[e] = []),
                            b.emitterEventListeners[e].push(a),
                            b
                    },
                    b.off = function(e, a) {
                        var t;
                        if (e = c(e), "undefined" == typeof a) return b.emitterEventListeners[e] = [],
                            b;
                        if (b.emitterEventListeners[e] && 0 !== b.emitterEventListeners[e].length) {
                            for (t = 0; t < b.emitterEventListeners[e].length; t++) b.emitterEventListeners[e][t] === a && b.emitterEventListeners[e].splice(t, 1);
                            return b
                        }
                    },
                    b.once = function(e, a) {
                        e = c(e);
                        var t = function() {
                            a(arguments[0], arguments[1], arguments[2], arguments[3], arguments[4]),
                                b.off(e, t)
                        };
                        return b.on(e, t),
                            b
                    },
                    b.a11y = {
                        makeFocusable: function(e) {
                            return e.attr("tabIndex", "0"),
                                e
                        },
                        addRole: function(e, a) {
                            return e.attr("role", a),
                                e
                        },
                        addLabel: function(e, a) {
                            return e.attr("aria-label", a),
                                e
                        },
                        disable: function(e) {
                            return e.attr("aria-disabled", !0),
                                e
                        },
                        enable: function(e) {
                            return e.attr("aria-disabled", !1),
                                e
                        },
                        onEnterKey: function(e) {
                            13 === e.keyCode && (a(e.target).is(b.params.nextButton) ? (b.onClickNext(e), b.isEnd ? b.a11y.notify(b.params.lastSlideMessage) : b.a11y.notify(b.params.nextSlideMessage)) : a(e.target).is(b.params.prevButton) && (b.onClickPrev(e), b.isBeginning ? b.a11y.notify(b.params.firstSlideMessage) : b.a11y.notify(b.params.prevSlideMessage)), a(e.target).is("." + b.params.bulletClass) && a(e.target)[0].click())
                        },
                        liveRegion: a('<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>'),
                        notify: function(e) {
                            var a = b.a11y.liveRegion;
                            0 !== a.length && (a.html(""), a.html(e))
                        },
                        init: function() {
                            b.params.nextButton && b.nextButton && b.nextButton.length > 0 && (b.a11y.makeFocusable(b.nextButton), b.a11y.addRole(b.nextButton, "button"), b.a11y.addLabel(b.nextButton, b.params.nextSlideMessage)),
                            b.params.prevButton && b.prevButton && b.prevButton.length > 0 && (b.a11y.makeFocusable(b.prevButton), b.a11y.addRole(b.prevButton, "button"), b.a11y.addLabel(b.prevButton, b.params.prevSlideMessage)),
                                a(b.container).append(b.a11y.liveRegion)
                        },
                        initPagination: function() {
                            b.params.pagination && b.params.paginationClickable && b.bullets && b.bullets.length && b.bullets.each(function() {
                                var e = a(this);
                                b.a11y.makeFocusable(e),
                                    b.a11y.addRole(e, "button"),
                                    b.a11y.addLabel(e, b.params.paginationBulletMessage.replace(/{{index}}/, e.index() + 1))
                            })
                        },
                        destroy: function() {
                            b.a11y.liveRegion && b.a11y.liveRegion.length > 0 && b.a11y.liveRegion.remove()
                        }
                    },
                    b.init = function() {
                        b.params.loop && b.createLoop(),
                            b.updateContainerSize(),
                            b.updateSlidesSize(),
                            b.updatePagination(),
                        b.params.scrollbar && b.scrollbar && (b.scrollbar.set(), b.params.scrollbarDraggable && b.scrollbar.enableDraggable()),
                        "slide" !== b.params.effect && b.effects[b.params.effect] && (b.params.loop || b.updateProgress(), b.effects[b.params.effect].setTranslate()),
                            b.params.loop ? b.slideTo(b.params.initialSlide + b.loopedSlides, 0, b.params.runCallbacksOnInit) : (b.slideTo(b.params.initialSlide, 0, b.params.runCallbacksOnInit), 0 === b.params.initialSlide && (b.parallax && b.params.parallax && b.parallax.setTranslate(), b.lazy && b.params.lazyLoading && (b.lazy.load(), b.lazy.initialImageLoaded = !0))),
                            b.attachEvents(),
                        b.params.observer && b.support.observer && b.initObservers(),
                        b.params.preloadImages && !b.params.lazyLoading && b.preloadImages(),
                        b.params.autoplay && b.startAutoplay(),
                        b.params.keyboardControl && b.enableKeyboardControl && b.enableKeyboardControl(),
                        b.params.mousewheelControl && b.enableMousewheelControl && b.enableMousewheelControl(),
                        b.params.hashnav && b.hashnav && b.hashnav.init(),
                        b.params.a11y && b.a11y && b.a11y.init(),
                            b.emit("onInit", b)
                    },
                    b.cleanupStyles = function() {
                        b.container.removeClass(b.classNames.join(" ")).removeAttr("style"),
                            b.wrapper.removeAttr("style"),
                        b.slides && b.slides.length && b.slides.removeClass([b.params.slideVisibleClass, b.params.slideActiveClass, b.params.slideNextClass, b.params.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-column").removeAttr("data-swiper-row"),
                        b.paginationContainer && b.paginationContainer.length && b.paginationContainer.removeClass(b.params.paginationHiddenClass),
                        b.bullets && b.bullets.length && b.bullets.removeClass(b.params.bulletActiveClass),
                        b.params.prevButton && a(b.params.prevButton).removeClass(b.params.buttonDisabledClass),
                        b.params.nextButton && a(b.params.nextButton).removeClass(b.params.buttonDisabledClass),
                        b.params.scrollbar && b.scrollbar && (b.scrollbar.track && b.scrollbar.track.length && b.scrollbar.track.removeAttr("style"), b.scrollbar.drag && b.scrollbar.drag.length && b.scrollbar.drag.removeAttr("style"))
                    },
                    b.destroy = function(e, a) {
                        b.detachEvents(),
                            b.stopAutoplay(),
                        b.params.scrollbar && b.scrollbar && b.params.scrollbarDraggable && b.scrollbar.disableDraggable(),
                        b.params.loop && b.destroyLoop(),
                        a && b.cleanupStyles(),
                            b.disconnectObservers(),
                        b.params.keyboardControl && b.disableKeyboardControl && b.disableKeyboardControl(),
                        b.params.mousewheelControl && b.disableMousewheelControl && b.disableMousewheelControl(),
                        b.params.a11y && b.a11y && b.a11y.destroy(),
                            b.emit("onDestroy"),
                        e !== !1 && (b = null)
                    },
                    b.init(),
                    b
            }
        };
        t.prototype = {
            isSafari: function() {
                var e = navigator.userAgent.toLowerCase();
                return e.indexOf("safari") >= 0 && e.indexOf("chrome") < 0 && e.indexOf("android") < 0
            } (),
            isUiWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(navigator.userAgent),
            isArray: function(e) {
                return "[object Array]" === Object.prototype.toString.apply(e)
            },
            browser: {
                ie: window.navigator.pointerEnabled || window.navigator.msPointerEnabled,
                ieTouch: window.navigator.msPointerEnabled && window.navigator.msMaxTouchPoints > 1 || window.navigator.pointerEnabled && window.navigator.maxTouchPoints > 1
            },
            device: function() {
                var e = navigator.userAgent,
                    a = e.match(/(Android);?[\s\/]+([\d.]+)?/),
                    t = e.match(/(iPad).*OS\s([\d_]+)/),
                    i = e.match(/(iPod)(.*OS\s([\d_]+))?/),
                    r = !t && e.match(/(iPhone\sOS)\s([\d_]+)/);
                return {
                    ios: t || r || i,
                    android: a
                }
            } (),
            support: {
                touch: window.Modernizr && Modernizr.touch === !0 ||
                function() {
                    return !! ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch)
                } (),
                transforms3d: window.Modernizr && Modernizr.csstransforms3d === !0 ||
                function() {
                    var e = document.createElement("div").style;
                    return "webkitPerspective" in e || "MozPerspective" in e || "OPerspective" in e || "MsPerspective" in e || "perspective" in e
                } (),
                flexbox: function() {
                    for (var e = document.createElement("div").style, a = "alignItems webkitAlignItems webkitBoxAlign msFlexAlign mozBoxAlign webkitFlexDirection msFlexDirection mozBoxDirection mozBoxOrient webkitBoxDirection webkitBoxOrient".split(" "), t = 0; t < a.length; t++) if (a[t] in e) return ! 0
                } (),
                observer: function() {
                    return "MutationObserver" in window || "WebkitMutationObserver" in window
                } ()
            },
            plugins: {}
        };
        for (var i = (function() {
            var e = function(e) {
                    var a = this,
                        t = 0;
                    for (t = 0; t < e.length; t++) a[t] = e[t];
                    return a.length = e.length,
                        this
                },
                a = function(a, t) {
                    var i = [],
                        r = 0;
                    if (a && !t && a instanceof e) return a;
                    if (a) if ("string" == typeof a) {
                        var s, n, o = a.trim();
                        if (o.indexOf("<") >= 0 && o.indexOf(">") >= 0) {
                            var l = "div";
                            for (0 === o.indexOf("<li") && (l = "ul"), 0 === o.indexOf("<tr") && (l = "tbody"), (0 === o.indexOf("<td") || 0 === o.indexOf("<th")) && (l = "tr"), 0 === o.indexOf("<tbody") && (l = "table"), 0 === o.indexOf("<option") && (l = "select"), n = document.createElement(l), n.innerHTML = a, r = 0; r < n.childNodes.length; r++) i.push(n.childNodes[r])
                        } else for (s = t || "#" !== a[0] || a.match(/[ .<>:~]/) ? (t || document).querySelectorAll(a) : [document.getElementById(a.split("#")[1])], r = 0; r < s.length; r++) s[r] && i.push(s[r])
                    } else if (a.nodeType || a === window || a === document) i.push(a);
                    else if (a.length > 0 && a[0].nodeType) for (r = 0; r < a.length; r++) i.push(a[r]);
                    return new e(i)
                };
            return e.prototype = {
                addClass: function(e) {
                    if ("undefined" == typeof e) return this;
                    for (var a = e.split(" "), t = 0; t < a.length; t++) for (var i = 0; i < this.length; i++) this[i].classList.add(a[t]);
                    return this
                },
                removeClass: function(e) {
                    for (var a = e.split(" "), t = 0; t < a.length; t++) for (var i = 0; i < this.length; i++) this[i].classList.remove(a[t]);
                    return this
                },
                hasClass: function(e) {
                    return !! this[0] && this[0].classList.contains(e)
                },
                toggleClass: function(e) {
                    for (var a = e.split(" "), t = 0; t < a.length; t++) for (var i = 0; i < this.length; i++) this[i].classList.toggle(a[t]);
                    return this
                },
                attr: function(e, a) {
                    if (1 === arguments.length && "string" == typeof e) return this[0] ? this[0].getAttribute(e) : void 0;
                    for (var t = 0; t < this.length; t++) if (2 === arguments.length) this[t].setAttribute(e, a);
                    else for (var i in e) this[t][i] = e[i],
                            this[t].setAttribute(i, e[i]);
                    return this
                },
                removeAttr: function(e) {
                    for (var a = 0; a < this.length; a++) this[a].removeAttribute(e);
                    return this
                },
                data: function(e, a) {
                    if ("undefined" != typeof a) {
                        for (var t = 0; t < this.length; t++) {
                            var i = this[t];
                            i.dom7ElementDataStorage || (i.dom7ElementDataStorage = {}),
                                i.dom7ElementDataStorage[e] = a
                        }
                        return this
                    }
                    if (this[0]) {
                        var r = this[0].getAttribute("data-" + e);
                        return r ? r: this[0].dom7ElementDataStorage && e in this[0].dom7ElementDataStorage ? this[0].dom7ElementDataStorage[e] : void 0
                    }
                },
                transform: function(e) {
                    for (var a = 0; a < this.length; a++) {
                        var t = this[a].style;
                        t.webkitTransform = t.MsTransform = t.msTransform = t.MozTransform = t.OTransform = t.transform = e
                    }
                    return this
                },
                transition: function(e) {
                    "string" != typeof e && (e += "ms");
                    for (var a = 0; a < this.length; a++) {
                        var t = this[a].style;
                        t.webkitTransitionDuration = t.MsTransitionDuration = t.msTransitionDuration = t.MozTransitionDuration = t.OTransitionDuration = t.transitionDuration = e
                    }
                    return this
                },
                on: function(e, t, i, r) {
                    function s(e) {
                        var r = e.target;
                        if (a(r).is(t)) i.call(r, e);
                        else for (var s = a(r).parents(), n = 0; n < s.length; n++) a(s[n]).is(t) && i.call(s[n], e)
                    }
                    var n, o, l = e.split(" ");
                    for (n = 0; n < this.length; n++) if ("function" == typeof t || t === !1) for ("function" == typeof t && (i = arguments[1], r = arguments[2] || !1), o = 0; o < l.length; o++) this[n].addEventListener(l[o], i, r);
                    else for (o = 0; o < l.length; o++) this[n].dom7LiveListeners || (this[n].dom7LiveListeners = []),
                            this[n].dom7LiveListeners.push({
                                listener: i,
                                liveListener: s
                            }),
                            this[n].addEventListener(l[o], s, r);
                    return this
                },
                off: function(e, a, t, i) {
                    for (var r = e.split(" "), s = 0; s < r.length; s++) for (var n = 0; n < this.length; n++) if ("function" == typeof a || a === !1)"function" == typeof a && (t = arguments[1], i = arguments[2] || !1),
                        this[n].removeEventListener(r[s], t, i);
                    else if (this[n].dom7LiveListeners) for (var o = 0; o < this[n].dom7LiveListeners.length; o++) this[n].dom7LiveListeners[o].listener === t && this[n].removeEventListener(r[s], this[n].dom7LiveListeners[o].liveListener, i);
                    return this
                },
                once: function(e, a, t, i) {
                    function r(n) {
                        t(n),
                            s.off(e, a, r, i)
                    }
                    var s = this;
                    "function" == typeof a && (a = !1, t = arguments[1], i = arguments[2]),
                        s.on(e, a, r, i)
                },
                trigger: function(e, a) {
                    for (var t = 0; t < this.length; t++) {
                        var i;
                        try {
                            i = new window.CustomEvent(e, {
                                detail: a,
                                bubbles: !0,
                                cancelable: !0
                            })
                        } catch(t) {
                            i = document.createEvent("Event"),
                                i.initEvent(e, !0, !0),
                                i.detail = a
                        }
                        this[t].dispatchEvent(i)
                    }
                    return this
                },
                transitionEnd: function(e) {
                    function a(s) {
                        if (s.target === this) for (e.call(this, s), t = 0; t < i.length; t++) r.off(i[t], a)
                    }
                    var t, i = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"],
                        r = this;
                    if (e) for (t = 0; t < i.length; t++) r.on(i[t], a);
                    return this
                },
                width: function() {
                    return this[0] === window ? window.innerWidth: this.length > 0 ? parseFloat(this.css("width")) : null
                },
                outerWidth: function(e) {
                    return this.length > 0 ? e ? this[0].offsetWidth + parseFloat(this.css("margin-right")) + parseFloat(this.css("margin-left")) : this[0].offsetWidth: null
                },
                height: function() {
                    return this[0] === window ? window.innerHeight: this.length > 0 ? parseFloat(this.css("height")) : null
                },
                outerHeight: function(e) {
                    return this.length > 0 ? e ? this[0].offsetHeight + parseFloat(this.css("margin-top")) + parseFloat(this.css("margin-bottom")) : this[0].offsetHeight: null
                },
                offset: function() {
                    if (this.length > 0) {
                        var e = this[0],
                            a = e.getBoundingClientRect(),
                            t = document.body,
                            i = e.clientTop || t.clientTop || 0,
                            r = e.clientLeft || t.clientLeft || 0,
                            s = window.pageYOffset || e.scrollTop,
                            n = window.pageXOffset || e.scrollLeft;
                        return {
                            top: a.top + s - i,
                            left: a.left + n - r
                        }
                    }
                    return null
                },
                css: function(e, a) {
                    var t;
                    if (1 === arguments.length) {
                        if ("string" != typeof e) {
                            for (t = 0; t < this.length; t++) for (var i in e) this[t].style[i] = e[i];
                            return this
                        }
                        if (this[0]) return window.getComputedStyle(this[0], null).getPropertyValue(e)
                    }
                    if (2 === arguments.length && "string" == typeof e) {
                        for (t = 0; t < this.length; t++) this[t].style[e] = a;
                        return this
                    }
                    return this
                },
                each: function(e) {
                    for (var a = 0; a < this.length; a++) e.call(this[a], a, this[a]);
                    return this
                },
                html: function(e) {
                    if ("undefined" == typeof e) return this[0] ? this[0].innerHTML: void 0;
                    for (var a = 0; a < this.length; a++) this[a].innerHTML = e;
                    return this
                },
                text: function(e) {
                    if ("undefined" == typeof e) return this[0] ? this[0].textContent.trim() : null;
                    for (var a = 0; a < this.length; a++) this[a].textContent = e;
                    return this
                },
                is: function(t) {
                    if (!this[0]) return ! 1;
                    var i, r;
                    if ("string" == typeof t) {
                        var s = this[0];
                        if (s === document) return t === document;
                        if (s === window) return t === window;
                        if (s.matches) return s.matches(t);
                        if (s.webkitMatchesSelector) return s.webkitMatchesSelector(t);
                        if (s.mozMatchesSelector) return s.mozMatchesSelector(t);
                        if (s.msMatchesSelector) return s.msMatchesSelector(t);
                        for (i = a(t), r = 0; r < i.length; r++) if (i[r] === this[0]) return ! 0;
                        return ! 1
                    }
                    if (t === document) return this[0] === document;
                    if (t === window) return this[0] === window;
                    if (t.nodeType || t instanceof e) {
                        for (i = t.nodeType ? [t] : t, r = 0; r < i.length; r++) if (i[r] === this[0]) return ! 0;
                        return ! 1
                    }
                    return ! 1
                },
                index: function() {
                    if (this[0]) {
                        for (var e = this[0], a = 0; null !== (e = e.previousSibling);) 1 === e.nodeType && a++;
                        return a
                    }
                },
                eq: function(a) {
                    if ("undefined" == typeof a) return this;
                    var t, i = this.length;
                    return a > i - 1 ? new e([]) : 0 > a ? (t = i + a, new e(0 > t ? [] : [this[t]])) : new e([this[a]])
                },
                append: function(a) {
                    var t, i;
                    for (t = 0; t < this.length; t++) if ("string" == typeof a) {
                        var r = document.createElement("div");
                        for (r.innerHTML = a; r.firstChild;) this[t].appendChild(r.firstChild)
                    } else if (a instanceof e) for (i = 0; i < a.length; i++) this[t].appendChild(a[i]);
                    else this[t].appendChild(a);
                    return this
                },
                prepend: function(a) {
                    var t, i;
                    for (t = 0; t < this.length; t++) if ("string" == typeof a) {
                        var r = document.createElement("div");
                        for (r.innerHTML = a, i = r.childNodes.length - 1; i >= 0; i--) this[t].insertBefore(r.childNodes[i], this[t].childNodes[0])
                    } else if (a instanceof e) for (i = 0; i < a.length; i++) this[t].insertBefore(a[i], this[t].childNodes[0]);
                    else this[t].insertBefore(a, this[t].childNodes[0]);
                    return this
                },
                insertBefore: function(e) {
                    for (var t = a(e), i = 0; i < this.length; i++) if (1 === t.length) t[0].parentNode.insertBefore(this[i], t[0]);
                    else if (t.length > 1) for (var r = 0; r < t.length; r++) t[r].parentNode.insertBefore(this[i].cloneNode(!0), t[r])
                },
                insertAfter: function(e) {
                    for (var t = a(e), i = 0; i < this.length; i++) if (1 === t.length) t[0].parentNode.insertBefore(this[i], t[0].nextSibling);
                    else if (t.length > 1) for (var r = 0; r < t.length; r++) t[r].parentNode.insertBefore(this[i].cloneNode(!0), t[r].nextSibling)
                },
                next: function(t) {
                    return new e(this.length > 0 ? t ? this[0].nextElementSibling && a(this[0].nextElementSibling).is(t) ? [this[0].nextElementSibling] : [] : this[0].nextElementSibling ? [this[0].nextElementSibling] : [] : [])
                },
                nextAll: function(t) {
                    var i = [],
                        r = this[0];
                    if (!r) return new e([]);
                    for (; r.nextElementSibling;) {
                        var s = r.nextElementSibling;
                        t ? a(s).is(t) && i.push(s) : i.push(s),
                            r = s
                    }
                    return new e(i)
                },
                prev: function(t) {
                    return new e(this.length > 0 ? t ? this[0].previousElementSibling && a(this[0].previousElementSibling).is(t) ? [this[0].previousElementSibling] : [] : this[0].previousElementSibling ? [this[0].previousElementSibling] : [] : [])
                },
                prevAll: function(t) {
                    var i = [],
                        r = this[0];
                    if (!r) return new e([]);
                    for (; r.previousElementSibling;) {
                        var s = r.previousElementSibling;
                        t ? a(s).is(t) && i.push(s) : i.push(s),
                            r = s
                    }
                    return new e(i)
                },
                parent: function(e) {
                    for (var t = [], i = 0; i < this.length; i++) e ? a(this[i].parentNode).is(e) && t.push(this[i].parentNode) : t.push(this[i].parentNode);
                    return a(a.unique(t))
                },
                parents: function(e) {
                    for (var t = [], i = 0; i < this.length; i++) for (var r = this[i].parentNode; r;) e ? a(r).is(e) && t.push(r) : t.push(r),
                        r = r.parentNode;
                    return a(a.unique(t))
                },
                find: function(a) {
                    for (var t = [], i = 0; i < this.length; i++) for (var r = this[i].querySelectorAll(a), s = 0; s < r.length; s++) t.push(r[s]);
                    return new e(t)
                },
                children: function(t) {
                    for (var i = [], r = 0; r < this.length; r++) for (var s = this[r].childNodes, n = 0; n < s.length; n++) t ? 1 === s[n].nodeType && a(s[n]).is(t) && i.push(s[n]) : 1 === s[n].nodeType && i.push(s[n]);
                    return new e(a.unique(i))
                },
                remove: function() {
                    for (var e = 0; e < this.length; e++) this[e].parentNode && this[e].parentNode.removeChild(this[e]);
                    return this
                },
                add: function() {
                    var e, t, i = this;
                    for (e = 0; e < arguments.length; e++) {
                        var r = a(arguments[e]);
                        for (t = 0; t < r.length; t++) i[i.length] = r[t],
                            i.length++
                    }
                    return i
                }
            },
                a.fn = e.prototype,
                a.unique = function(e) {
                    for (var a = [], t = 0; t < e.length; t++) - 1 === a.indexOf(e[t]) && a.push(e[t]);
                    return a
                },
                a
        } ()), r = ["jQuery", "Zepto", "Dom7"], s = 0; s < r.length; s++) window[r[s]] && e(window[r[s]]);
        var n;
        n = "undefined" == typeof i ? window.Dom7 || window.Zepto || window.jQuery: i,
        n && ("transitionEnd" in n.fn || (n.fn.transitionEnd = function(e) {
            function a(s) {
                if (s.target === this) for (e.call(this, s), t = 0; t < i.length; t++) r.off(i[t], a)
            }
            var t, i = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"],
                r = this;
            if (e) for (t = 0; t < i.length; t++) r.on(i[t], a);
            return this
        }), "transform" in n.fn || (n.fn.transform = function(e) {
            for (var a = 0; a < this.length; a++) {
                var t = this[a].style;
                t.webkitTransform = t.MsTransform = t.msTransform = t.MozTransform = t.OTransform = t.transform = e
            }
            return this
        }), "transition" in n.fn || (n.fn.transition = function(e) {
            "string" != typeof e && (e += "ms");
            for (var a = 0; a < this.length; a++) {
                var t = this[a].style;
                t.webkitTransitionDuration = t.MsTransitionDuration = t.msTransitionDuration = t.MozTransitionDuration = t.OTransitionDuration = t.transitionDuration = e
            }
            return this
        })),
            window.Swiper = t
    } (),
    "undefined" != typeof module ? module.exports = window.Swiper: "function" == typeof define && define.amd && define([],
        function() {
            "use strict";
            return window.Swiper
        });