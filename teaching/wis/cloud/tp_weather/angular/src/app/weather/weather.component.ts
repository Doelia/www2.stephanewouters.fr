import { Component, OnInit } from '@angular/core';
import {OpenweatherService} from '../openweather.service';

@Component({
  selector: 'app-weather',
  templateUrl: './weather.component.html',
  styleUrls: ['./weather.component.css']
})
export class WeatherComponent implements OnInit {

  city: string;
  weatherDatas: any;

  constructor(private api: OpenweatherService) { }

  ngOnInit() {
  }

  loadWeather() {
    this.api.getWeather(this.city).subscribe((data) => {
      this.weatherDatas = data;
    });
  }

}
