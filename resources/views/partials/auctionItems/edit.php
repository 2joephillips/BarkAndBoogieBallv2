<div ng-controller="AuctionItemController" ng-init="findOne()">
    <div class="row">
        <h1>Edit Item # {{ item.itemId }}
            <a class="btn btn-small btn-success" href="/auctionItems">List of Auction Items</a>
        </h1>
    </div>

    <form class="form-horizontal" ng-submit="update()" novalidate>
        <fieldset>
            <div class="form-group">
                <div class="col-md-10">
                    <input class="form-control input-md" id="nameOfActionItem" name="nameOfActionItem" type="text" placeholder="Name of Item"
                           ng-model="item.nameOfActionItem" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <textarea class="form-control input-md" rows="5" id="auctionDescription" name="auctionDescription" placeholder="Enter Desciption"
                              ng-model="item.auctionDescription" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <input class="form-control input-md" id="auctionValue" name="auctionValue" type="text" placeholder="Enter Item Value"
                           ng-model="item.auctionValue" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <input class="form-control input-md" id="auctionDonor" name="auctionDonor" type="text" placeholder="Enter Item Donor"
                           ng-model="item.auctionDonor" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <textarea class="form-control input-md" rows="5" id="auctionNotes" name="auctionNotes" placeholder="Enter Notes"
                              ng-model="item.auctionNotes" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <input type="submit" id="submit" name="submit" class="btn btn-primary"/>
                </div>
            </div>
        </fieldset>
    </form>

</div>