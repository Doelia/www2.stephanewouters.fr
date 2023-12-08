import {toRadians} from "./trigo.js";

export function initCanvas({entities}) {
    const canvas = document.getElementById('canvas');

    window.addEventListener('resize', function() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    });
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    const ctx = canvas.getContext('2d');
    const image_ant = document.getElementById('ant');
    const image_fish = document.getElementById('fish');

    function render() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        for (let t of entities.ref.ants) {
            rotateAndPaintImage(ctx, image_ant, toRadians(t.angle), t.x, t.y, 8, 8);
        }
        for (let t of entities.ref.fishes) {
            rotateAndPaintImage(ctx, image_fish, toRadians(t.angle), t.x, t.y, 80/5, 50/5);
        }
        requestAnimationFrame(render);
    }
    render();
}

function rotateAndPaintImage(context, image, angleInRad, positionX, positionY, width, height) {
    context.translate(positionX, positionY);
    context.rotate( angleInRad);
    context.drawImage( image, -width/2, -height/2, width, height);
    context.rotate(-angleInRad);
    context.translate(-positionX, -positionY);
}
