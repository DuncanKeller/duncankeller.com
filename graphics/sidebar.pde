int width = 100;
int height = 50;
int round = 0;
int stroke = 2;
int fontSize = 16;

string title = "";

void setup() {
    background(0, 0, 0, 0);
    size(width + (stroke * 2), height + (stroke * 2));
    strokeWeight(2);
    PFont font = loadFont("formplex12.ttf"); 
    textFont(font, fontSize); 
    while(textWidth(title) > width / 0.8) {
	fontSize--;
        textFont(font, fontSize); 
    }
}

void setText(string t) {
    title = t;
}

void draw() {
    fill(145, 255, 145, 175); 
    rect(stroke, stroke, width, height, round, round, round, round);
    fill(0, 0, 0);
    text(title, (width / 2) - (textWidth(title) / 2), (height / 2) + (fontSize / 2));
}
