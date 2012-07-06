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
	<a href = "https://github.com/DuncanKeller"><canvas id="githubCanvas" data-processing-sources="graphics/sidebar.pde"></canvas></a>
</div>

<script type = "text/javascript">


$(document).ready(function() {
    setupButton("about", "aboutCanvas");
    setupButton("games", "gamesCanvas");
    setupButton("resume", "resumeCanvas");
    setupButton("achivements", "achivementsCanvas");
    setupButton("github", "githubCanvas");
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

 
</script>
