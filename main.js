let $ = require('jquery');
require('electron-reload')(__dirname);
const {app, BrowserWindow} = require('electron');
const path = require('path');
const url = require('url');


let win;

function createWindow () {
	win = new BrowserWindow({width: 800, height: 800});
	win.loadURL('http://localhost:4200');
}

app.on('ready', createWindow);