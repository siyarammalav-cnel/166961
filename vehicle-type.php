<?php
    // List of allowed domains
    // $allowedHost = 'readyforyourreview.com';
    // $allowedPath = '/Green5M/';

    // // Get the referer domain
    // $referer = $_SERVER['HTTP_REFERER'] ?? '';
    // $refererHost = parse_url($referer, PHP_URL_HOST);
    // $refererPath = parse_url($referer, PHP_URL_PATH);

    // // Check if the referer domain and path match the allowed ones
    // if ($refererHost !== $allowedHost || strpos($refererPath, $allowedPath) !== 0) {
    //     // If the referer is not allowed, display an error message or exit
    //     echo 'Access denied.';
    //     exit;
    // }


    // Include WordPress configuration file to get access to the database
    include 'wp-config.php';

    // Function to fetch distinct values from a column based on conditions
    function get_distinct_makes() {
        global $wpdb;
        $query = "SELECT DISTINCT Make FROM dyno_chiptuning";
        $results = $wpdb->get_results($query, ARRAY_A);
        return $results ? array_column($results, 'Make') : [];
    }

    // Handle AJAX requests
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'get_models':
                $make = sanitize_text_field($_GET['make']);
                $query = $wpdb->prepare("SELECT DISTINCT Model FROM dyno_chiptuning WHERE Make = %s", $make);
                $results = $wpdb->get_results($query, ARRAY_A);
                echo json_encode($results ? array_column($results, 'Model') : []);
                break;

            case 'get_generations':
                $make = sanitize_text_field($_GET['make']);
                $model = sanitize_text_field($_GET['model']);
                $query = $wpdb->prepare("SELECT DISTINCT Generation FROM dyno_chiptuning WHERE Make = %s AND Model = %s", $make, $model);
                $results = $wpdb->get_results($query, ARRAY_A);
                echo json_encode($results ? array_column($results, 'Generation') : []);
                break;

            case 'get_engines':
                $make = sanitize_text_field($_GET['make']);
                $model = sanitize_text_field($_GET['model']);
                $generation = sanitize_text_field($_GET['generation']);
                $query = $wpdb->prepare("SELECT DISTINCT Engine FROM dyno_chiptuning WHERE Make = %s AND Model = %s AND Generation = %s", $make, $model, $generation);
                $results = $wpdb->get_results($query, ARRAY_A);
                echo json_encode($results ? array_column($results, 'Engine') : []);
                break;

            default:
                echo json_encode([]);
        }
        exit;
    }

    if (isset($_POST['action']) && $_POST['action'] == 'post_tuning_options') {
        $make = $_POST['Make'];
        $model = $_POST['Model'];
        $generation = $_POST['Generation'];
        $engine = $_POST['Engine'];
        
        $query = $wpdb->prepare(
            "SELECT * FROM dyno_chiptuning WHERE Make = %s AND Model = %s AND Generation = %s AND Engine = %s",
            $make, $model, $generation, $engine
        );
        $results = $wpdb->get_results($query, ARRAY_A);
    
        echo json_encode(['status' => 'success', 'data' => $results]);
        exit;
    }

    // Fetch initial distinct values for makes
    $makes = get_distinct_makes();
?>

<!-- default script -->
<script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/readyforyourreview.com\/Green5M\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.3"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<script src="https://readyforyourreview.com/Green5M/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script src="https://readyforyourreview.com/Green5M/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script src="https://readyforyourreview.com/Green5M/wp-content/themes/automobile-car-shop/js/wow.js?ver=6.5.3" id="automobile-car-shop-jquery-wow-js"></script>
<script>
    ( function() {
        window.onpageshow = function( event ) {
            // Defined window.wpforms means that a form exists on a page.
            // If so and back/forward button has been clicked,
            // force reload a page to prevent the submit button state stuck.
            if ( typeof window.wpforms !== 'undefined' && event.persisted ) {
                window.location.reload();
            }
        };
    }() );
