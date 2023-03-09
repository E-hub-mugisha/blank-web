<div class="about-content-area bg-gray default-padding-bottom">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <div class="fun-fact-list mt-5">
                    <div onload="get()">
                        <a class="twitter-timeline" href="https://twitter.com/BlankRW" data-widget-id="607309030952861696">Tweets by @blank</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 info">
                <div class="top-info">
                    <h2>Trust the Experts for All Your business Needs</h2>
                    <p>
                        Talking justice welcome message inquiry in started of am me. Led own hearted highest visited lasting sir through compass his. Guest tiled he quick by so these trees am.
                    </p>
                    <div class="row align-center">
                        <div class="col-lg-6">
                            <ul>
                                <li>The Best Services</li>
                                <li>Free Consultation</li>
                                <li>24/7 Free support</li>
                            </ul>
                        </div>
                        <!-- <div class="col-lg-6">
                            <h4>25 <span>Years of experience</span></h4>
                        </div> -->
                    </div>
                    <a class="btn-animation border dark" href="/service" data-animation="animated slideInUp">Discover More <i class="arrow_right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    //twitter stuff
    !(function(d, s, id) {
        var js,
            fjs = d.getElementsByTagName(s)[0],
            p = /^http:/.test(d.location) ? "http" : "https";
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + "://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    })(document, "script", "twitter-wjs");

    //new css values
    var newCSS =
        "" +
        ".p-nickname{color:orange;}" +
        ".e-entry-title{color:purple;}" +
        ".dt-updated{color:red; text-shadow:2px 2px 10px black;}";

    //function to apply to the iframe
    function get() {
        fr = document.getElementById("twitter-widget-0").contentDocument;
        var cssStyle = document.createElement("style");
        cssStyle.innerHTML = newCSS;
        cssStyle.type = "text/css";
        fr.head.appendChild(cssStyle);
    }

    //could could also link an external css file

    /*
    function get(){
    	fr = document.getElementById("twitter-widget-0").contentDocument;
    	var cssLink = document.createElement("link")
    	cssLink.href = "style.css";
    	cssLink .rel = "stylesheet";
    	cssLink .type = "text/css";
    	fr.head.appendChild(cssLink);
    }
    */
</script>