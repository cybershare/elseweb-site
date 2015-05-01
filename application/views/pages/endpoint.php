<!-- Required Javascript files -->
<script type="text/javascript" src="<?php echo base_url(JS."endpoint.js");?>"></script>


<div class="container" id="endpoint_container">
    <div class="row">
        <div class="text-center feature-head">
            <h3>ELSEWeb Experiment Specification Submission</h3>
        </div>        
    </div>
    
    <div class="row">
        <div class="text-center col-md-12">
          <p>You have accessed the <a href="http://elseweb.cybershare.utep.edu/">ELSEWeb Project</a> experiment endpoint.</p> 
          <p>Please submit your ELSEWeb experiment specification in the text box below. An example specification can be found below.</p>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form role="form" method="post" onsubmit="return false;">
           <div class="form-group">
             <textarea id="experiment" name="experiment" rows="15" style="width: 100%">
                    {"specification": {
                        "occurrenceDataID": "5565338",
                        "algorithm": {
                            "id": "BIOCLIM",
                            "parameterBindings": [
                                {"name": "StandardDeviationCutOff", "value": "0.674", "datatype": "double"}        
                             ]
                        },
                        "modelingScenario": [
                            {"datasetURI": "http://visko.cybershare.utep.edu/linked-data/edac/services/dataset_348976"},
                            {"datasetURI": "http://visko.cybershare.utep.edu/linked-data/edac/services/dataset_348977"}
                            ]
                        }
                    }</textarea>		                 

           </div>
                <button type="button" class="btn btn-purchase pull-right" 
                        onclick="genGUID('storeExperiment')">
                        Run Experiment
                </button>
         </form>
        </div>
    </div>
    
    <div class="row info-paragraph">
        <div class="text-center col-md-8 col-md-offset-2">
            <p>
               Alternatively, you can POST experiment specifications to the 
               <a href="http://visko.cybershare.utep.edu/elseweb-endpoint/JSONSpecification">JSONSpecification Submission Service</a>. 
               Specifications posted to the JSONSpecification submission service should be bound to the 
               <b>jsonSpec</b> parameter.
            </p>
        </div>
    </div>
    
    
</div>
