<div ng-controller="AttendeeController" ng-init="find()">
    <div class="row">
        <h1>Attendees {{ attendees.length }}
            <a class="btn btn-small btn-success" href="/attendees/create">Add Attendees</a>
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
                    <td>{{ attendee.seat.auctionId}} </td>
                    <td>{{ attendee.company  }}</td>
                    <td>{{ attendee.lastname }}</td>
                    <td>{{ attendee.firstname }}</td>
                    <td>{{ attendee.seat.table_number }}</td>
                    <td>{{ attendee.seat.seat_number }}</td>
                    <td>
                        <a ng-href="/attendees/edit/{{attendee.id}}" class="btn btn-small btn-info"><i class="fa fa-edit"></i>Edit</a>
                        <a class="btn btn-small btn-danger" ng-click="remove(attendee)"><i class="fa fa-trash"></i>Delete</a>
                    </td>

                </tr>
                </tbody>
            </table>

        </div>
        <dir-pagination-controls></dir-pagination-controls>
    </div>
</div>
