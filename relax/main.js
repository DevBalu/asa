

var c = document.getElementById("c");
var ctx = c.getContext("2d");

var results = [];

// genering count of points
function nrPoints(nr){
	for(var i = 0; i < nr; i++){
		var obj = {
			'x': Math.floor(Math.random() * c.width),
			'y': Math.floor(Math.random() * c.height),
			'radius': Math.floor(Math.random() * 5),
			'activeX' : "",
			'activeY' : ""
		}

		if(i%5 == 0){
			obj.activeX = "left";
		}else{
			obj.activeX = "right";
		}

		if(i%3 == 1){
			obj.activeY = "top";
		}else{
			obj.activeY = "bottom";
		}

		// switch (i%3) {
		// 	case 0:
		// 		obj.activeX = "left";
		// 		obj.activeY = "top";
		// 	case 1:
		// 		obj.activeX = "right";
		// 		obj.activeY = "bottom";
		// 	case 2:
		// 		obj.activeX = "right";
		// 		obj.activeY = "top";
		// 	case 3:
		// 		obj.activeX = "left";
		// 		obj.activeY = "bottom";
		// }

		results.push(obj);
	}
}
nrPoints(10);

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
			if(/*results[i].x != 0 && results[i].x != c.width && results[i].activeX != 'right' || */results[i].activeX == 'left'){
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
			if(/*results[i].y != 0 && results[i].y != c.height && results[i].activeY != 'bottom' || */results[i].activeY == 'top'){
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

}, 13);


function drawAllPoints(arr){
	for(var i = 0; i < arr.length; i++){
		draw(arr[i].x, arr[i].y, arr[i].radius);

		let radX = arr[i].x + 20;

		for(let j = 0; j < arr.length; j++){
			if(arr[j].x < radX){
				ctx.beginPath();
				ctx.moveTo(arr[i].x, arr[i].y);
				ctx.lineTo(arr[j].x,arr[j].y);
				ctx.stroke();
			}
		}

	}
}

setInterval(function(){
	ctx.clearRect(0, 0, c.width, c.height);
	drawAllPoints(results);
}, 16);
