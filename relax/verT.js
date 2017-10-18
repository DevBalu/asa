var c = document.getElementById("c");
var ctx = c.getContext("2d");

class Point{
	constructor(){
		this.x = Math.floor(Math.random() * c.width);
		this.y = Math.floor(Math.random() * c.height);
		this.radius = Math.floor(Math.random() * 4) + 1;
		this.vector = {
			'x': Math.floor(Math.random() * 3)-1,
			'y': Math.floor(Math.random() * 3)-1
		};
		this.speed = Math.floor(Math.random() * 3) - 1;
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

function update(point){
	if(!(point.x >= 0)){
		point.vector.x = 1;
		point.speed = Math.floor(Math.random() * 2) + 0;
	}

	if(point.x >= c.width){
		point.vector.x = -1;
		point.speed = Math.floor(Math.random() * 2) - 1;
	}

	if(!(point.y >= 0)){
		point.vector.y = 1;
		point.speed = Math.floor(Math.random() * 2) + 0;

	}

	if(point.y >= c.height){
		point.vector.y = -1;
		point.speed = Math.floor(Math.random() * 2) - 1;
	}

	// if speed plus vector is equal with zero make this 
	var stopedX = point.speed + point.vector.x;
	var stopedY = point.speed + point.vector.y;

	if (stopedX == 0 || stopedY == 0) {
		point.speed = Math.floor(Math.random() * 2)+ 1;
	}

	// update position of point
	point.x = point.x + point.speed + point.vector.x;
	point.y = point.y + point.speed + point.vector.y;
}

function show(point){
	ctx.beginPath();
	ctx.arc(point.x, point.y, point.radius,0,2*Math.PI);
	ctx.fill();
}

function drawLine(ps, pointG){

// test
	// function approximation(pointG, pointC){
	// 	if(pointC.x < pointG.x){
	// 		var frLeft = pointG - 100;
	// 		return  pointG.x - pointC.x * 100 / frLeft;
	// 	}else{
	// 		var frRight = pointG + 100;
	// 		return  pointG.x - pointC.x * 100 / frRight;
	// 	}
	// }

// test

	var leftX = pointG.x - 100;
	var rightX = pointG.x + 100;
	var leftY = pointG.y - 100;
	var rightY = pointG.y + 100;

	for(var j = 0; j < ps.length; j++){
		// var calc = ((pointG.x - ps[j].x) * 100 )/ (pointG.x - (pointG - 100));

		if(ps[j].x > leftX && ps[j].x < rightX & ps[j].y > leftY && ps[j].y < rightY){

			ctx.beginPath();
			ctx.moveTo(pointG.x, pointG.y);
			ctx.lineTo(ps[j].x, ps[j].y);
			ctx.lineWidth = .2;
			ctx.stroke();
		}
	}

}

/*-------------Motion---------------*/
function motion(nrPs, timeInterval){
	var arr = countPart(nrPs);

	setInterval(function(){
		ctx.clearRect(0, 0, c.width, c.height);
		for(let i = 0; i < arr.length; i++){

			drawLine(arr, arr[i]);
			show(arr[i]);
			update(arr[i]);

		}

	}, timeInterval);
}

motion(100, 15);

console.log(Math.floor(Math.random() * 3) - 1);