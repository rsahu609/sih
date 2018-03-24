<div class="modal fade" id="samplemodal" tabindex="-1" style="" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="float: left">Submission Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-container container-fluid">
                        <form id="form">
                            <div class="form-row form">
                                <div class="form-group col-md-12">
                                    <br>
                                    <label for="idea-title">Idea title</label>
                                    <input type="text" class="form-control" name="title" id="idea-title" placeholder="Ferro Cement Tanks" disabled>
                                    <small class="text-muted">Enter the name of the idea or Context</small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="des">Description</label>
                                    <textarea class="form-control" name="des" placeholder="This is alow cost alternative for expensive water harvesting containers made of masonry plastic and RCC. It has proved highly effective in high rainfall regions where large amoubt of water needs to be stored in clean form. These tanks requiring materials like sand, cement, mild steel bar and galvanized iron wire mesh, can be easily constructed skilled labours. It's light in weight and can be moulded into any shape required. It is believed to last for around 25 years with little maintenance. Picture here shows a ferro-cement tank under construction. It can be appropriate for use in Indian villages and disaster prone areas as its fireproof and tough in build. " disabled></textarea>
                                    <small class="text-muted">All the details regarding practical utility, budget, precautions and crop type, soil type(in case of irrigation ideas)</small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="equip">List of Items and Equipments required</label>
                                    <textarea class="form-control" name="equip" placeholder="Harvesting containers made of masonry plastic and RCC,sand, cement, mild steel bar and galvanized iron wire mesh" disabled></textarea>
                                    <small class="text-muted">Number of Items with costs</small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="radio">Is there any policy or subsidy provided form government or any other agencies ?</label>
                                    <div>
                                        <label for="yes">Yes </label>
                                        <input type="radio" name="policy_radio" value="radio_true" checked disabled>
                                        <label for="no">No </label>
                                        <input type="radio" name="policy_radio" value="radio_false" disabled>
                                    </div>
                                    <label for="policytitle"></label>
                                    <input type="text" class="form-control" name="policy-title" value="{{policy_organization}}" placeholder="CWC" disabled>
                                    <small class="text-muted">Enter the name of the idea or Context</small>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" name="policy" placeholder="50% of the total cost is provided as subsidy" disabled></textarea>
                                    <small class="text-muted">If there are government polices or subsidies related to your project you should write it down here</small>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="budget">Approximate Budget</label>
                                    <input type="text" class="form-control" name="budget" placeholder="10,000" disabled>
                                    <small class="text-muted">Approximate bugdet of your project</small>
                                </div>
                                <div class="form-group col-md-7">
                                    <label for="city">District</label>
                                    <input type="text" class="form-control" name="city" placeholder="East Khasi Hills" disabled>
                                    <small class="text-muted">Place where is the idea implemented</small>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="state" for="state">State</label>
                                    <input type="text" class="form-control" value="Meghalaya">
                                    <small class="text-muted">Name of the state</small>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="pin">Zip</label>
                                    <input type="number" class="form-control" min="100000" name="pin" maxlength="6" placeholder="793008" disabled>
                                    <small class="text-muted">Enter pin code</small>
                                </div>
                                <div class="form-group col-md-12">

                                    <div class="img-submit"></div>
                                    <img>
                                    <small class="text-muted">Uploaded geotagged image</small>
                                    <br><br>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
