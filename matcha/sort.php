<?php
    session_start();
    include('config/db.php');
    include('funcs/classes.php');
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $user_id = $_SESSION['id'];


    if ($_SESSION["page"] == "filter_age_rate"){
        $p->filter_age_rate($user_id);
    }elseif($_SESSION["page"] == "filter_loc_com"){
        $p->filter_loc_com($user_id);
    }elseif($_SESSION["page"] == "friends"){
        $p->friends($user_id);
    }
?>

                            <form class="form-group" method="POST" action="#">
                                <div class="form-group">
                                    <h4>Filter friends by:</h4>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio5" value="sortAge" id="ageS" onclick="showBox('ageS')">Age</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio5" value="sortLocation" id="locS" onclick="changeView('locS')">Location</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio5" value="sortFame" id="fameS" onclick="showBox('fameS')">Fame-Rating</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio5" value="sortTags" id="comS" onclick="changeView('comS')">Common Tags</label>
                                    <br>
                                </div>
                                <div class="form-group" id="box" style="visibility: hidden; display:none">
                                    <h4>Enter range on the textarea:</h4>
                                    <input type="number" id="min" class="form-control" name="filterlower" placeholder="Enter minimum number"><br>
                                    <input type="number" id="max" class="form-control" name="filterhigher" placeholder="Enter maximum number"><br>
                                </div>
                                <button class="btn btn-secondary btn-default" type="submit" name="submit" value="selectFilter">Apply Filter</button>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="js/bootstrap.min.js"></script>
		<script>
			function showBox(id) {
                var x = document.getElementById("box");
				var min = document.getElementById("min");
				var max = document.getElementById("max");

                if (id == "ageS"){
                    var y = document.getElementById("ageS");
                }else if (id == "fameS"){
                    var y = document.getElementById("fameS");
                }

                if (x.style.visibility === "visible") {
                    x.style.visibility = "hidden";
                    x.style.display = "none";
                    y.checked = false;
                } else {
                    x.style.visibility = "visible";
                    x.style.display = "inline";
					min.required = true;
					max.required = true;
                    y.checked = true;
                }
            }

			function changeView(id){
                var x = document.getElementById("box");
				var y = document.getElementById(id);
				var min = document.getElementById("min");
				var max = document.getElementById("max");
				
				if (x.style.visibility === "visible") {
                    x.style.visibility = "hidden";
                    x.style.display = "none";
					min.required = false;
					max.required = false;
                }
				y.checked = true;
			}

			$('#ageSort').click(function(){
                $.ajax({
                    url : 'sort.php',
                    method : 'POST',
                    data : {order: "age"},
                    success : function(data){
						$('#sort').html("");
						$('#sort').html(data);
                    },
                    error : function(){alert('Failed to sort');},
                    complete : function(){console.log('complete age');}
                });
			});
			
			$('#locSort').click(function(){
                $.ajax({
                    url : 'sort.php',
                    method : 'POST',
                    data : {order: "town"},
                    success : function(data){
						$('#sort').html("");
						$('#sort').html(data);
                    },
                    error : function(){alert('Failed to sort');},
                    complete : function(){console.log('complete location');}
                });
			});
			
			$('#fameSort').click(function(){
                $.ajax({
                    url : 'sort.php',
                    method : 'POST',
                    data : {order: "famerating"},
                    success : function(data){
						$('#sort').html("");
						$('#sort').html(data);
                    },
                    error : function(){alert('Failed to sort');},
                    complete : function(){console.log('complete fame');}
                });
			});
			
			$('#tagSort').click(function(){
                $.ajax({
                    url : 'sort.php',
                    method : 'POST',
                    data : {order: ""},
                    success : function(data){
						$('#sort').html("");
						$('#sort').html(data);
                    },
                    error : function(){alert('Failed to sort');},
                    complete : function(){console.log('complete tag');}
                });
            });
		</script>
	</body>

</html>