</script>
<script id="wp-load-polyfill-importmap">
( HTMLScriptElement.supports && HTMLScriptElement.supports("importmap") ) || document.write( '<script src="https://readyforyourreview.com/Green5M/wp-includes/js/dist/vendor/wp-polyfill-importmap.min.js?ver=1.8.2"></scr' + 'ipt>' );
</script>
<script type="importmap" id="wp-importmap">
{"imports":{"@wordpress\/interactivity":"https:\/\/readyforyourreview.com\/Green5M\/wp-includes\/js\/dist\/interactivity.min.js?ver=6.5.3"}}
</script>
<script type="module" src="https://readyforyourreview.com/Green5M/wp-includes/blocks/navigation/view.min.js?ver=6.5.3" id="@wordpress/block-library/navigation-js-module"></script>
<script>
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

				request = true;
	
			b[c] = b[c].replace( rcs, ' ' );
			// The customizer requires postMessage and CORS (if the site is cross domain).
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	
</script>
<script src="https://readyforyourreview.com/Green5M/wp-includes/js/hoverintent-js.min.js?ver=2.2.1" id="hoverintent-js-js"></script>
<script src="https://readyforyourreview.com/Green5M/wp-includes/js/admin-bar.min.js?ver=6.5.3" id="admin-bar-js"></script>
<script id="wp-block-template-skip-link-js-after">
	( function() {
		var skipLinkTarget = document.querySelector( 'main' ),
			sibling,
			skipLinkTargetID,
			skipLink;

		// Early exit if a skip-link target can't be located.
		if ( ! skipLinkTarget ) {
			return;
		}

		/*
		 * Get the site wrapper.
		 * The skip-link will be injected in the beginning of it.
		 */
		sibling = document.querySelector( '.wp-site-blocks' );

		// Early exit if the root element was not found.
		if ( ! sibling ) {
			return;
		}

		// Get the skip-link target's ID, and generate one if it doesn't exist.
		skipLinkTargetID = skipLinkTarget.id;
		if ( ! skipLinkTargetID ) {
			skipLinkTargetID = 'wp--skip-link--target';
			skipLinkTarget.id = skipLinkTargetID;
		}

		// Create the skip link.
		skipLink = document.createElement( 'a' );
		skipLink.classList.add( 'skip-link', 'screen-reader-text' );
		skipLink.href = '#' + skipLinkTargetID;
		skipLink.innerHTML = 'Skip to content';

		// Inject the skip link.
		sibling.parentElement.insertBefore( skipLink, sibling );
	}() );
	
</script>
<script src="https://readyforyourreview.com/Green5M/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9.4" id="swv-js"></script>
<script id="contact-form-7-js-extra">
var wpcf7 = {"api":{"root":"https:\/\/readyforyourreview.com\/Green5M\/wp-json\/","namespace":"contact-form-7\/v1"}};
</script>
<script src="https://readyforyourreview.com/Green5M/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.9.4" id="contact-form-7-js"></script>


