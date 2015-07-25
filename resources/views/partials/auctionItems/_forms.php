<form class="form-horizontal" ng-submit="create()" novalidate>
    <fieldset>
        <div class="form-group">
            <div class="col-md-10">
                <input class="form-control input-md" id="item.itemId" name="item.itemId" type="number" placeholder="{{item.itemId}}"
                       ng-model="item.itemId" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10">
                <input class="form-control input-md" id="nameOfActionItem" name="nameOfActionItem" type="text" placeholder="Name of Item"
                       ng-model="nameOfActionItem" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10">
                    <textarea class="form-control input-md" rows="5" id="auctionDescription" name="auctionDescription" placeholder="Enter Desciption"
                              ng-model="auctionDescription" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10">
                <input class="form-control input-md" id="auctionValue" name="auctionValue" type="text" placeholder="Enter Item Value"
                       ng-model="auctionValue" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10">
                <input class="form-control input-md" id="auctionDonor" name="auctionDonor" type="text" placeholder="Enter Item Donor"
                       ng-model="auctionDonor" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10">
                    <textarea class="form-control input-md" rows="5" id="auctionNotes" name="auctionNotes" placeholder="Enter Notes"
                              ng-model="auctionNotes" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10">
                <input type="submit" id="submit" name="submit" class="btn btn-primary"/>
            </div>
        </div>
    </fieldset>
</form>