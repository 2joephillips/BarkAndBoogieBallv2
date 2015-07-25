<div ng-controller="AttendeeController" ng-init="find()">

    <div class="row">
        <h1>Attendees {{ attendees.length }}
            <a class="btn btn-small btn-success" href="/attendees/create">Add Auction Item</a>
        </h1>
        <div class="form-group">
            <div class="col-md-3">
                Search by Company Name:<input class="form-control input-md" ng-model="search.company">
            </div>
            <div class="col-md-3">
                Search by Last Name: <input class="form-control input-md" ng-model="search.lastname">
            </div>
        </div>
    </div>
    <h1 ng-if="!attendees.length">
        There are no Auction Items right now.
    </h1>
    <div ng-if="attendees.length" class="row">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <th>Company</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th colspan="1">Actions</td>
                </tr>
                </thead>
                <tbody>
                <tr dir-paginate="attendee in attendees | filter:search:strict | itemsPerPage: 25">
                    <td>{{ attendee.company }}</td>
                    <td>{{ attendee.lastname }}</td>
                    <td>{{ attendee.firstname }}</td>
                    <td>
                        <a ng-href="/attendees/edit/{{attendee.id}}" class="btn btn-small btn-info"><i class="fa fa-edit"></i>Edit</a>
                        <a class="btn btn-small btn-danger" ng-click="remove(item)"><i class="fa fa-trash"></i>Delete</a>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
        <dir-pagination-controls></dir-pagination-controls>
    </div>
</div>
