import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AbaotComponent } from './abaot.component';

describe('AbaotComponent', () => {
  let component: AbaotComponent;
  let fixture: ComponentFixture<AbaotComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [AbaotComponent]
    });
    fixture = TestBed.createComponent(AbaotComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
