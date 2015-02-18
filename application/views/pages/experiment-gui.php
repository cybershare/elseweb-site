    <!-- Page javascript files -->
    <script src="<?php echo base_url(JS."JSLINQ.js");?>"></script>
    <script src="<?php echo base_url(JS."angular.min.js");?>"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-sanitize.js"></script>
    <script src="<?php echo base_url(JS."ui-utils.min.js");?>"></script>
    <script src="<?php echo base_url(JS."select.js");?>"></script>
    <script src="<?php echo base_url(JS."experiment-specification.js");?>"></script>
    <script src="<?php echo base_url(JS."ui-bootstrap-0.11.0.min.js");?>"></script>
    <script src="<?php echo base_url(JS."lodash.underscore.min.js");?>"></script>
    <script src="<?php echo base_url(JS."experiment-gui.js");?>"></script>
    <!-- <script src="<?php echo base_url(JS."endpoint.js");?>"></script> -->


   <!--container start-->
   <div id="endpoint_container" class="container" ng-app="elsewebGUI">

        <div class="row">
            <!--feature start-->
            <div class="text-center feature-head">
                <h2>Experiment GUI</h2>
            </div>
            <!--feature end-->     
        </div>
      
       <div class="row" ng-controller="PanelController as panel">
        
           <div class="col-md-7 gray-bg">
                <div class="tab-panel" ng-show="panel.isSelected(1)" ng-controller="RegionController as regionCtrl"> 
                     <div class="row">
                          <div class="col-md-12 gray-bg" style="padding-bottom: 15px; border-radius: 3px;">
                              <h4>Region</h4>
                              <p>Drag point in map to set bounding box for the experiment.
                                 Coordinates will update on mouse out event on rectangle layer.</p>
                              <input ng-model="experiment.coordinates" disabled="true" id="boundsText" class="form-control" placeholder= "e.g. 50, -65.123, 23, -126 (N, E, S, W)" type="text"/>
                              <div class="no-data alert alert-danger">No data available. Please change bounding box coordinates</div>
                              <div class="data-available alert alert-success">Data Available</div>
                              <div class="loading-data alert alert-warning">Looking for data...</div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-12 gray-bg" style="padding-bottom: 15px; border-radius: 3px;">
                              <!--google map start-->
                              <div class="contact-map">
                                  <div id="map-canvas"></div>
                              </div>
                               <!--google map end-->  
                          </div>     
                      </div>
                </div>   

                <div class="tab-panel" ng-show="panel.isSelected(2)">
                     <div class="row experiment-row">
                         <div class="col-md-12  gray-bg">
                             <h4>Species</h4>
                             <p>Select species</p>
                             <form ng-controller="SpeciesController as speciesCtrl">
                                 <div class="form-group">
                                    <select ng-options="s.id.value as s.name.value for s in species" ng-model="experiment.species" class="form-control blck-input">
                                           <option style="display:none" value="">select...</option> 
                                     </select>                                   
                                    <!-- <ui-select ng-model="experiment.species" theme="selectize">
                                        <ui-select-match placeholder="Select or search a species in the list...">{{$select.species.name.value}}</ui-select-match>
                                            <ui-select-choices repeat="s.name.value as s in species | propsFilter: {name: $select.search}">
                                              <div ng-bind-html="s.name.value | highlight: $select.search"></div>
                                            </ui-select-choices>
                                      </ui-select>    -->              
                                 </div>
                             </form>                  
                          </div>   
                     </div>
                </div>    

                <div class="tab-panel" ng-show="panel.isSelected(3)"> 
                     <div class="row experiment-row" ng-controller="DataController as dataCrtl">
                         <div class="col-md-12 gray-bg">
                             <h4>Data</h4>
                             <p class="">Select up to 10 data sets</p>
                             <div><button ng-click="dataCrtl.addDataSet()" type="button" class="btn btn-purchase" >+ Add data set</button></div>
                             <div class="eq-len">
                                  <table id="dataInputs" class="table table-striped">
                                      <thead>
                                          <th>Start</th>   
                                          <th>End</th>   
                                          <th>Entity</th>   
                                          <th>Characteristic</th>   
                                          <th>Source</th>
                                      </thead>
                                      <tbody>
                                          <tr ng-repeat = "dataset in datasets" >
                                              <td><input  ng-model="dataset.start" class="form-control blck-input datepicker" type="text" /></td>
                                              <td><input ng-model="dataset.end" class="form-control blck-input datepicker" type="text" /></td>
                                              <td>
                                                  <select ng-change="dataCrtl.filterCharacteristics(dataset)" ng-options="o.entity.value as o.entity.value.slice(59)  for o in datasetOptions | unique:'entity.value'" ng-model="dataset.entity" class="form-control blck-input selEnt">
                                                      <option style="display:none" value="">select...</option>
                                                  </select>
                                              </td>
                                              <td>
                                                  <select ng-change="dataCrtl.filterSources(dataset)" ng-options="o.char.value as o.char.value.slice(59) for o in filteredChars[$index].items" ng-model="dataset.characteristic" class="form-control blck-input selEnt">
                                                      <option style="display:none" value="">select...</option>
                                                  </select>                                                  
                                              </td>
                                              <td>
                                                  <select ng-options="o.source.value as o.source.value.slice(59) for o in filteredSources[$index].items" ng-model="dataset.source" class="form-control blck-input selEnt">
                                                      <option style="display:none" value="">select...</option>
                                                  </select>                                                                                   
                                              </td>
                                              <td style="text-align:center; vertical-align: middle;">
                                                  <button type="button" class="btn btn-purchase btn-xs"><span ng-click="dataCrtl.deleteDataset(dataset)" class="glyphicon glyphicon-remove"></span></button>
                                              </td>
                                              
                                          </tr>
                                      </tbody>    
                                  </table>
                             </div>
                         </div>
                     </div>
                </div>    

                <div class="tab-panel" ng-show="panel.isSelected(4)">
                     <div class="row experiment-row" ng-controller="AlgorithmController as algorithmCrtl"> 
                         <div class="col-md-12 gray-bg">
                             <h4>Algorithm</h4>
                             <p>Select algorithm and modify parameters values (default value shown)</p>
                             <div class="col-md-2" style="vertical-align: text-bottom">
                                  <h5>Algorithm:</h5>
                             </div>  
                             <div class="col-md-10">
                                  <form>
                                       <div class="form-group">
                                           <select  ng-options="a.algorithmURI.value as a.algorithmName.value for a in algorithms" ng-model="experiment.algorithm" ng-change="algorithmCrtl.populateParameter()" name="selectAlgorithm" class="form-control blck-input">
                                               <option style="display:none" value="">select...</option> 
                                           </select>
                                       </div>
                                   </form> 
                             </div>
                             <div class="eq-len">
                                  <table id="algorithmParams" class="table table-striped">
                                      <thead>
                                          <th>Parameter</th>   
                                          <th>Value</th>   
                                          <th>Min</th>   
                                          <th>Max</th>   
                                          <th>Type</th>
                                      </thead>
                                      <tbody>
                                          <tr ng-repeat = "row in filteredparams.items">
                                              <td>{{row.paramName.value}}</td>       
                                              <td> 
                                                  <input class="form-control blck-input" type="number" min="{{row.minimos.value}}" max="{{row.maximos.value}}"
                                                         ng-model="row.default.value" placeholder="{{row.default.value}}"/>
                                              </td>  
                                              <td>{{row.minimos.value}}</td>  
                                              <td>{{row.maximos.value}}</td>  
                                              <td>{{row.datatype.value.slice(33)}}</td>  
                                          </tr>
                                      </tbody>    
                                  </table>
                             </div>
                         </div>
                     </div>
                </div>  
               
               <div class="tab-panel" ng-hide="true">
                    <div class="row experiment-row">
                        <div class="col-md-12 gray-bg">
                            <h4>Experiment Specification</h4>
                                <div class="form-group">
                                    <textarea id="experiment" name="experiment" rows="22" style="width: 100%"></textarea>
                                </div>                 
                        </div>
                    </div>    
               </div>
               
               
               <div class="tab-panel" ng-show="panel.isSelected(5)">
                   <div class="row experiment-row" ng-controller="SelectDataController as selectDataCtrl">
                        <div class="col-md-12 gray-bg">
                            <h4>Retrived Datasets</h4>
                            <p>Select up to X datasets for experiment submission.</p>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>DatasetURI</th>
                                            <th>JSON Metadata</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat = "row in datasetURI_Test">
                                            <td><input id="{{row.dataset.value}}" type="checkbox" value="{{row.dataset.value}}" ng-checked="selectedDatasets.indexOf(row.dataset.value) > -1" ng-click="selectDataCtrl.toggleSelection(row.dataset.value)" /></td>
                                            <td><a target="_blank" href="{{row.dataset.value}}">{{row.dataset.value}}</a></td>
                                            <td><a target="_blank" href="{{row.metadata.value}}">See Metadata</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>    
               </div>              
            

                <div class="row experiment-row" ng-controller="SubmissionController as SubmissionCtrl">
                    <div class="col-md-12 gray-bg" style="margin-bottom: 10px">
                        <section class="tab-menu">
                            <ul class="nav nav-pills">
                                <li ng-class="{ active: panel.isSelected(1) }">
                                    <a href ng-click="panel.selectTab(1)">Region</a>
                                </li>
                                <li id="test" ng-class="{ active: panel.isSelected(2), inactive: experiment.coordinates == '' || data == false }">
                                    <a href ng-disabled="true" ng-click="panel.selectTab(2)">Species</a>
                                </li>
                                <li ng-class="{ active: panel.isSelected(3), inactive: experiment.coordinates == '' || experiment.species == '' }">
                                    <a href ng-click="panel.selectTab(3)">Datasets</a>
                                </li>
                                <li ng-class="{ active: panel.isSelected(4), inactive: datasets[0].source == null || datasets[0].source == '--select...' 
                                                || datasets[0].start == '--select...' || datasets[0].end == '--select...' }">
                                    <a href ng-click="panel.selectTab(4)">Algorithm</a>
                                </li>
                                <li ng-class="{ active: panel.isSelected(5), inactive: experiment.algorithm == '' }">
                                    <a href ng-click="panel.selectTab(5); SubmissionCtrl.processAssemble()">Selection</a>
                                </li>
                                <li ng-class="{ active: panel.isSelected(6), inactive: selectedDatasets == '' }">
                                    <a href ng-click="panel.selectTab(6); SubmissionCtrl.submitExperiment('storeExperiment')">Submit</a>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>    
           </div>
           
           <div class="col-md-4 gray-bg col-md-push-1">
               <h4>Experiment Summary</h4>
               <p>
                   <b>Region Bounds (N, E, S, W): </b> <br> <span ng-bind="experiment.coordinates"></span> 
               </p>
               <p><b>Species ID: </b><span ng-bind="experiment.species"></span></p>
               <p><b>Dataset Filters: </b><span></span></p>
               <div class="eq-len">
                    <table id="datasetParams" class="table table-striped">
                            <thead>
                                <th>Start</th>   
                                <th>End</th>  
                                <th>Entity</th>
                                <th>Char</th>
                                <th>Source</th>
                            </thead>
                            <tbody>
                                <tr ng-repeat = "row in datasets">
                                    <td>{{row.start}}</td>       
                                    <td>{{row.end}}</td>  
                                    <td>{{row.entity.slice(59)}}</td>
                                    <td>{{row.characteristic.slice(59)}}</td>
                                    <td>{{row.source.slice(59)}}</td>
                                </tr>
                            </tbody>    
                    </table>
               </div>
               <p><b>Selected Datasets:</b></p>
               <div class="eq-len">
                    <table class="table table-striped">
                            <thead>
                                <th>DatasetURIs</th>   
                            </thead>
                            <tbody>
                                <tr ng-repeat = "row in selectedDatasets">
                                    <td>{{row}}</td>       
                                </tr>
                            </tbody>    
                    </table>
               </div>
               <p><b>Algorithm: </b><span ng-bind="experiment.algorithm.slice(79)"></span></p>   
               <div class="eq-len">
                    <table id="algorithmParamsSummary" class="table table-striped">
                            <thead>
                                <th>Parameter</th>   
                                <th>Value</th>   
                            </thead>
                            <tbody>
                                <tr ng-repeat = "row in filteredparams.items">
                                    <td>{{row.paramName.value}}</td>       
                                    <td>{{row.default.value}}</td>  
                                </tr>
                            </tbody>    
                    </table>
             </div>
           </div>
 
       </div>    
        
    </div>    
    <!--container end-->
    

