import { TestBed } from '@angular/core/testing';

import { CargosService } from './cargo.service';

describe('CargosService', () => {
  let service: CargosService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(CargosService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
