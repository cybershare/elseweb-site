    <!--container start-->
    
    <div class="container" style="min-height: 600px;">


   <div class="row gray-box">
        <div class="hiring">
            <div class="col-md-6 col-md-offset-3">
                <div class="content">
                    <h3 class="title">Pre-assembled Experiment</h3>
                    <p>The <a href="<?php echo base_url('experimentgui') ?>">Experiment Interface</a> captures users selection in the form of an <a href="http://ontology.cybershare.utep.edu/ELSEWeb/linked-data/lifemapper/experiments/specifications/json/sample-specification.json">ELSEWeb experiment specification</a>. These specifications are posted to an underlying <a href="<?php echo site_url('endpoint') ?>">HTTP POST service</a>. 
                        This section provides a pre assembled experiment specification JSON for submission.</p>
                    <p>User experiment history is accessible on the user dropdown menu at the top-right of the page.</p>
                    
                    <a href="<?php echo site_url('endpoint') ?>" class="btn btn-purchase">Try Pre-assembled Experiment</a></p>
                </div>
            </div>
        </div>
    </div>
        
    </div>    
    
    <script src="<?php echo base_url(JS."jquery-1.8.3.min.js");?>"></script>
    <script src="<?php echo base_url(JS."main.js");?>"></script>
     <?php if(!$this->session->userdata('is_logged_in')) { ?>
    <script type="text/javascript">
        $(function() {
            revisorLogin('<?php echo site_url('login')?>');
        });      
    </script>
     <?php } ?>
    <!--container end-->