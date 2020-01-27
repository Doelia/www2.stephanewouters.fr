import { TestBed } from '@angular/core/testing';

import { OpenweatherService } from './openweather.service';

describe('OpenweatherService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: OpenweatherService = TestBed.get(OpenweatherService);
    expect(service).toBeTruthy();
  });
});
