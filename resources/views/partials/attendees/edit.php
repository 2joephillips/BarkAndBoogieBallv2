<div ng-controller="AttendeeController" ng-init="findOne()">
    <div class="row">
        <h1>Attendee {{ attendee.firstname }} {{attendee.lastname }}
            <a class="btn btn-small btn-success" href="/attendees">List of Attendees</a>
        </h1>
    </div>
    <hr>
    <form name="createForm" class="form-horizontal" ng-submit="update(attendee)" novalidate>
        <fieldset>
            <!-- Company -->
            <div class="form-group">
                <div class="col-md-10">
                    <label>
                        Company/Party Name
                    </label>
                    <input class="form-control input-md" id="company" name="company" placeholder="Don's Family, Cool Company"
                           ng-model="attendee.company">
                </div>
            </div>

            <!-- First Name and Last Name -->
            <div class="form-group">
                <div class="col-md-5">
                    <label>
                        First Name:
                    </label>
                    <input class="form-control input-md" id="firstname" name="firstname" placeholder="John"
                           ng-model="attendee.firstname" ng-required="true">
                         <span style="color:red" ng-show="createForm.firstName.$dirty && createForm.firstName.$invalid">
                              * Required
                          </span>
                </div>
                <div class="col-md-5">
                    <label>
                        Last Name:
                    </label>
                    <input class="form-control input-md" id="lastname" name="lastname" placeholder="Doe"
                           ng-model="attendee.lastname" ng-required="true">
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
                           ng-model="attendee.phone" ng-required="true">
                         <span style="color:red" ng-show="createForm.phone.$dirty && createForm.phone.$invalid">
                              * Required
                          </span>
                </div>
                <div class="col-md-5">
                    <label>
                        Email:
                    </label>
                    <input class="form-control input-md" type="email" id="email" name="email" placeholder="john.doe@info.com"
                           ng-model="attendee.email" ng-required="true">
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
                            <label class="btn btn-primary" ng-model="attendee.paidinfull" ng-change="togglePaid(attendee.paidinfull, attendee.balance)" btn-radio="1">Yes</label>
                            <label class="btn btn-primary" ng-model="attendee.paidinfull" ng-change="togglePaid(attendee.paidinfull, attendee.balance)" btn-radio="0">No</label>
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
                               ng-model="attendee.balance" ng-required="true" >
                    </div>
                        <span style="color:red" ng-show="createForm.balanceDue.$dirty && createForm.balanceDue.$invalid && createForm.balanceDue.$error.required">
                              * Value Required:
                        </span>
                </div>
            </div>

            <!-- Select Table and Seat -->
            <div class="form-group">
                <div class="col-md-4">
                    <label>
                        Current Table:
                    </label>
                    <input class="form-control" ng-model="attendee.seat.table_number" readonly></input>
                </div>
                <div class="col-md-4">
                    <label>
                        Current Seat:
                    </label>
                    <input class="form-control" ng-model="attendee.seat.seat_number" readonly></input>
                </div>
                <div class="col-md-2">
                    <label>
                    </label>
                    <a class="btn btn-small btn-danger" ng-click="updateSeats()">Update</a>
                </div>
            </div>

            <!-- Enter Notes -->
            <div class="form-group">
                <div class="col-md-10">
                    <label>
                        Enter Notes:
                    </label>
                    <textarea class="form-control input-md" rows="5" id="notes" name="notes" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a magna aliquam, faucibus risus sit amet, luctus ipsum. Sed ac pharetra lorem, id sagittis turpis. Nam ut porta nulla, at pretium est. Sed et elit at arcu cursus cursus vel at erat. Suspendisse ut dolor placerat enim cursus tempor sed sed est. Suspendisse ac urna id tellus fringilla fringilla imperdiet eu odio. Maecenas consequat magna nec dui ornare tristique. Suspendisse laoreet nibh enim, et finibus sem dictum sed."
                              ng-model="attendee.notes"></textarea>
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
<pre>
</pre>

