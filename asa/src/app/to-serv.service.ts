import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class ToServService {
    public results;

    newOrder(arg: any) {
        const url = 'http://localhost:8000/newOrders';
        this.http.post(url, arg);
    }
    allOrders() {
        const url = 'http://localhost:8000/allOrders';
        this.http.get(url).subscribe(response => this.results = JSON.parse(response.json()));

        console.log(this.results);
    }

    constructor(private http: Http) {

    }

}
