
$(document).ready(function(){
  $(".page #nav ul li:first-child").click(function(){
      $("#contenu").slideToggle(1000); // mélange de SlideDown() et SlideIn()
      $("#formulaire").hide();
      $("#map").hide();
      $(this).css("background-color", "white");
      $(".page #nav ul li:first-child a").css("color", "green");
      $("#test").css("background-color", "green");
      $("#test a").css("color", "white");
      $("#mp").css("background-color", "green");
      $("#mp a").css("color", "white");
  });

  $("#test").click(function(){
    $("#formulaire").slideToggle(1000); // mélange de SlideDown() et SlideIn()
    $("#contenu").hide();
    $("#map").hide();
    $("#test").css("background-color", "white");
    $("#test a").css("color", "green");
    $(".page #nav ul li:first-child").css("background-color", "green");
    $(".page #nav ul li:first-child a").css("color", "white");
    $("#mp").css("background-color", "green");
    $("#mp a").css("color", "white");
/*
    // Vérification du formulaire
    $('form').submit(function(e){
      if($('input').val() === ""){
        $('#after_verification').text("Verification...").show().fadeOut(1000);
        $('#after_verification_msg').text("Erreur Detecté").show().fadeIn(4000);
        $('#after_verification_msg').css('color' , 'red');
        return;
      }
      else{
        $('#after_verification').text("Verification...").show().fadeOut(1500);
        $('#after_verification_msg').text("Formulaire Validé").show();
        $('#after_verification_msg').css({'color' : 'green', 'font-size' : '22px'});
        e.preventDefault();
      }
    });
*/
  });

  $("#mp").click(function(){
    $("#map").slideToggle(1000); // mélange de SlideDown() et SlideIn()
    $("#contenu").hide();
    $("#formulaire").hide();
    $("#mp").css("background-color", "white");
    $("#mp a").css("color", "green");
    $(".page #nav ul li:first-child").css("background-color", "green");
    $(".page #nav ul li:first-child a").css("color", "white");
    $("#test").css("background-color", "green");
    $("#test a").css("color", "white");
    
    $("#map").ready(function myMap() {
    // The location of Uluru
      var uluru = {lat: 46.3462, lng: -72.5788};
    // The map, centered at Uluru
      var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: uluru});
    // The marker, positioned at Uluru
      var marker = new google.maps.Marker({position: uluru, map: map});
    });
  });      

});   
 
var data=[
            {"order":1,"activity":"Natation","manager":"Michel Provencher","numofsub":7},
            {"order":2,"activity":"Badminton","manager":"Daniel Lefevbre","numofsub":15},
            {"order":3,"activity":"Randonnée","manager":"Catherine Pelletier","numofsub":10},
            {"order":4,"activity":"Kayak","manager":"Josée Coté","numofsub":14},
            {"order":5,"activity":"Velo","manager":"Jean-Yves Surroy","numofsub":22},
            {"order":6,"activity":"Echecs","manager":"Emilie Simard","numofsub":11}
          ]; 

// Remplissage du Tableu
function fill() { 
  $('tr:not(:first-of-type)').remove(); // Bloquer le fonctionnement de la fonction en une seule exécution
  data.forEach(function(item){
     $('#notRemove').show(); // la première balise 'tr' de la table (contenant les en-têtes) renommée id = #notRemove
     $('table').append("<tr><td>" + item.order + "</td><td>" + item.manager +  "</td><td>" + item.activity + "</td><td>"+ item.numofsub + "</td></tr>");
  });
}

// Effacer les Contenus du Tableau
function removeTable() { 
  // selectionner toutes les balises 'tr' sauf la première balise 'tr' de la table (contenant les en-têtes) 
     $('tr:not(:first-of-type)').remove(); 
     $('#notRemove').hide();
} 

// Fonction de Tri nombre d'inscrit
function TrierNumofsub(){
  data.sort(function(a,b){
    return a.numofsub - b.numofsub;}
  );
  $('tr:not(:first-of-type)').remove();
    fill();
}

// Fonction de Tri Order
function Trier_order(){
  data.sort(function(a,b){
    return a.order - b.order;
  });
  $('tr:not(:first-of-type)').remove();
  fill();
}

// Function de Tri_Activity
function Trier_Activity(){
  data.sort(function(a,b){
    var x = a.activity.toLowerCase();
    var y = b.activity.toLowerCase();
    if(x<y){return -1;}
    if(x>y){return 1;}
    return 0;
  });
  $('tr:not(:first-of-type)').remove();
  fill();
}

// Function de Tri_Manager
function Trier_Manager(){
  data.sort(function(a,b){
    var x = a.manager.toLowerCase();
    var y = b.manager.toLowerCase();
    if(x<y){return -1;}
    if(x>y){return 1;}
    return 0;
  });
  fill();
}