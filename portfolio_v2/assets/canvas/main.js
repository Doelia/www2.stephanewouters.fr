import {Turtle} from "./turtle.js";
import {initCanvas} from "./canvas.js";

const entities = {
    ref: {
        ants: [],
        fishes: [],
    }
};

function initEvents() {
    function turtleFactory(e) {
        const x = e.target.getBoundingClientRect().right - 10;
        const y = e.target.getBoundingClientRect().top + 10;
        const turtle = new Turtle(x, y, 0);
        turtle.wiggle(90);
        return turtle;
    }

    document.querySelectorAll('.canvas-turtle-trigger').forEach(el => {
        let interval = null;
        const turtle_type = el.dataset.turtle_type;
        el.addEventListener('mouseover', function(e) {
            let pop = () => entities.ref[turtle_type].push(turtleFactory(e));
            interval = setInterval(pop, 600);
            pop();
        });
        el.addEventListener('mouseout', function(e) {
            clearInterval(interval);
            entities.ref[turtle_type] = [];
        });
    })

}

function initEngine() {
    function tick() {
        for (let t of entities.ref.ants) {
            t.wiggle(20);
            t.forward(3);
        }
        for (let t of entities.ref.fishes) {
            t.wiggle(10);
            t.forward(2);
        }
    }

    setInterval(tick, 1000/60);

}

addEventListener("turbo:load", (event) => {
    console.log('canvas.initEvents');
    initEvents();
})

initCanvas({entities});
initEngine();

