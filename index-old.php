<?php require_once __DIR__ .  '/commons/top.php'; ?>

    <div class="container">
    <!-- <div id="" class="row">
      <div class="col-2">
        <label for="saldo-iniziale">Saldo Iniziale:</label>
      </div>
      <div class="col-2">
      </div>
    </div>

    <div id="info-base" class="row">
      <div class="col-2">
        <input type="text" class="form-control" id="saldo-iniziale">
      </div>
      <div class="col-2">
        <button type="submit" id="btn-saldo-iniziale" class="btn btn-primary">Insert</button>
      </div>
    </div> -->

    <div class="row">
      <div class="col-1">
        <label for="decks-number">N. Decks:</label>
      </div>
      <div class="col-1">
      </div>
      <div class="col-2">
        <label for="initial-balance">Initial Balance:</label>
      </div>
      <div class="col-1">
      </div>
      <div class="col-2">
        <label for="balance">Balance:</label>
      </div>
    </div>

    <div id="info-base" class="row">
      <div class="col-1">
        <input id="decks-number" class="form-control" type="number" min="2" max="10">
      </div>
      <div class="col-1">
        <button type="submit" id="btn-decks-number" class="btn btn-primary">Insert</button>
      </div>
      <div class="col-2">
        <input id="initial-balance" class="form-control" type="number">
      </div>
      <div class="col-1">
        <button type="submit" id="btn-initial-balance" class="btn btn-primary">Insert</button>
      </div>
      <div class="col-2">
        <label id="balance">0</label>
      </div>
    </div>

    <br>

    <div id="cards-row" class="row">
      <div class="col-1">
      </div>
      <div class="col-1 tot">
        <!--<input class="form-control" id="decks-number">-->
      </div>
      <div class="col-1 2">
        <img class="card-img" src="../img/cards/2H.png" >
      </div>
      <div class="col-1 3">
        <img class="card-img" src="../img/cards/3H.png" >
      </div>
      <div class="col-1 4">
        <img class="card-img" src="../img/cards/4H.png" >
      </div>
      <div class="col-1 5">
        <img class="card-img" src="../img/cards/5H.png" >
      </div>
      <div class="col-1 6">
        <img class="card-img" src="../img/cards/6H.png" >
      </div>
      <div class="col-1 7">
        <img class="card-img" src="../img/cards/7H.png" >
      </div>
      <div class="col-1 8">
        <img class="card-img" src="../img/cards/8H.png" >
      </div>
      <div class="col-1 9">
        <img class="card-img" src="../img/cards/9H.png" >
      </div>
      <div class="col-1 10-figures">
        <img class="card-img" src="../img/cards/10KH.png" >
      </div>
      <div class="col-1 ace">
        <img class="card-img" src="../img/cards/AH.png" >
      </div>
    </div>

    <div id="cards-remaining-row" class="row">
      <div class="col-1">
          <p>Remaining:</p>
        </div>
        <div class="col-1 tot">0</div>
        <div class="col-1 2">0</div>
        <div class="col-1 3">0</div>
        <div class="col-1 4">0</div>
        <div class="col-1 5">0</div>
        <div class="col-1 6">0</div>
        <div class="col-1 7">0</div>
        <div class="col-1 8">0</div>
        <div class="col-1 9">0</div>
        <div class="col-1 10-figures">0</div>
        <div class="col-1 ace">0</div>
      </div>
    </div>

    <div id="cards-left-row" class="row">
      <div class="col-1">
        <p>Out:</p>
      </div>
      <div class="col-1 tot">0</div>
      <div class="col-1 2">0</div>
      <div class="col-1 3">0</div>
      <div class="col-1 4">0</div>
      <div class="col-1 5">0</div>
      <div class="col-1 6">0</div>
      <div class="col-1 7">0</div>
      <div class="col-1 8">0</div>
      <div class="col-1 9">0</div>
      <div class="col-1 10-figures">0</div>
      <div class="col-1 ace">0</div>
    </div>

    <!-- HI-LO -->
    <div class="jumbotron text-center">
      <h1 class="display-4">HI-LO</h1>
      <hr class="my-4">
      <h2 id="hi-lo">0</h2>
    </div>

    <div class="jumbotron text-center">
      <h1 class="display-4">Uston SS</h1>
      <hr class="my-4">
      <h2 id="uston-ss">0</h2>
    </div>
  </div>
  
<?php require_once __DIR__ .  '/commons/bottom.php'; ?>

