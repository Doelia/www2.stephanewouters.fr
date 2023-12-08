export function toRadians(degrees) {
    return degrees * Math.PI / 180;
}

export function cos(degrees) {
    return Math.cos(toRadians(degrees));
}

export function sin(degrees) {
    return Math.sin(toRadians(degrees));
}

