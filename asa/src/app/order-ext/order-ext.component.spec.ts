import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { OrderExtComponent } from './order-ext.component';

describe('OrderExtComponent', () => {
  let component: OrderExtComponent;
  let fixture: ComponentFixture<OrderExtComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ OrderExtComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(OrderExtComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
