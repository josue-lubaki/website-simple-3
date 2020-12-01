$(document).ready(function() {
    var timer;
    $('#popup').hide();
    $(".key").keyup(function () {
        touche = $('#key').val();
        if (touche.length >= 2) {
            $(".key").addClass("loading");
            if (timer != null) {
                clearTimeout(timer);
            }
            timer = setTimeout(function () {
                $.ajax({
                    type: "POST",
                    url : "serveur.php",
                    data : {cle : touche},
                    success: function(rep){
                        constat = JSON.parse(rep);
                        $('#popup').empty();
                        for(i=0; i<constat.length;i++){
                            $("#popup").append("<li>" + constat[i].activity + "</li>");
                        }
                        if(constat.length > 0){
                            $("#popup").slideDown();
                        }
                        else {
                            $("#popup").hide();
                        }
                    },
                    error : function () {
                        alert("Erreur lors de la Recherche");
                    },
                    complete: function () {
                        $(".key").removeClass("loading");
                    }

                })

            }, 250)


        } else {
            $('#popup').empty();
            $("#popup").hide();
        }
    })
});