<script>

$(document).ready(function(){

  //HI-LO
  var plus = ["2", "3", "4", "5", "6"];
  var minus = ["10-figures", "ace"];

  //Uston SS
  var plus2 = ["2", "4", "6"];
  var plus3 = ["5"];
  var plus1 = ["7"];
  var minus1 = ["9"];
  var minus2 = ["10-figures", "ace"];
  $("#decks-number").change(function(){
    if($(this).val() < 2 || $(this).val() > 10)
      $(this).val(null);
  });

  $("#btn-decks-number").click(function(){
    var decksnumber = $("#decks-number").val();
    var two = decksnumber * 4;
    var three = decksnumber * 4;
    var four = decksnumber * 4;
    var five = decksnumber * 4;
    var six = decksnumber * 4;
    var seven = decksnumber * 4;
    var eight = decksnumber * 4;
    var nine = decksnumber * 4;
    var tenfigures = decksnumber * 16;
    var ace = decksnumber * 4;
    var tot = decksnumber * 52;

    $("#cards-left-row").find(".tot").html(tot);
    $("#cards-left-row").find(".2").html(two);
    $("#cards-left-row").find(".3").html(three);
    $("#cards-left-row").find(".4").html(four);
    $("#cards-left-row").find(".5").html(five);
    $("#cards-left-row").find(".6").html(six);
    $("#cards-left-row").find(".7").html(seven);
    $("#cards-left-row").find(".8").html(eight);
    $("#cards-left-row").find(".9").html(nine);
    $("#cards-left-row").find(".10-figures").html(tenfigures);
    $("#cards-left-row").find(".ace").html(ace);

    $("#cards-remaining-row").find(".tot").html(0);
    $("#cards-remaining-row").find(".2").html(0);
    $("#cards-remaining-row").find(".3").html(0);
    $("#cards-remaining-row").find(".4").html(0);
    $("#cards-remaining-row").find(".5").html(0);
    $("#cards-remaining-row").find(".6").html(0);
    $("#cards-remaining-row").find(".7").html(0);
    $("#cards-remaining-row").find(".8").html(0);
    $("#cards-remaining-row").find(".9").html(0);
    $("#cards-remaining-row").find(".10-figures").html(0);
    $("#cards-remaining-row").find(".ace").html(0);
    $("#hi-lo").html(0);
    $("#uston-ss").html(0);
  });


  $("#cards-row div").click(function(){
    //console.log($(this).attr('class').split(' ')[1]);
    var cod = $(this).attr('class').split(' ')[1];
    if(cod != "tot") {
      var divv = "div." + cod;
      var left = $("#cards-left-row").find(divv).text();
      var outgoing = $("#cards-remaining-row").find(divv).text();
      var left_tot = $("#cards-left-row").find("div.tot").text();
      var outgoing_tot = $("#cards-remaining-row").find("div.tot").text();
      left = parseInt(left) - 1;
      outgoing = parseInt(outgoing) + 1;
      left_tot = parseInt(left_tot) - 1;
      outgoing_tot = parseInt(outgoing_tot) + 1;
      
      if(left >= 0) {
        $("#cards-left-row").find(divv).html(left);
        $("#cards-remaining-row").find(divv).html(outgoing);
        $("#cards-left-row").find("div.tot").html(left_tot);
        $("#cards-remaining-row").find("div.tot").html(outgoing_tot);

        //HI-LO
        var hi_lo = $("#hi-lo").text();
        hi_lo = parseInt(hi_lo);
        if($.inArray(cod, plus) >= 0) {
          $("#hi-lo").html(hi_lo + 1);
        } else if($.inArray(cod, minus) >= 0) {
          $("#hi-lo").html(hi_lo - 1);
        }

        //Uston SS
        var uston_ss = $("#uston-ss").text();
        uston_ss = parseInt(uston_ss);
        if($.inArray(cod, plus2) >= 0) {
          $("#uston-ss").html(uston_ss + 2);
        } else if($.inArray(cod, plus3) >= 0) {
          $("#uston-ss").html(uston_ss + 3);
        } else if($.inArray(cod, plus1) >= 0) {
          $("#uston-ss").html(uston_ss + 1);
        } else if($.inArray(cod, minus1) >= 0) {
          $("#uston-ss").html(uston_ss - 1);
        } else if($.inArray(cod, minus2) >= 0) {
          $("#uston-ss").html(uston_ss - 2);
        }
      }
    }
  });
});

</script>