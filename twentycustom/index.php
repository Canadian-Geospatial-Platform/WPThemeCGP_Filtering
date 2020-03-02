<?php get_header();?>
                    <div class="row">
                      <div class="col-2"></div>
                      <div class="col-10 alert alert-danger alert-dimissible fade show close notification" id="ResultFilterTop" >
                      </div>
                    </div>
									<div class="row">
								 		<div class="col-4 col-md-2 col-lg-3">
								 			<div id="accordion" class="panel panel-primary behclick-panel">
								 				<div class="panel-heading">
                          <div class="row">
                            <div class="col-4  col-lg-6">
                            <h4 class="panel-title searchfilter">Search Filters</h4>
                            </div>
                            <div class="col-4   col-lg-6">
                              <button type="button" id="btntclearfilter" class="btn btn-link btn-xs clearfilter">Clear filters</button>
                              </div>
                          </div>
								 				</div>
								 					<div class="panel-heading">
								 						<h4 class="panel-title">
								 							<a data-toggle="collapse" href="#collapse0">
								 								<i class="indicator fa fa-caret-right" aria-hidden="true"></i> Filters by Resource Type
								 							</a>
								 						</h4>
								 					</div>
								 					<div id="collapse0" class="panel-collapse collapse">
                            <div id="checkFRT">
								 						<ul class="list-group">
								 							<li class="list-group-item">
								 								<div class="checkbox">
								 									<label for="DataSet">
								 										<input type="checkbox" class="checkme" id="DataSet" value="1">
								 										DataSet
								 									</label>
								 								</div>
								 							</li>
								 							<li class="list-group-item">
								 								<div class="checkbox" >
								 									<label for="webServices">
								 										<input class="checkme"  type="checkbox" id="WebServices" value="2">
								 										Web Services
								 									</label>
								 								</div>
								 							</li>
								 							<li class="list-group-item">
								 								<div class="checkbox">
								 									<label for="Application">
								 										<input class="checkme"  type="checkbox" id="Application"  value="3">
								 										Application
								 									</label>
								 								</div>
								 							</li>
								 							<li class="list-group-item">
								 								<div class="checkbox">
								 									<label for="API">
								 										<input class="checkme"  type="checkbox" id="API" value="4">
								 									API
								 									</label>
								 								</div>
								 							</li>
															<li class="list-group-item">
																<div class="checkbox"  >
																	<label for="GuideDocument">
																		<input class="checkme"  type="checkbox" id="GuideDocument" value="5">
																Guide Document
																	</label>
																</div>
															</li>
								 						</ul>
                            </div>
								 					</div>

								 					<div class="panel-heading " >
								 						<h4 class="panel-title">
								 							<a data-toggle="collapse" href="#collapse1">
								 								<i class="indicator fa fa-caret-right" aria-hidden="true"></i> Filters by Format
								 							</a>
								 						</h4>
								 					</div>
								 					<div id="collapse1" class="panel-collapse collapse" >
								 						<ul class="list-group">
								 							<li class="list-group-item">
								 								<div class="checkbox">
								 									<label for="ESRIREST">
								 										<input class="checkme" type="checkbox" id="ESRIREST" value="6">
								 										ESRI | REST
								 									</label>
								 								</div>
								 							</li>
								 							<li class="list-group-item">
								 								<div class="checkbox" >
								 									<label for="FGDBGDB">
								 										<input type="checkbox" class="checkme" id="FGDBGDB" value="7">
								 									 FGDB/GDB
								 									</label>
								 								</div>
								 							</li>
								 							<li class="list-group-item">
								 								<div class="checkbox"  >
								 									<label for="GEJSON">
								 										<input class="checkme" type="checkbox" id="GEOJSON" value="8">
								 										GEOJSON
								 									</label>
								 								</div>
								 							</li>
															<li class="list-group-item">
																<div class="checkbox">
																	<label for="GML">
																		<input class="checkme" type="checkbox" id="GML"value="9">
																		GML
																	</label>
																</div>
															</li>
                              <div>
															<span id="filtermore">
																<li class="list-group-item">
																	<div class="checkbox">
																		<label for="GEOTIF">
																			<input class="checkme" type="checkbox" id="GEOTIF" value="10">
																			Geo Tif
																		</label>
																	</div>
																</li>
																<li class="list-group-item">
																	<div class="checkbox"  >
																		<label for="JSON">
																			<input class="checkme" type="checkbox" value="11" id="JSON">
																			Json
																		</label>
																	</div>
																</li>
																<li class="list-group-item">
																	<div class="checkbox">
																		<label for="ESRIREST">
																			<input class="checkme" type="checkbox" value="12" id="ESRIREST">
																			ESRI|REST
																		</label>
																	</div>
																</li>
                              </span>
															</div>
                              <div class="row">
                                  <div class="col-md-6">
                              <button type="button" id="btntoggle" class="btn btn-link btn-xs more">Show More	</button>
                              </div></div>
														</div>
								 						</ul>

								 					<div class="panel-heading" >
								 						<h4 class="panel-title">
								 							<a data-toggle="collapse" href="#collapse2">
                                <i class="indicator fa fa-caret-right" aria-hidden="true"></i> Filters by Time</a>
								 						</h4>
								 					</div>
								 					<div id="collapse2" class="panel-collapse collapse">
								 						<ul class="list-group">
								 							<li class="list-group-item">
								 								<div class="checkbox">
								 									<label>
								 										<input  type="checkbox" value="13">
								 									</label>
								 								</div>
								 							</li>

								 						</ul>
								 					</div>
								 					<div class="panel-heading" >
								 						<h4 class="panel-title">
								 							<a data-toggle="collapse" href="#collapse3">
                                <i class="indicator fa fa-caret-right" aria-hidden="true"></i> Filters by Source</a>
								 						</h4>
								 					</div>
								 					<div id="collapse3" class="panel-collapse collapse">
								 						<ul class="list-group">
								 							<li class="list-group-item">
								 								<div class="checkbox">
								 									<label for="AFFC">
								 											<input class="checkme" type="checkbox" value="14" id="AFFC">
								 										Agriculture and Agri-Food Canada
								 									</label>
								 								</div>
								 							</li>
								 							<li class="list-group-item">
								 								<div class="checkbox" >
								 									<label for="CFIA">
								 										<input class="checkme"  type="checkbox" value="15" id="CFIA">
								 										Canadian Food Inspection Agency
								 									</label>
								 								</div>
								 							</li>
								 							<li class="list-group-item">
								 								<div class="checkbox">
								 									<label for="CNSC">
								 										<input class="checkme" type="checkbox" value="16" id="CNSC">
								 									 Canadian Nuclear  Safety Commision
								 									</label>
								 								</div>
								 							</li>
															<li class="list-group-item">
																<div class="checkbox">
																	<label for="CSA">
																		<input class="checkme" type="checkbox" value="17" id="CSA">
																	 Canadian Space Agency
																	</label>
																</div>
															</li>
                              <div>
															<span id="filtermoresource">
															<li class="list-group-item">
																<div class="checkbox">
																	<label for="CIRNAC">
																		<input class="checkme" type="checkbox" value="18" id="CIRNAC">
																	 Crown-indegenuos Relations and Northen Affairs Canada
																	</label>
																</div>
															</li>
                              <li class="list-group-item">
																<div class="checkbox">
																	<label for="Election Canada">
																		<input class="checkme" type="checkbox" value="19" id="Election Canada">
																	 Election Canada
																	</label>
																</div>
															</li>
                              <li class="list-group-item">
																<div class="checkbox">
																	<label for="ESDC">
																		<input class="checkme" type="checkbox" value="20" id="ESDC">
																	 Employment and Social Development Canada
																</label>
                              </Dataset div>
															</li>
                              <li class="list-group-item">
																<div class="checkbox">
																	<label for="ECCC">
																		<input class="checkme" type="checkbox" value="21" id="ECCC">
																	 Enviroment and Climate Change Canada
																	</label>
																</div>
															</li>
                              <li class="list-group-item">
																<div class="checkbox">
																	<label for="FOC">
																		<input class="checkme" type="checkbox" value="22" id="FOC">
																	 Fisheries and Oceans Canada
																	</label>
																</div>
															</li>
                              <li class="list-group-item">
																<div class="checkbox">
																	<label id="GA">
																		<input class="checkme" type="checkbox" value="23" id="GA">
																	 Government of Alberta
																	</label>
																</div>
															</li>
                              <li class="list-group-item">
																<div class="checkbox">
																	<label for="GBC">
																		<input class="checkme" type="checkbox" value="24" id="GBC">
																	 Government of British Columbia
																	</label>
																</div>
															</li>
                              <li class="list-group-item">
																<div class="checkbox">
																	<label for="HC">
																		<input class="checkme" type="checkbox" value="25" id="HC">
																	 Health Canada
																	</label>
																</div>
															</li>
                              <li class="list-group-item">
																<div class="checkbox">
																	<label for="IAAC">
																		<input class="checkme" type="checkbox" value="26" id="IAAC">
																	 Impact Assessment Agency of Canada
																	</label>
																</div>
															</li>
                              <li class="list-group-item">
																<div class="checkbox">
																	<label for="NRCC">
																		<input class="checkme" type="checkbox" value="27" id="NRCC">
																	 National Research Council Canada
																	</label>
																</div>
															</li>
                              <li class="list-group-item">
																<div class="checkbox">
																	<label for="NCR">
																		<input class="checkme"  type="checkbox" value="28" id="NRC">
																	 Natural Resources Canada
																	</label>
																</div>
															</li>
                              <li class="list-group-item">
																<div  class="checkbox">
																	<label for="PC">
																		<input class="checkme" type="checkbox" value="29" id="PC">
																	 Parks Canada
																	</label>
																</div>
															</li>
                              <li class="list-group-item">
																<div class="checkbox">
																	<label for="PHAC">
																		<input class="checkme" type="checkbox" value="30" id="PHAC">
																	 Public Health Agency of Canada
                                 </label>
																</div>
															</li>
                              <li class="list-group-item">
                                <div class="checkbox">
                                  <label for="STATCAN">
                                    <input class="checkme" type="checkbox" value="31" id="STATCAN">
                                   Statistics Canada
                                 </label>
                                </div>
                              </li>
                              <li class="list-group-item">
                                <div class="checkbox">
                                  <label for="TC">
                                    <input class="checkme" type="checkbox" value="32" id="TC">
                                   Transport Canada
                                 </label>
                                </div>
                              </li>
                              <li class="list-group-item">
                                <div class="checkbox">
                                  <label for="VAC">
                                    <input class="checkme" type="checkbox" value="33" id="VAC">
                                   Veterans Affairs Canada
                                 </label>
                                </div>
                              </li>
                              <li class="list-group-item">
                                <div class="checkbox">
                                  <label>
                                    <input class="checkme" type="checkbox" value="34" id="Other">
                                   Other
                                 </label>
                                </div>
                              </li>
                            </span>
                          </div>
                          <div class="row">
		                          <div class="col-md-6">
                          <button type="button" id="btntogglesource" class="btn btn-link btn-xs more">Show More</button>
                              </div>
                             </div>
								 						</ul>
								 					</div>
								 				</div>
								 			</div>
                      <div class="col-8 col-md-8 col-lg-8">
                        <div class="jumbotron jumbotron-fluid">
                            <h4 class="display-4">Result</h4>
                            <p class="lead"></p>
                          </div>
                          <nav class="pagination-sm">
                                    <ul class="pagination">
                                           <li class="page-item">	<a class="page-link" href="#">Previous</a></li>
                                           <li class="page-item">	<a class="page-link" href="#">1</a>	</li>
                                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                                           <li class="page-item"><a class="page-link" href="#">4</a></li>
                                           <li class="page-item"><a class="page-link" href="#">5</a></li>
                                           <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                     </ul>
                                 </nav>
                      </div>

		                    </div>
	                     </div>
<?php get_footer();?>
