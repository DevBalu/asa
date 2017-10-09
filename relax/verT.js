var c = document.getElementById("c");
var ctx = c.getContext("2d");

class Point{
	constructor(){
		this.x = Math.floor(Math.random() * c.width);
		this.y = Math.floor(Math.random() * c.height);
		// this.radius = Math.floor(Math.random() * 5);
		this.radius = 5;
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
	}

	if(point.x > c.width || point.x == c.width){
		point.vector.x = -1;
	}

	if(!(point.y >= 0)){
		point.vector.y = 1;
	}

	if(point.y >= c.height){
		point.vector.y = -1;
	}

	point.x = point.x + point.speed + point.vector.x;
	point.y = point.y + point.speed + point.vector.y;
}

function show(point){
	// var stoped = point.speed + point.vector.x;
	// if (stoped <= 0) {
	// 	point.vector.x = Math.floor(Math.random() * 3)-1;
	// }

	ctx.beginPath();
	ctx.arc(point.x, point.y, point.radius,0,2*Math.PI);
	ctx.fill();
}

/*** TEST */
	function motion(nr){
		var arr = countPart(nr);
		setInterval(function(){
			ctx.clearRect(0, 0, c.width, c.height);
			for(let i = 0; i < arr.length; i++){
				console.log(arr[i].vector.x);
				update(arr[i])
				show(arr[i]);
			}

		}, .5)
	}
	motion(1);

/**/

// function drawPart(nr){
// 	// gen arr with particles
// 	var arr = countPart(nr);
// 	console.log(arr);

// 	setInterval(function(){
// 		ctx.clearRect(0, 0, c.width, c.height);
// 		for(var i = 0; i < arr.length; i++){

// 			if(arr[i].x == c.width || arr[i].x > c.width){
// 				arr[i].vector.x = -1;
// 				updateX(arr[i]);
// 			}else if(arr[i].x == 0 || arr[i].x < c.width){
// 				arr[i].vector.x = 1;
// 				updateX(arr[i]);
// 			}else {
// 				updateX(arr[i]);
// 			}

// 			if(arr[i].y == c.height || arr[i].y > c.height){
// 				arr[i].vector.y = -1;
// 				updateY(arr[i]);
// 			}else if(arr[i].y == 0 || arr[i].y < 0){
// 				arr[i].vector.y = 1;
// 				updateY(arr[i]);
// 			}else{
// 				updateY(arr[i]);
// 			}
// 			show(arr[i]);
// 		}

// 	}, .5)
// }

// drawPart(50);