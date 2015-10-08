    <!--container start-->
    <div class="container">

        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="content">
                        <h3 class="title" >SPARQL Endpoint Service</h3>
                        <p>ELSEWeb's Linked Data is managed and stored by an instance of Virtuoso's Triple Store.</p>
                        <p>
                            Try out SPARQL queries through the Virtuoso Endpoint Service:
                        <p><a href="http://visko.cybershare.utep.edu/sparql" target="_blank" class="btn btn-purchase">Click here to access</a></p>
                        </p>
                    </div>
                </div>
        </div>
 
        <div class="row">
            <div class="hiring">
                <div class="col-md-8 col-md-offset-2">
                    <div class="content">
                        <h3 class="title" >Sample Queries</h3>
                        <p>The following sample queries can be directly pasted into the Virtuoso SPARQL Endpoint for execution.</p>
                        <p>Copy each sample separately to the endpoint input box and include prefixes as required.</p>
                        <pre><span class="inner-pre" style="font-size: 10px">
    #prefixes

    # define the mappings to be used
    define input:inference "http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-mappings-v2.owl"

    # custom ELSEWeb prefixes
    prefix elseweb-data: &lt;http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-data.owl#&gt;
    prefix elseweb-edac: &lt;http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-edac.owl#&gt;
    prefix lifemapper: &lt;http://ontology.cybershare.utep.edu/ELSEWeb/elseweb-lifemapper.owl#>

    # base LOD prefixes
    prefix provo: &lt;http://www.w3.org/ns/prov#>
    prefix dcat: &lt;http://www.w3.org/ns/dcat#>
    prefix sio: &lt;http://semanticscience.org/resource/>

    #Sample 1: show me all EDAC data access services serving MODIS data in terms of ELSEWeb

    select ?dataset
    {
         ?dataset a dcat:Dataset.
         ?dataset elseweb-data:hasDataBand
            [
                elseweb-edac:wasMeasuredBy
                    [
                        elseweb-edac:wasAssociatedWith &lt;http://visko.cybershare.utep.edu/linked-data/edac/services/MODIS&gt;
                    ]
            ]
    }

    #Sample 2: show me species name and id of species occurrence sets harvested from Lifemapper

    select ?name ?id
    from &lt;http://ontology.cybershare.utep.edu/ELSEWeb/linked-data/lifemapper/occurrences-v2/species-occurrences-v2.owl&gt;
    where{
        ?dataset a lifemapper:SpeciesOccurrenceDataset.
        ?dataset elseweb-data:hasLayer ?layer.
        ?dataset elseweb-data:hasManifestation ?manif.
        ?manif elseweb-data:hasFileDownloadURL ?fileURL.
        ?manif elseweb-data:hasLandingPageURL ?metadataURL.
        ?layer elseweb-data:containsFeatureSet ?set.
        ?set a lifemapper:SpeciesOccurrenceSet.
        ?set lifemapper:hasOccurrenceSetID ?id.
        ?set lifemapper:hasOccurrenceOfSpecies ?species.
        ?species lifemapper:hasGenusName ?name.
    }

    #Sample 3:show me environmental data entities available in a boxed region

    select distinct ?entity
    from &lt;http://ontology.cybershare.utep.edu/ELSEWeb/linked-data/edac/services/wcs-services.owl&gt;
    where
    {
        ?dataset elseweb-data:coversRegion ?region.
        ?region elseweb-data:hasLeftLongitude ?llon.
        ?region elseweb-data:hasRightLongitude ?rlon.
        ?region elseweb-data:hasLowerLatitude ?llat.
        ?region elseweb-data:hasUpperLatitude ?ulat.
        filter(?llon <= -92.28515625)
        filter(?rlon >= -72.7734375)
        filter(?llat <= 39.50404070558425)
        filter(?ulat >= 45.82879925192136)
        ?dataset elseweb-data:hasDataBand ?band.
        ?band elseweb-data:representsEntity ?entity.
    }

    #Sample 4: show me all edac data access services and metadata URLs in terms of DCAT and ELSEWeb vocabulary (uses mappings alignment with LOD ontologies)

    select ?dataset ?capabilitiesURL ?jsonURL
    {
            ?dataset a dcat:Dataset.
            ?dataset elseweb-data:hasManifestation	
                    [
                            elseweb-data:hasCapabilitiesDocumentURL ?capabilitiesURL;
                            elseweb-edac:hasJSONCapabilitiesDigestURL ?jsonURL
                    ]
    }
                 
                       </span></pre>
                    </div>
                </div>
            </div>
        </div>
        
    </div>    
    <!--container end-->