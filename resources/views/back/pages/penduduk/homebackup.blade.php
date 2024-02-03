@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Beranda')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px" data-select2-id="9">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Advanced Components</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Advanced Components
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										January 2018
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Select-2 Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Select 2</h4>
								<p class="mb-30">Select2 for custom search and select</p>
							</div>
						</div>
						<form data-select2-id="8">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group" data-select2-id="7">
										<label>Single Select</label>
										<select class="custom-select2 form-control select2-hidden-accessible" name="state" style="width: 100%; height: 38px" data-select2-id="1" tabindex="-1" aria-hidden="true">
											<optgroup label="Alaskan/Hawaiian Time Zone" data-select2-id="12">
												<option value="AK" data-select2-id="3">Alaska</option>
												<option value="HI" data-select2-id="13">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone" data-select2-id="14">
												<option value="CA" data-select2-id="15">California</option>
												<option value="NV" data-select2-id="16">Nevada</option>
												<option value="OR" data-select2-id="17">Oregon</option>
												<option value="WA" data-select2-id="18">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone" data-select2-id="19">
												<option value="AZ" data-select2-id="20">Arizona</option>
												<option value="CO" data-select2-id="21">Colorado</option>
												<option value="ID" data-select2-id="22">Idaho</option>
												<option value="MT" data-select2-id="23">Montana</option>
												<option value="NE" data-select2-id="24">Nebraska</option>
												<option value="NM" data-select2-id="25">New Mexico</option>
												<option value="ND" data-select2-id="26">North Dakota</option>
												<option value="UT" data-select2-id="27">Utah</option>
												<option value="WY" data-select2-id="28">Wyoming</option>
											</optgroup>
										</select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-state-e0-container"><span class="select2-selection__rendered" id="select2-state-e0-container" role="textbox" aria-readonly="true" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group" data-select2-id="33">
										<label>Multiple Select</label>
										<select class="custom-select2 form-control select2-hidden-accessible" multiple="" style="width: 100%" data-select2-id="4" tabindex="-1" aria-hidden="true">
											<optgroup label="Alaskan/Hawaiian Time Zone" data-select2-id="34">
												<option value="AK" data-select2-id="35">Alaska</option>
												<option value="HI" data-select2-id="36">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone" data-select2-id="37">
												<option value="CA" data-select2-id="38">California</option>
												<option value="NV" data-select2-id="39">Nevada</option>
												<option value="OR" data-select2-id="40">Oregon</option>
												<option value="WA" data-select2-id="41">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone" data-select2-id="42">
												<option value="AZ" data-select2-id="43">Arizona</option>
												<option value="CO" data-select2-id="44">Colorado</option>
												<option value="ID" data-select2-id="45">Idaho</option>
												<option value="MT" data-select2-id="46">Montana</option>
												<option value="NE" data-select2-id="47">Nebraska</option>
												<option value="NM" data-select2-id="48">New Mexico</option>
												<option value="ND" data-select2-id="49">North Dakota</option>
												<option value="UT" data-select2-id="50">Utah</option>
												<option value="WY" data-select2-id="51">Wyoming</option>
											</optgroup>
										</select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
									</div>
								</div>
							</div>
						</form>
					</div>
					<!-- Select-2 end -->
					<!-- Bootstrap Select Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Bootstrap Select</h4>
								<p class="mb-30">
									Just add class <code>.selectpicker</code> to select
								</p>
							</div>
						</div>
						<form>
							<div class="row">
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Single Select</label>
										<div class="dropdown bootstrap-select form-control"><select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5" tabindex="-98">
											<optgroup label="Condiments" data-max-options="2">
												<option>Mustard</option>
												<option>Ketchup</option>
												<option>Relish</option>
											</optgroup>
											<optgroup label="Breads" data-max-options="2">
												<option>Plain</option>
												<option>Steamed</option>
												<option>Toasted</option>
											</optgroup>
										</select><button type="button" class="btn dropdown-toggle btn-outline-primary" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Mustard"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Mustard</div></div> </div></button><div class="dropdown-menu" style="max-height: 237.667px; overflow: hidden;"><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1" aria-activedescendant="bs-select-1-1" style="max-height: 237.667px; overflow-y: auto;"><ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li class="dropdown-header optgroup-1"><span class="text">Condiments</span></li><li class="optgroup-1 selected active"><a role="option" class="opt dropdown-item active selected" id="bs-select-1-1" tabindex="0" aria-setsize="6" aria-posinset="1" aria-selected="true"><span class="text">Mustard</span></a></li><li class="optgroup-1"><a role="option" class="opt dropdown-item" id="bs-select-1-2" tabindex="0"><span class="text">Ketchup</span></a></li><li class="optgroup-1"><a role="option" class="opt dropdown-item" id="bs-select-1-3" tabindex="0"><span class="text">Relish</span></a></li><li class="dropdown-divider optgroup-1div"></li><li class="dropdown-header optgroup-2"><span class="text">Breads</span></li><li class="optgroup-2"><a role="option" class="opt dropdown-item" id="bs-select-1-6" tabindex="0"><span class="text">Plain</span></a></li><li class="optgroup-2"><a role="option" class="opt dropdown-item" id="bs-select-1-7" tabindex="0"><span class="text">Steamed</span></a></li><li class="optgroup-2"><a role="option" class="opt dropdown-item" id="bs-select-1-8" tabindex="0"><span class="text">Toasted</span></a></li></ul></div></div></div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>multiple Select</label>
										<div class="dropdown bootstrap-select show-tick form-control"><select class="selectpicker form-control" data-size="5" data-style="btn-outline-secondary" multiple="" data-max-options="3" tabindex="-98">
											<optgroup label="Condiments">
												<option>Mustard</option>
												<option>Ketchup</option>
												<option>Relish</option>
											</optgroup>
											<optgroup label="Breads">
												<option>Plain</option>
												<option>Steamed</option>
												<option>Toasted</option>
											</optgroup>
										</select><button type="button" class="btn dropdown-toggle btn-outline-secondary bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Nothing selected</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1" aria-multiselectable="true"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Selected text format</label>
										<div class="dropdown bootstrap-select show-tick form-control"><select class="selectpicker form-control" data-size="5" data-style="btn-outline-success" data-selected-text-format="count" multiple="" tabindex="-98">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
											<option>Plain</option>
											<option>Steamed</option>
											<option>Toasted</option>
										</select><button type="button" class="btn dropdown-toggle btn-outline-success bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Nothing selected</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-3" tabindex="-1" aria-multiselectable="true"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Subtext</label>
										<div class="dropdown bootstrap-select form-control"><select class="selectpicker form-control" data-size="5" data-style="btn-outline-danger" tabindex="-98">
											<option data-subtext="French's">Mustard</option>
											<option data-subtext="Heinz">Ketchup</option>
											<option data-subtext="Sweet">Relish</option>
											<option data-subtext="Miracle Whip">Mayonnaise</option>
											<option data-divider="true"></option>
											<option data-subtext="Honey">Barbecue Sauce</option>
											<option data-subtext="Ranch">Salad Dressing</option>
											<option data-subtext="Sweet &amp; Spicy">Tabasco</option>
											<option data-subtext="Chunky">Salsa</option>
										</select><button type="button" class="btn dropdown-toggle btn-outline-danger" data-toggle="dropdown" role="combobox" aria-owns="bs-select-4" aria-haspopup="listbox" aria-expanded="false" title="Mustard"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Mustard</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-4" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Select/deselect all</label>
										<div class="dropdown bootstrap-select show-tick form-control dropup"><select class="selectpicker form-control" data-size="5" data-style="btn-outline-warning" multiple="" data-actions-box="true" data-selected-text-format="count" tabindex="-98">
											<optgroup label="Condiments">
												<option>Mustard</option>
												<option>Ketchup</option>
												<option>Relish</option>
											</optgroup>
											<optgroup label="Breads">
												<option>Plain</option>
												<option>Steamed</option>
												<option>Toasted</option>
											</optgroup>
										</select><button type="button" class="btn dropdown-toggle btn-outline-warning bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-5" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Nothing selected</div></div> </div></button><div class="dropdown-menu" style="max-height: 280.667px; overflow: hidden;"><div class="bs-actionsbox"><div class="btn-group btn-group-sm btn-block"><button type="button" class="actions-btn bs-select-all btn btn-light">Select All</button><button type="button" class="actions-btn bs-deselect-all btn btn-light">Deselect All</button></div></div><div class="inner show" role="listbox" id="bs-select-5" tabindex="-1" aria-multiselectable="true" style="max-height: 237.667px; overflow-y: auto;"><ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li class="dropdown-header optgroup-1"><span class="text">Condiments</span></li><li class="optgroup-1"><a role="option" class="opt dropdown-item" id="bs-select-5-1" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Mustard</span></a></li><li class="optgroup-1"><a role="option" class="opt dropdown-item" id="bs-select-5-2" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Ketchup</span></a></li><li class="optgroup-1"><a role="option" class="opt dropdown-item" id="bs-select-5-3" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Relish</span></a></li><li class="dropdown-divider optgroup-1div"></li><li class="dropdown-header optgroup-2"><span class="text">Breads</span></li><li class="optgroup-2"><a role="option" class="opt dropdown-item" id="bs-select-5-6" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Plain</span></a></li><li class="optgroup-2"><a role="option" class="opt dropdown-item" id="bs-select-5-7" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Steamed</span></a></li><li class="optgroup-2"><a role="option" class="opt dropdown-item" id="bs-select-5-8" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Toasted</span></a></li></ul></div></div></div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Disabled options</label>
										<div class="dropdown bootstrap-select form-control"><select class="selectpicker form-control" data-size="5" data-style="btn-outline-info" tabindex="-98">
											<option>Mustard</option>
											<option disabled="">Ketchup</option>
											<option>Relish</option>
											<option>Plain</option>
											<option disabled="">Steamed</option>
											<option>Toasted</option>
										</select><button type="button" class="btn dropdown-toggle btn-outline-info" data-toggle="dropdown" role="combobox" aria-owns="bs-select-6" aria-haspopup="listbox" aria-expanded="false" title="Mustard"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Mustard</div></div> </div></button><div class="dropdown-menu" style="max-height: 220px; overflow: hidden;"><div class="inner show" role="listbox" id="bs-select-6" tabindex="-1" aria-activedescendant="bs-select-6-0" style="max-height: 220px; overflow-y: auto;"><ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-6-0" tabindex="0" aria-setsize="4" aria-posinset="1" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">Mustard</span></a></li><li class="disabled"><a role="option" class="dropdown-item disabled" id="bs-select-6-1" aria-disabled="true" tabindex="-1"><span class=" bs-ok-default check-mark"></span><span class="text">Ketchup</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-6-2" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Relish</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-6-3" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Plain</span></a></li><li class="disabled"><a role="option" class="dropdown-item disabled" id="bs-select-6-4" aria-disabled="true" tabindex="-1"><span class=" bs-ok-default check-mark"></span><span class="text">Steamed</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-6-5" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Toasted</span></a></li></ul></div></div></div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<!-- Bootstrap Select End -->
					<div class="row">
						<!-- Bootstrap Switchery Start -->
						<div class="col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<div class="clearfix mb-30">
									<div class="pull-left">
										<h4 class="text-blue h4">Switchery js</h4>
									</div>
								</div>
								<form>
									<div class="mb-30">
										<h5 class="h5">Basic</h5>
										<p>
											add
											<code> class="switch-btn" data-color="#0099ff"</code> to
											your input element.
										</p>
										<input type="checkbox" checked="" class="switch-btn" data-color="#0099ff" data-switchery="true" style="display: none; color: rgb(0, 153, 255);"><span class="switchery switchery-default" style="background-color: rgb(0, 153, 255); border-color: rgb(0, 153, 255); box-shadow: rgb(0, 153, 255) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 20px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" checked="" class="switch-btn" data-color="#41ccba" data-switchery="true" style="display: none; color: rgb(65, 204, 186);"><span class="switchery switchery-default" style="background-color: rgb(65, 204, 186); border-color: rgb(65, 204, 186); box-shadow: rgb(65, 204, 186) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 20px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" checked="" class="switch-btn" data-color="#f56767" data-switchery="true" style="display: none; color: rgb(245, 103, 103);"><span class="switchery switchery-default" style="background-color: rgb(245, 103, 103); border-color: rgb(245, 103, 103); box-shadow: rgb(245, 103, 103) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 20px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" checked="" class="switch-btn" data-color="#a683eb" data-switchery="true" style="display: none; color: rgb(166, 131, 235);"><span class="switchery switchery-default" style="background-color: rgb(166, 131, 235); border-color: rgb(166, 131, 235); box-shadow: rgb(166, 131, 235) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 20px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" checked="" class="switch-btn" data-color="#f2a654" data-switchery="true" style="display: none; color: rgb(242, 166, 84);"><span class="switchery switchery-default" style="background-color: rgb(242, 166, 84); border-color: rgb(242, 166, 84); box-shadow: rgb(242, 166, 84) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 20px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" checked="" class="switch-btn" data-color="#0059b2" data-switchery="true" style="display: none; color: rgb(0, 89, 178);"><span class="switchery switchery-default" style="background-color: rgb(0, 89, 178); border-color: rgb(0, 89, 178); box-shadow: rgb(0, 89, 178) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 20px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
									</div>
									<div class="mb-30">
										<h5 class="h5">Sizes</h5>
										<p>
											add <code>data-size="small",data-size="large"</code> to
											your input element for diffrent sizes.
										</p>
										<input type="checkbox" checked="" class="switch-btn" data-size="small" data-color="#0099ff" data-switchery="true" style="display: none; color: rgb(0, 153, 255);"><span class="switchery switchery-small" style="background-color: rgb(0, 153, 255); border-color: rgb(0, 153, 255); box-shadow: rgb(0, 153, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" checked="" class="switch-btn" data-size="small" data-color="#f56767" data-switchery="true" style="display: none; color: rgb(245, 103, 103);"><span class="switchery switchery-small" style="background-color: rgb(245, 103, 103); border-color: rgb(245, 103, 103); box-shadow: rgb(245, 103, 103) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" checked="" class="switch-btn" data-color="#41ccba" data-switchery="true" style="display: none; color: rgb(65, 204, 186);"><span class="switchery switchery-default" style="background-color: rgb(65, 204, 186); border-color: rgb(65, 204, 186); box-shadow: rgb(65, 204, 186) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 20px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" checked="" class="switch-btn" data-color="#a683eb" data-switchery="true" style="display: none; color: rgb(166, 131, 235);"><span class="switchery switchery-default" style="background-color: rgb(166, 131, 235); border-color: rgb(166, 131, 235); box-shadow: rgb(166, 131, 235) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 20px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" checked="" class="switch-btn" data-size="large" data-color="#f2a654" data-switchery="true" style="display: none; color: rgb(242, 166, 84);"><span class="switchery switchery-large" style="background-color: rgb(242, 166, 84); border-color: rgb(242, 166, 84); box-shadow: rgb(242, 166, 84) 0px 0px 0px 21px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 25px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" checked="" class="switch-btn" data-size="large" data-color="#0059b2" data-switchery="true" style="display: none; color: rgb(0, 89, 178);"><span class="switchery switchery-large" style="background-color: rgb(0, 89, 178); border-color: rgb(0, 89, 178); box-shadow: rgb(0, 89, 178) 0px 0px 0px 21px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 25px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
									</div>
									<div class="mb-30">
										<h5 class="h5">Secondary Color</h5>
										<p>
											add
											<code>data-color="#0099ff"
												data-secondary-color="#28a745"</code>
											to your input
										</p>
										<input type="checkbox" checked="" class="switch-btn" data-size="small" data-color="#0099ff" data-secondary-color="#28a745" data-switchery="true" style="display: none; color: rgb(0, 153, 255);"><span class="switchery switchery-small" style="background-color: rgb(0, 153, 255); border-color: rgb(0, 153, 255); box-shadow: rgb(0, 153, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" class="switch-btn" data-size="small" data-color="#f56767" data-secondary-color="#28a745" data-switchery="true" style="display: none; color: rgb(245, 103, 103);"><span class="switchery switchery-small" style="box-shadow: rgb(40, 167, 69) 0px 0px 0px 0px inset; border-color: rgb(40, 167, 69); background-color: rgb(40, 167, 69); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" checked="" class="switch-btn" data-color="#41ccba" data-secondary-color="#28a745" data-switchery="true" style="display: none; color: rgb(65, 204, 186);"><span class="switchery switchery-default" style="background-color: rgb(65, 204, 186); border-color: rgb(65, 204, 186); box-shadow: rgb(65, 204, 186) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 20px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" class="switch-btn" data-color="#a683eb" data-secondary-color="#28a745" data-switchery="true" style="display: none; color: rgb(166, 131, 235);"><span class="switchery switchery-default" style="box-shadow: rgb(40, 167, 69) 0px 0px 0px 0px inset; border-color: rgb(40, 167, 69); background-color: rgb(40, 167, 69); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" checked="" class="switch-btn" data-size="large" data-color="#f2a654" data-secondary-color="#28a745" data-switchery="true" style="display: none; color: rgb(242, 166, 84);"><span class="switchery switchery-large" style="background-color: rgb(242, 166, 84); border-color: rgb(242, 166, 84); box-shadow: rgb(242, 166, 84) 0px 0px 0px 21px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 25px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
										<input type="checkbox" class="switch-btn" data-size="large" data-color="#0059b2" data-secondary-color="#28a745" data-switchery="true" style="display: none; color: rgb(0, 89, 178);"><span class="switchery switchery-large" style="box-shadow: rgb(40, 167, 69) 0px 0px 0px 0px inset; border-color: rgb(40, 167, 69); background-color: rgb(40, 167, 69); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
									</div>
								</form>
							</div>
						</div>
						<!-- Bootstrap Switchery End -->
						<!-- Bootstrap Tags Input Start -->
						<div class="col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<div class="clearfix mb-30">
									<div class="pull-left">
										<h4 class="text-blue h4">Bootstrap Tags Input</h4>
									</div>
								</div>
								<form>
									<div class="mb-30">
										<h5 class="h5">Input Value</h5>
										<p>
											add <code>data-role="tagsinput"</code> to your input
											element.
										</p>
										<div class="bootstrap-tagsinput"><span class="tag label label-info">Amsterdam<span data-role="remove"></span></span> <span class="tag label label-info">Washington<span data-role="remove"></span></span> <span class="tag label label-info">Sydney<span data-role="remove"></span></span> <span class="tag label label-info">Beijing<span data-role="remove"></span></span> <span class="tag label label-info">Cairo<span data-role="remove"></span></span> <input type="text" placeholder=""></div><input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" style="display: none;">
									</div>
									<div class="mb-30">
										<h5 class="h5">Select Value</h5>
										<p>
											add <code>data-role="tagsinput"</code> to your select
											element &amp; use select multiple
										</p>
										<div class="bootstrap-tagsinput"><span class="tag label label-info">Amsterdam<span data-role="remove"></span></span> <span class="tag label label-info">Washington<span data-role="remove"></span></span> <span class="tag label label-info">Sydney<span data-role="remove"></span></span> <span class="tag label label-info">Beijing<span data-role="remove"></span></span> <span class="tag label label-info">Cairo<span data-role="remove"></span></span> <input type="text" placeholder=""></div><select multiple="" data-role="tagsinput" style="display: none;">
											<option value="Amsterdam" selected="selected">Amsterdam</option>
											<option value="Washington" selected="selected">Washington</option>
											<option value="Sydney" selected="selected">Sydney</option>
											<option value="Beijing" selected="selected">Beijing</option>
											<option value="Cairo" selected="selected">Cairo</option>
										</select>
									</div>
									<div class="mb-30">
										<h5 class="h5">Input placeholder</h5>
										<p>
											add
											<code>data-role="tagsinput" placeholder="add tags"</code>
											to your input element.
										</p>
										<div class="bootstrap-tagsinput"><span class="tag label label-info">Amsterdam<span data-role="remove"></span></span> <span class="tag label label-info">Washington<span data-role="remove"></span></span> <span class="tag label label-info">Sydney<span data-role="remove"></span></span> <input type="text" placeholder="add tags"></div><input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags" style="display: none;">
									</div>
								</form>
							</div>
						</div>
						<!-- Bootstrap Tags Input End -->
					</div>
					<!-- Bootstrap TouchSpin Start -->
					<div class="pd-20 card-box height-100-p mb-30">
						<div class="clearfix mb-30">
							<div class="pull-left">
								<h4 class="text-blue h4">Bootstrap TouchSpin</h4>
							</div>
						</div>
						<form>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Example with postfix</label>
										<div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button></span><input id="demo1" type="text" value="55" name="demo1" class="form-control"><span class="input-group-addon bootstrap-touchspin-postfix input-group-append"><span class="input-group-text">%</span></span><span class="input-group-btn input-group-append"><button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span></div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Example with prefix</label>
										<div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix input-group-prepend"><span class="input-group-text">$</span></span><input id="demo2" type="text" value="0" name="demo2" class="form-control"><span class="input-group-btn input-group-append"><button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span></div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Vertical buttons</label>
										<div class="input-group  bootstrap-touchspin bootstrap-touchspin-injected"><input id="demo_vertical2" type="text" value="" name="demo_vertical2" class="form-control"><span class="input-group-btn-vertical"><button class="btn btn-primary bootstrap-touchspin-up " type="button">+</button><button class="btn btn-primary bootstrap-touchspin-down " type="button">-</button></span></div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Init with empty value</label>
										<div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button></span><input id="demo3" type="text" value="" name="demo3" class="form-control"><span class="input-group-btn input-group-append"><button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span></div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Value is set</label>
										<div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button></span><input id="demo3_22" type="text" value="33" name="demo3_22" class="form-control"><span class="input-group-btn input-group-append"><button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span></div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Button group</label>
										<div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix input-group-prepend"><span class="input-group-text">pre</span></span><input id="demo5" type="text" class="form-control" name="demo5" value="50"><span class="input-group-addon bootstrap-touchspin-postfix input-group-append"><span class="input-group-text">post</span></span><span class="input-group-btn input-group-append"><button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span></div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<!-- Bootstrap TouchSpin End -->
				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
				</div>
			</div>
					
@endsection