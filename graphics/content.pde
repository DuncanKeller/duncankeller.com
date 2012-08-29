int round = 5;
int stroke = 2;
int fontSize = 12;
int width = 0;
int height = 0;

string title = "";

void setup() {
    background(0, 0, 0, 0);
    //size(width + (stroke * 2), height + (stroke * 2));
    strokeWeight(2);
    //PFont font = loadFont("formplex12.ttf"); 
    //textFont(font, fontSize); 
}

void setText(string t) {
    title = t;
}

void setSize(int w, int h) {
    width = w;
    height = h;
    size(width + (stroke * 2), height + (stroke * 2));
}


void draw() {
    fill(145, 255, 145, 175); 
    rect(stroke, stroke, width, height, round, round, round, round);
    //fill(0, 0, 0);
    //text(title, (width / 2) - (textWidth(title) / 2), (height / 2) + (fontSize / 2));
}
