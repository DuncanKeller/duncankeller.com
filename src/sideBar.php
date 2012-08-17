<div class = "button" >
	<a href = "#"><canvas id="aboutCanvas" data-processing-sources="graphics/sidebar.pde"></canvas></a>
</div>
<div class = "button" >
	<a href = "#"><canvas id="gamesCanvas" data-processing-sources="graphics/sidebar.pde"></canvas></a>
</div>
<div class = "button" >
	<a href = "#"><canvas id="resumeCanvas" data-processing-sources="graphics/sidebar.pde"></canvas></a>
</div>
<div class = "button" >
	<a href = "#"><canvas id="achivementsCanvas" data-processing-sources="graphics/sidebar.pde"></canvas></a>
</div>
<div class = "button" >
	<a href = "https://github.com/DuncanKeller" target="_blank"><canvas id="githubCanvas" data-processing-sources="graphics/sidebar.pde"></canvas></a>
</div>

<script type = "text/javascript">

var currentMenu = "";
var locked = false;

$(document).ready(function() {
    setupButton("about", "aboutCanvas");
    setupButton("games", "gamesCanvas");
    setupButton("resume", "resumeCanvas");
    setupButton("achivements", "achivementsCanvas");
    setupButton("github", "githubCanvas");
    addHiding("aboutCanvas", "src/about");
    addHiding("gamesCanvas", "src/about");
    addHiding("resumeCanvas", "src/about");
    addHiding("achivementsCanvas", "src/about");
    //addHiding("githubCanvas");
});

var setupButton = function(text, canvas) {
    var tId = 0;
    var pjs = Processing.getInstanceById(canvas);
    if (!pjs) tId=setInterval(function() {
        pjs = Processing.getInstanceById(canvas);
        if (pjs) {
	        pjs.setText(text);
	        clearInterval(tId);
        }
    },1);
}


var setContent = function(file) {

    $("#innerContentText").innerHTML = "";
    $("#innerContentText").load(file + ".php");
    console.log($("#innerContentText").innerHTML);

    var pane = $(".scroll-pane");
    var api = pane.data("jsp");
    api.reinitialise();

    $("#content").animate({
        marginTop: "60px"
    }, 300, function() {
        // Animation complete.
    });
    
}

var switchContent = function(file) {
    $("#content").animate({
        marginTop: ($(document).height())
    }, 300, function() {
        // Animation complete.
        setContent(file);
    });
    //console.log($("#innerContentText")).innerHTML;
}


var addHiding = function(canvas, file) {
    $("#" + canvas).click(function() {
        // restore hidden tab
        if(currentMenu != "" && currentMenu != canvas && !locked) {
            setContent(file);
            var pane = $(".scroll-pane");
            var api = pane.data("jsp");
            api.reinitialise();
	        $("#" + currentMenu).animate({
	            marginLeft: '+=80',
	        }, 400, function() {
	            // Animation complete.
            });
            
        }
        // hide clicked tab
        if(currentMenu != canvas && !locked) {
	        locked = true;
            switchContent(file);
	        $("#" + canvas).animate({
	            marginLeft: '-=80'
	        }, 400, function() {
	            // Animation complete.
	            currentMenu = canvas;
		        locked = false;
            });
            
	    }
    });

}



 
</script>
