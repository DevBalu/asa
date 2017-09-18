var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/asadb";


MongoClient.connect(url, function(err, db){
	if(err) throw err;
	var testData = { name: "Zinaida julia", address: "Text lorem"};


	db.collection("newOrder").insert(testData, function(err, res){
		if (err) throw err;
		console.log('Data inserted');
		db.close();
	})
});