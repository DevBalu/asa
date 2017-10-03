import { Component, OnInit} from '@angular/core';
import { ToServService } from '../to-serv.service';
import { Http, Response } from '@angular/http';
// import {empty} from "rxjs/Observer";
@Component({
    selector: 'app-order',
    templateUrl: './order.component.html',
    styleUrls: ['./order.component.css'],
    providers: [ToServService]
})

export class OrderComponent {
  public http: Http;


  submitForm(form: any): void {
      if(form.brandCar != '') {
          let url  = 'http://127.0.0.1:8000/newOrder/' + form.brandCar + '/';

          this.http.get(url).subscribe(
              (data) => {
                console.log(data);
              }, (err) => {
                  console.log('Something went wrong');
              }
          );

      }
  }


  constructor(_toServ: ToServService, http: Http) {
        this.http = http;
  }

}
