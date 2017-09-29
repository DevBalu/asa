import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule, FormGroup } from '@angular/forms';
import { AppComponent } from './app.component';
import { RouterModule } from '@angular/router';

import { HttpModule } from '@angular/http';

import { OrderComponent } from './order/order.component';
import { ToServService } from './to-serv.service';
import { AllOrdersComponent } from './all-orders/all-orders.component';

@NgModule({
  declarations: [
    AppComponent,
    OrderComponent,
    AllOrdersComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    RouterModule.forRoot([
        {
            path: 'order',
            component: OrderComponent
        },
        {
            path: 'allOrders',
            component: AllOrdersComponent
        }
    ])
  ],
  providers: [ToServService],
  bootstrap: [AppComponent]
})
export class AppModule { }
