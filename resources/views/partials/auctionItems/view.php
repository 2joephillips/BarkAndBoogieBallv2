<div ng-controller="AuctionItemController" ng-init="findOne()">
    <div class="row">
        <h1>View Item # {{ item.itemId }}</h1>
            <a class="btn btn-small btn-success pull-right" href="/auctionItems">List of Auction Items</a>
            <a ng-href="/auctionitems/edit/{{item.id}}" class="btn btn-small btn-info"><i class="fa fa-edit"></i>Edit</a>
    </div>
    <hr>
    <div class="well well-lg">
        <table class="table">
            <tbody>
                <tr>
                    <td><h4>Description:</h4> </td>
                    <td class="text-left">{{ item. auctionDescription }}</td>
                </tr>
                <tr>
                    <td><h4>Value:</h4> </td>
                    <td class="text-left">{{ item. auctionValue }}</td>
                </tr>
                <tr>
                    <td><h4>Donor:</h4> </td>
                    <td class="text-left">{{ item. auctionDonor }}</td>
                </tr>
                <tr>
                    <td><h4>Notes:</h4> </td>
                    <td class="text-left">{{ item. auctionNotes }}</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>