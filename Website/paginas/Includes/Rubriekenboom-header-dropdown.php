

<!-- search -->
<div class="uk-margin-remove">
   <!-- php pagina met rubrieken -->
   <form class="uk-search uk-search-default uk-flex-inline" autocompleteHead="off" action="Producten.php" method="get" class="pointer">
     <div class="autocompleteHead">
       <input id="myInput" class="uk-search-input" name="rubriek" type="search" placeholder="Zoek op rubrieken">
      </div>
     <div class="uk-float-right ">
       <input class="" type="submit">
     </div>
   </form>
</div>

<div class="uk-padding-remove uk-height-large uk-overflow-auto uk-flex  uk-flex-wrap uk-flex-space-around uk-width-1-1 uk-child-width-1-2">
  <?php
  include "includes/Rubrieken-accordion.php"
?>

</div>

<script type="text/javascript">
<?php
$autoRubriekHead = "";
foreach(rubrieken(-1) as $waardeHead){
  foreach(rubrieken($waardeHead['rubriekNummer'])as $subHead){
    $autoRubriekHead .=  '"' . $subHead['rubriekNaam'] . '",';
  }
}
$autoRubriekHead .= '""';
echo "var rubrieken = [$autoRubriekHead];";
?>
 //var rubrieken = ['aaaapen','gekkehonden','CRRAAAAzy roy'];
function autocompleteHead(inp, arr) {
  /*the autocompleteHead function takes two arguments,
  the text field element and an array of possible autocompleteHead values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleteHead values*/
      closeAllListsHead();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocompleteHead-list");
      a.setAttribute("class", "autocompleteHead-items");
      a.setAttribute("class", "pointer");
      /*append the DIV element as a child of the autocompleteHead container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocompleteHead text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleteHeadd values,
              (or any other open lists of autocompleteHeadd values:*/
              closeAllListsHead();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocompleteHead-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActiveHead(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActiveHead(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActiveHead(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActiveHead(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocompleteHead-active":*/
    x[currentFocus].classList.add("autocompleteHead-active");
  }
  function removeActiveHead(x) {
    /*a function to remove the "active" class from all autocompleteHead items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocompleteHead-active");
    }
  }
  function closeAllListsHead(elmnt) {
    /*close all autocompleteHead lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocompleteHead-items ");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllListsHead(e.target);
});
}

autocompleteHead(document.getElementById("myInput"), rubrieken);

</script>
