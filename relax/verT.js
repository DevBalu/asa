var c = document.getElementById("c");
var ctx = c.getContext("2d");

class Point{
	constructor(){
		this.x = Math.floor(Math.random() * c.width);
		this.y = Math.floor(Math.random() * c.height);
		this.radius = Math.floor(Math.random() * 5);
		// this.radius = 5;
		this.vector = {
			'x': Math.floor(Math.random() * 3)-1,
			'y': Math.floor(Math.random() * 3)-1
		};
		this.speed = Math.floor(Math.random() * 3)+ 0;
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
		point.speed = Math.floor(Math.random() * 3) + 0;
	}

	if(point.x >= c.width){
		point.vector.x = -1;
		point.speed = Math.floor(Math.random() * 3) - 1;
	}

	if(!(point.y >= 0)){
		point.vector.y = 1;
		point.speed = Math.floor(Math.random() * 3) + 0;

	}

	if(point.y >= c.height){
		point.vector.y = -1;
		point.speed = Math.floor(Math.random() * 3) - 1;
	}

	point.x = point.x + point.speed + point.vector.x;
	point.y = point.y + point.speed + point.vector.y;
}

function show(point){
	var stopedX = point.speed + point.vector.x;
	var stopedY = point.speed + point.vector.y;

	if (stopedX == 0 || stopedY == 0) {
		point.speed = Math.floor(Math.random() * 3)+ 0;
	}

	ctx.beginPath();
	ctx.arc(point.x, point.y, point.radius,0,2*Math.PI);
	ctx.fill();
}


function drLine(){

}

/*** TEST */
	function motion(nr){
		var arr = countPart(nr);

		setInterval(function(){
			ctx.clearRect(0, 0, c.width, c.height);
			for(let i = 0; i < arr.length; i++){

				update(arr[i])
				show(arr[i]);
			}

		}, .5);
	}
	motion(40);

	console.log(Math.floor(Math.random() * 3) + 0);