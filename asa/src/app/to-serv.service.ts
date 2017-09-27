import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';

@Injectable()
export class ToServService {
    private url = 'http://localhost:8000/newOrder';

    newOrder(arg: any) {
        this.http.post(this.url, arg);
    }

    constructor(private http: Http) {

    }
}
