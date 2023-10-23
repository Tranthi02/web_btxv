(function (window, document, jqueryVer, callback) {
    var $, state, done = false;
    if (!($ = window.jQuery) || jqueryVer > $.fn.jquery || callback($, done)) {
        var script = document.createElement("script");
        script.type = "text/javascript",
		script.src = "https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js",
		script.onload = script.onreadystatechange = function () {
		    if (!done && (!(state = this.readyState) || state === "loaded" || state === "complete")) {
		        callback(($ = window.jQuery).noConflict(1), done = true);
		        $(script).remove();
		    }
		};
        try {
            document.body.appendChild(script);
        }
        catch (ex) {
            try {
                document.documentElement.childNodes[0].appendChild(script);
            }
            catch (ex) { }
        }
    }
})(window, document, "1.9.1", function ($, done) {
    'use strict';

    var abEnv = "prod",
		AB_SERVER_URL = "";
    switch (abEnv) {
        case "prod":
            AB_SERVER_URL = "https://blogstatistics.sapoapps.vn";
            break;
        case "dev":
            AB_SERVER_URL = "https://blogstatistics.dev";
            break;
    }

    //Hàm format string như C# sử dụng "Test format {0}".format("abc")
    if (!String.prototype.format) {
        String.prototype.format = function () {
            var args = arguments;
            return this.replace(/{(\d+)}/g, function (match, number) {
                return typeof args[number] != "undefined"
					? args[number]
					: match
                ;
            });
        };
    }

    if (!Node.prototype.getElementsByAttributeValue) {
        Node.prototype.getElementsByAttributeValue = function (attribute, value) {
            var dom = this.all || this.getElementsByTagName("*");
            var match = new Array();
            for (var i in dom) {
                if ((typeof dom[i]) === "object") {
                    if (dom[i].getAttribute(attribute) === value) {
                        match.push(dom[i]);
                    }
                }
            }
            return match;
        };
    }

    var abGetStoreAlias = function () {
        var result = "";
        var store = window.Bizweb.store;
        if (typeof store !== "undefined" && store.indexOf(".bizwebvietnam.net") > -1) {
            result = store.replace(".bizwebvietnam.net", "");
        }
        return result;
    }

    var storeAlias = abGetStoreAlias(),
        requestTimeout = 40000;


    var abbsModuleArticleMostView = function() {
        if (storeAlias === '') return;
        var partialViewModuleEl = document.getElementsByClassName('ab-module-article-mostview');
        if (!partialViewModuleEl.length || partialViewModuleEl.length <= 0) return;
        $.ajax({
            url: AB_SERVER_URL + '/Storefront/GetModuleArticleMostView',
            data: { storeAlias: storeAlias },
            type: "GET",
            timeout: requestTimeout,
            traditional: true,
            success: function (result) {
                abbsModuleArticleMostViewDisplay(result);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log('Có lỗi xảy ra!');
            }
        });
    }

    var abbsModuleArticleMostViewDisplay = function(htmlStr) {
        var $mostViewModuleEl = $('.ab-module-article-mostview');
        $mostViewModuleEl.html(htmlStr);
        abbsStyleModuleArticle();
    }
    var abbsCountViewArticle = function () {
        if (Bizweb.template == "article") {
            var $inputArticle = $('.abbs-article-id');
            if ($inputArticle.length <= 0) return;
            var articleId = $inputArticle.attr('data-article-id');
            if (articleId > 0) {
                $.ajax({
                    url: AB_SERVER_URL + '/Storefront/UpdateViewCountArticle',
                    data: { storeAlias: storeAlias, articleId: articleId },
                    type: "POST",
                    timeout: requestTimeout,
                    success: function (result) {
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log('Có lỗi xảy ra');
                    }
                });
            }
        }        
    }
    var createStats = function () {
        if (Bizweb.template == "article") {
            var $inputArticle = $('.abbs-article-id');
            if ($inputArticle.length <= 0) return;
            var articleId = $inputArticle.attr('data-article-id');
            console.log(articleId);
            if (articleId > 0) {
                $.ajax({
                    url: AB_SERVER_URL + '/Storefront/GetStats',
                    data: { storeAlias: storeAlias, articleId: articleId },
                    type: "GET",
                    timeout: requestTimeout,
                    success: function (result) {
                        console.log(result);
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log('Có lỗi xảy ra!');
                    }
                });
            }
        }
    }
    var abbsStyleModuleArticle = function () {
        var $moduleArticle = $(".abbs-module-box");
        if ($moduleArticle.length <= 0) return;
        var moduleWidth = $moduleArticle.outerWidth(true);
        if (moduleWidth < 800 && moduleWidth > 600) {
            $moduleArticle.find('.abbs-article-element').css({ "width": "50%" });
            $moduleArticle.find('.abbs-device').remove();
            $moduleArticle.find(".abbs-article-element:nth-of-type(2n + 0)").after("<hr class=\"abbs-device\" />");
        }
        else if (moduleWidth < 600) {
            $moduleArticle.find('.abbs-article-element').css({ "width": "100%" });
            $moduleArticle.find('.abbs-device').remove();
            $moduleArticle.find(".abbs-article-element:nth-of-type(n + 0)").after("<hr class=\"abbs-device\" />");
        }
    }
    $(document).ready(function () {
        createStats();
        abbsModuleArticleMostView();
        abbsCountViewArticle();
    });
});