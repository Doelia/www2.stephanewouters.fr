import { Component } from '@angular/core';
import {OpenweatherService} from "./openweather.service";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  city: string;
  weatherDatas: any;

  constructor(private api: OpenweatherService) { }

  loadWeather() {
    this.api.getWeather(this.city).subscribe((data) => {
      this.weatherDatas = data;
    });
  }
}
