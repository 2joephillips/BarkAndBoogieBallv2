<div ng-controller="CheckinController" ng-init="find()">
    <div class="row">
        <h1>Attendee Check-In/Out
        </h1>
        <div class="form-group">
            <div class="col-md-3">
                Search by Company/Party Name:<input class="form-control input-md" ng-model="search.company">
            </div>
            <div class="col-md-3">
                Search by Last Name: <input class="form-control input-md" ng-model="search.lastname">
            </div>
        </div>
    </div>
    <h1 ng-if="!attendees.length">
        There are no Attendees right now.
    </h1>
    <div ng-if="attendees.length" class="row">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-condensed">
                <thead>
                <tr >
                    <!--
                    <th>Select</th>
                    -->
                    <th>Auction ID</th>
                    <th>Company/Party Name</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Table</th>
                    <th>Seat</th>
                    <th colspan="1">Actions</td>
                </tr>
                </thead>
                <tbody>
                <tr dir-paginate="attendee in attendees | filter:search:strict | itemsPerPage: 25" ng-class="{danger: attendee.paidinfull == false}">
                    <!--
                    <td>
                        <input
                                type="checkbox"
                                name="selectedAttendees[]"
                                value="{{attendee}}"
                                ng-checked="selection.index(attendee) > -1"
                                ng-click="toggleSelection(attendee)"
                            >
                    </td>
                    -->
                    <td>{{ attendee.seat.auctionId}} </td>
                    <td>{{ attendee.company  }}</td>
                    <td>{{ attendee.lastname }}</td>
                    <td>{{ attendee.firstname }}</td>
                    <td>{{ attendee.seat.table_number }}</td>
                    <td>{{ attendee.seat.seat_number }}</td>
                    <td>
                        <a class="btn btn-small btn-success" ng-click="checkin(attendee)"ng-if="attendee.checkedIn == 0"><i class="fa fa-sign-in"></i>Check-In</a>
                        <a class="btn btn-small btn-info" ng-click="checkItems(attendee)" ng-if="attendee.checkedIn == 1 && attendee.checkedOut == 0"><i class="fa fa-sign-out"></i>Check-Out</a>
                        <a class="btn btn-small btn-warning" ng-href="/checkin/edit/{{attendee.id}}" ng-if="attendee.checkedIn == 1 && attendee.checkedOut == 1"><i class="fa fa-sign-out"></i>Checked-Out</a>
                        <a n
                    </td>

                </tr>
                </tbody>
            </table>

        </div>
        <dir-pagination-controls></dir-pagination-controls>
    </div>

</div>


