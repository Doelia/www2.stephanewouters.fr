import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class OpenweatherService {

  BASE_URL = 'https://api.openweathermap.org/data/2.5/';
  API_KEY = '9baeb2256032eb5d88358aac9577bae7';

  constructor(private client: HttpClient) { }

  getWeather(query: string) {
    return this.client.get(this.BASE_URL + 'weather?q=' + query + '&units=metric&APPID=' + this.API_KEY);
  }
}
