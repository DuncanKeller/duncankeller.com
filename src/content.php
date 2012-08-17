<canvas id="contentCanvas" data-processing-sources="graphics/content.pde"></canvas>

<script type = "text/javascript">

    $(document).ready(function() {
        setup("contentCanvas");
    });

    var setup = function(canvas) {
        var tId = 0;
        var pjs = Processing.getInstanceById(canvas);
        if (!pjs) tId=setInterval(function() {
            pjs = Processing.getInstanceById(canvas);
            if (pjs) {
                var w = $("#content").width();
                var h = $("#content").height();
	            pjs.setSize(w, h);
	            clearInterval(tId);
            }
        },1);
    }

    window.onresize = function(event) {
        var pjs = Processing.getInstanceById("contentCanvas");
        var w = $("#content").width();
        var h = $("#content").height();
	    pjs.setSize(w, h);
    }



</script>
