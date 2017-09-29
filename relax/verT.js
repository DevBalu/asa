var c = document.getElementById("c");
var ctx = c.getContext("2d");

class Point{
	constructor(){
		this.x = Math.floor(Math.random() * c.width);
		this.y = Math.floor(Math.random() * c.height);
		this.radius = Math.floor(Math.random() * 5);
	}

	// get Dest(){
	// 	return this.calcAny();
	// }

	// calcAny(){
	// 	return this.x * this.y;
	// }
}



const point = new Point();

console.log(point);