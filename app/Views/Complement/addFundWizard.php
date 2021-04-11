<div class="content">
    <div class="container-fluid">
        <div class="col-md-6 col-6 mr-auto ml-auto">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card card-wizard active" data-color="rose" id="wizardProfile">
                    <form action="" method="" novalidate="novalidate">
                        <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                        <div class="card-header text-center">
                            <h3 class="card-title">
                                Manage your fund
                            </h3>
                        </div>
                        <div class="wizard-navigation">
                            <ul class="nav nav-pills">
                                <li class="nav-item" style="width: 50%;">
                                    <a class="nav-link active" href="#incomeTab" data-toggle="tab" role="tab">
                                        Income
                                    </a>
                                </li>
                                <li class="nav-item" style="width: 50%;">
                                    <a class="nav-link" href="#billTab" data-toggle="tab" role="tab">
                                        Bills
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="incomeTab">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-static">Income amount</label>
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-static">Category</label>
                                                <select class="form-control">
                                                    <option value="0"></option>
                                                    <option value="2">Paris </option>
                                                    <option value="3">Bucharest</option>
                                                    <option value="4">Rome</option>
                                                    <option value="5">New York</option>
                                                    <option value="6">Miami </option>
                                                    <option value="7">Piatra Neamt</option>
                                                    <option value="8">Paris </option>
                                                    <option value="9">Bucharest</option>
                                                    <option value="10">Rome</option>
                                                    <option value="11">New York</option>
                                                    <option value="12">Miami </option>
                                                    <option value="13">Piatra Neamt</option>
                                                    <option value="14">Paris </option>
                                                    <option value="15">Bucharest</option>
                                                    <option value="16">Rome</option>
                                                    <option value="17">New York</option>
                                                    <option value="18">Miami </option>
                                                    <option value="19">Piatra Neamt</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="billTab">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-static">Bill amount</label>
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-static">Category</label>
                                                <select class="form-control">
                                                    <option value="0"></option>
                                                    <option value="2">Paris </option>
                                                    <option value="3">Bucharest</option>
                                                    <option value="4">Rome</option>
                                                    <option value="5">New York</option>
                                                    <option value="6">Miami </option>
                                                    <option value="7">Piatra Neamt</option>
                                                    <option value="8">Paris </option>
                                                    <option value="9">Bucharest</option>
                                                    <option value="10">Rome</option>
                                                    <option value="11">New York</option>
                                                    <option value="12">Miami </option>
                                                    <option value="13">Piatra Neamt</option>
                                                    <option value="14">Paris </option>
                                                    <option value="15">Bucharest</option>
                                                    <option value="16">Rome</option>
                                                    <option value="17">New York</option>
                                                    <option value="18">Miami </option>
                                                    <option value="19">Piatra Neamt</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mr-auto">
                                <input type="button" class="btn btn-previous btn-fill btn-default btn-wd" name="previous" value="Previous">
                            </div>
                            <div class="ml-auto">
                                <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Next">
                                <input type="button" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Finish" style="display: none;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- wizard container -->
        </div>
    </div>
</div>