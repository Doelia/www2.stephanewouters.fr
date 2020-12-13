import { Component } from '@angular/core';
import {GraphqlService} from "./graphql.service";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  hotelsDatas;

  constructor(private client: GraphqlService) {
    this.loadConcerts();
  }

  loadConcerts() {
    this.client.getHotels().subscribe((data) => {
      this.hotelsDatas = data.hotels;
    });
  }

  createConcert() {
    this.api.createConcert().subscribe((data) => {
      this.api.publishConcert(data.id).subscribe(() => {
        this.loadConcerts();
      });
    });
  }

}
