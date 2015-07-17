<div ng-controller="AuctionItemController" ng-init="findOne()">
    <div class="row">
        <h1>View Item # {{ item.itemId }}
            <a class="btn btn-small btn-success" href="/auctionItems">List of Auction Items</a>
            <a ng-href="/auctionitems/edit/{{item.id}}" class="btn btn-small btn-info"><i class="fa fa-edit"></i>Edit</a>
        </h1>
    </div>
    <hr>
        <h2>Description: </h2> <p>{{ item. auctionDescription }}</p>
        <h2>Value: </h2> <p>{{ item.auctionValue }}</p>
        <h2>Donor: </h2> <p>{{ item.auctionDonor }}</p>
        <h2>Notes: </h2> <p>{{ item.auctionNotes }}</p>


</div>