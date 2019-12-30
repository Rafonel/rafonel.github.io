
var triangles = [];
var canvas;
function setup() {
    canvas = createCanvas(windowWidth,windowHeight);
    // canvas.class('hide-on-med-and-up');
    canvas.id('CANVAO');
    canvas.parent('secPerfil');
    setInterval(CreateTriangle,3000);
    angleMode(DEGREES);
    console.log(CountAliveTriangles());
    

}


function draw() {
    clear();
    for (var i = triangles.length - 1; i >= 0; i--) {
        if(triangles[i].isAlive()){
            triangles[i].update();
            triangles[i].show();
        }
    }
}
function CountAliveTriangles(){
    let sum = 0
    for (let i in triangles){
        if (triangles[i].isAlive())
            sum += 1;
    }
    return sum;
}
function CreateTriangle(){
    star = new Triangle();
    append(triangles, star);
}
function windowResized() {
    resizeCanvas(windowWidth, windowHeight);
  }