<!-- custom scripts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<style>

    body {
        height: fit-content;
    }

    #vehicle-widget {
        max-width: 100%;
        background-color: #232323;
        padding: 50px 15px;
        color: #d5d0d0;
    }

    .vehicle-search-heading {
        text-align: center;
    }

    .vehicle-search-heading h1 {
        font-weight: 600;
        font-size: 45px;
        letter-spacing: -2px;
    }

    .vehicle-search-content p {
        font-size: 28px;
        text-align: center;
    }

    select {
        margin-top: 10px;
        display: block;
    }

    select:disabled {
        margin-top: 10px;
        display: block;
        background-color: #202020;
        color: #6d6d6d;
    }

    .widget-dropdown {
        width: 100%;
        padding: 10px;
        background-color: #171717;
        color: #c6c6c6;
        border-radius: 5px;
    }

    .left-widget-content {
        text-align: center;
        align-content: center;
    }

    .view-tuning-options-button {
        padding: 5px;
        border-radius: 5px;
        margin-top: 10px;
        font-size: 12px;
        color: #000;
    }

    .view-tuning-options-button i {
        margin-right: 5px;
    }

    .stage-button, .stage-button:hover {
        color: #fff;
        padding: 10px;
        text-decoration: none;
        font-weight: 600;
        border-radius: 5px;
    }

    .stage-button.active,
    .stage-button:hover {
        color: #171717;
        background-color: #fff;
        padding: 10px;
        /* border: 1px solid #fff; */
        text-decoration: none;
    }

    .stage-button span {
        border: 1px solid #fff;
        padding: 0 5px;
        border-radius: 3px;
    }

    /* .stage-button span:hover {
        border: 1px solid #171717;
    } */

    .tuning-options-card {
        background-color: #34353b;
        border-radius: 10px;
        padding: 5px 15px;
        margin-top: 20px;
        color: #d5d0d0;
        border: 1px solid #fff;
    }

    .tuning-options-card p {
        justify-content: space-between;
        display: flex;
    }

    .justify-content-between.align-items-center h4 {
        margin-bottom: 20px;
    }

    .tuning-options-card .power-torque {
        display: flex;
        justify-content: space-between;
        font-size: 16px;
        margin: 10px 0;
    }

    .tuning-options-card .options label {
        display: inline-block;
        margin-right: 10px;
    }

    .button-group {
        display: grid;
        gap: 10px;
        margin-top: 10px;
    }

    .power-bottom-border {
        border-bottom: 1px solid #fff;
        padding-bottom: 10px;
    }

    .hwe-label {
        width: 100%;
        box-sizing: border-box;
    }

    .hwe-get-quotes-checkbox span {
        display: inline-block;
        margin-right: 10px;
    }

    .hwe-get-quotes-checkbox input[type="checkbox"] {
        margin-right: 5px;
    }

    .hwe-get-quotes-select,
    .hwe-get-quotes,
    .hwe-get-quote-submit,
    .hwe-get-quotes-add-info {
        padding: 10px;
        border-radius: 10px;
        border-style: none;
        width: 100%;
    }

</style>

<section id="vehicle-widget" class="container">
    <div class="row widget-search">
        <div class="col-md-6 col-lg-6 col-sm-12 left-widget-content">
            <div class="vehicle-search-heading">
                <h1>VEHICLE SEARCH INCLUDED</h1>
            </div>
            <div class="vehicle-search-content">
                <p>Allow your website visitors to easily search for their vehicle to see their expected performance gains</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 right-widget-content" id="right-widget-content">
            <div id="search-widget">
                <div>
                    <h4>Vehicle search</h4>
                </div>
                <div>
                    <form action="">
                        <!-- <select class="widget-dropdown" id="vehicleType" name="vehicleType" onchange="updateManufacturers()">
                            <option value="">Select Vehicle Type</option>
                            <option value="car">Car</option>
                            <option value="truck">Truck</option>
                            <option value="motorcycle">Motorcycle</option>
                        </select> -->

                        <select class="widget-dropdown" id="Make" name="Make" onchange="updateModels()">
                            <option value="">Select Manufacturer</option>
                            <?php
                                foreach ($makes as $make) {
                                    echo '<option value="' . $make . '">' . $make . '</option>';
                                }
                            ?>
                        </select>

                        <select class="widget-dropdown" id="Model" name="Model" onchange="updateYears()" disabled>
                            <option value="">Select Model</option>
                        </select>

                        <select class="widget-dropdown" id="Generation" name="Generation" onchange="updateEngines()" disabled>
                            <option value="">Select Year</option>
                        </select>

                        <select class="widget-dropdown" id="Engine" name="Engine" disabled>
                            <option value="">Select Engine</option>
                        </select>

                        <button type="button" class="view-tuning-options-button" onclick="viewTuningOptions()"><i class="fas fa-arrow-right"></i>View Tuning Options</button>

                    </form>
                </div>
            </div>
            <div id="show-widget" style="display: none;"></div>
            <div id="showGetQuoteForm" style="display: none;">
                <h2></h2>
                <p><i class="fa-regular fa-star"></i> Get A Quote</p>
                <?php echo do_shortcode('[contact-form-7 id="2ecc51c" title="Get A Quote"]'); ?>
            </div>
        </div>
    </div>
