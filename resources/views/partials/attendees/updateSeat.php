<div class="modal-header">
    <h3 class="modal-title">Select New Table and Seat:</h3>
</div>

<div class="modal-body">
            <label>
                Select Table:
            </label>
            <select class="form-control" ng-model="table" ng-options="option.table_number for option in availableSeats | unique:'table_number'"></select>
            <label>
                Select Seat:
            </label>
            <select class="form-control" ng-model="attendee.seat" ng-options="option.seat_number for option in availableSeats | excludeValue:table" ng-change="update()"></select>
</div>
<div class="modal-footer">
    <button class="btn btn-primary" type="button" ng-click="ok()">OK</button>
    <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
</div>