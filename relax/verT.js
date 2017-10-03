var c = document.getElementById("c");
var ctx = c.getContext("2d");

class Point{
	constructor(){
		this.x = Math.floor(Math.random() * c.width);
		this.y = Math.floor(Math.random() * c.height);
		this.radius = Math.floor(Math.random() * 5);
		this.vector = {
			'x': Math.floor(Math.random() * 3)-1,
			'y': Math.floor(Math.random() * 3)-1
		};
		this.speed = Math.floor(Math.random() * 2);
	}
}

function countPart(nr) {
	var arrPart = [];

	for (var i = 0; i < nr; i++) {
		let point = new Point();
		arrPart.push(point);
	}
	return arrPart;
}

function updateX(point, mth){
	if(mth == 1){
		point.x = point.x + point.speed + point.vector.x;
	}

	if(mth == 0){
		point.x = point.x - point.speed - point.vector.x;
	}
}

function updateY(point, mth){
	if(mth == 1){
		point.y = point.y + point.speed + point.vector.y;
	}
	if(mth == 0){
		point.y = point.y - point.speed - point.vector.y;
	}
}


function show(point){
	ctx.beginPath();
	ctx.arc(point.x, point.y, point.radius,0,2*Math.PI);
	ctx.fill();
}


function drawPart(nr){
	// gen arr with particles
	var arr = countPart(nr);
	console.log(arr);

	setInterval(function(){
		ctx.clearRect(0, 0, c.width, c.height);
		for(var i = 0; i < arr.length; i++){

			if(arr[i].x == c.width || arr[i].x > c.width){
				arr[i].vector.x-= 3;
				updateX(arr[i], 0);
			}else if(arr[i].x == 0 || arr[i].x < 0){
				arr[i].vector.x+= 3
				updateX(arr[i], 1);
			}else{
				updateX(arr[i], 1);
			}

			if(arr[i].y == c.height || arr[i].y > c.height){
				updateY(arr[i], 0);
				arr[i].vector.y -= 3;
			}else if(arr[i].y == 0 || arr[i].y < 0){
				arr[i].vector.y+=3
				updateY(arr[i], 1);
			}else{
				updateY(arr[i], 1);
			}

			show(arr[i]);
		}

	}, .5)
}

drawPart(50);