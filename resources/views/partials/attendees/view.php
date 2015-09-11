<div ng-controller="AttendeeController" ng-init="findOne()" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <h1>Attendee {{ attendee.firstname }} {{attendee.lastname }}
            <a class="btn btn-small btn-success" href="/attendees">List of Attendees</a>
            <a ng-href="/attendees/edit/{{attendee.id}}" class="btn btn-small btn-info"><i class="fa fa-edit"></i>Edit</a>
        </h1>
    </div>
    <hr>
    <div class="well well-lg">
        <table class="table">
            <tbody>
            <tr>
                <td><h4>Company:</h4> </td>
                <td class="text-left">{{ attendee.company }}</td>
            </tr>
            <tr>
                <td><h4>Phone:</h4> </td>
                <td class="text-left">{{ attendee.phone }}</td>
            </tr>
            <tr>
                <td><h4>Email:</h4> </td>
                <td class="text-left">{{ attendee.email }}</td>
            </tr>
            <tr>
                <td><h4>Notes:</h4> </td>
                <td class="text-left">{{ attendee.notes }}</td>
            </tr>
            </tbody>
        </table>
    </div>

</div>