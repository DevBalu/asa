/*
*In this file we :
*	created db;
*	create collection;
*
*
*/

var MongoClient = require('mongodb').MongoClient , assert = require('assert');
var url = "mongodb://localhost:27017/asadb";

MongoClient.connect(url, function(err, db) {
	if(err) throw err;
	
	/*creating new collection*/
	var newCol  = function(nameColl){
		db.createCollection('"' + nameColl + '"', function(err, res){
			if(err) throw err;
			console.log('Collection created!');
		});
	}

	/*find all documents from collection*/
	var findAllDocs = function(nameColl){
		var res = db.collection(nameColl).find({}).each(function(err, res){
			console.log(res);
		});
	};

	findAllDocs('newOrder');

	db.close();
});