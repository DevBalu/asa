import { TestBed, inject } from '@angular/core/testing';

import { ToServService } from './to-serv.service';

describe('ToServService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [ToServService]
    });
  });

  it('should be created', inject([ToServService], (service: ToServService) => {
    expect(service).toBeTruthy();
  }));
});