</section>

<script>
    function updateModels() {
        let make = document.getElementById('Make').value;
        if (make) {
            $.ajax({
                url: 'vehicle-type.php',
                method: 'GET',
                data: { action: 'get_models', make: make },
                success: function(data) {
                    let models = JSON.parse(data);
                    let modelDropdown = document.getElementById('Model');
                    modelDropdown.innerHTML = '<option value="">Select Model</option>';
                    models.forEach(function(model) {
                        modelDropdown.innerHTML += '<option value="' + model + '">' + model + '</option>';
                    });
                    modelDropdown.disabled = false;
                }
            });
        } else {
            document.getElementById('Model').disabled = true;
        }
        document.getElementById('Generation').disabled = true;
        document.getElementById('Engine').disabled = true;
    }

    function updateYears() {
        let make = document.getElementById('Make').value;
        let model = document.getElementById('Model').value;
        if (model) {
            $.ajax({
                url: 'vehicle-type.php',
                method: 'GET',
                data: { action: 'get_generations', make: make, model: model },
                success: function(data) {
                    let generations = JSON.parse(data);
                    let generationDropdown = document.getElementById('Generation');
                    generationDropdown.innerHTML = '<option value="">Select Year</option>';
                    generations.forEach(function(generation) {
                        generationDropdown.innerHTML += '<option value="' + generation + '">' + generation + '</option>';
                    });
                    generationDropdown.disabled = false;
                }
            });
        } else {
            document.getElementById('Generation').disabled = true;
        }
        document.getElementById('Engine').disabled = true;
    }

    function updateEngines() {
        let make = document.getElementById('Make').value;
        let model = document.getElementById('Model').value;
        let generation = document.getElementById('Generation').value;
        if (generation) {
            $.ajax({
                url: 'vehicle-type.php',
                method: 'GET',
                data: { action: 'get_engines', make: make, model: model, generation: generation },
                success: function(data) {
                    let engines = JSON.parse(data);
                    let engineDropdown = document.getElementById('Engine');
                    engineDropdown.innerHTML = '<option value="">Select Engine</option>';
                    engines.forEach(function(engine) {
                        engineDropdown.innerHTML += '<option value="' + engine + '">' + engine + '</option>';
                    });
                    engineDropdown.disabled = false;
                }
            });
        } else {
            document.getElementById('Engine').disabled = true;
        }
    }

    function viewTuningOptions() {
        let Make = document.getElementById('Make').value;
        let Model = document.getElementById('Model').value;
        let Generation = document.getElementById('Generation').value;
        let Engine = document.getElementById('Engine').value;

        if (!Make || !Model || !Generation || !Engine) {
            alert("Please select all options before viewing tuning options.");
            return;
        }

        $.ajax({
            url: 'vehicle-type.php',
            method: 'POST',
            data: {
                action: 'post_tuning_options',
                Make: Make,
                Model: Model,
                Generation: Generation,
                Engine: Engine
            },
            success: function(response) {
                let data = JSON.parse(response);
                if (data.status === 'success') {
                    let tuningOptions = data.data;
                    let firstOption = tuningOptions[0];
                    
                    // Extract numeric values from BHP_standard and BHP_tuned
                    let bhpStandard = parseInt(firstOption.BHP_standard);
                    let bhpTuned = parseInt(firstOption.BHP_tuned);
                    let bhpDifference = bhpTuned - bhpStandard;
                    let bhpDifferenceIcon = bhpDifference >= 0 ? '+' : '-';
                    
                    // Extract numeric values from TORQUE_standard and TORQUE_tuned
                    let torqueStandard = parseInt(firstOption.TORQUE_standard);
                    let torqueTuned = parseInt(firstOption.TORQUE_tuned);
                    let torqueDifference = torqueTuned - torqueStandard;
                    let torqueDifferenceIcon = torqueDifference >= 0 ? '+' : '-';
                    
                    // Determine which stage is active
                    let stage1Class = firstOption.Tuningtype === 'Stage 1' ? 'active' : '';
                    // let stage2Class = firstOption.Tuningtype === 'Stage 2' ? 'active' : '';

                    let newContent = `<div id="show-widget-section"><div><div class="justify-content-between align-items-center"><h4>${firstOption.Name}</h4><a class="stage-button ${stage1Class}" href="#">Stage <span>1</span></a><a class="stage-button" id="stage2-button" href="#">Stage<span>2</span></a></div></div><div class="tuning-options-card power-torque"><div><p class="power-bottom-border">POWER:<span>${firstOption.BHP_standard}</span><i class="fas fa-arrow-right" style="align-content: center;"></i>${firstOption.BHP_tuned}<span class="text-danger">${bhpDifferenceIcon}${firstOption.BHPdifference}</span></p></div><div><p class="power-bottom-border">TORQUE:<span>${firstOption.TORQUE_standard}</span><i class="fas fa-arrow-right" style="align-content: center;"></i> ${firstOption.TORQUE_tuned} <span class="text-danger">${torqueDifferenceIcon}${firstOption.TORQUE_difference}</span></p></div><div><p>ECU: <span>${firstOption.Engine_ECU}</span></p></div></div><div class="tuning-options-card table"><div>Options Available:</div><div class="options"><label><input type="checkbox" checked disabled> Specific DTC Disable</label><label><input type="checkbox" checked disabled> Pops & Bangs</label><label><input type="checkbox" checked disabled> Start/Stop Disable</label><label><input type="checkbox" checked disabled> Decat</label><label><input type="checkbox" checked disabled> Flaps</label><label><input type="checkbox" checked disabled> Speed Limiter Disable</label></div></div><div class="button-group"><button class="btn btn-light btn-custom"> Order Now </button><button class="btn btn-light btn-custom" id="search-again"><i class="fas fa-arrow-left"></i> Search again</button></div></div></div>`;
                   
                    document.getElementById('show-widget').innerHTML = newContent;
                    document.getElementById('show-widget').style.display = 'block';
                    document.getElementById('search-widget').style.display = 'none';
                    adjustIframeHeight();
                    document.getElementById('search-again').addEventListener('click', function() {
                        document.getElementById('show-widget').style.display = 'none';
                        document.getElementById('search-widget').style.display = 'block';
                        // Reset the dropdowns to their initial state
                        document.getElementById('Make').value = '';
                        document.getElementById('Model').innerHTML = '<option value="">Select Model</option>';
                        document.getElementById('Generation').innerHTML = '<option value="">Select Generation</option>';
                        document.getElementById('Engine').innerHTML = '<option value="">Select Engine</option>';
                        document.getElementById('Model').disabled = true;
                        document.getElementById('Generation').disabled = true;
                        document.getElementById('Engine').disabled = true;
                        adjustIframeHeight();
                    });

                    // Add event listener for the "Stage 2" button
                    document.getElementById('stage2-button').addEventListener('click', function(event) {
                        event.preventDefault();
                        $('#show-widget').hide();
                        $('#showGetQuoteForm').show();
                        document.querySelector('#showGetQuoteForm h2').textContent = firstOption.Name;
                        adjustIframeHeight();
                    });
                } else {
                    alert('Error fetching tuning options');
                }
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    }

    // Function to check if the current code is running inside an iframe
    function isInIframe() {
        return window.self !== window.top;
    }

    // Function to adjust the iframe height based on its content
    function adjustIframeHeight() {
        if (isInIframe()) {
            const iframe = window.frameElement; // Get the iframe element

            if (iframe) {
                const newHeight = document.body.scrollHeight; // Get the height of the content
                iframe.style.height = newHeight + 'px'; // Adjust the iframe height
            }
        }
    }

    // Adjust the iframe height when the content is loaded
    window.onload = adjustIframeHeight;
    // window.addEventListener('load', adjustIframeHeight);

    // Adjust the iframe height when the content is resized
    window.onresize = adjustIframeHeight;
    // window.addEventListener('resize', adjustIframeHeight);

</script>

