import {ChangeDetectorRef, Component, OnInit} from '@angular/core';
import { Http, Response } from '@angular/http';

@Component({
    selector: 'app-all-orders',
    templateUrl: './all-orders.component.html',
    styleUrls: ['./all-orders.component.css']
})
export class AllOrdersComponent {
    public cars = [];
    public http: Http;

    constructor(http: Http, cd: ChangeDetectorRef) {
        http.get('http://127.0.0.1:8000/allOrders')
            .flatMap((data) => data.json())
            .map((car) => car)
            .subscribe((data) => {
                this.cars.push(data);

                cd.detectChanges();
            });

        this.http = http;
    }


    rmOrder(id: string): void {

        let url  = 'http://127.0.0.1:8000/rmOrder/' + id + '/';

        this.http.get(url).subscribe(
            (data) => {
                console.log(data);
            }, (err) => {
                console.log('Something went wrong');
            }
        );
    }

}