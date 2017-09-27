

var c = document.getElementById("c");
var ctx = c.getContext("2d");

var xc = 1;
var yc = 100;
var activeX = "";
var activeY = "";



// 
var results = [
	{
		'x': Math.random() * 50,
		'y': Math.random() * 60 
	},
	{
		'x': Math.random() * 40,
		'y': Math.random() * 70
	}
];


function draw(x, y){
	ctx.beginPath();
	ctx.arc(x, y, 10,0,2*Math.PI);
	ctx.fill();
}

// 


function leftToRight(x){
	ctx.clearRect(0, 0, c.width, c.height);

	ctx.beginPath();
	ctx.arc(x, yc, 10,0,2*Math.PI);
	ctx.fill();

	xc++;
}

function rightToLeft(x){
	ctx.clearRect(0, 0, c.width, c.height);

	ctx.beginPath();
	ctx.arc(x, yc, 10,0,2*Math.PI);
	ctx.fill();

	xc--;
}

function topToBottom(y){
	ctx.clearRect(0, 0, c.width, c.height);

	ctx.beginPath();
	ctx.arc(xc, y, 10,0,2*Math.PI);
	ctx.fill();

	yc++;
}

function bottomToTop(y){
	ctx.clearRect(0, 0, c.width, c.height);

	ctx.beginPath();
	ctx.arc(xc, y, 10,0,2*Math.PI);
	ctx.fill();

	yc--;
}



setInterval(function(){
	(function(){
// horizontal
		if(xc != 0 && xc != c.width && activeX != 'right' || activeX == 'left'){
			leftToRight(xc);
			if(xc == c.width){
				activeX = 'right';
			}
		}

		if (activeX == 'right'){
			activeX = 'right';
			rightToLeft(xc);

			if(xc == 0){
				activeX = "left";
			}
		}
// vertical
		if(yc != 0 && yc != c.height && activeY != 'bottom' || activeY == 'top'){
			topToBottom(yc);
			if(yc == c.height){
				activeY = 'bottom';
			}
		}

		if (activeY == 'bottom'){
			bottomToTop(yc);

			if(yc == 0){
				activeY = "top";
			}
		}

	})();

}, .5);


function test(arr){
	for(var i = 0; i < arr.length; i++){
		draw(arr[i].x, arr[i].y);
	}
}



test(results);