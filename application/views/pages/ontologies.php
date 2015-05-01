    <!--container start-->
    <div class="container">
        <div class="row">
            <h3>A Multitier Ontology Driven Infrastructure</h3>
            <p>Although ELSEWeb currently enables the transference of EDAC data to Lifemapper, we ultimately want to connect with other data and model providers. To accommodate for these expansions, we have devised a multitier ontology driven infrastructure that allows third-party providers to align with our ontologies and therefore be incorporated with our system.</p>
            <p>The first tier of our ontology consists of prevalent Linked 0pen Data (LOD) ontologies that, in addition to providing a community driven structure to our data, allows other semantic applications to easily consume our RDF. The second tier expands on LOD ontologies and provides specific concepts for describing data provider sources and modeling services. The third tier is where the domain specific data and model providers would align with our generic ontologies, and provide classes and properties specific to their domain. Finally, the transformation tier provides a link between a specific data and model provider. SADI services leverage the transformation ontology to automatically transform source data into forms a specific modeling agent can process.</p>
            <img width="800" class="img-responsive displayed" src="<?php echo base_url(IMAGES."layered-ontologies.png");?>" alt="layered-ontologies">

        </div>

        <div class="row">
            <div class="hiring">
                <div class="col-lg-12 col-sm-12">
                    <div class="content">
                        <h3 class="title">ELSEWeb Data and ELSEWeb EDAC</h3>
                        <p> The elseweb-data ontology (blue nodes) provides concepts for describing characteristics of
                            a dataset in a biodiversity scenario: spatial/temporal dimensions, how it can be accessed and
                            entities described. The elseweb-edac ontology (yellow nodes), extends and instantiates the
                            elseweb-data ontology to describe data sets published by EDAC. Dashed boxes outline concepts of
                            the ontology that extend existing ontologies and vocabularies.
                        </p>
                        <a href="<?php echo ONTPREFIX."elseweb-edac.owl";?>"><img class="img-responsive displayed" width="850" src="<?php echo base_url(IMAGES."elseweb-data-v2.png");?>" alt="elseweb-data"></a>
                        <a href="http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-data.owl#">http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-data.owl#</a> <br>
                        <a href="http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-edac.owl#">http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-edac.owl#</a><br>
                        <a href="http://ontology.cybershare.utep.edu/ELSEWeb/linked-data/edac/services/wcs-services.owl#">http://ontology.cybershare.utep.edu/ELSEWeb/linked-data/edac/services/wcs-services.owl#</a><br>
                        <a href="http://ontology.cybershare.utep.edu/ELSEWeb/mappings/elseweb-mappings.owl#">http://ontology.cybershare.utep.edu/ELSEWeb/mappings/elseweb-mappings.owl#</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="hiring">
                <div class="col-lg-12 col-sm-12">
                    <div class="content">
                        <h3 class="title">ELSEWeb Modeling and ELSEWeb Lifemapper</h3>
                        <p>The elseweb-model ontology (blue nodes) provides concepts for describing biodiversity modeling algorithms, their inputs, outputs, parameters, and services providing these algorithms. The elseweb-lifemapper ontology (yellow nodes), extends and instantiates the elseweb-model ontology to describe SDM services provided by Lifemapper. Dashed boxes outline concepts of the ontology that extend existing ontologies and vocabularies.</p>
                        <p>The <a href="<?php echo ONTPREFIX."elseweb-lifemapper.owl";?>">elseweb-lifemapper</a> describes specific <a href="<?php echo LODSPEAKR."instances/elseweb_lifemapper:LifemapperAlgorithm";?>">modeling algorithms</a> supported by <a href="http://lifemapper.org">Lifemapper</a> as well as corresponding parameter sets. The parameter descriptions contain minimum and maximum “hasValue” property restrictions to define the legal ranges of values bound to specific parameters. This ontology also contains a collection of <a href="<?php echo LODSPEAKR."instances/elseweb_lifemapper:SpeciesOccurrenceDataset";?>">species occurrence data</a> that can be referenced in experiments.</p>
                        <a href="<?php echo ONTPREFIX."elseweb-lifemapper.owl";?>"><img class="img-responsive displayed" width="850" src="<?php echo base_url(IMAGES."elseweb-modeling-v2.jpeg");?>" alt="elseweb-modeling" style="margin-bottom: 20px;"></a>
                        <a href="http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-modelling.owl#">http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-modelling.owl#</a><br>
                        <a href="http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-lifemapper.owl#">http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-lifemapper.owl#</a><br>
                        <a href="http://ontology.cybershare.utep.edu/ELSEWeb/linked-data/lifemapper/occurrences-v2/species-occurrences-v2.owl#">http://ontology.cybershare.utep.edu/ELSEWeb/linked-data/lifemapper/occurrences-v2/species-occurrences-v2.owl#</a><br>
                        <a href="http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-lifemapper-parameters.owl#">http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-lifemapper-parameters.owl#</a><br>
                        <a href="http://ontology.cybershare.utep.edu/ELSEWeb/mappings/elseweb-mappings.owl#">http://ontology.cybershare.utep.edu/ELSEWeb/mappings/elseweb-mappings.owl#</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="hiring">
                    <div class="content">
                        <h3 class="title">ELSEWeb EDAC to Lifemapper</h3>
                        <p>The <a href="<?php echo ONTPREFIX."elseweb-lifemapper.owl";?>">edac-to-lifemapper ontology</a> describes the relationships between user experiment specifications and Lifemapper experiment specifications. Users experiment specifications reference resources such as EDAC WCS datasets, which Lifemapper is unable to directly process.  Lifemapper experiment specifications expect input data as “Posted TIFFs” and to be associated with posted “Scenarios”. Therefore, rounds of transformations must ensue before feeding EDAC data to Lifemapper. The edac-to-lifemapper ontology specifies the intermediate forms and how they relate from the source EDAC data and the required Lifemapper scenarios. From these intermediate form descriptions, tools such as <a href”http://sadiframework.org/content/tag/cardioshare/”>SADI SHARE client</a> can identify services that support the transformations of EDAC data to forms ingestible by Lifemapper.
                        </p>
                        <a href="<?php echo ONTPREFIX."elseweb-lifemapper.owl";?>"><img width="900" class="img-responsive displayed" src="<?php echo base_url(IMAGES."edac-to-lifemapper.png");?>" alt="edac-to-lifemapper" style="margin-top: 20px;"></a>
                    </div>
            </div>
        </div>

    </div>
    <!--container end-->