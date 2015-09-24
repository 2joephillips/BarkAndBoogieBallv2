<div class="modal-header">
    <h3 class="modal-title">Confirm Email:</h3>
</div>

<div class="modal-body">
    <form name="EmailForm" class="form-horizontal" novalidate>
        <fieldset>
    <label>
        Email:
    </label>
    <input class="form-control input-md" type="email" id="email" name="email" placeholder="john.doe@info.com"
           ng-model="attendee.email" ng-required="true">
                         <span style="color:red" ng-show="EmailForm.email.$dirty && EmailForm.email.$invalid">
                              * Required
                          </span>
                          <span style="color:red"  ng-show="EmailForm.email.$error.email">
                            Not valid email!</span>
            </fieldset>
        </form>
</div>
<div class="modal-footer">
    <button ng-disabled="EmailForm.$invalid" class="btn btn-primary" type="button" ng-click="ok()">OK</button>
    <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
</div>