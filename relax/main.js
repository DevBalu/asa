

var c = document.getElementById("c");
var ctx = c.getContext("2d");

var results = [];

// genering count of points
function nrPoints(nr){
	for(var i = 0; i < nr; i++){
		var obj = {
			'x': Math.floor(Math.random() * c.width),
			'y': Math.floor(Math.random() * c.height),
			'radius': Math.floor(Math.random() * 7),
			'activex' : "",
			'activeY' : ""
		}

		results.push(obj);
	}
}
nrPoints(100);

console.log(results);
// 


function draw(x, y, radius){
	ctx.beginPath();
	ctx.arc(x, y, radius,0,2*Math.PI);
	ctx.fill();
}

function leftToRight(arg){
		arg.x++;
}

function rightToLeft(arg){
		arg.x--;
}

function topToBottom(arg){
		arg.y++;
}

function bottomToTop(arg){
		arg.y--;
}


setInterval(function(){
	(function(){

		for(var i = 0; i < results.length; i++){
			// horizontal
			if(results[i].x != 0 && results[i].x != c.width && results[i].activeX != 'right' || results[i].activeX == 'left'){
				leftToRight(results[i]);
				if(results[i].x == c.width){
					results[i].activeX = 'right';
				}
			}

			if (results[i].activeX == 'right'){
				results[i].activeX = 'right';
				rightToLeft(results[i]);

				if(results[i].x == 0){
					results[i].activeX = "left";
				}
			}
			// vertical
			if(results[i].y != 0 && results[i].y != c.height && results[i].activeY != 'bottom' || results[i].activeY == 'top'){
				topToBottom(results[i]);
				if(results[i].y == c.height){
					results[i].activeY = 'bottom';
				}
			}

			if (results[i].activeY == 'bottom'){
				bottomToTop(results[i]);

				if(results[i].y == 0){
					results[i].activeY = "top";
				}
			}

		}


	})();

}, 3);


function drawAllPoints(arr){
	for(var i = 0; i < arr.length; i++){
		draw(arr[i].x, arr[i].y, arr[i].radius);
	}
}

setInterval(function(){
	ctx.clearRect(0, 0, c.width, c.height);
	drawAllPoints(results);
}, 5);
