<?php require_once __DIR__ .  '/commons/top.php'; ?>

  <div class="container">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Values</h5>
        <div class="row">
          <div class="col-1">
            <label for="decks-number">Decks N:</label>
          </div>
          <div class="col-1">
          </div>
          <div class="col-2">
            <label for="initial-balance">Initial Balance:</label>
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
        </div>
      </div>
    </div>

    <br>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Statistics</h5>
        <div class="row">
          <div class="col-2">
            <label for="balance">Balance:</label>
          </div>
          <div class="col-2">
            <label for="remaining-cards">Remaining Cards:</label>
          </div>
          <div class="col-2">
            <label for="left-cards">Left Cards:</label>
          </div>
          <div class="col-2">
            <label for="running-count">Running Count:</label>
          </div>
          <div class="col-2">
            <label for="true-count">True Count:</label>
          </div>
        </div>
        <div id="statistic" class="row">
          <div class="col-2">
            <label id="balance">0</label>
          </div>
          <div class="col-2">
            <label id="remaining-cards">0</label>
          </div>
          <div class="col-2">
            <label id="left-cards">0</label>
          </div>
          <div class="col-2">
            <label id="running-count">0</label>
          </div>
          <div class="col-2">
            <label id="true-count">0</label>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div id="cards-row" class="row">
      <div class="col-1"></div>
      <div class="col-4 plus">
        <img class="card-img" src="../img/hi-lo-plus.png" >
      </div>
      <div class="col-2 neutral">
        <img class="card-img" src="../img/cards/7H.png" >
      </div>
      <div class="col-2 minus">
        <img class="card-img" src="../img/cards/10KH.png" >
      </div>
    </div>
  </div>

  <div class="container">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Table Cards</h5>

        <div id="dealer-cards" class="row">
          <div class="col-1"></div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/2H.png" data-value-card="2" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/3H.png" data-value-card="3" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/4H.png" data-value-card="4" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/5H.png" data-value-card="5" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/6H.png" data-value-card="6" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/7H.png" data-value-card="7" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/8H.png" data-value-card="8" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/9H.png" data-value-card="9" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/10KH.png" data-value-card="10" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/AH.png" data-value-card="11" >
          </div>
        </div>

        <br>

        <div id="table" class="row">
          <div class="col-1">
          </div>
          <div id="table-screen" class="col-10">
            <img src="../img/blackjack-table.png">
          </div>
        </div>

        <br>

        <div id="player-cards" class="row">
          <div class="col-1"></div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/2H.png" data-value-card="2" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/3H.png" data-value-card="3" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/4H.png" data-value-card="4" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/5H.png" data-value-card="5" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/6H.png" data-value-card="6" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/7H.png" data-value-card="7" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/8H.png" data-value-card="8" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/9H.png" data-value-card="9" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/10KH.png" data-value-card="10" >
          </div>
          <div class="col-1">
            <img class="card-img" src="../img/cards/AH.png" data-value-card="11" >
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- HI-LO -->
  <div class="jumbotron text-center">
    <h1 class="display-4">HI-LO</h1>
    <hr class="my-4">
    <h2 id="hi-lo">0</h2>
  </div>

<?php require_once __DIR__ .  '/commons/bottom.php'; ?>

<script>

$(document).ready(function(){

  var decksnumber = 0;
  var tot = 0;
  var plus = 0;
  var neutral = 0;
  var minus = 0;

  $("#btn-decks-number").click(function(){
    decksnumber = $("#decks-number").val();
    plus = decksnumber * 20;
    neutral = decksnumber * 12;
    minus = decksnumber * 20;
    tot = decksnumber * 52;

    $("#remaining-cards").html(tot);
    $("#left-cards").html(0);
    $("#running-count").html(0);
    $("#true-count").html(0);
    $("#hi-lo").html(0);
  });

  $("#btn-initial-balance").click(function(){
    var balance = $("#initial-balance").val();
    $("#balance").html(balance);
  });

  $("#cards-row div").click(function(){
    var remaining = $("#remaining-cards").text();
    var left = $("#left-cards").text();
    remaining = parseInt(remaining) - 1;
    left = parseInt(left) + 1;

    if(remaining > 0) {
      var running_count = $("#running-count").text();
      running_count = parseInt(running_count);

      if($(this).hasClass('plus') && plus > 0) {
        $("#remaining-cards").html(remaining);
        $("#left-cards").html(left);
        $("#running-count").html(running_count + 1);
        plus--;
      } else if($(this).hasClass('minus') && minus > 0) {
        $("#remaining-cards").html(remaining);
        $("#left-cards").html(left);
        $("#running-count").html(running_count - 1);
        minus--;
      } else if($(this).hasClass('neutral') && neutral > 0) {
        $("#remaining-cards").html(remaining);
        $("#left-cards").html(left);
        neutral--;
      }
      var true_count = Math.round(running_count / (remaining * 4 / tot));
      $("#true-count").html(true_count);

    }
  });

  //Player Cards on Table
  $("#player-cards div").click(function(){
    if($('#table-screen > .player-card').length == 0) {
      var clone = $($(this).children()).clone().appendTo('#table-screen');
      $(clone).addClass('player-card');
      $(clone).css({"-webkit-transform":"translate(400px,-150px)", "position":"absolute", "width":"7%", "height":"21%"});
    } else if($('#table-screen > .player-card').length == 1) {
      var clone = $($(this).children()).clone().appendTo('#table-screen');
      $(clone).addClass('player-card');
      $(clone).css({"-webkit-transform":"translate(450px,-150px)", "position":"absolute", "width":"7%", "height":"21%"});
    }
  });
  //Dealer Cards on Table
  $("#dealer-cards div").click(function(){
    if($('#table-screen > .dealer-card').length == 0) {
      var clone = $($(this).children()).clone().appendTo('#table-screen');
      $(clone).addClass('dealer-card');
      $(clone).css({"-webkit-transform":"translate(400px,-400px)", "position":"absolute", "width":"7%", "height":"21%"});
    }
  });
});

</script>