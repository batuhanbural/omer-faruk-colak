$(function () {
    //gorev1

    var baslik1 = $("h2").first().text();
    var baslik2 = $("h2").eq(1).text();
    var baslik3 = $("h2").eq(2).text();
    $("#gorev1>button").click(function () {
        $("ul").first().append("<li/>" + baslik1);
        $("ul").first().append("<li/>" + baslik2);
        $("ul").first().append("<li/>" + baslik3);
        $("#gorev1>button").click(function () {
            $("ul").remove();
        });
    });

    //gorev2

    var baslikSayisi = $("h2").length - 1;
    $("#gorev2>button").click(function () {
        $("input").first().val(baslikSayisi);
    });

    //gorev3

    var h1 = $("h1").text();
    $("#gorev3>button").click(function() {
        $("#gorev3>input").val(h1);
    });

    //gorev4
    //başlığın sonuna, paragrafta kaç karakter olduğunu göster.

    //gorev5
    $("#gorev5>button").click(function () {
        $("h1").css("color", "red");
        $("article>div>h2:odd").css("color", "blue");
        $("article>div>h2:even").css("color", "orange");
    });


    //gorev6
    $("#gorev6>button").click(function () {
        $("p").first().fadeOut("slow");
    });

    //gorev7

    //gorev8
    //ajax ile lorem.html yi oku. makalenin başına lorem başlığı ile ekle
    $("#gorev8").click(function() {
        $.ajax({
            type: "get",
            url: "lorem.html",
            success: function(lorem) {
                $("p").first().text(lorem);
                $("h2").first().text("Lorem")
            }
        });
        });

    //gorev9        

    //gorev10
    $("#gorev10>button").click(function () {
        $('<img id="checkImg" src="img/check.png"/>').appendTo("body");
        $("#checkImg").css({"width": "100px","height": "100px","position": "fixed", "bottom": "20px", "right": "20px"
        });
    });

});
