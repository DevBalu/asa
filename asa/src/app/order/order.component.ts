import { Component, OnInit} from '@angular/core';
import { ToServService } from '../to-serv.service';
import { Http, Response } from '@angular/http';
@Component({
    selector: 'app-order',
    templateUrl: './order.component.html',
    styleUrls: ['./order.component.css'],
    providers: [ToServService]
})

export class OrderComponent {

  submitForm(form: any): void {
        this._toServ.newOrder(form.brandCar);

        if (form.brandCar != ''){
            console.log(form.brandCar);
            alert('Data successfully saved!');
         }else {
            alert('Fields are not filled');
         }
  }

  constructor(private _toServ: ToServService, private http: Http) {

  }

}
