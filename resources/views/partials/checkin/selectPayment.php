<div class="modal-header">
    <h3 class="modal-title">Confirm Email:</h3>
</div>

<div class="modal-body">
    <form name="paymentForm" class="form-horizontal" novalidate>
        <fieldset>
    <label>
        Enter Payment Type:
    </label>
            <div class="input-group">
                <div class="btn-group">
                    <label class="btn btn-primary" ng-model="attendee.paymentType"  btn-radio="'Cash'">Cash</label>
                    <label class="btn btn-primary" ng-model="attendee.paymentType"  btn-radio="'Check'">Check</label>
                    <label class="btn btn-primary" ng-model="attendee.paymentType"  btn-radio="'Credit'">Credit</label>
                </div>
            </div>
            <label>
                Enter Check Number (if applicable):
            </label>
    <input class="form-control input-md" type="checkNumber" id="checkNumber" name="checkNumber" placeholder="1234"
           ng-model="attendee.checkNumber" ng-required="true">
                         <span style="color:red" ng-show="paymentForm.checkNumber.$dirty && paymentForm.checkNumber.$invalid">
                              * Required
                          </span>
            </fieldset>
        </form>
</div>
<div class="modal-footer">
    <button ng-disabled="EmailForm.$invalid" class="btn btn-primary" type="button" ng-click="ok()">OK</button>
    <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
</div>