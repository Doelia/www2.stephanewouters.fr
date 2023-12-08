import {cos, sin} from "./trigo.js";

export class Turtle {

    constructor(x, y, angle) {
        this.x = x;
        this.y = y;
        this.angle = angle;
    }

    x;
    y;
    angle = 0;

    wiggle(max_angle) {
        this.angle += Math.random() * max_angle;
        this.angle -= Math.random() * max_angle;
    }

    forward(dist = 1) {
        const xTarget = this.x + cos(this.angle) * dist;
        const yTarget = this.y + sin(this.angle) * dist;
        this.x = this.x + cos(this.angle) * dist;
        this.y = this.y + sin(this.angle) * dist;
    }

}
