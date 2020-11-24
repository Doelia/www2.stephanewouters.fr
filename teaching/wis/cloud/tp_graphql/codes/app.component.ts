import { Component } from '@angular/core';
import {GraphqlService} from '../graphql.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  hotelsDatas: any;

  constructor(private client: GraphqlService) {
    this.client.getHotels().subscribe((data) => {
      this.hotelsDatas = data.hotels;
    });
  }

}
