<h1>
    New Attendee
    <a class="btn btn-small btn-success" href="/attendees">List of Attendees</a>
</h1>

<div role="alert">
      <span class="error" ng-show="myForm.$error.required">
       Required!</span>
</div>

<div ng-controller="AttendeeController">
    <form name="createForm" class="form-horizontal" ng-submit="create()" novalidate>
        <fieldset>
            <div class="form-group">
                <div class="col-md-10">
                    <label>
                        Company/Party Name
                    </label>
                    <input class="form-control input-md" id="company" name="company" placeholder="Don's Family, Cool Company"
                        ng-model="company">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-5">
                    <label>
                        First Name:
                    </label>
                    <input class="form-control input-md" id="firstName" name="firstName" placeholder="John"
                           ng-model="firstName" ng-required="true">
                         <span style="color:red" ng-show="createForm.firstName.$dirty && createForm.firstName.$invalid">
                              * Required
                          </span>
                </div>
                <div class="col-md-5">
                    <label>
                        Last Name:
                    </label>
                    <input class="form-control input-md" id="lastName" name="lastName" placeholder="Doe"
                           ng-model="lastName" ng-required="true">
                         <span style="color:red" ng-show="createForm.lastName.$dirty && createForm.lastName.$invalid">
                              * Required
                          </span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-5">
                    <label>
                        Phone Number:
                    </label>
                    <input class="form-control input-md" id="phone" name="phone" min="10" input-phone placeholder="(123)4567890"
                           ng-model="phone" ng-required="true">
                         <span style="color:red" ng-show="createForm.phone.$dirty && createForm.phone.$invalid">
                              * Required
                          </span>
                </div>
                <div class="col-md-5">
                    <label>
                        Email:
                    </label>
                    <input class="form-control input-md" type="email" id="email" name="email" placeholder="john.doe@info.com"
                           ng-model="email" ng-required="true">
                         <span style="color:red" ng-show="createForm.email.$dirty && createForm.email.$invalid">
                              * Required
                          </span>
                          <span style="color:red"  ng-show="createForm.email.$error.email">
                            Not valid email!</span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-5">
                    <label>
                        Paid In Full: //Add buttons
                    </label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input class="form-control input-md"  fcsa-number name="balanceDue" type="text"  placeholder="100"
                               ng-model="balance" ng-required="true" >
                    </div>
                        <span style="color:red" ng-show="createForm.balanceDue.$dirty && createForm.balanceDue.$invalid && createForm.balanceDue.$error.required">
                              * Value Required:
                        </span>
                </div>
                <div class="col-md-5">
                    <label>
                        Balance Due:
                    </label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input class="form-control input-md"  fcsa-number name="balanceDue" type="text"  placeholder="100"
                               ng-model="balance" ng-required="true" >
                    </div>
                        <span style="color:red" ng-show="createForm.balanceDue.$dirty && createForm.balanceDue.$invalid && createForm.balanceDue.$error.required">
                              * Value Required:
                        </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <label>
                        Enter Notes:
                    </label>
                    <textarea class="form-control input-md" rows="5" id="notes" name="notes" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a magna aliquam, faucibus risus sit amet, luctus ipsum. Sed ac pharetra lorem, id sagittis turpis. Nam ut porta nulla, at pretium est. Sed et elit at arcu cursus cursus vel at erat. Suspendisse ut dolor placerat enim cursus tempor sed sed est. Suspendisse ac urna id tellus fringilla fringilla imperdiet eu odio. Maecenas consequat magna nec dui ornare tristique. Suspendisse laoreet nibh enim, et finibus sem dictum sed."
                              ng-model="notes"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <input ng-disabled="createForm.$invalid" type="submit" id="submit" name="submit" class="btn btn-primary"/>
                    <a class="btn btn-small btn-success" href="/attendees">Cancel</a>
                </div>
            </div>
        </fieldset>
    </form>
</div>