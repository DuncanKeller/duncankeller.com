int width = 100;
int height = 70;
int round = 5;

void setup() {
    size(width, height);
    strokeWeight(2);
    //fill(0, 100, 0, 175); 
    fill(100);
}

void draw() {
    //rect(0, 0, width, height, round, round, round, round);
    rect(0, 0, width, height);
    println("Hello ErrorLog!");
}
