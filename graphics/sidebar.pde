int width = 100;
int height = 50;
int round = 10;
int stroke = 2;

string text = "";

void setup() {
    background(0, 0, 0, 0);
    size(width + (stroke * 2), height + (stroke * 2));
    strokeWeight(2);
    fill(145, 255, 145, 175); 
}

void setText(string t) {
    text = t;
}

void draw() {
    rect(stroke, stroke, width, height, round, round, round, round);
	if(t == "hi") {
	println("yo");
	}
}
