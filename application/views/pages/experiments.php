<!--container start-->
<div class="container">

   <div class="row">
        <div class="hiring">
            <div class="col-lg-6 col-sm-6 text-center">
                <div class="content">
                    <img width="500" class="img-responsive" src="<?php echo base_url(IMAGES."elseweb-gui.png");?>" alt="text img">    
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <h3 class="title">Option 1: Experiment Graphical User Interface</h3>
                    <p>The primary entry point to the ELSEWeb system is through the ELSEWeb graphical user interface. Through the interface, users can specify an experiment specification in terms of:</p>
                    <ul>
                        <li><p><a href="<?php echo LODSPEAKR."instances/elseweb_edac:PublishedPRISMDataset";?>">Scenario Data</a></p></li>
                        <li><p><a href="<?php echo LODSPEAKR."instances/elseweb_lifemapper:LifemapperAlgorithm";?>">Algorithm Selection</a></p></li>
                        <li><p><a href="<?php echo LODSPEAKR."instances/elseweb_lifemapper:ParameterDescription";?>">Algorithm Parameters</a></p></li>
                        <li><p><a href="<?php echo LODSPEAKR."instances/elseweb_lifemapper:SpeciesOccurrenceDataset";?>">Species Occurrence Data</a></p></li>
                    </ul>

                    <a href="<?php echo base_url('experimentgui') ?>" class="btn btn-purchase">Run an Experiment</a></p>

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="hiring">
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <h3 class="title">Option 2: Experiment Endpoint Service</h3>
                    <p>The Experiment Interface presented above captures users selection in the form of an <a href="http://ontology.cybershare.utep.edu/ELSEWeb/linked-data/lifemapper/experiments/specifications/json/sample-specification.json">ELSEWeb experiment specification</a>. These specifications are posted to an underlying <a href="<?php echo site_url('endpoint') ?>">HTTP POST service</a>. Power users can generate their own JSON specifications and submit them to the service through the input text box or submit specifications programmatically.</p>
                    <a href="<?php echo site_url('endpoint') ?>" class="btn btn-purchase">Submit a Specification</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <pre><span class="inner-pre" style="font-size: 9px">{"specification":{"algorithm":
        {"parameterBindings":[{"name":"StandardDeviationCutoff","value":"0.674","datatype":"double"}]
        ,"id":"BIOCLIM"},
    "modelingScenario":
    [{"datasetURI":"http://visko.cybershare.utep.edu/linked-data/edac/services/dataset_348976"},
    {"datasetURI":"http://visko.cybershare.utep.edu/linked-data/edac/services/dataset_348977"}],
    "occurrenceDataID":"5565338"}}}</span></pre>
                </div>
            </div>
        </div>
    </div>

   <div class="row">
        <div class="hiring">
                        <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <pre><span class="inner-pre" style="font-size: 10px">{"executedSpecification": {
    "successful": "true",
    "experimentResult": {
        "resultURI": "http://visko.cybershare.utep.edu/linked-data/elseweb/sadi/experimentResult-d76d82e2-bdab-4184-b555-ca010d8bc0ba",
        "resultURL": "http://lifemapper.org/services/sdm/experiments/1434306"
        }
    }
}</span></pre>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <h3 class="title">Experiment Results</h3>
                    <p>
                    If ELSEWeb was able to execute your experiment successfully, you will be provided with both a link to the Lifemapper experiment result page as well as a link to the provenance trace associated with the experiment run. This information is encoded within a JSON response which indicates: whether the experiment was successfully executed, the link to the Lifemapper result page, and a link to the provenance trace (i.e., resultURI).
                    </p>
                </div>
            </div>
        </div>
    </div>


</div>
<!--container end-->

