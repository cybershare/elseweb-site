<!--container start-->
<div class="container">

      <div class="row">
            <!--feature start-->
            <div class="text-center feature-head">
                <h2>ELSEWeb SADI Service Pool</h2>
            </div>
            <p>This page provides a brief description of the functionality provided by the service comprising the ELSEWeb SADI service pool. Clicking on the images will provide the formal OWL input/output interface. You can access the code from the <a href="http://github.com/nicholasdelrio/elseweb">ELSEWeb GitHub repository</a>. All the Lifemapper posting services are implemented in Python SADI while the rest are implemented in Java.</p>
            <!--feature end-->
    </div>

   <div class="row">
        <div class="hiring">
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <h3 class="title">Input WCSData Matcher</h3>
                    <p>Using a SPARQL construct query, attached the necessary properties to the scenario data URI's specified in a JSON experiment specification.</p>
                    <a href="<?php echo VISKOSERVER."sadi-services-elseweb/InputWCSDatasetMatcher";?>"><img width="450" class="img-responsive" src="<?php echo base_url(IMAGES."services/input-wcs-dataset-matcher.png");?>" alt="input-wcs-dataset-matcher"></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <h3 class="title">WCS Executor</h3>
                    <p>Mint WCS request URLs from RGIS service descriptions. RGIS sevice descriptions are digsted forms of OGC GetCapabilities document.</p>
                    <a href="<?php echo VISKOSERVER."sadi-services-elseweb/WCSExecutor";?>"><img width="450" class="img-responsive" src="<?php echo base_url(IMAGES."services/wcs-executor.png");?>" alt="wcs-executor"></a>                        
                </div>
            </div>
        </div>
    </div>

   <div class="row">
        <div class="hiring">
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <h3 class="title">WCS Response Extractor</h3>
                    <p>Dereferences WCS request URLs and extracts the TIFF payload from the returned multipart MIME responses.</p>
                    <a href="<?php echo VISKOSERVER."sadi-services-elseweb/WCSResponseExtractor";?>"><img width="450" class="img-responsive" src="<?php echo base_url(IMAGES."services/wcs-response-extractor.png");?>" alt="wcs-response-extractor"></a> 
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <h3 class="title">Layer Poster Service</h3>
                    <p>Post TIFF datasets to Lifemapper and saves the returned IDs to be referenced by a scenario.</p>
                    <a href="<?php echo VISKOSERVER."sadi-services-lifemapper/LayerPosterService";?>"><img width="450" class="img-responsive" src="<?php echo base_url(IMAGES."services/layer-poster-service.png");?>" alt="layer-poster-service"></a>                       
                </div>
            </div>
        </div>
    </div>


   <div class="row">
        <div class="hiring">
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <h3 class="title">Layer Contextualizer</h3>
                    <p>Associates a set of posted layers with a scenario.</p>
                    <a href="<?php echo VISKOSERVER."sadi-services-elseweb/LayerContextualizer";?>"><img width="450" class="img-responsive" src="<?php echo base_url(IMAGES."services/layer-contextualizer.png");?>" alt="layer-contextualizer"></a> 
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <h3 class="title">Scenario Poster Service</h3>
                    <p>Post scenarios (i.e., a bag or posted layers) to Lifemapper and saves the IDs to be referened by an experiment specification.</p>
                    <a href=""><img width="450" class="img-responsive" src="<?php echo base_url(IMAGES."services/scenario-poster-service.png");?>" alt="scenario-poster-service"></a>    
                    <!-- -<?php echo VISKOSERVER."sadi-services-lifemapper/ScenarioLayerPoster";?> -->
                </div>
            </div>
        </div>
    </div>

   <div class="row">
        <div class="hiring">
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <h3 class="title">Scenario Contextualizer</h3>
                    <p>Associates a scenario with a Lifemapper experiment specification, which includes species occurrence data and algorithm selection.</p>
                    <a href="<?php echo VISKOSERVER."sadi-services-elseweb/ScenarioContextualizer";?>"><img width="450" class="img-responsive" src="<?php echo base_url(IMAGES."services/scenario-contextualizer.png");?>" alt="scenario-contextualizer"></a> 
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <h3 class="title">Experiment Poster Service</h3>
                    <p>Posts Lifemapper experiments.</p>
                    <a href="<?php echo VISKOSERVER."sadi-services-lifemapper/ExperimentPosterService";?>"><img width="450" class="img-responsive" src="<?php echo base_url(IMAGES."services/experiment-poster-service.png");?>" alt="experiment-poster-service"></a>                        
                </div>
            </div>
        </div>
    </div>


</div>
<!--container end-->

