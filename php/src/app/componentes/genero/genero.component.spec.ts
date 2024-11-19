import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GeneroComponent } from './genero.component';

describe('GeneroComponent', () => {
  let component: GeneroComponent;
  let fixture: ComponentFixture<GeneroComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [GeneroComponent]
    });
    fixture = TestBed.createComponent(GeneroComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
