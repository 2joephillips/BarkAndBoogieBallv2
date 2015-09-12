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
            <!-- Company -->
            <div class="form-group">
                <div class="col-md-10">
                    <label>
                        Company/Party Name
                    </label>
                    <input class="form-control input-md" id="company" name="company" placeholder="Don's Family, Cool Company"
                        ng-model="company">
                </div>
            </div>

            <!-- First Name and Last Name -->
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

            <!-- Phone and Email -->
            <div class="form-group">
                <div class="col-md-5">
                    <label>
                        Phone Number:
                    </label>
                    <input class="form-control input-md" id="phone" name="phone" input-phone min="10" placeholder="(123)4567890"
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

            <!-- Paid in Full And Balance Due -->
            <div class="form-group">
                <div class="col-md-5">
                    <label>
                        Paid In Full:
                    </label>
                    <div class="input-group">
                        <div class="btn-group">
                            <label class="btn btn-primary" ng-model="paid" ng-change="toggleAmount(paid)" btn-radio="1">Yes</label>
                            <label class="btn btn-primary" ng-model="paid" ng-change="toggleAmount(paid)" btn-radio="0">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-5" ng-if="showBalance">
                    <label>
                        Balance Due:
                    </label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input class="form-control input-md"  fcsa-number name="balance" type="text"  placeholder="100"
                               ng-model="$parent.balance" ng-required="true" >
                    </div>
                        <span style="color:red" ng-show="createForm.balanceDue.$dirty && createForm.balanceDue.$invalid && createForm.balanceDue.$error.required">
                              * Value Required:
                        </span>
                </div>
            </div>

            <!-- Select Table and Seat -->
            <div class="form-group">
                <div class="col-md-5">
                    <label>
                        Select Table:
                    </label>
                    <select class="form-control" ng-model="table" ng-options="option.table_number for option in availableSeats | unique:'table_number'"></select>
                 </div>
                <div class="col-md-5">
                    <label>
                        Select Seat:
                    </label>
                    <select class="form-control" ng-model="seat" ng-options="option.seat_number for option in availableSeats | excludeValue:table"></select>
                </div>
            </div>

            <!-- Enter Notes -->
            <div class="form-group">
                <div class="col-md-10">
                    <label>
                        Enter Notes:
                    </label>
                    <textarea class="form-control input-md" rows="5" id="notes" name="notes" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a magna aliquam, faucibus risus sit amet, luctus ipsum. Sed ac pharetra lorem, id sagittis turpis. Nam ut porta nulla, at pretium est. Sed et elit at arcu cursus cursus vel at erat. Suspendisse ut dolor placerat enim cursus tempor sed sed est. Suspendisse ac urna id tellus fringilla fringilla imperdiet eu odio. Maecenas consequat magna nec dui ornare tristique. Suspendisse laoreet nibh enim, et finibus sem dictum sed."
                              ng-model="notes"></textarea>
                </div>
            </div>

            <!-- Cancel and Submit -->
            <div class="form-group">
                <div class="col-md-10">
                    <input ng-disabled="createForm.$invalid" type="submit" id="submit" name="submit" class="btn btn-primary"/>
                    <a class="btn btn-small btn-success" href="/attendees">Cancel</a>
                </div>
            </div>

        </fieldset>
    </form>
</div>