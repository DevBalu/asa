import { Component, OnInit } from '@angular/core';
import { ToServService } from '../to-serv.service';
import { Http, Response } from '@angular/http';

@Component({
  selector: 'app-all-orders',
  templateUrl: './all-orders.component.html',
  styleUrls: ['./all-orders.component.css']
})
export class AllOrdersComponent implements OnInit {

    constructor(private _toServ: ToServService, private http: Http) {
        _toServ.allOrders();
    }

    ngOnInit() {
    }

}
