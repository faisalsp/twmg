<div class="container">
    <div class="outer-border mx-auto">
        <div class="cta-banner text-center ">
            <h4>Need Help Understanding What Services Will Deliver The Highest ROI?</h4>
            <p>Our Digital Marketing experts are ready to analyze your business and suggest the best path forward. Our
                research
                can even identify potential markets to expand into.</p>
            <?php 
            if ($args['class'] == 'homepage') {
                echo get_cta_button(array("class" => "homepage"));
            } else {
            
            } 
            ?>
        </div>
    </div>
</div>